<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Creates the students table to store student information and their relationship with users, including a type field to distinguish class_student roles and an optional course_id link.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255)->comment('student first name.');
            $table->string('last_name', 255)->comment('student last name.');
            $table->string('program', 255)->comment('student program of study.');
            $table->year('enrollment_year')->comment('year of enrollment.');
            $table->dateTime('birthday')->comment('student date of birth.');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('type')->nullable()->comment('type to distinguish class_student.');
            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreign('course_id')->references('id')->on('users')->onDelete('set null')->comment('links to course if type is class_student.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};