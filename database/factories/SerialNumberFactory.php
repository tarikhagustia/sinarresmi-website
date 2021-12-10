<?php

namespace Database\Factories;

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
            'product_id' => $this->faker->numberBetween(1, 10),
            'serial_number' => $this->faker->unique()->ean13(),
            'production_date' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'expiration_date' => $this->faker->dateTimeBetween('now', '+1 years'),
        ];
    }
}
