<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class pacientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'id' => $this->faker->randomNumber(),
            'name' => $this->faker->word(),
            'surname' => $this->faker->word(),
            'dni' => $this->faker->numberBetween(00000000, 99999999) . $this->faker->randomLetter(),
            'birthdate' => $this->faker->dateTime(),
            'vacinated' => $this->faker->numberBetween(0,1),
            'doctor_id' => doctorsFactory::all()->random()->id,
        ];
    }
}
