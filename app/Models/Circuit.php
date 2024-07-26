<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuit extends Model
{
    use HasFactory;

    protected $primaryKey = 'circuitId';

    protected $fillable = [
        'circuitRef', 'name', 'location', 'country', 'lat', 'lng', 'alt', 'url'
    ];

    public function races()
    {
        return $this->hasMany(Race::class, 'circuitId');
    }
}
