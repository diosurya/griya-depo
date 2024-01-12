<?php

// database/seeders/BrandSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    public function run()
    {
        Brand::create([
            'brand_name' => 'Brand Contoh',
            'description' => 'Deskripsi Brand Contoh',
            // 'metadata' => (optional) JSON data
        ]);

        // Tambahkan data lainnya sesuai kebutuhan
    }
}
