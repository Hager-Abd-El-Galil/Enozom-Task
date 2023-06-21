<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Station;
use App\Models\Trip;

class TripStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Data of Trip 1
            [
                'trip_name' => 'Talgo',
                'trip_number' => 1,
                'station_name' => 'Alexandria',
                'arrival_time' => '07:00:00',
            ],
            [
                'trip_name' => 'Talgo',
                'trip_number' => 1,
                'station_name' => 'Cairo',
                'arrival_time' => '09:00:00',
            ],
            [
                'trip_name' => 'French',
                'trip_number' => 1,
                'station_name' => 'Alexandria',
                'arrival_time' => '07:30:00',
            ],
            [
                'trip_name' => 'French',
                'trip_number' => 1,
                'station_name' => 'Tanta',
                'arrival_time' => '08:30:00',
            ],
            [
                'trip_name' => 'French',
                'trip_number' => 1,
                'station_name' => 'Banha',
                'arrival_time' => '09:30:00',
            ],
            [
                'trip_name' => 'French',
                'trip_number' => 1,
                'station_name' => 'Cairo',
                'arrival_time' => '10:30:00',
            ],
            [
                'trip_name' => 'Spain',
                'trip_number' => 1,
                'station_name' => 'Alexandria',
                'arrival_time' => '09:00:00',
            ],
            [
                'trip_name' => 'Spain',
                'trip_number' => 1,
                'station_name' => 'Tanta',
                'arrival_time' => '10:15:00',
            ],
            [
                'trip_name' => 'Spain',
                'trip_number' => 1,
                'station_name' => 'Cairo',
                'arrival_time' => '11:30:00',
            ],
            // Data of Trip 2
            [
                'trip_name' => 'Talgo',
                'trip_number' => 2,
                'station_name' => 'Cairo',
                'arrival_time' => '07:00:00',
            ],
            [
                'trip_name' => 'Talgo',
                'trip_number' => 2,
                'station_name' => 'Alexandria',
                'arrival_time' => '09:00:00',
            ],
            [
                'trip_name' => 'French',
                'trip_number' => 2,
                'station_name' => 'Cairo',
                'arrival_time' => '07:30:00',
            ],
            [
                'trip_name' => 'French',
                'trip_number' => 2,
                'station_name' => 'Banha',
                'arrival_time' => '08:00:00',
            ],
            [
                'trip_name' => 'French',
                'trip_number' => 2,
                'station_name' => 'Tanta',
                'arrival_time' => '08:30:00',
            ],
            [
                'trip_name' => 'French',
                'trip_number' => 2,
                'station_name' => 'Damanhour',
                'arrival_time' => '09:30:00',
            ],
            [
                'trip_name' => 'French',
                'trip_number' => 2,
                'station_name' => 'Alexandria',
                'arrival_time' => '10:30:00',
            ],
            [
                'trip_name' => 'Spain',
                'trip_number' => 2,
                'station_name' => 'Cairo',
                'arrival_time' => '09:00:00',
            ],
            [
                'trip_name' => 'Spain',
                'trip_number' => 2,
                'station_name' => 'Tanta',
                'arrival_time' => '10:15:00',
            ],
            [
                'trip_name' => 'Spain',
                'trip_number' => 2,
                'station_name' => 'Alexandria',
                'arrival_time' => '11:30:00',
            ]

        ];

        foreach ($data as $entry) {
            $trip = Trip::where('trip_name', $entry['trip_name'])->where('trip_number', $entry['trip_number'])->first();
            $station = Station::where('station_name', $entry['station_name'])->first();

            DB::table('trip_station')->insert([
                'trip_id' => $trip->id,
                'station_id' => $station->id,
                'arrival_time' => $entry['arrival_time'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}