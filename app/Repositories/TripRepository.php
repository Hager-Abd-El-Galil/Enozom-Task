<?php
namespace App\Repositories;

use App\Models\Trip;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use App\Repositories\ITripRepository;

class TripRepository implements ITripRepository
{
    public function getSuitableTrip($fromStation, $toStation){
        return DB::table('trip_station AS from_station')
            ->join('trip_station AS to_station', 'from_station.trip_id', '=', 'to_station.trip_id')
            ->join('trips', 'from_station.trip_id', '=', 'trips.id')
            ->where('from_station.station_id',  $fromStation)
            ->where('to_station.station_id',  $toStation)
            ->whereRaw('from_station.arrival_time < to_station.arrival_time')
            ->select( 'trips.trip_number', 'trips.trip_name', 'from_station.arrival_time')
            ->get();
    }
}