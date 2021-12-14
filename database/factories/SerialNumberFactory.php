<?php

namespace Database\Factories;

use App\Models\ProductSerial;
use App\Models\SerialNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

class SerialNumberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SerialNumber::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_serial_id' => ProductSerial::factory(),
            'serial_number' => $this->faker->unique()->ean13(),
        ];
    }
}
