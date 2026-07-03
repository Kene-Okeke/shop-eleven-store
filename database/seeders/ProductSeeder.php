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
        //Electronics
        Product::create([
            'name' => 'iPhone 15 Pro',
            'description' => 'Latest Apple phone with Advanced features',
            'price' => 999.9,
            'stock_quantity' => 50,
            'category_id' => 1,
            'image_url'=> 'iphone15.jpg'
        ]);

        Product::create([
            'name'=> 'Samsung Galaxy S24',
            'description' => 'Flagship Android Smartphone',
            'price' => 899.9,
            'stock_quantity' => 45,
            'category_id' => 1,
            'image_url'=> 'samsung24.jpg'

        ]);

        //Clothing
        Product::create([
            'name'=> 'Classic T shirt',
            'description' => 'Comfortable 100% cotton t-shirt',
            'price' => 19.99,
            'stock_quantity' => 200,
            'category_id' => 2,
            'image_url'=> 'tshirt.jpg'

        ]);

        Product::create([
            'name' => 'Denim Jeans',
            'description' => 'Classic blue denim jeans',
            'price' => 49.99,
            'stock_quantity' => 150,
            'category_id' => 2,
            'image_url' => 'jeans.jpg'
        ]);

        //Books
        Product::create([
            'name' => 'Clean Code',
            'description' => 'A handbook of agile software craftmanship',
            'price' => 34.99,
            'stock_quantity' => 100,
            'category_id' => 3,
            'image_url' => 'cleancode.jpg'
        ]);

        // Home & garden
        Product::create([
            'name' => 'Stainless Steel copy maker',
            'description' => 'Brew prefect coffee every time',
            'price' => 79.99,
            'stock_quantity' => 60,
            'category_id' => 4,
            'image_url' => 'coffeemaker.jpg'
        ]);


        Product::create([
            'name' => 'Garden Tool Set',
            'description' => 'Complete set for graduating',
            'price' => 39.99,
            'stock_quantity' => 120,
            'category_id' => 4,
            'image_url' => 'gardentools.jpg'
        ]);




    }
}
