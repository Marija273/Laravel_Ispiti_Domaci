<?php

namespace Database\Factories;

use App\Models\Profesor;
use Illuminate\Database\Eloquent\Factories\Factory;

class IspitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->unique()->bs(),
            'espb' => $this->faker->randomElement($array = array('3', '4', '5', '6')),
            'semestar' => $this->faker->randomElement($array = array('Prvi', 'Drugi', 'Treci', 'Cetvrti', 'Peti', 'Sesti', 'Sedmi', 'Osmi')),
            'profesor_id' => Profesor::factory()
        ];
    }
}
