# 📦 Panduan Setup Git & GitHub untuk Proyek NURIS

## ⚠️ Status Saat Ini
**Git repository BELUM diinisialisasi!** Fitur "Update System" memerlukan Git repository yang sudah terhubung dengan GitHub.

## 🚀 Langkah-langkah Setup

### 1. Install Git (Jika Belum Terinstall)

#### Windows:
1. Download Git dari: https://git-scm.com/download/win
2. Install dengan default settings
3. Restart terminal/PowerShell setelah install

#### Verifikasi Install:
```bash
git --version
```

### 2. Inisialisasi Git Repository

Buka terminal/PowerShell di folder project (`c:\xampp8.2\htdocs\nuris`):

```bash
# Inisialisasi repository
git init

# Konfigurasi user (ganti dengan data Anda)
git config user.name "Nama Anda"
git config user.email "email@example.com"

# Atau untuk global (semua project):
git config --global user.name "Nama Anda"
git config --global user.email "email@example.com"
```

### 3. Buat Repository di GitHub

1. Login ke GitHub: https://github.com
2. Klik tombol **"New"** atau **"+"** → **"New repository"**
3. Isi:
   - **Repository name**: `nuris` (atau nama lain)
   - **Description**: "Website Pondok Pesantren Nurul Islam"
   - **Visibility**: Private (disarankan) atau Public
   - **JANGAN** centang "Initialize with README" (karena kita sudah punya project)
4. Klik **"Create repository"**

### 4. Hubungkan dengan GitHub

Setelah repository dibuat di GitHub, Anda akan mendapat URL seperti:
- `https://github.com/username/nuris.git` (HTTPS)
- `git@github.com:username/nuris.git` (SSH)

**Pilih salah satu metode:**

#### Metode A: HTTPS (Lebih Mudah)
```bash
# Tambahkan remote origin
git remote add origin https://github.com/username/nuris.git

# Verifikasi
git remote -v
```

#### Metode B: SSH (Lebih Aman, Perlu Setup SSH Key)
```bash
# Tambahkan remote origin
git remote add origin git@github.com:username/nuris.git

# Verifikasi
git remote -v
```

### 5. Commit File Pertama

```bash
# Tambahkan semua file ke staging
git add .

# Commit pertama
git commit -m "Initial commit: Setup project NURIS"

# Push ke GitHub (branch main)
git branch -M main
git push -u origin main
```

**Catatan:** Jika menggunakan HTTPS, GitHub akan meminta username dan password/token.

### 6. Setup GitHub Personal Access Token (Untuk HTTPS)

Jika menggunakan HTTPS dan diminta password:

1. Buka: https://github.com/settings/tokens
2. Klik **"Generate new token"** → **"Generate new token (classic)"**
3. Isi:
   - **Note**: "NURIS Project"
   - **Expiration**: Sesuai kebutuhan (90 days / No expiration)
   - **Scopes**: Centang `repo` (full control)
4. Klik **"Generate token"**
5. **Copy token** (hanya muncul sekali!)
6. Saat push, gunakan token sebagai password

### 7. Verifikasi Setup

```bash
# Cek status
git status

# Cek remote
git remote -v

# Cek branch
git branch -a
```

## ✅ Checklist Setup

- [ ] Git terinstall (`git --version`)
- [ ] Repository Git diinisialisasi (`git init`)
- [ ] User name & email dikonfigurasi
- [ ] Repository dibuat di GitHub
- [ ] Remote origin ditambahkan (`git remote add origin`)
- [ ] File pertama di-commit (`git commit`)
- [ ] Push ke GitHub berhasil (`git push`)

## 🔄 Workflow Setelah Setup

### Update dari Lokal ke VPS:

```bash
# 1. Di lokal: Buat perubahan, commit, dan push
git add .
git commit -m "Update: deskripsi perubahan"
git push origin main

# 2. Di VPS: Gunakan fitur "Update System" di admin panel
# Atau manual:
git pull origin main
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan optimize
```

## 🚨 Troubleshooting

### Error: "git: command not found"
- **Solusi**: Install Git dan restart terminal

### Error: "Permission denied (publickey)"
- **Solusi**: Setup SSH key atau gunakan HTTPS dengan token

### Error: "remote origin already exists"
- **Solusi**: 
```bash
git remote remove origin
git remote add origin https://github.com/username/nuris.git
```

### Error: "fatal: refusing to merge unrelated histories"
- **Solusi**:
```bash
git pull origin main --allow-unrelated-histories
```

## 📝 Catatan Penting

1. **File `.env`** sudah ada di `.gitignore`, jadi tidak akan di-commit
2. **Folder `vendor/`** juga di-ignore (akan diinstall via composer)
3. **File upload** di `storage/` tidak di-commit
4. **Selalu commit dengan pesan yang jelas** untuk tracking perubahan

## 🎯 Setelah Setup Selesai

Fitur "Update System" di admin panel akan berfungsi dengan baik:
- ✅ Git pull akan berhasil
- ✅ Composer install akan berjalan
- ✅ Migration akan dijalankan
- ✅ Cache akan dibersihkan dan dioptimalkan

---

**Pertanyaan?** Silakan cek dokumentasi Git: https://git-scm.com/doc

