# 🚀 Instruksi Setup Git untuk Repository NURIS

## 📋 Repository GitHub
**URL:** https://github.com/bos-andi/nuris.git

## ⚠️ Prasyarat
1. **Git harus terinstall** di komputer Anda
2. **Akun GitHub** sudah dibuat dan login

---

## 🔧 Langkah 1: Install Git (Jika Belum)

### Windows:
1. Download Git dari: https://git-scm.com/download/win
2. Install dengan default settings
3. **Restart PowerShell/Terminal** setelah install

### Verifikasi:
```powershell
git --version
```

---

## 🚀 Langkah 2: Setup Git Repository

### Opsi A: Menggunakan Script Otomatis (DISARANKAN)

1. Buka PowerShell di folder project: `c:\xampp8.2\htdocs\nuris`
2. Jalankan script:
```powershell
.\setup-git.ps1
```
3. Ikuti instruksi di layar

### Opsi B: Manual Setup

Buka PowerShell di folder project dan jalankan perintah berikut:

```powershell
# 1. Inisialisasi repository
git init

# 2. Konfigurasi user (ganti dengan data Anda)
git config user.name "Nama Anda"
git config user.email "email@example.com"

# 3. Tambahkan remote origin
git remote add origin https://github.com/bos-andi/nuris.git

# 4. Verifikasi remote
git remote -v

# 5. Tambahkan semua file
git add .

# 6. Commit pertama
git commit -m "Initial commit: Setup project NURIS"

# 7. Setup branch main
git branch -M main

# 8. Push ke GitHub
git push -u origin main
```

---

## 🔐 Langkah 3: Setup GitHub Authentication

Saat push ke GitHub, Anda akan diminta username dan password.

### Untuk Password:
**JANGAN gunakan password GitHub!** Gunakan **Personal Access Token**:

1. Buka: https://github.com/settings/tokens
2. Klik **"Generate new token"** → **"Generate new token (classic)"**
3. Isi:
   - **Note**: "NURIS Project"
   - **Expiration**: Sesuai kebutuhan (90 days / No expiration)
   - **Scopes**: Centang `repo` (full control)
4. Klik **"Generate token"**
5. **Copy token** (hanya muncul sekali!)
6. Saat push, gunakan:
   - **Username**: username GitHub Anda
   - **Password**: Token yang sudah di-copy

---

## ✅ Verifikasi Setup

Setelah push berhasil, verifikasi:

```powershell
# Cek status
git status

# Cek remote
git remote -v

# Cek branch
git branch -a
```

Buka browser dan cek: https://github.com/bos-andi/nuris

File seharusnya sudah muncul di repository.

---

## 🔄 Workflow Setelah Setup

### Update dari Lokal ke VPS:

```powershell
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

---

## 🚨 Troubleshooting

### Error: "git: command not found"
- **Solusi**: Install Git dan restart terminal

### Error: "Permission denied (publickey)"
- **Solusi**: Gunakan HTTPS dengan Personal Access Token (bukan SSH)

### Error: "remote origin already exists"
- **Solusi**: 
```powershell
git remote remove origin
git remote add origin https://github.com/bos-andi/nuris.git
```

### Error: "fatal: refusing to merge unrelated histories"
- **Solusi**:
```powershell
git pull origin main --allow-unrelated-histories
```

### Error: "Authentication failed"
- **Solusi**: Pastikan menggunakan Personal Access Token, bukan password

---

## 📝 Catatan Penting

1. **File `.env`** sudah ada di `.gitignore`, jadi tidak akan di-commit
2. **Folder `vendor/`** juga di-ignore (akan diinstall via composer)
3. **File upload** di `storage/` tidak di-commit
4. **Selalu commit dengan pesan yang jelas** untuk tracking perubahan

---

## 🎯 Setelah Setup Selesai

Fitur **"Update System"** di admin panel akan berfungsi dengan baik:
- ✅ Git pull akan berhasil
- ✅ Composer install akan berjalan
- ✅ Migration akan dijalankan
- ✅ Cache akan dibersihkan dan dioptimalkan

---

## 📞 Bantuan

Jika ada masalah:
1. Cek dokumentasi Git: https://git-scm.com/doc
2. Cek dokumentasi GitHub: https://docs.github.com
3. Pastikan semua langkah diikuti dengan benar

---

**Selamat! Setup Git selesai! 🎉**

