<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{

    protected $fillable = [
        'movie_id',
        'day',
        'screen',
        'time',
        'seats',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }
}
