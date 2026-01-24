# Panduan Deploy ke VPS Setelah Pull dari GitHub

## Langkah-langkah Setelah Pull di VPS

### 1. Pull dari GitHub
```bash
cd /path/to/nuris
git pull origin main
```

### 2. Install Dependencies (jika ada package baru)
```bash
composer install --no-dev --optimize-autoloader
```

### 3. **WAJIB: Run Migrations** (Karena ada migration baru)
```bash
php artisan migrate --force
```

**Migration yang akan dijalankan:**
- `2026_01_24_120044_create_categories_table.php`
- `2026_01_24_120050_create_tags_table.php`
- `2026_01_24_120054_create_article_tag_table.php`
- `2026_01_24_120121_add_category_id_to_articles_table.php`

### 4. Clear Cache (PENTING!)
```bash
# Clear semua cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Atau sekaligus:
php artisan optimize:clear
```

### 5. Rebuild Cache (Opsional, untuk performa)
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 6. Set Permission (jika perlu)
```bash
# Pastikan storage dan bootstrap/cache bisa ditulis
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### 7. Restart Services (jika menggunakan queue/scheduler)
```bash
# Jika menggunakan Supervisor untuk queue
sudo supervisorctl restart laravel-worker:*

# Jika menggunakan systemd
sudo systemctl restart laravel-worker
```

### 8. Test Website
- Buka website dan cek apakah berjalan normal
- Test halaman admin: `/admin/categories` dan `/admin/tags`
- Test halaman berita: `/berita`
- Test detail artikel dengan sidebar

---

## Checklist Cepat

```bash
# Script lengkap (copy-paste semua):
cd /path/to/nuris
git pull origin main
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache
chmod -R 775 storage bootstrap/cache
```

---

## Troubleshooting

### Error: "Class not found" atau "Table doesn't exist"
```bash
# Pastikan migration sudah dijalankan
php artisan migrate --force

# Pastikan autoload sudah di-update
composer dump-autoload
```

### Error: "View not found"
```bash
# Clear view cache
php artisan view:clear
php artisan view:cache
```

### Error: "Route not found"
```bash
# Clear route cache
php artisan route:clear
php artisan route:cache
```

### Error: Permission denied
```bash
# Set permission
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

---

## Catatan Penting

1. **Migration WAJIB dijalankan** karena ada tabel baru (categories, tags, article_tag)
2. **Clear cache WAJIB** karena ada perubahan view dan route
3. Jika menggunakan **Nginx**, mungkin perlu restart:
   ```bash
   sudo systemctl reload nginx
   ```
4. Jika menggunakan **PHP-FPM**, mungkin perlu restart:
   ```bash
   sudo systemctl restart php8.2-fpm
   # atau php8.1-fpm, php8.0-fpm, sesuai versi PHP
   ```

---

## Fitur Baru yang Ditambahkan

Setelah pull, fitur berikut akan tersedia:

1. **Sistem Kategori & Tag**
   - Admin: `/admin/categories` dan `/admin/tags`
   - CRUD lengkap untuk kategori dan tag

2. **Sidebar di Halaman Berita**
   - Widget Kategori
   - Widget Tag
   - Widget Berita Terbaru
   - Widget Artikel Terkait

3. **Social Media Sharing**
   - Open Graph meta tags untuk artikel
   - Twitter Card meta tags
   - Thumbnail, judul, dan deskripsi otomatis saat share

4. **Halaman Maintenance Mode**
   - Custom 503 error page

---

## Verifikasi Setelah Deploy

1. ✅ Cek halaman admin kategori: `https://nuris.or.id/admin/categories`
2. ✅ Cek halaman admin tag: `https://nuris.or.id/admin/tags`
3. ✅ Cek halaman berita: `https://nuris.or.id/berita` (harus ada sidebar)
4. ✅ Cek detail artikel: `https://nuris.or.id/[slug-artikel]` (harus ada sidebar)
5. ✅ Test share artikel di Facebook/Twitter (cek thumbnail dan deskripsi)

---

**Terakhir diupdate:** 24 Januari 2026

