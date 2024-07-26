<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $primaryKey = 'driverId';

    protected $fillable = [
        'driverRef', 'number', 'code', 'forename', 'surname', 'dob', 'nationality', 'url'
    ];

    public function results()
    {
        return $this->hasMany(Result::class, 'driverId');
    }

    public function driverStandings()
    {
        return $this->hasMany(DriverStanding::class, 'driverId');
    }

    public function lapTimes()
    {
        return $this->hasMany(LapTime::class, 'driverId');
    }

    public function pitStops()
    {
        return $this->hasMany(PitStop::class, 'driverId');
    }

    public function qualifying()
    {
        return $this->hasMany(Qualifying::class, 'driverId');
    }

    public function sprintResults()
    {
        return $this->hasMany(SprintResult::class, 'driverId');
    }
}
