# 🔧 Solusi Error: Git Network & PHP Command

## ⚠️ Error 1: Git Network Error
```
fatal: unable to access 'https://github.com/bos-andi/nuris.git/': getaddrinfo() thread failed to start
```

### 🔍 Penyebab
- **Masalah koneksi internet** ke GitHub
- **DNS tidak bisa resolve** domain github.com
- **Firewall/Proxy** memblokir akses ke GitHub
- **Git credential helper** bermasalah

### ✅ Solusi

#### Opsi 1: Cek Koneksi Internet
```powershell
# Test koneksi ke GitHub
ping github.com
```

Jika tidak bisa ping, berarti masalah koneksi internet atau DNS.

#### Opsi 2: Gunakan SSH Instead of HTTPS
Jika HTTPS bermasalah, gunakan SSH:

```powershell
cd c:\xampp8.2\htdocs\nuris
git remote set-url origin git@github.com:bos-andi/nuris.git
```

**Catatan:** Perlu setup SSH key terlebih dahulu.

#### Opsi 3: Configure Git untuk Bypass SSL (Temporary)
```powershell
git config --global http.sslVerify false
```

**⚠️ PERINGATAN:** Ini tidak aman untuk production, hanya untuk development.

#### Opsi 4: Gunakan Proxy (Jika Ada)
```powershell
git config --global http.proxy http://proxy.example.com:8080
git config --global https.proxy https://proxy.example.com:8080
```

#### Opsi 5: Skip Git Pull (Temporary)
Jika Git tidak bisa diakses, fitur "Update System" akan skip step Git Pull dan lanjut ke step berikutnya.

---

## ⚠️ Error 2: PHP Command Not Found
```
'php' is not recognized as an internal or external command
```

### 🔍 Penyebab
- **PHP tidak ada di PATH** environment variable
- **XAMPP PHP** tidak ditambahkan ke PATH
- **Terminal belum di-restart** setelah install XAMPP

### ✅ Solusi

#### Opsi 1: Tambahkan PHP ke PATH (Permanen)

1. **Cari Lokasi PHP:**
   - Biasanya di: `C:\xampp8.2\php\`
   - Atau: `C:\xampp\php\`

2. **Tambahkan ke PATH:**
   - Tekan `Win + R`
   - Ketik: `sysdm.cpl`
   - Tab "Advanced" → "Environment Variables"
   - Edit "Path" di "System variables"
   - Klik "New" → Tambahkan: `C:\xampp8.2\php`
   - Klik "OK" untuk semua dialog

3. **Restart Terminal:**
   - Tutup semua PowerShell/CMD
   - Buka PowerShell baru
   - Test: `php -v`

#### Opsi 2: Gunakan Full Path (Temporary)

Gunakan full path ke PHP:

```powershell
C:\xampp8.2\php\php.exe -v
C:\xampp8.2\php\php.exe artisan --version
```

#### Opsi 3: Update SystemUpdateController

Saya akan update controller untuk menggunakan full path PHP jika PHP tidak ditemukan di PATH.

---

## 🚀 Quick Fix untuk Kedua Error

### Untuk Git Error:
```powershell
# Skip Git untuk sementara, atau
# Gunakan SSH jika sudah setup
git remote set-url origin git@github.com:bos-andi/nuris.git
```

### Untuk PHP Error:
```powershell
# Tambahkan PHP ke PATH
# Atau gunakan full path
C:\xampp8.2\php\php.exe artisan config:clear
```

---

## 📝 Update SystemUpdateController

Saya akan update controller untuk:
1. **Handle Git network error** dengan lebih baik
2. **Detect PHP path** otomatis (XAMPP)
3. **Provide helpful error messages**

---

## ✅ Checklist

### Git:
- [ ] Koneksi internet aktif
- [ ] Bisa ping github.com
- [ ] Git credential sudah di-setup
- [ ] Atau gunakan SSH

### PHP:
- [ ] PHP ada di PATH
- [ ] Atau gunakan full path `C:\xampp8.2\php\php.exe`
- [ ] Terminal sudah di-restart setelah update PATH

---

## 🆘 Troubleshooting

### Git masih error setelah semua solusi:
- Cek firewall/antivirus
- Cek proxy settings
- Coba dari network lain
- Atau skip Git Pull untuk sementara

### PHP masih tidak terdeteksi:
- Pastikan XAMPP terinstall di `C:\xampp8.2\`
- Cek apakah file `php.exe` ada di `C:\xampp8.2\php\`
- Restart komputer setelah update PATH
- Atau gunakan full path di semua command

---

**Setelah memperbaiki kedua error, fitur "Update System" akan berfungsi dengan baik!** ✅

