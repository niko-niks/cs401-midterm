<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\User::factory(10)->create()->each(function ($user) {
            \App\Models\Student::factory()->create(['user_id' => $user->id]);
            \App\Models\Teacher::factory()->create(['user_id' => $user->id]);
        });
    }
}