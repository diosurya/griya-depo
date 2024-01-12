<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {
        $provinsis = Provinsi::orderBy('provinsi')->get();
        return response()->json($provinsis);
    }

    public function show($id)
    {
        $provinsi = Provinsi::find($id);
        if (!$provinsi) {
            return response()->json(['message' => 'Provinsi not found'], 404);
        }

        return response()->json($provinsi);
    }
}
