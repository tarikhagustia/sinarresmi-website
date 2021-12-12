<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sku' => $this->faker->ean8(),
            'name' => $this->faker->name,
            'category' => $this->faker->colorName,
            'description' => $this->faker->text,
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->randomNumber(7, true),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
        ];
    }
}
