<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Str;

class BrandsSeeder extends Seeder
{
    public function run()
    {
        // Ambil ID kategori berdasarkan slug
        $fabricCareId = Category::where('slug', 'fabric-care')->value('id');
        $foodBeverageId = Category::where('slug', 'food-beverage')->value('id');
        $homeCareId = Category::where('slug', 'home-care')->value('id');
        $personalCareId = Category::where('slug', 'personal-care')->value('id');

        // Brand data lengkap (41 brand resmi)
        $brands = [
            // Fabric Care
            ['name' => 'Daia', 'category_id' => $fabricCareId],
            ['name' => 'Boom', 'category_id' => $fabricCareId],
            ['name' => 'Ekonomi', 'category_id' => $fabricCareId],
            ['name' => 'So Klin', 'category_id' => $fabricCareId],
            ['name' => 'Super Sol', 'category_id' => $fabricCareId],
            ['name' => 'Ekonomi Liquid', 'category_id' => $fabricCareId],

            // Food & Beverage
            ['name' => 'Ale-Ale', 'category_id' => $foodBeverageId],
            ['name' => 'Floridina', 'category_id' => $foodBeverageId],
            ['name' => 'Milkjus', 'category_id' => $foodBeverageId],
            ['name' => 'Teajus', 'category_id' => $foodBeverageId],
            ['name' => 'Teh Rio', 'category_id' => $foodBeverageId],
            ['name' => 'Top Coffee', 'category_id' => $foodBeverageId],
            ['name' => 'Neo Coffee', 'category_id' => $foodBeverageId],
            ['name' => 'Chocodrink', 'category_id' => $foodBeverageId],
            ['name' => 'Aquvia', 'category_id' => $foodBeverageId],
            ['name' => 'Golda Coffee', 'category_id' => $foodBeverageId],
            ['name' => 'So Yummie', 'category_id' => $foodBeverageId],
            ['name' => 'Segar Dingin', 'category_id' => $foodBeverageId],
            ['name' => 'EkoMie', 'category_id' => $foodBeverageId],
            ['name' => 'Jasjus', 'category_id' => $foodBeverageId],
            ['name' => 'Sedap Bumbu', 'category_id' => $foodBeverageId],
            ['name' => 'Kecap Sedap', 'category_id' => $foodBeverageId],
            ['name' => 'Sedap Cup', 'category_id' => $foodBeverageId],
            ['name' => 'Tasty', 'category_id' => $foodBeverageId],
            ['name' => 'Sukses Isi 2', 'category_id' => $foodBeverageId],
            ['name' => 'Power F Ginseng', 'category_id' => $foodBeverageId],
            ['name' => 'Milku', 'category_id' => $foodBeverageId],

            // Home Care
            ['name' => 'WPC Kloset', 'category_id' => $homeCareId],
            ['name' => 'Wings Biru', 'category_id' => $homeCareId],
            ['name' => 'Wiz 24', 'category_id' => $homeCareId, $personalCareId],


            // Personal Care
            ['name' => 'Nuvo', 'category_id' => $personalCareId],
            ['name' => 'Fres', 'category_id' => $personalCareId],
            ['name' => 'Fres & Natural Soap', 'category_id' => $personalCareId],
            ['name' => 'Baby Happy', 'category_id' => $personalCareId],
            ['name' => 'Hers Protex', 'category_id' => $personalCareId],
            ['name' => 'Giv', 'category_id' => $personalCareId],
            ['name' => 'Giv White', 'category_id' => $personalCareId],
            ['name' => 'So Soft', 'category_id' => $personalCareId],
            
        ];

        foreach ($brands as $brand) {
            $slug = Str::slug($brand['name']);
            $logo = $slug . '.png';

            // Cegah duplikat slug
            Brand::updateOrCreate(
                ['slug' => $slug], // cari berdasarkan slug
                [   // data yang akan diupdate/dibuat
                    'name' => $brand['name'],
                    'logo_path' => $logo,
                    'category_id' => $brand['category_id'],
                ]
            );
        }

    }
}
