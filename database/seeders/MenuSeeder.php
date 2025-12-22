<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Beranda
        $beranda = Menu::create([
            'title' => 'Beranda',
            'slug' => 'beranda',
            'type' => 'page',
            'route' => '',
            'order' => 1,
            'is_active' => true,
        ]);

        // Tentang Nuris
        $tentangNuris = Menu::create([
            'title' => 'Tentang Nuris',
            'slug' => 'tentang-nuris',
            'type' => 'dropdown',
            'order' => 2,
            'is_active' => true,
        ]);

        Menu::create([
            'title' => 'Profil Pengasuh',
            'slug' => 'profil-pengasuh',
            'type' => 'page',
            'route' => 'profil-pengasuh',
            'parent_id' => $tentangNuris->id,
            'order' => 1,
            'is_active' => true,
        ]);

        Menu::create([
            'title' => 'Sekilas PP. Nurul Islam',
            'slug' => 'sekilas-nuris',
            'type' => 'page',
            'route' => 'sekilas-nuris',
            'parent_id' => $tentangNuris->id,
            'order' => 2,
            'is_active' => true,
        ]);

        Menu::create([
            'title' => 'Visi, Misi, Tujuan, Motto',
            'slug' => 'visi-misi',
            'type' => 'page',
            'route' => 'visi-misi',
            'parent_id' => $tentangNuris->id,
            'order' => 3,
            'is_active' => true,
        ]);

        Menu::create([
            'title' => 'Makna Logo',
            'slug' => 'makna-logo',
            'type' => 'page',
            'route' => 'makna-logo',
            'parent_id' => $tentangNuris->id,
            'order' => 4,
            'is_active' => true,
        ]);

        // Struktur Organisasi
        $strukturOrg = Menu::create([
            'title' => 'Struktur Organisasi',
            'slug' => 'struktur-organisasi',
            'type' => 'dropdown',
            'parent_id' => $tentangNuris->id,
            'order' => 5,
            'is_active' => true,
        ]);

        Menu::create([
            'title' => 'Pengurus Yayasan',
            'slug' => 'pengurus-yayasan',
            'type' => 'page',
            'route' => 'pengurus-yayasan',
            'parent_id' => $strukturOrg->id,
            'order' => 1,
            'is_active' => true,
        ]);

        Menu::create([
            'title' => 'Pengurus Pesantren',
            'slug' => 'pengurus-pesantren',
            'type' => 'page',
            'route' => 'pengurus-pesantren',
            'parent_id' => $strukturOrg->id,
            'order' => 2,
            'is_active' => true,
        ]);

        Menu::create([
            'title' => 'Dewan Pengurus Pusat',
            'slug' => 'dewan-pengurus-pusat',
            'type' => 'page',
            'route' => 'dewan-pengurus-pusat',
            'parent_id' => $strukturOrg->id,
            'order' => 3,
            'is_active' => true,
        ]);

        Menu::create([
            'title' => 'Pengurus Unit',
            'slug' => 'pengurus-unit',
            'type' => 'page',
            'route' => 'pengurus-unit',
            'parent_id' => $strukturOrg->id,
            'order' => 4,
            'is_active' => true,
        ]);

        Menu::create([
            'title' => 'Data Guru & Karyawan',
            'slug' => 'data-guru-karyawan',
            'type' => 'page',
            'route' => 'data-guru-karyawan',
            'parent_id' => $tentangNuris->id,
            'order' => 6,
            'is_active' => true,
        ]);

        // Informasi
        $informasi = Menu::create([
            'title' => 'Informasi',
            'slug' => 'informasi',
            'type' => 'dropdown',
            'order' => 3,
            'is_active' => true,
        ]);

        Menu::create([
            'title' => 'Fasilitas',
            'slug' => 'fasilitas',
            'type' => 'page',
            'route' => 'fasilitas',
            'parent_id' => $informasi->id,
            'order' => 1,
            'is_active' => true,
        ]);

        // Unit Pendidikan
        $unitPendidikan = Menu::create([
            'title' => 'Unit Pendidikan',
            'slug' => 'unit-pendidikan',
            'type' => 'dropdown',
            'order' => 4,
            'is_active' => true,
        ]);

        // Unit Khidmah
        $unitKhidmah = Menu::create([
            'title' => 'Unit Khidmah',
            'slug' => 'unit-khidmah',
            'type' => 'dropdown',
            'order' => 5,
            'is_active' => true,
        ]);

        Menu::create([
            'title' => 'Nuris Medika',
            'slug' => 'nuris-medika',
            'type' => 'page',
            'route' => 'nuris-medika',
            'parent_id' => $unitKhidmah->id,
            'order' => 1,
            'is_active' => true,
        ]);

        // Program Unggulan
        Menu::create([
            'title' => 'Program Unggulan',
            'slug' => 'program-unggulan',
            'type' => 'dropdown',
            'order' => 6,
            'is_active' => true,
        ]);
    }
}
