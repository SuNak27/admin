<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MyClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'user_id' => $this->faker->numberBetween(1, 5),
            'user_id' => 1,
            'class_room_id' => 1,
            // 'class_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
