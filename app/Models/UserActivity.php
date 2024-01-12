<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    use HasFactory;

    const UPDATED_AT = NULL;

    protected $fillable = [
        'user_id',
        'action',
        'description',
        'url',
        'method',
        'ip_address',
        'user_agent'
    ];

    // Relasi ke model User, jika perlu
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
