<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Pastikan untuk membersihkan tabel terlebih dahulu agar tidak terjadi duplikasi
        DB::table('users')->delete();

        // Menambahkan user dengan role_id yang valid
        DB::table('users')->insert([
            'name' => 'griyadepo',
            'email' => 'griyadepo@gmail.com',
            'password' => Hash::make('password'), // Hash password
            'role_id' => 1, // Pastikan ID role ini ada di tabel roles
            'email_verified_at' => now(), // Tambahkan ini jika Anda ingin menandai email sebagai terverifikasi
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
