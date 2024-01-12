<?php

// database/seeders/ProductCategorySeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        ProductCategory::create([
            'category_name' => 'Contoh Kategori',
            'description' => 'Deskripsi Contoh Kategori'
        ]);

        // Tambahkan data lainnya sesuai kebutuhan
    }
}

