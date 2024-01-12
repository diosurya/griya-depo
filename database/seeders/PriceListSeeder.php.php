<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceListSeeder extends Seeder
{
    public function run()
    {
        // Hapus semua data existing jika diperlukan
        DB::table('price_list')->truncate();

        // Seed data ke dalam tabel price_list
        DB::table('price_list')->insert([
            [
                'product_id' => 1,
                'supplier_id' => 1,
                'ppn_option' => 'include',
                'supplier_markup_value' => 5.00,
                'supplier_markup_type' => 'percentage',
                'contractor_markup_value' => 10.00,
                'contractor_markup_type' => 'nominal',
                'retail_markup_value' => 15.00,
                'retail_markup_type' => 'percentage',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 2,
                'supplier_id' => 2,
                'ppn_option' => 'exclude',
                'supplier_markup_value' => 8.00,
                'supplier_markup_type' => 'percentage',
                'contractor_markup_value' => 12.00,
                'contractor_markup_type' => 'nominal',
                'retail_markup_value' => 18.00,
                'retail_markup_type' => 'percentage',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ]);
    }
}
