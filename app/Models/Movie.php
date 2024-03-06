<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $casts = [
        'release_date' => 'date',
    ];

    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }
}
