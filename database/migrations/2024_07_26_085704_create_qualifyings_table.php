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
        Schema::create('qualifyings', function (Blueprint $table) {
            $table->id('qualifyId');
            $table->foreignId('raceId')->constrained('races', 'raceId');
            $table->foreignId('driverId')->constrained('drivers', 'driverId');
            $table->foreignId('constructorId')->constrained('constructors', 'constructorId');
            $table->string('number');
            $table->integer('position')->nullable();
            $table->string('q1')->nullable();
            $table->string('q2')->nullable();
            $table->string('q3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qualifyings');
    }
};
