<?php

use Illuminate\Database\Seeder;
use App\Models\Sales;

class SalesTableSeeder extends Seeder
{
    public function run()
    {
        Sales::create([
            'sales_name' => 'John Doe',
            'sales_email' => 'john@example.com',
            'sales_phone' => '123456789',
            'sales_address' => '123 Main Street',
            'is_active' => 'Active',
            'approval_status' => 'Approved'
        ]);
        // Tambahkan data tambahan sesuai kebutuhan
    }
}
