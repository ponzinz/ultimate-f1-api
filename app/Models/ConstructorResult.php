<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConstructorResult extends Model
{
    use HasFactory;

    protected $primaryKey = 'constructorResultsId';

    protected $fillable = [
        'raceId', 'constructorId', 'points', 'status'
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
