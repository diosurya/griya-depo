<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactPicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Pastikan ID kontak yang disediakan di bawah ini sudah ada di tabel contact
        $contactId = 1; // Ganti dengan ID kontak yang sesuai

        DB::table('contact_pic')->insert([
            [
                'contact_id' => $contactId,
                'pic_name' => 'John Doe',
                'pic_phone' => '08123456789',
                'pic_email' => 'johndoe@example.com',
                'pic_position' => 'Manager'
            ],
            [
                'contact_id' => $contactId,
                'pic_name' => 'Jane Doe',
                'pic_phone' => '08234567890',
                'pic_email' => 'janedoe@example.com',
                'pic_position' => 'Sales'
            ],
            // Tambahkan baris data lain sesuai kebutuhan
        ]);
    }
}
