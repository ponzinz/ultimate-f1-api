<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualifying extends Model
{
    use HasFactory;

    protected $primaryKey = 'qualifyId';

    protected $fillable = [
        'raceId', 'driverId', 'constructorId', 'number', 'position', 'q1', 'q2', 'q3'
    ];

    public function race()
    {
        return $this->belongsTo(Race::class, 'raceId');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driverId');
    }

    public function constructor()
    {
        return $this->belongsTo(Constructor::class, 'constructorId');
    }
}
