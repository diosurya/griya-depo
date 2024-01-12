<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactPic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class ContactServiceController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->query('page', 1);
        $pageSize = $request->query('pageSize', 10);
        $query = $request->query('query');

        $contactsQuery = Contact::query();

        if (!empty($query)) {
            $contactsQuery->where('company_name', 'like', '%' . $query . '%');
        }

        $contacts = $contactsQuery->paginate($pageSize, ['*'], 'page', $page);

        return response()->json($contacts);
    }

    public function datatable(Request $request)
    {
        try {
            $columns = [
                'company_name',
                'address',
                'created_at',
                // 'dueDate',
                'customer_type',
                'status',
                'sales_id',
            ];

            $length = $request->input('length');
            $start = $request->input('start');
            $order = $columns[$request->input('order.0.column')];
            $dir = $request->input('order.0.dir');

            $contacts = Contact::select('company_name', 'address', 'created_at', 'customer_type', 'status', 'sales_id')
                ->offset($start)
                ->limit($length)
                ->orderBy($order, $dir)
                ->get();

            $totalRecords = Contact::count();

            return response()->json([
                'data' => $contacts,
                'draw' => intval($request->input('draw')),
                'recordsTotal' => $totalRecords,
                'recordsFiltered' => $totalRecords,
            ]);
        } catch (\Exception $e) {
            // Log the exception
            Log::error('Exception in contacts-datatable: ' . $e->getMessage());

            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    // Membuat kontak baru
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'company_name' => 'required|max:255|unique:contacts,company_name',
                'customer_type' => 'required|in:Contractor,Industri,Retail,Owner,Supplier',
                'contact_group' => 'required|max:50',
                'email' => 'required|email|max:100|unique:contacts,email',
                'phone' => 'required|max:50|unique:contacts,phone',
                'fax' => 'max:50',
                'status_prospect' => 'in:new,aktif,pasif,leads',
                'other_info' => 'nullable',
                'sales_id' => 'nullable|integer|exists:sales,id',
                'province' => 'max:50',
                'city' => 'max:50',
                'kecamatan' => 'max:50',
                'kelurahan' => 'max:50',
                'postal_code' => 'max:20',
                'address' => 'nullable',

                'npwp_file_path' => 'nullable|url',
                'npwp_file_path.*' => 'file|mimes:pdf,jpeg,png|max:2048',

                'ktp_director_files' => 'nullable',
                // 'ktp_director_files.*' => 'file|mimes:pdf,jpeg,png|max:2048',

                'npwp_number' => 'nullable|max:20',

                'siup_files' => 'nullable|array',
                'siup_files.*' => 'file|mimes:pdf,jpeg,png|max:2048',

                'iujk_file_path' => 'nullable|url',
                'iujk_file_path.*' => 'file|mimes:pdf,jpeg,png|max:2048',

                'akte_file_path' => 'nullable|url',
                'akte_file_path.*' => 'file|mimes:pdf,jpeg,png|max:2048',

                'sk_kemenkumham_file_path' => 'nullable|url',
                'sk_kemenkumham_file_path.*' => 'file|mimes:pdf,jpeg,png|max:2048',

                'business_permit_files' => 'nullable|array',
                'business_permit_files.*' => 'file|mimes:pdf,jpeg,png|max:2048',

                'bank_name' => 'nullable|max:255',
                'account_name' => 'nullable|max:255',
                'account_number' => 'nullable|max:50',
                'branch_office' => 'nullable|max:255',
                'status' => 'in:Active,Non Active',
                'status_approval' => 'in:Approved,Rejected,Pending'
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 422);
            }


            if ($request->hasFile('ktp_director_file_path')) {
                $fileName = $this->generateRandomString();
                $extension = $request->file('ktp_director_file_path')->getClientOriginalExtension();

                // Store in the public storage under the 'uploads' directory
                $filePath = $request->file('ktp_director_file_path')->storeAs('public/uploads', $fileName . '.' . $extension);

                // Save the public URL
                $uploadedFiles['ktp_director_file_path'][] = Storage::url($filePath);

                // Update the $request array with the correct file path
                $request['ktp_director_file_path'] = 'uploads/' . $fileName . '.' . $extension;
            }

            // Merge other uploaded files into the $request array
            $uploadedFiles = $this->uploadFiles($request);
            $request->merge($uploadedFiles);

            $user = JWTAuth::parseToken()->authenticate();
            $request->merge(['user_id' => $user->id]);

            $contact = Contact::create($request->all());
            return response()->json($contact, 201);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Failed to authenticate.'], 401);
        }
    }

    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    private function uploadFiles(Request $request)
    {
        $uploadedFiles = [];

        // Define the file fields you want to handle dynamically
        $fileFields = [
            'npwp_file_path', 'ktp_director_files', 'siup_files', 'iujk_files', 'akte_files', 'sk_kemenkumham_files', 'business_permit_files'
        ];

        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $uploadedFiles[$field] = [];

                foreach ($request->file($field) as $file) {
                    $fileName = $this->generateRandomString();
                    $extension = $file->extension();

                    // Store the file using Storage::putFileAs
                    $filePath = $file->storeAs('public/uploads', $fileName . '.' . $extension);

                    // Save the full URL to the corresponding field in the contacts table
                    $uploadedFiles[$field][] = Storage::url($filePath);
                }
            }
        }

        return $uploadedFiles;
    }

    // Menampilkan satu kontak
    public function show($id)
    {
        $contact = Contact::find($id);
        if (!$contact) {
            return response()->json(['message' => 'Contact not found'], 404);
        }

        return response()->json($contact);
    }

    // Memperbarui kontak
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        if (!$contact) {
            return response()->json(['message' => 'Contact not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'company_name' => 'max:255|unique:contacts,company_name,' . $id,
            'customer_type' => 'in:Contractor,Industri,Retail,Owner,Supplier',
            'contact_group' => 'max:50',
            'email' => 'email|max:100|unique:contacts,email,' . $id,
            'phone' => 'max:50|unique:contacts,phone,' . $id,
            'fax' => 'max:50',
            'status_prospect' => 'in:new,aktif,pasif,leads',
            'other_info' => 'nullable',
            'sales_id' => 'nullable|integer|exists:sales,id',
            'province' => 'max:50',
            'city' => 'max:50',
            'kecamatan' => 'max:50',
            'kelurahan' => 'max:50',
            'postal_code' => 'max:20',
            'address' => 'nullable',
            'npwp_file_path' => 'nullable|url',
            'ktp_director_file_path' => 'nullable|url',
            'npwp_number' => 'nullable|max:20',
            'siup_file_path' => 'nullable|url',
            'iujk_file_path' => 'nullable|url',
            'akte_file_path' => 'nullable|url',
            'sk_kemenkumham_file_path' => 'nullable|url',
            'business_permit_file_path' => 'nullable|url',
            'bank_name' => 'nullable|max:255',
            'account_name' => 'nullable|max:255',
            'account_number' => 'nullable|max:50',
            'branch_office' => 'nullable|max:255',
            'status' => 'in:Active,Non Active',
            'status_approval' => 'in:Approved,Rejected,Pending'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = JWTAuth::parseToken()->authenticate();

        $contact->fill($request->all());
        $contact->save();

        return response()->json($contact);
    }

    // Menghapus kontak
    public function destroy($id)
    {
        $contact = Contact::find($id);
        if (!$contact) {
            return response()->json(['message' => 'Contact not found'], 404);
        }

        $user = JWTAuth::parseToken()->authenticate();

        if ($contact->user_id !== $user->id) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $contact->delete();
        return response()->json(['message' => 'Contact deleted']);
    }

    // Menambahkan Person In Charge (PIC) untuk sebuah kontak
    public function addPic(Request $request, $contactId)
    {
        $validator = Validator::make($request->all(), [
            'pic_name' => 'required|max:255',
            'pic_phone' => 'max:50',
            'pic_email' => 'email|max:100',
            'pic_position' => 'max:100',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $contact = Contact::find($contactId);
        if (!$contact) {
            return response()->json(['message' => 'Contact not found'], 404);
        }

        $user = JWTAuth::parseToken()->authenticate();

        if ($contact->user_id !== $user->id) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $pic = $contact->pics()->create($request->all());
        return response()->json($pic, 201);
    }

    // Memperbarui PIC untuk sebuah kontak
    public function updatePic(Request $request, $contactId, $picId)
    {
        $validator = Validator::make($request->all(), [
            'pic_name' => 'max:255',
            'pic_phone' => 'max:50',
            'pic_email' => 'email|max:100',
            'pic_position' => 'max:100',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $pic = ContactPic::where('contact_id', $contactId)->where('pic_id', $picId)->first();
        if (!$pic) {
            return response()->json(['message' => 'PIC not found'], 404);
        }

        $user = JWTAuth::parseToken()->authenticate();

        if ($pic->contact->user_id !== $user->id) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $pic->update($request->all());
        return response()->json($pic);
    }

    // Menghapus PIC untuk sebuah kontak
    public function deletePic($contactId, $picId)
    {
        $pic = ContactPic::where('contact_id', $contactId)->where('pic_id', $picId)->first();
        if (!$pic) {
            return response()->json(['message' => 'PIC not found'], 404);
        }

        $user = JWTAuth::parseToken()->authenticate();

        if ($pic->contact->user_id !== $user->id) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $pic->delete();
        return response()->json(['message' => 'PIC deleted']);
    }
}
