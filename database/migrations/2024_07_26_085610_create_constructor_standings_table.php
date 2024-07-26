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
        Schema::create('constructor_standings', function (Blueprint $table) {
            $table->id('constructorStandingsId');
            $table->foreignId('raceId')->constrained('races', 'raceId');
            $table->foreignId('constructorId')->constrained('constructors', 'constructorId');
            $table->decimal('points', 8, 2);
            $table->integer('position')->nullable();
            $table->string('positionText')->nullable();
            $table->integer('wins');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('constructor_standings');
    }
};
