<?php

namespace App\Http\Controllers;

use App\Models\Founder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FounderServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }

    // Metode untuk menampilkan semua data founder
    public function index()
    {
        $founders = Founder::all();
        return response()->json($founders, 200);
    }

    // Metode untuk menyimpan data baru
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'nullable|email|max:100|unique:founders,email',
            'phone' => 'nullable|max:50|unique:founders,phone',
            'sales_address' => 'nullable',
            'is_active' => 'required|in:Active,Non Active',
            'approval_status' => 'required|in:Approved,Pending,Rejected',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $founder = Founder::create($validator->validated());
        return response()->json($founder, 201);
    }

    // Metode untuk menampilkan detail satu data founder
    public function show($id)
    {
        $founder = Founder::find($id);

        if (!$founder) {
            return response()->json(['message' => 'Founder not found'], 404);
        }

        return response()->json($founder, 200);
    }

    // Metode untuk memperbarui data
    public function update(Request $request, $id)
    {
        $founder = Founder::find($id);

        if (!$founder) {
            return response()->json(['message' => 'Founder not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'max:255',
            'email' => 'email|max:100|unique:founders,email,' . $id,
            'phone' => 'max:50|unique:founders,phone,' . $id,
            'sales_address' => 'nullable',
            'is_active' => 'in:Active,Non Active',
            'approval_status' => 'in:Approved,Pending,Rejected',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $founder->update($validator->validated());
        return response()->json($founder, 200);
    }

    // Metode untuk menghapus data
    public function destroy($id)
    {
        $founder = Founder::find($id);

        if (!$founder) {
            return response()->json(['message' => 'Founder not found'], 404);
        }

        $founder->delete();
        return response()->json(['message' => 'Founder deleted'], 200);
    }
}
