<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trip::create(['trip_name' => 'Talgo', 'trip_number' => 1]);
        Trip::create(['trip_name' => 'French', 'trip_number' => 1]);
        Trip::create(['trip_name' => 'Spain', 'trip_number' => 1]);

        Trip::create(['trip_name' => 'Talgo', 'trip_number' => 2]);
        Trip::create(['trip_name' => 'French', 'trip_number' => 2]);
        Trip::create(['trip_name' => 'Spain', 'trip_number' => 2]);
    }
}