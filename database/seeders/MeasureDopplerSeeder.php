<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeasureDopplerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeds initial 2D measurements data (taken from Transesophageal Report)
        $data = require database_path('seeders/ArrayDataMeasureDoppler.php');
        DB::table('measure_dopplers')->insert($data);
    }
}
