<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConstructorStanding extends Model
{
    use HasFactory;

    protected $primaryKey = 'constructorStandingsId';

    protected $fillable = [
        'raceId', 'constructorId', 'points', 'position', 'positionText', 'wins'
    ];

    public function race()
    {
        return $this->belongsTo(Race::class, 'raceId');
    }

    public function constructor()
    {
        return $this->belongsTo(Constructor::class, 'constructorId');
    }
}
