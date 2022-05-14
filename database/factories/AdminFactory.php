<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$0UakyoSwJ7odf41CzXIy7u4Jg5ci0cPC8tBVgE3i.RzgmdvHTKpL2', // password
            'remember_token' => Str::random(10),
        ];
    }

}
