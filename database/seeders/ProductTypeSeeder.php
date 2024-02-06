<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductType;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $producttypes = [
            'Chalk Bag',
            'Climbing Shoes',
            'Chalk',
        ];
        foreach($producttypes as $producttype){
            ProductType::create([
                'type' => $producttype,
            ]);
        }
    }
}
