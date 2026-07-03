<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=> 'Electronics',
            'description' => 'Electronic devices and gadgets'
        ]);

        Category::create([
            'name'=> "Clothing",
            'description'=> 'Men and women clothing'
        ]);

        Category::create([
            'name' => 'Books',
            'description' => 'Physical and digital books'
        ]);

        Category::create([
            'name' => 'Home & Garden',
            'description' => 'Home and garden products'
        ]);
    }
}
