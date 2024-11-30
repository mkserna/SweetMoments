<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '123456789',
                'address' => '123 Main St, Anytown, USA',
                'password' => '741852963', // password
            ],
            [
                'name' => 'Juan',
                'email' => 'juan@example.com',
                'phone' => '987654321',
                'address' => '456 Elm St, Anytown, USA',
                'password' => '741258963', // password
            ],
            [
                'name' => 'Eduardo',
                'email' => 'eduardo@example.com',
                'phone' => '987654321',
                'address' => '456 Elm St, Anytown, USA',
                'password' => '741258963', // password
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }
    }
}
