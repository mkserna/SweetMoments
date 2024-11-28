<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            //Status of order
            [
                'name' => 'pending',
                'description' => 'The order is pending.',
            ],
            [
                'name' => 'delivered',
                'description' => 'The order has been delivered.',
            ],
            [
                'name' => 'cancelled',
                'description' => 'The order has been cancelled.',
            ],
        ];

        foreach ($statuses as $status) {
            Status::updateOrCreate(
                ['name' => $status['name']],
                $status
            );
        }
    }
}
