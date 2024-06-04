<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FindingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeds initial findings data (taken from Transesophageal Report)
        $data = require database_path('seeders/ArrayDataFindings.php');
        DB::table('findings')->insert($data);
    }
}
