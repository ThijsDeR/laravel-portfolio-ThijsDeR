<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuartileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quartile' => $this->faker->numberBetween(1, 10)
        ];
    }
}
