<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            [
                'company_name' => 'Sample Company',
                'customer_type' => 'Contractor',
                'contact_group' => 'Group A',
                'email' => 'contact@example.com',
                'phone' => '123456789',
                'fax' => '987654321',
                'status_prospect' => 'new',
                'other_info' => 'Sample information',
                'sales_id' => 1, // Pastikan ini sesuai dengan ID yang ada di tabel sales
                'province' => 'Sample Province',
                'city' => 'Sample City',
                'kecamatan' => 'Sample Kecamatan',
                'kelurahan' => 'Sample Kelurahan',
                'postal_code' => '12345',
                'address' => 'Sample Address',
                'npwp_file_path' => 'path/to/npwp/file.pdf',
                'ktp_director_file_path' => 'path/to/ktp/file.pdf',
                'npwp_number' => '1234567890',
                'siup_file_path' => 'path/to/siup/file.pdf',
                'iujk_file_path' => 'path/to/iujk/file.pdf',
                'akte_file_path' => 'path/to/akte/file.pdf',
                'sk_kemenkumham_file_path' => 'path/to/sk/file.pdf',
                'business_permit_file_path' => 'path/to/business/permit/file.pdf',
                'bank_name' => 'Sample Bank',
                'account_name' => 'Sample Account',
                'account_number' => '1234567890',
                'branch_office' => 'Sample Branch',
                'status' => 'Active',
                'status_approval' => 'Approved'
            ],
            // Tambahkan baris data lain sesuai kebutuhan
        ]);
    }
}
