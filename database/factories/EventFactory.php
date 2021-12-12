<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'description' => $this->faker->text,
            'date_start' => $this->faker->date,
            'date_end' => $this->faker->date,
            'image' => $this->faker->imageUrl(),
            'status' => $this->faker->randomElement(['upcoming', 'started', 'finished']),
        ];
    }
}
