# 🚀 Panduan Deployment ke VPS Ubuntu

## 📋 Prerequisites

Sebelum deploy, pastikan VPS Ubuntu sudah memiliki:
- ✅ Ubuntu 20.04/22.04 LTS
- ✅ Root atau sudo access
- ✅ Koneksi internet aktif
- ✅ Domain atau IP address

## 🔧 Setup Awal VPS

### 1. Update System

```bash
sudo apt update && sudo apt upgrade -y
```

### 2. Install Dependencies

```bash
# Install PHP 8.3 dan extensions
sudo apt install -y software-properties-common
sudo add-apt-repository ppa:ondrej/php -y
sudo apt update
sudo apt install -y php8.3 php8.3-fpm php8.3-cli php8.3-common php8.3-mysql php8.3-zip php8.3-gd php8.3-mbstring php8.3-curl php8.3-xml php8.3-bcmath php8.3-intl

# Install Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
sudo chmod +x /usr/local/bin/composer

# Install Git
sudo apt install -y git

# Install Nginx
sudo apt install -y nginx

# Install MySQL
sudo apt install -y mysql-server

# Install Node.js & NPM (untuk build assets)
curl -fsSL https://deb.nodesource.com/setup_20.x | sudo -E bash -
sudo apt install -y nodejs

# Install Supervisor (untuk queue worker)
sudo apt install -y supervisor
```

### 3. Setup MySQL Database

```bash
sudo mysql_secure_installation

# Login ke MySQL
sudo mysql -u root -p

# Buat database dan user
CREATE DATABASE nuris_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'nuris_user'@'localhost' IDENTIFIED BY 'password_anda_yang_kuat';
GRANT ALL PRIVILEGES ON nuris_db.* TO 'nuris_user'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```

### 4. Setup SSH Key untuk Git

```bash
# Generate SSH key (jika belum ada)
ssh-keygen -t ed25519 -C "vps@nuris"

# Copy public key
cat ~/.ssh/id_ed25519.pub

# Tambahkan public key ke GitHub:
# 1. Buka: https://github.com/settings/keys
# 2. Klik "New SSH key"
# 3. Paste public key
# 4. Klik "Add SSH key"
```

## 📦 Deploy Aplikasi

### Opsi 1: Clone dari GitHub (DISARANKAN)

```bash
# Buat folder untuk aplikasi
sudo mkdir -p /var/www/nuris
sudo chown -R $USER:$USER /var/www/nuris

# Clone repository
cd /var/www
git clone git@github.com:bos-andi/nuris.git

# Atau jika belum setup SSH:
# git clone https://github.com/bos-andi/nuris.git

cd nuris
```

### Opsi 2: Upload via SCP/SFTP

```bash
# Dari lokal (Windows PowerShell):
# scp -r c:\xampp8.2\htdocs\nuris user@vps_ip:/var/www/
```

### Setup Aplikasi

```bash
cd /var/www/nuris

# Install dependencies
composer install --no-dev --optimize-autoloader

# Copy .env
cp .env.example .env

# Generate application key
php artisan key:generate

# Edit .env dengan konfigurasi production
nano .env
```

**Isi .env:**
```env
APP_NAME="NURIS"
APP_ENV=production
APP_KEY=base64:... (otomatis terisi setelah key:generate)
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nuris_db
DB_USERNAME=nuris_user
DB_PASSWORD=password_anda_yang_kuat

# ... konfigurasi lainnya
```

### Run Migrations

```bash
php artisan migrate --force
```

### Setup Storage Link

```bash
php artisan storage:link
```

### Build Assets (jika ada)

```bash
npm install
npm run build
```

### Set Permissions

```bash
sudo chown -R www-data:www-data /var/www/nuris
sudo chmod -R 755 /var/www/nuris
sudo chmod -R 775 /var/www/nuris/storage
sudo chmod -R 775 /var/www/nuris/bootstrap/cache
```

### Optimize Application

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 🌐 Setup Nginx

### Buat Nginx Configuration

```bash
sudo nano /etc/nginx/sites-available/nuris
```

**Isi dengan:**
```nginx
server {
    listen 80;
    server_name yourdomain.com www.yourdomain.com;
    root /var/www/nuris/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.3-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

### Enable Site

```bash
sudo ln -s /etc/nginx/sites-available/nuris /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl reload nginx
```

## 🔒 Setup SSL dengan Let's Encrypt (Opsional)

```bash
# Install Certbot
sudo apt install -y certbot python3-certbot-nginx

# Generate SSL Certificate
sudo certbot --nginx -d yourdomain.com -d www.yourdomain.com

# Auto-renewal sudah otomatis setup
```

## ⚙️ Setup Supervisor untuk Queue Worker (Jika Perlu)

```bash
sudo nano /etc/supervisor/conf.d/nuris-worker.conf
```

**Isi dengan:**
```ini
[program:nuris-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/nuris/artisan queue:work --sleep=3 --tries=3 --max-time=3600
autostart=true
autorestart=true
stopasgroup=true
killasgroup=true
user=www-data
numprocs=1
redirect_stderr=true
stdout_logfile=/var/www/nuris/storage/logs/worker.log
stopwaitsecs=3600
```

```bash
sudo supervisorctl reread
sudo supervisorctl update
sudo supervisorctl start nuris-worker:*
```

## ⏰ Setup Cron Job untuk Laravel Scheduler

```bash
sudo crontab -e -u www-data
```

**Tambahkan:**
```
* * * * * cd /var/www/nuris && php artisan schedule:run >> /dev/null 2>&1
```

## 🔄 Update Script

File `deploy-vps.sh` sudah disiapkan untuk update otomatis.

## ✅ Checklist Deployment

- [ ] PHP 8.3 terinstall
- [ ] Composer terinstall
- [ ] Git terinstall
- [ ] Nginx terinstall dan dikonfigurasi
- [ ] MySQL terinstall dan database dibuat
- [ ] Repository di-clone
- [ ] Dependencies diinstall
- [ ] .env dikonfigurasi
- [ ] Migration dijalankan
- [ ] Storage link dibuat
- [ ] Permissions di-set
- [ ] Nginx site di-enable
- [ ] SSL certificate dibuat (opsional)
- [ ] Supervisor di-setup (jika perlu)
- [ ] Cron job di-setup
- [ ] Aplikasi bisa diakses

## 🆘 Troubleshooting

### Error: Permission denied
```bash
sudo chown -R www-data:www-data /var/www/nuris
sudo chmod -R 755 /var/www/nuris
```

### Error: 502 Bad Gateway
```bash
# Cek PHP-FPM status
sudo systemctl status php8.3-fpm

# Restart PHP-FPM
sudo systemctl restart php8.3-fpm
```

### Error: Database connection
```bash
# Test koneksi MySQL
mysql -u nuris_user -p nuris_db

# Cek .env configuration
cat /var/www/nuris/.env | grep DB_
```

### Error: Storage not writable
```bash
sudo chmod -R 775 /var/www/nuris/storage
sudo chown -R www-data:www-data /var/www/nuris/storage
```

## 📝 Catatan Penting

1. **Security:**
   - Jangan set `APP_DEBUG=true` di production
   - Gunakan password yang kuat untuk database
   - Setup firewall (UFW)

2. **Backup:**
   - Backup database secara rutin
   - Backup file upload di storage

3. **Monitoring:**
   - Setup log monitoring
   - Monitor disk space
   - Monitor server resources

---

**Setelah semua langkah selesai, aplikasi siap digunakan di VPS!** 🎉

