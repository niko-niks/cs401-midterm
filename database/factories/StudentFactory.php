<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'type' => 'class_student',
            'course_id' => \App\Models\User::factory()->create(['type' => 'course'])->id,
        ];
    }
}