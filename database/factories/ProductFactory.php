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
            'description' => $this->faker->text,
            'category' => $this->faker->colorName,
            'image_location' => $this->faker->imageUrl(),
            'price' => $this->faker->randomFloat(2, 0, 100),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
        ];
    }
}
