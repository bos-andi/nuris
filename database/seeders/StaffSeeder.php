<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Staff;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * Untuk menambahkan data dari Google Sheets:
     * 1. Export Google Sheets ke CSV
     * 2. Gunakan command: php artisan staff:import path/to/file.csv
     * 
     * Atau isi data manual di bawah ini
     */
    public function run(): void
    {
        // Contoh data - bisa diisi manual atau gunakan import CSV
        // Format: nama, nip, jabatan, unit, status, email, no_hp
        
        $staffData = [
            // Contoh data - silakan isi dengan data dari Google Sheets
            // [
            //     'nama' => 'Nama Lengkap',
            //     'nip' => '123456789',
            //     'jabatan' => 'Guru Matematika',
            //     'unit' => 'SMP',
            //     'status' => 'Guru', // atau 'Karyawan'
            //     'email' => 'email@example.com',
            //     'no_hp' => '081234567890',
            //     'order' => 1,
            //     'is_active' => true,
            // ],
        ];

        foreach ($staffData as $data) {
            Staff::create($data);
        }

        $this->command->info('Seeder selesai. Gunakan command "php artisan staff:import" untuk import dari CSV.');
    }
}
