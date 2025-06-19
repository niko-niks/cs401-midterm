<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'user_name' => $this->faker->userName,
            'password' => bcrypt('password'),
            'registration_date' => now(),
            'type' => $this->faker->randomElement(['user_role', 'course', null]),
        ];
    }
}