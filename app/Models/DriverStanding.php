<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverStanding extends Model
{
    use HasFactory;

    protected $primaryKey = 'driverStandingsId';

    protected $fillable = [
        'raceId', 'driverId', 'points', 'position', 'positionText', 'wins'
    ];

    public function race()
    {
        return $this->belongsTo(Race::class, 'raceId');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driverId');
    }
}
