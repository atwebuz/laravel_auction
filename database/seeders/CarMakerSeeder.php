<?php

namespace Database\Seeders;

use App\Models\CarMaker;
use Illuminate\Database\Seeder;

class CarMakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      CarMaker::create([
            'name' => 'Car Maker 1',
            'country' => 'Country 1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        CarMaker::create([
            'name' => 'Car Maker 2',
            'country' => 'Country 2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
