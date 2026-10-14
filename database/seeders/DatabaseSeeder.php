<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['01. Rose Delight', 17, 'floral', 'Pink 3D floral bedsheet design.'],
            ['02. Red Romance', 18, 'floral', 'Black and red rose 3D floral design.'],
            ['03. Blue Serenity', 16, 'floral', 'Elegant blue floral 3D design.'],
            ['04. White Lily', 15, 'floral', 'Soft white and beige floral design.'],
            ['05. Green Fresh', 16, 'floral', 'Fresh green floral 3D design.'],
            ['06. Modern Grace', 17, 'modern', 'Grey and white contemporary floral design.'],
            ['07. Purple Dream', 15, 'modern', 'Purple floral luxury design.'],
            ['08. Golden Bloom', 19, 'luxury', 'Warm golden premium floral design.'],
            ['09. Royal Blue', 18, 'luxury', 'Deep navy blue and gold botanical design.'],
            ['10. Peach Elegance', 16, 'floral', 'Peach rose elegant floral design.'],
        ];

        foreach ($items as [$name, $price, $category, $description]) {
            Product::updateOrCreate(
                ['slug' => \Illuminate\Support\Str::slug($name)],
                [
                    'name' => $name,
                    'price' => $price,
                    'category' => $category,
                    'description' => $description,
                    'image' => 'images/hero.png',
                    'is_active' => true,
                ]
            );
        }
    }
}
