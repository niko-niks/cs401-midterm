<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Representing ClassStudent relationship
    public function classStudent(): HasOne
    {
        return $this->hasOne(Student::class, 'student_id')->where('type', 'class_student');
    }
}