<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Staff;
use Illuminate\Support\Facades\File;

class ImportStaffFromCsv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'staff:import {file : Path to CSV file}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import staff data from CSV file exported from Google Sheets';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filePath = $this->argument('file');

        if (!File::exists($filePath)) {
            $this->error("File tidak ditemukan: {$filePath}");
            return 1;
        }

        $this->info("Memulai import data dari: {$filePath}");

        $handle = fopen($filePath, 'r');
        if (!$handle) {
            $this->error("Tidak dapat membuka file: {$filePath}");
            return 1;
        }

        // Skip header row
        $header = fgetcsv($handle);
        $this->info("Header: " . implode(', ', $header));

        $imported = 0;
        $skipped = 0;
        $errors = [];

        // Expected CSV format:
        // Nama, NIP, Jabatan, Unit, Status, Email, No HP
        while (($row = fgetcsv($handle)) !== false) {
            if (count($row) < 4) {
                $skipped++;
                continue;
            }

            $nama = trim($row[0] ?? '');
            if (empty($nama)) {
                $skipped++;
                continue;
            }

            // Check if already exists
            $exists = Staff::where('nama', $nama)->first();
            if ($exists) {
                $this->warn("Data sudah ada: {$nama} - dilewati");
                $skipped++;
                continue;
            }

            try {
                $status = 'Guru';
                if (isset($row[4]) && !empty(trim($row[4]))) {
                    $statusText = strtolower(trim($row[4]));
                    if (strpos($statusText, 'karyawan') !== false) {
                        $status = 'Karyawan';
                    }
                }

                $maxOrder = Staff::max('order') ?? 0;

                Staff::create([
                    'nama' => $nama,
                    'nip' => trim($row[1] ?? '') ?: null,
                    'jabatan' => trim($row[2] ?? '') ?: null,
                    'unit' => trim($row[3] ?? '') ?: null,
                    'status' => $status,
                    'email' => trim($row[5] ?? '') ?: null,
                    'no_hp' => trim($row[6] ?? '') ?: null,
                    'order' => $maxOrder + 1,
                    'is_active' => true,
                ]);

                $imported++;
                $this->info("✓ Imported: {$nama}");
            } catch (\Exception $e) {
                $errors[] = "Error importing {$nama}: " . $e->getMessage();
                $this->error("✗ Error: {$nama} - " . $e->getMessage());
            }
        }

        fclose($handle);

        $this->newLine();
        $this->info("Import selesai!");
        $this->info("✓ Berhasil diimport: {$imported}");
        $this->warn("⊘ Dilewati: {$skipped}");
        
        if (count($errors) > 0) {
            $this->error("✗ Errors: " . count($errors));
            foreach ($errors as $error) {
                $this->error("  - {$error}");
            }
        }

        return 0;
    }
}
