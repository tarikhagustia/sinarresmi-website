<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        // $this->call(BookingSeeder::class);
        // $this->call(EventSeeder::class);
        // $this->call(ProductSeeder::class);
        // $this->call(SerialNumberSeeder::class);
    }
}
