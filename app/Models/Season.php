<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    protected $primaryKey = 'year';

    protected $fillable = [
        'url'
    ];

    public function races()
    {
        return $this->hasMany(Race::class, 'year', 'year');
    }
}
