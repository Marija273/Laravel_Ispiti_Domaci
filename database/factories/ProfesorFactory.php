<?php

namespace Database\Factories;

use App\Models\Katedra;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime_prezime' => $this->faker->name(),
            'tip' => $this->faker->randomElement($array = array('Redovni', 'Vanredni')),
            'email' => $this->faker->unique()->companyEmail(),
            'katedra_id' => Katedra::factory()
        ];
    }
}
