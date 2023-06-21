<?php
namespace App\Repositories;

use App\Models\Trip;
use Illuminate\Support\Facades\DB;
use App\Repositories\ITripRepository;

class TripRepository implements ITripRepository
{
    public function getSuitableTrip($fromStation, $toStation){
        $tripInfo = DB::table('trip_station')
                    ->join('trips', 'trip_station.trip_id', '=', 'trips.id')
                    ->join('stations AS from_st', 'trip_station.station_id', '=', 'from_st.id')
                    ->join('stations AS to_st', 'trip_station.station_id', '=', 'to_st.id')
                    ->where('from_st.id', $fromStation)
                    ->where('to_st.id', $toStation)
                    ->select('trips.trip_name', 'trips.trip_number')
                    ->first();

        if($tripInfo){
            $tripName = $tripInfo->trip_name;
            $tripNumber = $tripInfo->trip_number;
            return response()->json(['message' => 'Trip information retrieved successfully', 'Trip Name' => $tripName, 'Trip Number' => $tripNumber], 200);
        }else{
            return response()->json(['message' => 'No Trip Found',], 400);
        }
    }
}