<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    public function trips()
    {
        return $this->belongsToMany(Trip::class, 'train_trip_station')
            ->withPivot('arrival_time')
            ->withTimestamps();
    }
}