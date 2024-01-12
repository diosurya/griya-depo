<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index(Request $request)
    {
        $kabkotId = $request->input('kabkot_id');
        $kecamatans = Kecamatan::where('kabkot_id', $kabkotId)->get();
        return response()->json($kecamatans);
    }

    public function show($id)
    {
        $kecamatan = Kecamatan::find($id);
        if (!$kecamatan) {
            return response()->json(['message' => 'Kecamatan not found'], 404);
        }

        return response()->json($kecamatan);
    }
}
