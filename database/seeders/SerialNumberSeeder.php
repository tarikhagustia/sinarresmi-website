<?php

namespace Database\Seeders;

use App\Models\SerialNumber;
use Illuminate\Database\Seeder;

class SerialNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SerialNumber::factory(10)->create();
    }
}
