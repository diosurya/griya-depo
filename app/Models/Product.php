<?php

// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name', 'description', 'stock_quantity', 'minimum_stock',
        'price', 'category_id', 'unit_id', 'brand_id', 'product_code', 
        'image_path', 'weight', 'length', 'width', 'height', 'status', 'metadata'
    ];
}

