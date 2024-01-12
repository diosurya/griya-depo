<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    // protected $table = 'contact';

    protected $fillable = [
        'company_name', 'customer_type', 'contact_group', 'email', 'phone',
        'fax', 'status_prospect', 'other_info', 'sales_id', 'province', 'city',
        'kecamatan', 'kelurahan', 'postal_code', 'address', 'npwp_file_path',
        'ktp_director_file_path', 'npwp_number', 'siup_file_path', 'iujk_file_path',
        'akte_file_path', 'sk_kemenkumham_file_path', 'business_permit_file_path',
        'bank_name', 'account_name', 'account_number', 'branch_office',
        'status', 'status_approval'
    ];

    // Tambahkan relasi ke model lain jika diperlukan
}
