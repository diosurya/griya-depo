<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PriceList extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'price_list';

    protected $fillable = [
        'product_id',
        'supplier_id',
        'ppn_option',
        'supplier_markup_value',
        'supplier_markup_type',
        'contractor_markup_value',
        'contractor_markup_type',
        'retail_markup_value',
        'retail_markup_type',
    ];
}
