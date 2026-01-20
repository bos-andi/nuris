# Instruksi Deploy Sitemap.xml ke Production

## Masalah
Sitemap.xml tidak bisa diakses di production server (404 error)

## Solusi

### 1. Pastikan Route Sudah Benar
Route sudah ditambahkan di `routes/web.php`:
```php
Route::get('/sitemap.xml', [\App\Http\Controllers\SitemapController::class, 'index'])->name('sitemap');
```

### 2. Deploy Kode Terbaru ke Production
Pastikan semua file sudah di-push ke GitHub dan di-pull di production server.

### 3. Clear Cache di Production Server
Jalankan perintah berikut di production server:
```bash
php artisan route:clear
php artisan view:clear
php artisan config:clear
php artisan cache:clear
```

### 4. Update Nginx Config
Pastikan `nginx-nuris.conf` atau config nginx production sudah di-update dengan:
```nginx
# Sitemap.xml should be handled by Laravel
location = /sitemap.xml {
    try_files $uri /index.php?$query_string;
}
```

Setelah update nginx config, jalankan:
```bash
sudo nginx -t  # Test config
sudo systemctl reload nginx  # Reload nginx
```

### 5. Test Sitemap
Setelah semua step di atas, test sitemap:
```bash
curl -I https://nuris.or.id/sitemap.xml
```

Seharusnya mengembalikan:
- Status: 200 OK
- Content-Type: application/xml; charset=utf-8

### 6. Verifikasi di Browser
Buka `https://nuris.or.id/sitemap.xml` di browser, seharusnya menampilkan XML sitemap.

## Troubleshooting

### Jika masih 404:
1. Pastikan route sudah terdaftar: `php artisan route:list | grep sitemap`
2. Pastikan file `app/Http/Controllers/SitemapController.php` ada
3. Pastikan nginx config sudah di-reload
4. Check error log: `tail -f /var/log/nginx/error.log`

### Jika 500 error:
1. Check Laravel log: `tail -f storage/logs/laravel.log`
2. Pastikan database connection OK
3. Pastikan semua model sudah ada

## File yang Harus Ada
- `app/Http/Controllers/SitemapController.php`
- `routes/web.php` dengan route sitemap
- `nginx-nuris.conf` dengan location sitemap.xml

