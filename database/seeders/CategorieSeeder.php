<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Cakes',
                'description' => 'Delicious cakes for every occasion, from classic flavors to custom designs.',
            ],
            [
                'name' => 'Cupcakes',
                'description' => 'Beautifully decorated cupcakes, perfect for any celebration or sweet craving.',
            ],
            [
                'name' => 'Individual Desserts',
                'description' => 'Small, elegant desserts like cheesecakes, mousses, and tarts.',
            ],
            [
                'name' => 'Cookies and Brownies',
                'description' => 'Irresistible cookies and gooey brownies, with classic and gourmet options.',
            ],
            [
                'name' => 'Sweet Pastries',
                'description' => 'Freshly baked pastries like croissants, cinnamon rolls, and more.',
            ],
            [
                'name' => 'Special Products',
                'description' => 'Vegan, gluten-free, and sugar-free options to fit every lifestyle.',
            ],
            [
                'name' => 'Sweet Beverages',
                'description' => 'Warm drinks and refreshing beverages to pair with your favorite treat.',
            ],
            
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['name' => $category['name']],
                $category
            );
            
        }
    }
}
