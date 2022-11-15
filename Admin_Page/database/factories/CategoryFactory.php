<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->firstname(),
            'email' =>$this->faker->email(),
            'contact_number' =>$this->faker->phoneNumber()
        ];
    }
}
