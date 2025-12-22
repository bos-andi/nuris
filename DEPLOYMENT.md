# Panduan Deployment & Sinkronisasi

## 📋 Overview
Dokumen ini menjelaskan cara melakukan deployment dan sinkronisasi antara environment lokal dan VPS.

## 🔄 Workflow Sinkronisasi

### 1. Update dari LOKAL ke VPS

#### Di LOKAL:
```bash
# 1. Buat perubahan di code
# 2. Commit perubahan
git add .
git commit -m "Update: deskripsi perubahan"

# 3. Push ke repository
git push origin main
```

#### Di VPS:
```bash
# Masuk ke folder project
cd /var/www/nuris  # atau path sesuai VPS Anda

# Jalankan script deployment
bash deploy.sh

# ATAU manual:
git pull origin main
composer install --no-dev --optimize-autoloader
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
php artisan migrate --force
php artisan optimize
```

### 2. Sinkronisasi dari VPS ke LOKAL

#### Jika ada perubahan di VPS:
```bash
# Di VPS: Commit dan push
git add .
git commit -m "Update dari VPS: deskripsi"
git push origin main

# Di LOKAL: Pull perubahan
git pull origin main
composer install
php artisan config:clear
php artisan cache:clear
```

## ⚠️ Catatan Penting

1. **File .env**: 
   - Jangan commit file `.env` ke Git
   - Buat file `.env` terpisah di VPS dengan konfigurasi production
   - Gunakan `.env.example` sebagai template

2. **Database**:
   - Backup database sebelum migration di production
   - Test migration di staging environment dulu

3. **Storage/Uploads**:
   - File upload di `storage/app/public` tidak di-commit ke Git
   - Pastikan symlink `public/storage` sudah dibuat di VPS:
     ```bash
     php artisan storage:link
     ```

4. **Cache**:
   - Selalu clear cache setelah deployment
   - Gunakan `php artisan optimize` untuk production

## 🔧 Setup Awal di VPS

```bash
# 1. Clone repository
git clone https://github.com/username/nuris.git
cd nuris

# 2. Install dependencies
composer install --no-dev --optimize-autoloader

# 3. Copy .env
cp .env.example .env
# Edit .env dengan konfigurasi production

# 4. Generate key
php artisan key:generate

# 5. Run migrations
php artisan migrate --force

# 6. Create storage link
php artisan storage:link

# 7. Set permissions
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache

# 8. Optimize
php artisan optimize
```

## 📝 Checklist Deployment

- [ ] Backup database
- [ ] Pull latest code
- [ ] Install/update dependencies
- [ ] Run migrations (jika ada)
- [ ] Clear all caches
- [ ] Optimize application
- [ ] Test website functionality
- [ ] Check error logs

## 🚨 Troubleshooting

### Error: Permission denied
```bash
sudo chown -R www-data:www-data storage bootstrap/cache
sudo chmod -R 755 storage bootstrap/cache
```

### Error: Composer memory limit
```bash
php -d memory_limit=-1 /usr/bin/composer install
```

### Error: Storage link
```bash
php artisan storage:link
```

