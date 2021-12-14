<?php

namespace Database\Seeders;

use App\Models\ProductSerial;
use Illuminate\Database\Seeder;

class ProductSerialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductSerial::factory(10)->create();
    }
}
