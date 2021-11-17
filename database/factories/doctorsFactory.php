<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class doctorsFactory extends Factory
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
            'pacients' => $this->faker->randomNumber(),
        ];
    }
}
