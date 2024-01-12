<?php

namespace App\Http\Controllers;

use App\Models\PriceList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class PriceListServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $priceLists = PriceList::all();
        return response()->json($priceLists, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // Sesuaikan aturan validasi berdasarkan kebutuhan aplikasi Anda
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $priceList = PriceList::create($request->all());
        return response()->json($priceList, 201);
    }

    public function show($id)
    {
        $priceList = PriceList::find($id);

        if (!$priceList) {
            return response()->json(['message' => 'Price List not found'], 404);
        }

        return response()->json($priceList, 200);
    }

    public function update(Request $request, $id)
    {
        $priceList = PriceList::find($id);

        if (!$priceList) {
            return response()->json(['message' => 'Price List not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            // Sesuaikan aturan validasi berdasarkan kebutuhan aplikasi Anda
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $priceList->update($request->all());
        return response()->json($priceList, 200);
    }

    public function destroy($id)
    {
        $priceList = PriceList::find($id);

        if (!$priceList) {
            return response()->json(['message' => 'Price List not found'], 404);
        }

        $priceList->delete();
        return response()->json(['message' => 'Price List deleted successfully'], 200);
    }
}
