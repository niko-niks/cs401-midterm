<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    protected $model = Teacher::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'type' => 'teacher',
            'course_id' => \App\Models\User::factory()->create(['type' => 'course'])->id,
        ];
    }
}