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
        User::create([
            'name' => 'Super Admin',
            'email' => 'ndiandie@gmail.com',
            'password' => Hash::make('nurismedia123'),
            'role' => 'superadmin',
        ]);

        // Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@nuris.id',
            'password' => Hash::make('nurismedia123'),
            'role' => 'admin',
        ]);

        // User
        User::create([
            'name' => 'User',
            'email' => 'user@nuris.id',
            'password' => Hash::make('nurismedia123'),
            'role' => 'user',
        ]);
    }
}
