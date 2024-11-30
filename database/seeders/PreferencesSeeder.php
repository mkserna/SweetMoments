<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Preferences;

class PreferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $preferences = [
            [
                'users_id' => 2,
                'products_id' => 2,
            ],
            [
                'users_id' => 3,
                'products_id' => 2,
            ],
            [
                'users_id' => 4,
                'products_id' => 3,
            ],
            [
                'users_id' => 5,
                'products_id' => 4,
            ],
            [
                'users_id' => 6,
                'products_id' => 5,
            ],
        ];

        foreach ($preferences as $preference) {
            Preferences::updateOrCreate(
                ['users_id' => $preference['users_id'], 'products_id' => $preference['products_id']],
                $preference
            );
        }
    }
}
