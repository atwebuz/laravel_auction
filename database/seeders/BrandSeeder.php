<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create([
            
                'car_maker_id' => 1, // Replace with the appropriate car maker ID
                'name' => 'Brand 1',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            Brand::create([

                'car_maker_id' => 2, // Replace with the appropriate car maker ID
                'name' => 'Brand 2',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
    }
}
