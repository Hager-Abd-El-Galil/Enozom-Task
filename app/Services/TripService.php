<?php

namespace App\Services;

use App\Repositories\TripRepository;
use Illuminate\Support\Facades\Http;

class TripService
{
    private TripRepository $tripRepository;

    public function __construct()
    {
        $this->tripRepository = new TripRepository();
    }

    function getSuitableTrip($fromStation, $toStation){
        return $this->tripRepository->getSuitableTrip($fromStation, $toStation);
    }

}