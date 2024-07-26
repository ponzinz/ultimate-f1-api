<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constructor extends Model
{
    use HasFactory;

    protected $primaryKey = 'constructorId';

    protected $fillable = [
        'constructorRef', 'name', 'nationality', 'url'
    ];

    public function results()
    {
        return $this->hasMany(Result::class, 'constructorId');
    }

    public function constructorResults()
    {
        return $this->hasMany(ConstructorResult::class, 'constructorId');
    }

    public function constructorStandings()
    {
        return $this->hasMany(ConstructorStanding::class, 'constructorId');
    }

    public function qualifying()
    {
        return $this->hasMany(Qualifying::class, 'constructorId');
    }

    public function sprintResults()
    {
        return $this->hasMany(SprintResult::class, 'constructorId');
    }
}
