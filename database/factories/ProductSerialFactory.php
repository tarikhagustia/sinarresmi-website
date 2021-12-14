<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductSerialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => Product::factory(),
            'production_date' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'expiration_date' => $this->faker->dateTimeBetween('now', '+1 years'),
            'qty' => $this->faker->randomNumber(2),
        ];
    }
}
