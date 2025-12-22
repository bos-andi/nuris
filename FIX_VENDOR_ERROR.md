# 🔧 Solusi Error: Vendor Folder Corrupt/Missing

## ⚠️ Error yang Terjadi
```
Fatal error: Failed opening required 'vendor/myclabs/deep-copy/src/DeepCopy/deep_copy.php'
```

## 🔍 Penyebab
Folder `vendor` tidak lengkap atau corrupt. Dependencies tidak terinstall dengan benar.

## ✅ Solusi

### Langkah 1: Hapus Vendor Folder

**Via PowerShell:**
```powershell
cd c:\xampp8.2\htdocs\nuris
Remove-Item -Recurse -Force vendor
```

**Atau via File Explorer:**
- Buka folder `c:\xampp8.2\htdocs\nuris`
- Hapus folder `vendor`

### Langkah 2: Install Ulang Dependencies

```powershell
cd c:\xampp8.2\htdocs\nuris
composer install --ignore-platform-reqs --no-dev --optimize-autoloader
```

**Atau jika ingin include dev dependencies:**
```powershell
composer install --ignore-platform-reqs
```

### Langkah 3: Clear Cache

```powershell
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
```

### Langkah 4: Regenerate Autoload

```powershell
composer dump-autoload --optimize
```

## 🚀 Quick Fix (Satu Command)

Jalankan semua langkah di atas sekaligus:

```powershell
cd c:\xampp8.2\htdocs\nuris
Remove-Item -Recurse -Force vendor -ErrorAction SilentlyContinue
composer install --ignore-platform-reqs --no-dev --optimize-autoloader
php artisan config:clear
php artisan cache:clear
composer dump-autoload --optimize
```

## 🔄 Alternatif: Update Composer Lock

Jika masalah masih terjadi, update composer.lock:

```powershell
cd c:\xampp8.2\htdocs\nuris
Remove-Item composer.lock -ErrorAction SilentlyContinue
composer install --ignore-platform-reqs --no-dev --optimize-autoloader
```

## ⚠️ Catatan Penting

1. **Jangan commit folder vendor:**
   - Folder `vendor` sudah ada di `.gitignore`
   - Jangan commit ke Git

2. **Setelah install ulang:**
   - Pastikan semua dependencies terinstall
   - Test aplikasi untuk memastikan tidak ada error

3. **Jika masih error:**
   - Cek koneksi internet (untuk download packages)
   - Cek disk space
   - Cek permission folder

## 🆘 Troubleshooting

### Error: "composer: command not found"
- Install Composer: https://getcomposer.org/download/
- Atau gunakan `php composer.phar`

### Error: "Memory limit exhausted"
```powershell
php -d memory_limit=-1 composer install --ignore-platform-reqs
```

### Error: "Permission denied"
- Jalankan PowerShell sebagai Administrator
- Atau ubah permission folder

### Error: "Network timeout"
- Cek koneksi internet
- Atau gunakan Composer mirror:
```powershell
composer config -g repo.packagist composer https://packagist.phpcomposer.com
```

## ✅ Checklist

- [ ] Folder vendor dihapus
- [ ] `composer install` berhasil
- [ ] Tidak ada error saat install
- [ ] Cache sudah di-clear
- [ ] Autoload sudah di-regenerate
- [ ] Aplikasi bisa diakses

---

**Setelah install ulang vendor, aplikasi akan berfungsi normal!** ✅

