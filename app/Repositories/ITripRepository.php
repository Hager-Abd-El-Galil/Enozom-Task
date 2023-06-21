<?php
namespace App\Repositories;

interface ITripRepository
{
    public function getSuitableTrip($fromStation, $toStation);
}