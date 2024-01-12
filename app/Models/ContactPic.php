<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactPic extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'contact_pic'; // Nama tabel di database
    protected $primaryKey = 'pic_id'; // Kunci utama tabel

    // Kolom yang dapat diisi
    protected $fillable = [
        'contact_id',
        'pic_name',
        'pic_phone',
        'pic_email',
        'pic_position'
    ];

    // Relasi dengan model Contact
    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id', 'id');
    }
}
