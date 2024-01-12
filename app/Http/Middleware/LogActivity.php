<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\UserActivity;
use Illuminate\Http\Request;

class LogActivity
{
    public function handle(Request $request, Closure $next)
    {
        // Jalankan request
        $response = $next($request);

        // Cek user yang login
        if (auth()->check()) {
            UserActivity::create([
                'user_id' => auth()->id(),
                'action' => 'Action yang dilakukan', // Sesuaikan
                'description' => 'Deskripsi kegiatan', // Sesuaikan
                'url' => $request->fullUrl(),
                'method' => $request->method(),
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent()
            ]);
        }

        return $response;
    }
}
