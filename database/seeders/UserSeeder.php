<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Superadmin
        User::updateOrCreate(
            ['email' => 'ndiandie@gmail.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('nurismedia123'),
                'role' => 'superadmin',
            ]
        );

        // Admin
        User::updateOrCreate(
            ['email' => 'admin@nuris.id'],
            [
                'name' => 'Admin',
                'password' => Hash::make('nurismedia123'),
                'role' => 'admin',
            ]
        );

        // User
        User::updateOrCreate(
            ['email' => 'user@nuris.id'],
            [
                'name' => 'User',
                'password' => Hash::make('nurismedia123'),
                'role' => 'user',
            ]
        );
    }
}
