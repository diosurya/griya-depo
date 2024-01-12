<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserActivitySeeder extends Seeder
{
    public function run()
    {
        DB::table('user_activities')->insert([
            'user_id' => 1,
            'action' => 'Logged in',
            'description' => 'User logged in to the system',
            'url' => '/login',
            'method' => 'POST',
            'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'
            // Tambahkan data log lainnya sesuai kebutuhan
        ]);
    }
}
