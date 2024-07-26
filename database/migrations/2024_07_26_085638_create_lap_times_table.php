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
        Schema::create('lap_times', function (Blueprint $table) {
            $table->foreignId('raceId')->constrained('races', 'raceId');
            $table->foreignId('driverId')->constrained('drivers', 'driverId');
            $table->integer('lap');
            $table->integer('position');
            $table->string('time');
            $table->integer('milliseconds');
            $table->timestamps();
            $table->primary(['raceId', 'driverId', 'lap']); // Composite primary key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lap_times');
    }
};
