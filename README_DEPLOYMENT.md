# 🚀 Deployment Guide - NURIS Laravel Application

## 📚 Dokumentasi Deployment

### Untuk Deployment Pertama Kali:
1. **QUICK_DEPLOY.md** - Panduan cepat (5 menit)
2. **DEPLOY_VPS_UBUNTU.md** - Panduan lengkap step-by-step
3. **DEPLOYMENT_CHECKLIST.md** - Checklist sebelum dan sesudah deploy

### Script yang Tersedia:

1. **setup-vps-ubuntu.sh**
   - Setup awal VPS (install PHP, Nginx, MySQL, dll)
   - Jalankan sekali saja: `sudo ./setup-vps-ubuntu.sh`

2. **deploy-vps.sh**
   - Script untuk update aplikasi dari Git
   - Jalankan setiap kali update: `./deploy-vps.sh`

3. **deploy.sh**
   - Script legacy (masih bisa digunakan)
   - Sama seperti deploy-vps.sh

### File Konfigurasi:

1. **nginx-nuris.conf**
   - Konfigurasi Nginx untuk aplikasi
   - Copy ke: `/etc/nginx/sites-available/nuris`

2. **supervisor-nuris-worker.conf**
   - Konfigurasi Supervisor untuk queue worker
   - Copy ke: `/etc/supervisor/conf.d/nuris-worker.conf`

3. **.env.production.example**
   - Template untuk file .env di production
   - Copy dan edit sesuai kebutuhan

## 🎯 Quick Start

### Setup Awal (Satu Kali):
```bash
# 1. Setup VPS
sudo ./setup-vps-ubuntu.sh

# 2. Clone repository
cd /var/www
sudo git clone git@github.com:bos-andi/nuris.git
cd nuris

# 3. Setup aplikasi
cp .env.production.example .env
nano .env  # Edit konfigurasi
composer install --no-dev --optimize-autoloader
php artisan key:generate
php artisan migrate --force
php artisan storage:link

# 4. Setup Nginx
sudo cp nginx-nuris.conf /etc/nginx/sites-available/nuris
sudo nano /etc/nginx/sites-available/nuris  # Edit domain
sudo ln -s /etc/nginx/sites-available/nuris /etc/nginx/sites-enabled/
sudo nginx -t && sudo systemctl reload nginx

# 5. Set permissions
sudo chown -R www-data:www-data /var/www/nuris
sudo chmod -R 775 /var/www/nuris/storage
```

### Update dari Lokal:
```bash
# Di VPS
cd /var/www/nuris
./deploy-vps.sh
```

## 📖 Dokumentasi Lengkap

Lihat file-file berikut untuk detail:
- `QUICK_DEPLOY.md` - Panduan cepat
- `DEPLOY_VPS_UBUNTU.md` - Panduan lengkap
- `DEPLOYMENT_CHECKLIST.md` - Checklist

## 🔗 Link Berguna

- Repository: https://github.com/bos-andi/nuris
- Laravel Docs: https://laravel.com/docs
- Nginx Docs: https://nginx.org/en/docs/

---

**Selamat deploy!** 🎉

