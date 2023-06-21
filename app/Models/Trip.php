<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    public function stations()
    {
        return $this->belongsToMany(Station::class, 'trip_station')
            ->withPivot('arrival_time')
            ->withTimestamps();
    }
}