<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\MeasureTwoDimensional;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Thariq',
            'email' => 'thoriqgrady@yahoo.com',
            'password' => bcrypt('asw'),
        ]);

        $this->call(HospitalSeeder::class);
        $this->call(CardiologistSeeder::class);
        $this->call(PatientSeeder::class);
        $this->call(FindingSeeder::class);
        $this->call(DiagnosticSeeder::class);
        $this->call(MeasureTwoDimensionalSeeder::class);
        $this->call(MeasureDopplerSeeder::class);
        $this->call(EchogramSeeder::class);
    }
}
