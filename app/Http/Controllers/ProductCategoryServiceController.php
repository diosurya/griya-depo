<?php

// app/Http/Controllers/ProductCategoryServiceController.php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class ProductCategoryServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        return ProductCategory::all();
    }

    public function store(Request $request)
    {
        $user = JWTAuth::parseToken()->authenticate();

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|unique:product_categories',
            'description' => 'nullable|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $productCategory = ProductCategory::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'user_id' => $user->id,
        ]);

        return response()->json($productCategory, 201);
    }

    public function show($id)
    {
        $productCategory = ProductCategory::findOrFail($id);
        return response()->json($productCategory, 200);
    }

    public function update(Request $request, $id)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $productCategory = ProductCategory::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'max:255|unique:product_categories,name,' . $id,
            'description' => 'nullable|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Pastikan hanya pemilik dapat memperbarui kategori produk
        if ($productCategory->user_id !== $user->id) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $productCategory->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return response()->json($productCategory, 200);
    }

    public function destroy($id)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $productCategory = ProductCategory::findOrFail($id);

        // Pastikan hanya pemilik dapat menghapus kategori produk
        if ($productCategory->user_id !== $user->id) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $productCategory->delete();

        return response()->json(['message' => 'Product category deleted successfully']);
    }
}
