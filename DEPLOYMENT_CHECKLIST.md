# ✅ Deployment Checklist - VPS Ubuntu

## 📦 File yang Perlu Diupload ke VPS

### File Utama:
- ✅ Semua file project (via Git clone atau SCP)
- ✅ `.env.production.example` (template untuk .env)
- ✅ `deploy-vps.sh` (script update)
- ✅ `setup-vps-ubuntu.sh` (script setup awal)
- ✅ `nginx-nuris.conf` (konfigurasi Nginx)
- ✅ `supervisor-nuris-worker.conf` (konfigurasi Supervisor)

### File Dokumentasi (Opsional):
- ✅ `DEPLOY_VPS_UBUNTU.md` (panduan lengkap)
- ✅ `QUICK_DEPLOY.md` (panduan cepat)

## 🔧 Setup VPS (Satu Kali)

### 1. Install Dependencies
```bash
sudo ./setup-vps-ubuntu.sh
```

### 2. Setup Database
```bash
sudo mysql -u root -p
# Buat database dan user (lihat DEPLOY_VPS_UBUNTU.md)
```

### 3. Clone/Upload Project
```bash
cd /var/www
sudo git clone git@github.com:bos-andi/nuris.git
sudo chown -R $USER:$USER nuris
cd nuris
```

### 4. Konfigurasi .env
```bash
cp .env.production.example .env
nano .env
# Edit: APP_URL, DB_*, dll
```

### 5. Install Dependencies
```bash
composer install --no-dev --optimize-autoloader
php artisan key:generate
php artisan migrate --force
php artisan storage:link
```

### 6. Setup Nginx
```bash
sudo cp nginx-nuris.conf /etc/nginx/sites-available/nuris
sudo nano /etc/nginx/sites-available/nuris  # Edit domain
sudo ln -s /etc/nginx/sites-available/nuris /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl reload nginx
```

### 7. Set Permissions
```bash
sudo chown -R www-data:www-data /var/www/nuris
sudo chmod -R 755 /var/www/nuris
sudo chmod -R 775 /var/www/nuris/storage
sudo chmod -R 775 /var/www/nuris/bootstrap/cache
```

### 8. Optimize
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 🔄 Update dari Lokal (Setiap Kali)

### Di Lokal:
```powershell
git add .
git commit -m "Update: deskripsi"
git push origin main
```

### Di VPS:
```bash
cd /var/www/nuris
./deploy-vps.sh
```

**ATAU** gunakan fitur "Update System" di admin panel!

## 📝 Checklist Sebelum Deploy

### Lokal:
- [ ] Semua perubahan sudah di-commit
- [ ] Sudah di-push ke GitHub
- [ ] .env.production.example sudah di-update
- [ ] File konfigurasi sudah siap

### VPS:
- [ ] SSH key sudah ditambahkan ke GitHub
- [ ] Domain sudah diarahkan ke IP VPS
- [ ] Firewall sudah dikonfigurasi
- [ ] Database sudah dibuat
- [ ] User database sudah dibuat dengan permission

## 🚨 Troubleshooting

### Error: Permission denied
```bash
sudo chown -R www-data:www-data /var/www/nuris
sudo chmod -R 775 /var/www/nuris/storage
```

### Error: 502 Bad Gateway
```bash
sudo systemctl status php8.3-fpm
sudo systemctl restart php8.3-fpm
```

### Error: Database connection
```bash
# Test connection
mysql -u nuris_user -p nuris_db

# Check .env
cat /var/www/nuris/.env | grep DB_
```

### Error: Storage not writable
```bash
sudo chmod -R 775 /var/www/nuris/storage
sudo chown -R www-data:www-data /var/www/nuris/storage
```

## 📦 File yang Harus Ada di VPS

```
/var/www/nuris/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── vendor/
├── .env
├── artisan
├── composer.json
├── deploy-vps.sh          ← Script update
├── nginx-nuris.conf      ← Config Nginx
└── supervisor-nuris-worker.conf  ← Config Supervisor
```

## ✅ Final Checklist

- [ ] Aplikasi bisa diakses via domain
- [ ] Admin panel bisa login
- [ ] Database terhubung
- [ ] File upload berfungsi
- [ ] SSL certificate aktif (jika setup)
- [ ] Cron job berjalan
- [ ] Queue worker berjalan (jika perlu)
- [ ] Log tidak ada error

---

**Setelah semua checklist selesai, aplikasi siap digunakan!** 🎉

