<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    protected $primaryKey = 'raceId';

    protected $fillable = [
        'year', 'round', 'circuitId', 'name', 'date', 'time', 'url'
    ];

    public function circuit()
    {
        return $this->belongsTo(Circuit::class, 'circuitId');
    }

    public function results()
    {
        return $this->hasMany(Result::class, 'raceId');
    }

    public function qualifying()
    {
        return $this->hasMany(Qualifying::class, 'raceId');
    }

    public function sprintResults()
    {
        return $this->hasMany(SprintResult::class, 'raceId');
    }
}
