<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function index(Request $request)
    {
        $kecamatanId = $request->input('kecamatan_id');
        $kelurahans = Kelurahan::where('kecamatan_id', $kecamatanId)->get();
        return response()->json($kelurahans);
    }

    public function show($id)
    {
        $kelurahan = Kelurahan::find($id);
        if (!$kelurahan) {
            return response()->json(['message' => 'Kelurahan not found'], 404);
        }

        return response()->json($kelurahan);
    }
}
