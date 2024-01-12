<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class SalesServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }

    // Menampilkan semua data sales
    public function index()
    {
        $sales = Sales::all();
        return response()->json($sales, 200);
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sales_name' => 'required|max:255',
            'sales_email' => 'nullable|email|max:100',
            'sales_phone' => 'nullable|max:50',
            'sales_address' => 'nullable',
            'is_active' => 'required|in:Active,Non Active',
            'approval_status' => 'required|in:Approved,Pending,Rejected'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $sales = Sales::create($validator->validated());
        return response()->json($sales, 201);
    }

    // Menampilkan detail satu data sales
    public function show($id)
    {
        $sales = Sales::find($id);
        if (!$sales) {
            return response()->json(['message' => 'Sales not found'], 404);
        }
        return response()->json($sales, 200);
    }

    // Memperbarui data sales
    public function update(Request $request, $id)
    {
        $sales = Sales::find($id);
        if (!$sales) {
            return response()->json(['message' => 'Sales not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'sales_name' => 'max:255',
            'sales_email' => 'nullable|email|max:100',
            'sales_phone' => 'nullable|max:50',
            'sales_address' => 'nullable',
            'is_active' => 'in:Active,Non Active',
            'approval_status' => 'in:Approved,Pending,Rejected'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $sales->update($request->all());
        return response()->json($sales, 200);
    }

    // Menghapus data sales
    public function destroy($id)
    {
        $sales = Sales::find($id);
        if (!$sales) {
            return response()->json(['message' => 'Sales not found'], 404);
        }

        $sales->delete();
        return response()->json(['message' => 'Sales deleted successfully']);
    }
}
