<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Trip;
use Illuminate\Http\Request;
use App\Services\TripService;

class TripController extends Controller
{
    private TripService $tripService;

    public function __construct()
    {
        $this->tripService = new TripService();
    }
    public function getSuitableTrip(Request $request){

        $fromStation = $request->fromStation;
        $toStation = $request->toStation;

        $trips = $this->tripService->getSuitableTrip($fromStation, $toStation);

        if(count($trips) > 0){
            return response(['message' => 'Trip information retrieved successfully', 'Trips Info' => $trips], 200);
        }else{
            return response(['message' => 'No Trip Found',], 400);
        }
    }
}