<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Station;

class StationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Station::create(['station_name' => 'Alexandria']);
        Station::create(['station_name' => 'Damanhour']);
        Station::create(['station_name' => 'Tanta']);
        Station::create(['station_name' => 'Banha']);
        Station::create(['station_name' => 'Cairo']);
    }
}