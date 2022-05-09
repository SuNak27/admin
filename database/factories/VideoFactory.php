<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => 'dYPb49oOkgA',
            'title' => $this->faker->sentence(),
            'description' => $this->faker->sentence(),
        ];
    }
}
