<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat admin
        User::create([
            'email' => 'admin@admin.com',
            'name' => 'Admin',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);

        // Buat user
        User::create([
            'email' => 'user@user.com',
            'name' => 'User',
            'password' => bcrypt('user'),
        ]);

        // Buat user lain
        User::create([
            'email' => 'zaki@gmail.com',
            'name' => 'Zaki',
            'password' => bcrypt('123456'),
        ]);
    }
}
