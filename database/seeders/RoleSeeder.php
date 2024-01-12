<?php

// database/seeders/RoleSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan data seeding roles di sini
        DB::table('roles')->insert([
            'role_name' => 'Admin',
        ]);

        DB::table('roles')->insert([
            'role_name' => 'User',
        ]);
    }
}

