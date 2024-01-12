<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project';

    protected $fillable = [
        'contact_id',
        'project_type_id',
        'name',
        'address',
        'province_id',
        'city_id',
        'district_id',
        'village_id',
        'postal_code',
        'pic',
        'position',
        'contact_phone',
        'start_time',
        'end_time',
        'list_of_goods_file',
        'project_photo_file',
        'note',
        'start_date',
        'end_date',
        'total_cost',
        'pic_id',
        'work_status',
        'project_value',
        'status',
        'project_stages',
    ];

    protected $casts = [
        'start_time' => 'time',
        'end_time' => 'time',
        'start_date' => 'date',
        'end_date' => 'date',
        'total_cost' => 'decimal:2',
        'project_value' => 'decimal:2',
    ];
}
