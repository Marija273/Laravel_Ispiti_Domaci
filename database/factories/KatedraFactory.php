<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KatedraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->catchPhrase(),
            'broj_clanova' => $this->faker->numberBetween($min = 1, $max = 50),
            'sef' => $this->faker->name()
        ];
    }
}
