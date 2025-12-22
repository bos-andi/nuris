# 🔧 Solusi Error PHP Version

## ⚠️ Masalah
Laravel 12 memerlukan **PHP >= 8.3.0**, tapi Anda menggunakan **PHP 8.2.12**.

## 🚀 Solusi

### Opsi 1: Upgrade PHP ke 8.3+ (DISARANKAN)

#### Untuk XAMPP:
1. **Download XAMPP dengan PHP 8.3:**
   - Kunjungi: https://www.apachefriends.org/download.html
   - Download XAMPP dengan PHP 8.3 atau lebih tinggi
   - Install di folder baru (misal: `C:\xampp8.3\`)

2. **Atau Install PHP 8.3 Manual:**
   - Download PHP 8.3 dari: https://windows.php.net/download/
   - Extract ke folder (misal: `C:\php83\`)
   - Update PATH environment variable
   - Update Apache config di XAMPP untuk menggunakan PHP 8.3

#### Verifikasi:
```bash
php -v
# Harus menampilkan PHP 8.3.x atau lebih tinggi
```

### Opsi 2: Ignore Platform Requirements (SEMENTARA - Development Only)

**⚠️ PERINGATAN:** Ini hanya untuk development lokal. Jangan gunakan di production!

```bash
composer install --ignore-platform-reqs
composer update --ignore-platform-reqs
```

Atau tambahkan ke `composer.json`:
```json
"config": {
    "platform-check": false
}
```

### Opsi 3: Downgrade ke Laravel 11 (Jika Tidak Bisa Upgrade PHP)

Jika tidak bisa upgrade PHP, downgrade Laravel ke versi 11 yang support PHP 8.2:

```bash
composer require laravel/framework:^11.0 --with-all-dependencies
```

**Catatan:** Downgrade mungkin memerlukan perubahan kode karena ada breaking changes antara Laravel 11 dan 12.

## 📋 Checklist

- [ ] PHP versi 8.3+ terinstall
- [ ] `php -v` menampilkan versi yang benar
- [ ] `composer install` berjalan tanpa error
- [ ] Aplikasi Laravel bisa diakses

## 🔍 Verifikasi

Setelah upgrade PHP, jalankan:

```bash
php -v
composer install
php artisan --version
php artisan serve
```

## 💡 Rekomendasi

**Untuk Development:**
- Gunakan PHP 8.3+ (XAMPP terbaru atau PHP manual)
- Atau gunakan Laravel Sail dengan Docker

**Untuk Production:**
- **WAJIB** menggunakan PHP 8.3+ atau lebih tinggi
- Jangan gunakan `--ignore-platform-reqs` di production

## 🆘 Troubleshooting

### Error: "php: command not found"
- Pastikan PHP ada di PATH
- Restart terminal/PowerShell setelah install

### Error: "Apache tidak bisa start"
- Pastikan port 80/443 tidak digunakan aplikasi lain
- Cek `httpd.conf` di XAMPP

### Error: "Extension tidak ditemukan"
- Aktifkan extension yang diperlukan di `php.ini`
- Restart Apache setelah perubahan

---

**Pertanyaan?** Silakan cek dokumentasi Laravel: https://laravel.com/docs/12.x/installation

