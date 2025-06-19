<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Teacher extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Representing Teacher relationship with Course
    public function courses()
    {
        return $this->belongsToMany(User::class, 'course_teacher', 'teacher_id', 'course_id');
    }
}