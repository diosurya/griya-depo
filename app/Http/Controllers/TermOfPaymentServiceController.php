<?php

// app/Http/Controllers/TermOfPaymentServiceController.php

namespace App\Http\Controllers;

use App\Models\TermOfPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class TermOfPaymentServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $termOfPayments = TermOfPayment::all();
        return response()->json($termOfPayments, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'term_name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $termOfPayment = TermOfPayment::create($validator->validated());
        return response()->json($termOfPayment, 201);
    }

    public function show($id)
    {
        $termOfPayment = TermOfPayment::find($id);
        if (!$termOfPayment) {
            return response()->json(['message' => 'Term of Payment not found'], 404);
        }

        return response()->json($termOfPayment, 200);
    }

    public function update(Request $request, $id)
    {
        $termOfPayment = TermOfPayment::find($id);
        if (!$termOfPayment) {
            return response()->json(['message' => 'Term of Payment not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'term_name' => 'max:255',
            'description' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $termOfPayment->update($validator->validated());
        return response()->json($termOfPayment, 200);
    }

    public function destroy($id)
    {
        $termOfPayment = TermOfPayment::find($id);
        if (!$termOfPayment) {
            return response()->json(['message' => 'Term of Payment not found'], 404);
        }

        $termOfPayment->delete();
        return response()->json(['message' => 'Term of Payment deleted successfully']);
    }
}
