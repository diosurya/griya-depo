<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class BrandServiceController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return response()->json($brands, 200);
    }

    public function store(Request $request)
    {
        try {
            // Mengambil pengguna saat ini dengan token JWT
            $user = JWTAuth::parseToken()->authenticate();

            // Menambahkan user_id ke data brand
            $brandData = $request->all();
            $brandData['user_id'] = $user->id;

            // Membuat brand baru
            $brand = Brand::create($brandData);

            return response()->json($brand, 201);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Failed to authenticate.'], 401);
        }
    }

    public function show($id)
    {
        $brand = Brand::findOrFail($id);
        return response()->json($brand, 200);
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->update($request->all());
        return response()->json($brand, 200);
    }

    public function destroy($id)
    {
        Brand::destroy($id);
        return response()->json(['message' => 'Brand deleted successfully'], 200);
    }
}
