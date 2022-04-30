<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nik' => $this->faker->nik(),
            'name' => $this->faker->name(),
            'username' => $this->faker->userName(),
            'email' => $this->faker->unique()->safeEmail(),
            'verified' => null,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'deleted_at' => null,
        ];

        // $table->id();
        // $table->string('nik');
        // $table->string('name');
        // $table->string('username');
        // $table->string('email')->unique();
        // $table->timestamp('verified')->nullable();
        // $table->string('password');
        // $table->string('level');
        // $table->timestamps();
        // $table->timestamp('deleted_at')->nullable();
    }
}
