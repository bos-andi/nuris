# 🚀 Panduan Manual Setup Git Repository

## ✅ Repository GitHub Sudah Dibuat
Repository Anda: **https://github.com/bos-andi/nuris.git**

## 📋 Langkah-langkah Setup

### 1. Pastikan Git Terinstall

Buka **PowerShell sebagai Administrator** dan jalankan:
```powershell
git --version
```

Jika error "git is not recognized", berarti Git belum ada di PATH. Solusi:
1. Install Git dari: https://git-scm.com/download/win
2. **RESTART PowerShell** setelah install
3. Jalankan `git --version` lagi

### 2. Buka PowerShell di Folder Project

```powershell
cd c:\xampp8.2\htdocs\nuris
```

### 3. Inisialisasi Git Repository

```powershell
git init
```

### 4. Konfigurasi Git User (Sekali Saja)

```powershell
git config user.name "Nama Anda"
git config user.email "email@example.com"
```

Atau untuk global (semua project):
```powershell
git config --global user.name "Nama Anda"
git config --global user.email "email@example.com"
```

### 5. Tambahkan Remote GitHub

**Opsi A: Menggunakan SSH (DISARANKAN)**
```powershell
git remote add origin git@github.com:bos-andi/nuris.git
```

**Opsi B: Menggunakan HTTPS**
```powershell
git remote add origin https://github.com/bos-andi/nuris.git
```

**Catatan:** SSH lebih aman dan tidak perlu input password setiap kali. Lihat `CHANGE_GIT_REMOTE_TO_SSH.md` untuk setup SSH key.

Verifikasi:
```powershell
git remote -v
```

### 6. Tambahkan File ke Git

```powershell
git add .
```

### 7. Commit Pertama

```powershell
git commit -m "Initial commit: Setup project NURIS"
```

### 8. Push ke GitHub

```powershell
# Set branch ke main
git branch -M main

# Push ke GitHub
git push -u origin main
```

**Catatan:** Saat push pertama kali, GitHub akan meminta authentication:
- **Username**: username GitHub Anda
- **Password**: Gunakan **Personal Access Token** (bukan password biasa)

### 9. Setup GitHub Personal Access Token

Jika diminta password saat push:

1. Buka: https://github.com/settings/tokens
2. Klik **"Generate new token"** → **"Generate new token (classic)"**
3. Isi:
   - **Note**: "NURIS Project"
   - **Expiration**: Sesuai kebutuhan
   - **Scopes**: Centang `repo` (full control)
4. Klik **"Generate token"**
5. **Copy token** (hanya muncul sekali!)
6. Saat push, gunakan token sebagai password

## ✅ Verifikasi Setup

```powershell
# Cek status
git status

# Cek remote
git remote -v

# Cek branch
git branch -a
```

## 🔄 Workflow Setelah Setup

### Update dari Lokal ke VPS:

**Di Lokal:**
```powershell
git add .
git commit -m "Update: deskripsi perubahan"
git push origin main
```

**Di VPS:**
- Gunakan fitur **"Update System"** di admin panel (superadmin)
- Atau manual:
```bash
git pull origin main
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan optimize
```

## 🎯 Alternatif: Gunakan Script Otomatis

Saya sudah membuat script PowerShell: `setup-git-repository.ps1`

Jalankan di PowerShell:
```powershell
cd c:\xampp8.2\htdocs\nuris
.\setup-git-repository.ps1
```

Script akan memandu Anda step-by-step!

## 🚨 Troubleshooting

### Error: "git: command not found"
- Install Git dan restart PowerShell
- Pastikan Git ada di PATH

### Error: "Permission denied (publickey)"
- Gunakan HTTPS dengan Personal Access Token
- Atau setup SSH key (lebih kompleks)

### Error: "remote origin already exists"
```powershell
git remote remove origin
git remote add origin https://github.com/bos-andi/nuris.git
```

### Error: "fatal: refusing to merge unrelated histories"
```powershell
git pull origin main --allow-unrelated-histories
```

## 📝 Catatan Penting

1. **File `.env`** sudah di-ignore (tidak akan di-commit)
2. **Folder `vendor/`** juga di-ignore
3. **File upload** di `storage/` tidak di-commit
4. **Selalu commit dengan pesan yang jelas**

## ✅ Checklist

- [ ] Git terinstall (`git --version`)
- [ ] Repository diinisialisasi (`git init`)
- [ ] User name & email dikonfigurasi
- [ ] Remote origin ditambahkan
- [ ] File pertama di-commit
- [ ] Push ke GitHub berhasil
- [ ] Fitur "Update System" siap digunakan

---

**Setelah setup selesai, fitur "Update System" di admin panel akan berfungsi dengan baik!** 🎉

