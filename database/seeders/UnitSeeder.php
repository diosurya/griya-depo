<?php

// database/seeders/UnitSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    public function run()
    {
        Unit::create([
            'unit_name' => 'Example Unit',
            'description' => 'This is an example unit description.'
        ]);
        // Tambahkan unit lainnya sesuai kebutuhan
    }
}


