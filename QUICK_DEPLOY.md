# ⚡ Quick Deploy Guide - VPS Ubuntu

## 🎯 Langkah Cepat (5 Menit)

### 1. Upload File ke VPS

**Opsi A: Via Git (DISARANKAN)**
```bash
# Di VPS
cd /var/www
sudo git clone git@github.com:bos-andi/nuris.git
sudo chown -R $USER:$USER nuris
cd nuris
```

**Opsi B: Via SCP dari Lokal**
```powershell
# Di Windows PowerShell
scp -r c:\xampp8.2\htdocs\nuris user@vps_ip:/var/www/
```

### 2. Jalankan Setup Script

```bash
# Di VPS
cd /var/www/nuris
sudo chmod +x setup-vps-ubuntu.sh deploy-vps.sh
sudo ./setup-vps-ubuntu.sh  # Hanya pertama kali
```

### 3. Setup Database

```bash
sudo mysql -u root -p

# Di MySQL:
CREATE DATABASE nuris_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'nuris_user'@'localhost' IDENTIFIED BY 'password_kuat';
GRANT ALL PRIVILEGES ON nuris_db.* TO 'nuris_user'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```

### 4. Konfigurasi .env

```bash
cd /var/www/nuris
cp .env.production.example .env
nano .env

# Edit:
# - APP_URL=https://yourdomain.com
# - DB_DATABASE=nuris_db
# - DB_USERNAME=nuris_user
# - DB_PASSWORD=password_kuat
```

### 5. Install & Setup

```bash
composer install --no-dev --optimize-autoloader
php artisan key:generate
php artisan migrate --force
php artisan storage:link
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 6. Setup Nginx

```bash
# Copy config
sudo cp nginx-nuris.conf /etc/nginx/sites-available/nuris

# Edit domain
sudo nano /etc/nginx/sites-available/nuris
# Ganti yourdomain.com dengan domain Anda

# Enable site
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

### 8. Setup SSL (Opsional)

```bash
sudo apt install -y certbot python3-certbot-nginx
sudo certbot --nginx -d yourdomain.com -d www.yourdomain.com
```

## ✅ Selesai!

Aplikasi sudah bisa diakses di: `https://yourdomain.com`

## 🔄 Update dari Lokal ke VPS

**Di Lokal:**
```powershell
git add .
git commit -m "Update: deskripsi"
git push origin main
```

**Di VPS:**
```bash
cd /var/www/nuris
./deploy-vps.sh
```

Atau gunakan fitur "Update System" di admin panel!

---

**Lihat DEPLOY_VPS_UBUNTU.md untuk panduan lengkap!**

