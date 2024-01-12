<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable = [
        'sales_name', 'sales_email', 'sales_phone', 
        'sales_address', 'is_active', 'approval_status'
    ];

    // Tambahkan fungsi tambahan jika diperlukan
}

