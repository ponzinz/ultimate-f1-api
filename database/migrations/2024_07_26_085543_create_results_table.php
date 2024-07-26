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
        Schema::create('results', function (Blueprint $table) {
            $table->id('resultId');
            $table->foreignId('raceId')->constrained('races', 'raceId');
            $table->foreignId('driverId')->constrained('drivers', 'driverId');
            $table->foreignId('constructorId')->constrained('constructors', 'constructorId');
            $table->string('number');
            $table->integer('grid');
            $table->integer('position')->nullable();
            $table->string('positionText')->nullable();
            $table->integer('positionOrder');
            $table->decimal('points', 8, 2);
            $table->integer('laps');
            $table->string('time')->nullable();
            $table->integer('milliseconds')->nullable();
            $table->integer('fastestLap')->nullable();
            $table->integer('rank')->nullable();
            $table->string('fastestLapTime')->nullable();
            $table->string('fastestLapSpeed')->nullable();
            $table->foreignId('statusId')->constrained('statuses', 'statusId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
