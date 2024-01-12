<?php

// database/seeders/ProductSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'product_name' => 'Contoh Produk',
            'description' => 'Deskripsi Contoh Produk',
            'stock_quantity' => 100,
            'minimum_stock' => 10,
            'price' => 50000,
            'category_id' => 1, // Asumsikan kategori sudah ada
            'unit_id' => 1, // Asumsikan unit sudah ada
            'brand_id' => 1, // Asumsikan brand sudah ada
            'product_code' => 'PROD001',
            'image_path' => '/path/to/image.jpg',
            'weight' => 1.5,
            'length' => 10.0,
            'width' => 5.0,
            'height' => 2.0,
            'status' => 'Available',
            // 'metadata' => (optional) JSON data
        ]);

        // Tambahkan data lainnya sesuai kebutuhan
    }
}
