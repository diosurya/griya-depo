<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
    use HasFactory;

    protected $primaryKey = 'founder_id';

    protected $fillable = [
        'name', 'email', 'phone', 'sales_address', 'is_active', 'approval_status'
    ];

    // Jika menggunakan SoftDeletes
    // use SoftDeletes;
}

