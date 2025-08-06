<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            ['name' => 'Fabric Care', 'slug' => 'fabric-care', 'image' => 'categories/fabric.png'],
            ['name' => 'Food & Beverage', 'slug' => 'food-beverage', 'image' => 'categories/food.png'],
            ['name' => 'Home Care', 'slug' => 'home-care', 'image' => 'categories/home.png'],
            ['name' => 'Personal Care', 'slug' => 'personal-care', 'image' => 'categories/personal.png'],
        ];

        foreach ($data as $item) {
            Category::firstOrCreate(
                ['slug' => $item['slug']], // Cek berdasarkan slug
                $item // Kalau belum ada, insert data
            );
        }
    }
}
