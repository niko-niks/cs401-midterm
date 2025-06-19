<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Creates the schedules table to store course schedule details including day, time slot, room, and term.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('day_of_week', 10)->comment('day of the week.');
            $table->time('time_slot')->comment('time slot for the schedule.');
            $table->string('room', 20)->comment('room number.');
            $table->integer('term')->comment('term number.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};