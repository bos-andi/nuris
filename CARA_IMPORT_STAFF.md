# Cara Import Data Guru & Karyawan dari Google Sheets

## Metode 1: Import melalui Admin Panel (Paling Mudah)

### Langkah-langkah:

1. **Export Google Sheets ke CSV**
   - Buka Google Sheets yang berisi data guru & karyawan
   - Klik **File → Download → Comma Separated Values (.csv)**
   - Simpan file CSV di komputer Anda

2. **Login ke Admin Panel**
   - Akses: `http://localhost:8000/admin`
   - Login dengan akun admin

3. **Import Data**
   - Klik menu **"Guru & Karyawan"**
   - Klik tombol **"Import CSV"** (tombol hijau)
   - Pilih file CSV yang sudah didownload
   - Klik **"Import Data"**
   - Tunggu proses import selesai

### Format CSV yang Diperlukan:

File CSV harus memiliki format berikut (baris pertama adalah header):

```
Nama, NIP, Jabatan, Unit, Status, Email, No HP
Dr. KH. Ahmad Siddiq, 123456789, Pengasuh, Yayasan, Guru, ahmad@nuris.ac.id, 081234567890
Iman Nuvi, 987654321, Sekretaris, Yayasan, Karyawan, iman@nuris.ac.id, 081987654321
```

**Kolom:**
- **Nama** (wajib): Nama lengkap
- **NIP** (opsional): Nomor Induk Pegawai
- **Jabatan** (opsional): Jabatan/Posisi
- **Unit** (opsional): Unit/Bagian (contoh: SMP, SMA, TU, Yayasan)
- **Status** (opsional): "Guru" atau "Karyawan" (default: Guru jika kosong)
- **Email** (opsional): Alamat email
- **No HP** (opsional): Nomor telepon

**Catatan:**
- Data yang sudah ada (berdasarkan nama) akan dilewati
- Semua data yang diimport akan otomatis aktif (is_active = true)
- Urutan akan diatur otomatis

---

## Metode 2: Import melalui Command Line

Jika Anda lebih suka menggunakan command line:

1. **Export Google Sheets ke CSV** (sama seperti Metode 1)

2. **Jalankan Command:**
   ```bash
   php artisan staff:import path/to/file.csv
   ```

   Contoh:
   ```bash
   php artisan staff:import storage/app/data-guru-karyawan.csv
   ```

3. **Hasil akan ditampilkan di terminal:**
   - Jumlah data yang berhasil diimport
   - Jumlah data yang dilewati
   - Error jika ada

---

## Metode 3: Input Manual (Seeder)

Jika ingin input manual melalui seeder:

1. Edit file: `database/seeders/StaffSeeder.php`

2. Isi data di array `$staffData`:
   ```php
   $staffData = [
       [
           'nama' => 'Dr. KH. Ahmad Siddiq',
           'nip' => '123456789',
           'jabatan' => 'Pengasuh',
           'unit' => 'Yayasan',
           'status' => 'Guru',
           'email' => 'ahmad@nuris.ac.id',
           'no_hp' => '081234567890',
           'order' => 1,
           'is_active' => true,
       ],
       // ... tambahkan data lainnya
   ];
   ```

3. Jalankan seeder:
   ```bash
   php artisan db:seed --class=StaffSeeder
   ```

---

## Tips:

1. **Pastikan format CSV benar** - Gunakan koma sebagai pemisah
2. **Encoding UTF-8** - Pastikan file CSV menggunakan encoding UTF-8 untuk karakter Indonesia
3. **Header wajib** - Baris pertama harus berisi header (akan dilewati)
4. **Nama unik** - Nama digunakan untuk mengecek duplikasi
5. **Status** - Jika kolom Status kosong, default adalah "Guru"

---

## Troubleshooting:

**Error: "File tidak ditemukan"**
- Pastikan path file benar
- Gunakan path absolut atau relatif dari root project

**Error: "Tidak dapat membuka file"**
- Pastikan file tidak sedang dibuka di aplikasi lain
- Cek permission file

**Data tidak terimport**
- Cek format CSV (harus menggunakan koma sebagai pemisah)
- Pastikan encoding UTF-8
- Cek log error di terminal/admin panel

**Data duplikat**
- Sistem akan otomatis melewati data yang sudah ada (berdasarkan nama)
- Jika ingin update, edit manual melalui admin panel

