<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Size;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sizes = [
            //size of order
            [
                'name' => ' Small (6 inches)',
                'multiplier' => 2.00,
            ],
            [
                'name' => 'Medium (8 inches)',
                'multiplier' => 4.00,
            ],
            [
                'name' => 'Large (10 inches)',
                'multiplier' => 6.00,
            ],
        ];

        foreach ($sizes as $size) {
            Size::updateOrCreate(
                ['name' => $size['name']],
                $size
            );
            
        }
    }
}
