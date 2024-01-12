<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TermOfPaymentSeeder extends Seeder
{
    public function run()
    {
        DB::table('terms_of_payment')->insert([
            'description' => 'Net 30 Days',
            'days' => 30,
        ]);

        DB::table('terms_of_payment')->insert([
            'description' => 'Net 60 Days',
            'days' => 60,
        ]);

        // Tambahkan seeder lainnya sesuai kebutuhan

        // Contoh lain:
        // DB::table('terms_of_payment')->insert([
        //     'description' => 'Net 90 Days',
        //     'days' => 90,
        // ]);
    }
}
