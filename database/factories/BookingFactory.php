<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'date_in' => $this->faker->date,
            'date_out' => $this->faker->date,
            'visitors' => $this->faker->numberBetween(1, 10),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
        ];
    }
}
