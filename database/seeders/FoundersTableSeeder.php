<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoundersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('founders')->insert([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'phone' => '1234567890',
            'sales_address' => '123 Main St',
            'is_active' => 'Active',
            'approval_status' => 'Approved'
        ]);

        // Tambahkan lebih banyak data jika perlu
    }
}
