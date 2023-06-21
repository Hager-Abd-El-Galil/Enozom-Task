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
    public function getSuitableTrip($fromStation, $toStation){
        $this->tripService->getSuitableTrip($fromStation, $toStation);
    }
}