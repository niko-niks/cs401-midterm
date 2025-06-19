<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Model
{
    public function student(): HasOne
    {
        return $this->hasOne(Student::class);
    }

    public function teacher(): HasOne
    {
        return $this->hasOne(Teacher::class);
    }

    // Representing UserRole relationship
    public function userRole()
    {
        return $this->hasOne(User::class, 'user_id')->where('type', 'user_role');
    }

    // Representing Course relationship
    public function courses()
    {
        return $this->belongsToMany(User::class, 'course_user', 'user_id', 'course_id');
    }
}