<?php

namespace App\Http\Controllers;

use App\Models\Kabkot;
use Illuminate\Http\Request;

class KabkotController extends Controller
{
    public function index(Request $request)
    {
        $provinsiId = $request->input('provinsi_id');
        $kabkots = Kabkot::where('provinsi_id', $provinsiId)->get();
        return response()->json($kabkots);
    }

    public function show($id)
    {
        $kabkot = Kabkot::find($id);
        if (!$kabkot) {
            return response()->json(['message' => 'Kabkot not found'], 404);
        }

        return response()->json($kabkot);
    }
}
