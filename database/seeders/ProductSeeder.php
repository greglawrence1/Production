<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Chalk Ball', 'brand' => 'Decathlon','price' => 399, 'type' => 3],
            ['name' => 'Large Chalk Bag', 'brand' => 'Xtra','price' => 299, 'type' => 1],
            ['name' => 'Climbing Shoes', 'brand' => 'Scarpa', 'price' => 399, 'type'=> 2],
            ['name' => 'Liquid Chalk', 'brand' => 'Rock Technologies','price' => 899, 'type' => 3],
            ['name' => 'Medium Chalk Bag', 'brand' => 'Black Diamond','price' => 1199, 'type' => 1],
            ['name' => 'Climbing Shoes', 'brand' => 'Evolve', 'price' => 399, 'type'=> 2],
        ];

        foreach($products as $product) {
            Product::create([
                'name' => $product['name'],
                'brand' => $product['brand'],
                'price' => $product['price'],               
                'product_type_id' => $product['type'],                
                
       ]);
    }
    }
}
