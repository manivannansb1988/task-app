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
            [
                'product_name' => 'Pen', 
                'slug' => 'basic', 
                'stripe_plan' => 'price_1LXOzsGzlk2XAanfTskz9n', 
                'price' => 10, 
                'description' => 'Basic'
            ],
            [
                'product_name' => 'Pencil', 
                'slug' => 'premium', 
                'stripe_plan' => 'price_1LXP23Gzlk2XAanf4zQZdi', 
                'price' => 100, 
                'description' => 'Premium'
            ]
        ];
  
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
