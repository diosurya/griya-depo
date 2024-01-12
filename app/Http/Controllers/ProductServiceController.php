<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class ProductServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $products = Product::all();
        return response()->json($products, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // Sesuaikan aturan validasi sesuai kebutuhan Anda
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        return response()->json($product, 200);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            // Sesuaikan aturan validasi sesuai kebutuhan Anda
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $product->update($validator->validated());
        return response()->json($product, 200);
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->delete();
        return response()->json(['message' => 'Product deleted'], 200);
    }
}
