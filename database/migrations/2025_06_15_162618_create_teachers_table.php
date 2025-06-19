<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Creates the teachers table to store teacher information and their relationship with users, including a type field to distinguish teacher roles and an optional course_id link.
     */
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255)->comment('teacher first name.');
            $table->string('last_name', 255)->comment('teacher last name.');
            $table->string('email', 50)->comment('teacher email address.');
            $table->string('department', 10)->comment('teacher department.');
            $table->dateTime('birthday')->comment('teacher date of birth.');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('type')->nullable()->comment('type to distinguish teacher_course.');
            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreign('course_id')->references('id')->on('users')->onDelete('set null')->comment('links to course if type is teacher.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};