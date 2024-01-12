<?php

namespace App\Http\Controllers;

use App\Models\UserActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserActivityServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Store a new user activity.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'action' => 'required|string',
            'description' => 'required|string',
            'url' => 'required|string',
            'method' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $activityData = $validator->validated();

        // Menambahkan data tambahan seperti ID pengguna, IP Address, dll.
        $activityData['user_id'] = auth()->user()->id;
        $activityData['ip_address'] = $request->ip();
        $activityData['user_agent'] = $request->header('User-Agent');

        $activity = UserActivity::create($activityData);

        return response()->json($activity, 201);
    }

    // Metode lainnya bisa ditambahkan sesuai kebutuhan

    // ...

    /**
     * Get the user's activity log.
     *
     * @return \Illuminate\Http\Response
     */
    public function getActivityLog()
    {
        $userId = auth()->user()->id;
        $userActivityLog = UserActivity::where('user_id', $userId)->get();

        return response()->json($userActivityLog);
    }
}
