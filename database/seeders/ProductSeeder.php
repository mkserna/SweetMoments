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
                'name' => 'Classic Chocolate Cake',
                'description' => 'A rich and moist chocolate cake topped with silky chocolate frosting.',
                'price' => 25.99,
                'image' => 'chocolate_cake.jpg',
                'size_id' => 2,
                'category_id' => 1,
            ],
            [
                'name' => 'Red Velvet Cupcakes',
                'description' => 'Fluffy red velvet cupcakes with creamy cream cheese frosting.',
                'price' => 12.99,
                'image' => 'red_velvet_cupcakes.jpg',
                'size_id' => 1,
                'category_id' => 2,
            ],
            [
                'name' => 'Mini Cheesecake Bites',
                'description' => 'Smooth and creamy mini cheesecakes with a graham cracker crust.',
                'price' => 9.99,
                'image' => 'mini_cheesecakes.jpg',
                'size_id' => 1,
                'category_id' => 3,
            ],
            [
                'name' => 'Chocolate Chip Cookies',
                'description' => 'Classic cookies loaded with semi-sweet chocolate chips.',
                'price' => 6.99,
                'image' => 'chocolate_chip_cookies.jpg',
                'size_id' => 1,
                'category_id' => 4,
            ],
            [
                'name' => 'Cinnamon Rolls',
                'description' => 'Soft and fluffy rolls swirled with cinnamon and topped with icing.',
                'price' => 14.99,
                'image' => 'cinnamon_rolls.jpg',
                'size_id' => 2,
                'category_id' => 5,
            ],
            [
                'name' => 'Vegan Chocolate Cake',
                'description' => 'A decadent chocolate cake made with 100% plant-based ingredients.',
                'price' => 27.99,
                'image' => 'vegan_chocolate_cake.jpg',
                'size_id' => 2,
                'category_id' => 6,
            ],
            [
                'name' => 'Hot Chocolate',
                'description' => 'Rich and creamy hot chocolate made with premium cocoa.',
                'price' => 4.99,
                'image' => 'hot_chocolate.jpg',
                'size_id' => 1,
                'category_id' => 7,
            ],
            [
                'name' => 'Classic Vanilla Cake',
                'description' => 'A soft and fluffy vanilla cake topped with whipped cream frosting.',
                'price' => 24.99,
                'image' => 'vanilla_cake.jpg',
                'size_id' => 2,
                'category_id' => 1,
            ],
            [
                'name' => 'Themed Cupcakes',
                'description' => 'Custom-designed cupcakes for any special occasion.',
                'price' => 15.99,
                'image' => 'themed_cupcakes.jpg',
                'size_id' => 2,
                'category_id' => 2,
            ],
            [
                'name' => 'Lemon Tart',
                'description' => 'A buttery crust filled with tangy lemon curd and topped with powdered sugar.',
                'price' => 8.99,
                'image' => 'lemon_tart.jpg',
                'size_id' => 1,
                'category_id' => 3,
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['name' => $product['name']],
                $product
            );
        }
    }
}
