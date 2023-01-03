<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->name(),
            'description' => $this->faker->sentence(10),
            'price' => $this->faker->numberBetween(10, 1000),
            'image' => $this->faker->imageUrl(250, 250),
        ];
    }
}
