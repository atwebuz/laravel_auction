<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'user_id' => 1,
            'brand_id' => 1,
            'name' => 'Gentra',
            'paragraph' => 'chap eshikda pitno bor tez yursa blinmidi ',
            'price' => 16400,
            'rating' => 3,
            'color' => 'kulrang',
            "date_of_year" => "2015-02-17",
            "millage" => "100",
            "transmission" => "Avtomat",
            "oil_type" => "Benzin",
            "address" => "Sergeli",
            "condition" => "Yomon",
            'created_at' => now(),
            'updated_at' => now()
        ]);

   
        Product::create([
            'user_id' => 1,
            'brand_id' => 1,
            'name' => 'Jiguli',
            'paragraph' => 'Xolati alo ideal gap bo`lishi mumkinmas ogan odam mazza qladi',
            'price' => 3400,
            'rating' => 4,
            'color' => 'oq',
            "date_of_year" => "1999-01-03",
            "millage" => "100",
            "transmission" => "Mexanika",
            "oil_type" => "Benzin",
            "address" => "Sergeli",
            "condition" => "Alo",
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
