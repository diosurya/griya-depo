<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactBank;
use App\Models\UserActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class ContactBankController extends Controller
{
    public function index()
    {
        $banks = ContactBank::all();
        return response()->json($banks);
    }

    public function indexByContactId($contactId)
    {
        $user = JWTAuth::parseToken()->authenticate();

        $contact = Contact::where('id', $contactId)
            ->first();

        if (!$contact) {
            return response()->json(['message' => 'Contact not found'], 404);
        }
        $banks = ContactBank::where('contact_id', $contactId)->get();

        return response()->json($banks);
    }

    public function store(Request $request)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();

            $validator = Validator::make($request->all(), [
                'contact_id' => 'required|integer|exists:contacts,id',
                'bank_name' => 'required|max:255',
                'account_name' => 'required|max:255',
                'account_number' => 'required|max:50',
                'branch_office' => 'max:255',
                'status' => 'max:255',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $request->merge(['user_id' => $user->id]);

            $bank = ContactBank::create($request->all());

            // Catat aktivitas pengguna
            UserActivity::create([
                'user_id' => $user->id,
                'activity' => 'Created a new bank record',
            ]);

            return response()->json($bank, 201);
        } catch (\Exception $e) {
            // Tangani exception, log, dan berikan respon yang sesuai
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    public function show($id)
    {
        $bank = ContactBank::find($id);

        if (!$bank) {
            return response()->json(['message' => 'Bank not found'], 404);
        }

        return response()->json($bank);
    }

    public function update(Request $request, $id)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();

            $validator = Validator::make($request->all(), [
                'contact_id' => 'required|integer|exists:contacts,id',
                'bank_name' => 'required|max:255',
                'account_name' => 'required|max:255',
                'account_number' => 'required|max:50',
                'branch_office' => 'max:255',
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $bank = ContactBank::find($id);

            if (!$bank) {
                return response()->json(['message' => 'Bank not found'], 404);
            }

            $bank->update($request->all());

            // Catat aktivitas pengguna
            UserActivity::create([
                'user_id' => $user->id,
                'activity' => 'Updated a bank record',
                // Tambahkan informasi aktivitas lainnya sesuai kebutuhan
            ]);

            return response()->json($bank);
        } catch (\Exception $e) {
            // Tangani exception, log, dan berikan respon yang sesuai
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    // Menghapus data bank berdasarkan ID
    public function destroy($id)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();

            $bank = ContactBank::find($id);

            if (!$bank) {
                return response()->json(['message' => 'Bank not found'], 404);
            }

            $bank->delete();

            // Catat aktivitas pengguna
            UserActivity::create([
                'user_id' => $user->id,
                'activity' => 'Deleted a bank record',
                // Tambahkan informasi aktivitas lainnya sesuai kebutuhan
            ]);

            return response()->json(['message' => 'Bank deleted']);
        } catch (\Exception $e) {
            // Tangani exception, log, dan berikan respon yang sesuai
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
}
