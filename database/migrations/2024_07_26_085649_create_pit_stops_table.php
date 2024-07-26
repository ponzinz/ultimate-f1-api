<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pit_stops', function (Blueprint $table) {
            $table->foreignId('raceId')->constrained('races', 'raceId');
            $table->foreignId('driverId')->constrained('drivers', 'driverId');
            $table->integer('stop');
            $table->integer('lap');
            $table->string('time');
            $table->string('duration');
            $table->integer('milliseconds');
            $table->timestamps();
            $table->primary(['raceId', 'driverId', 'stop']); // Composite primary key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pit_stops');
    }
};
