# 🔧 Solusi Error: Git Tidak Ditemukan

## ⚠️ Error yang Terjadi
```
Git Pull Error: 'git' is not recognized as an internal or external command
```

## 🔍 Penyebab
Git belum terinstall atau tidak ada di PATH environment variable Windows.

## ✅ Solusi

### Opsi 1: Install Git (DISARANKAN)

#### Langkah-langkah:

1. **Download Git untuk Windows:**
   - Kunjungi: https://git-scm.com/download/win
   - Download installer terbaru
   - Atau gunakan link langsung: https://github.com/git-for-windows/git/releases/latest

2. **Install Git:**
   - Jalankan installer yang sudah didownload
   - Pilih opsi default (recommended)
   - **PENTING:** Pastikan opsi "Add Git to PATH" dicentang
   - Klik "Next" sampai selesai

3. **Verifikasi Install:**
   - Buka **PowerShell baru** (penting: restart PowerShell!)
   - Jalankan:
   ```powershell
   git --version
   ```
   - Harus menampilkan versi Git (contoh: `git version 2.42.0`)

4. **Restart Server:**
   - Restart XAMPP Apache
   - Atau restart komputer jika perlu

### Opsi 2: Tambahkan Git ke PATH (Jika Sudah Terinstall)

Jika Git sudah terinstall tapi tidak terdeteksi:

1. **Cari Lokasi Git:**
   - Biasanya di: `C:\Program Files\Git\cmd\git.exe`
   - Atau: `C:\Program Files (x86)\Git\cmd\git.exe`

2. **Tambahkan ke PATH:**
   - Buka "Environment Variables":
     - Tekan `Win + R`
     - Ketik: `sysdm.cpl`
     - Tab "Advanced" → "Environment Variables"
   - Edit "Path" di "System variables"
   - Tambahkan: `C:\Program Files\Git\cmd`
   - Klik "OK" untuk semua dialog

3. **Restart PowerShell/Server:**
   - Tutup semua terminal/PowerShell
   - Buka PowerShell baru
   - Test: `git --version`

### Opsi 3: Setup Git Repository (Setelah Git Terinstall)

Setelah Git terinstall, setup repository:

1. **Buka PowerShell di folder project:**
   ```powershell
   cd c:\xampp8.2\htdocs\nuris
   ```

2. **Inisialisasi Git:**
   ```powershell
   git init
   ```

3. **Konfigurasi User:**
   ```powershell
   git config user.name "Nama Anda"
   git config user.email "email@example.com"
   ```

4. **Hubungkan dengan GitHub:**
   ```powershell
   git remote add origin https://github.com/bos-andi/nuris.git
   ```

5. **Commit dan Push:**
   ```powershell
   git add .
   git commit -m "Initial commit"
   git branch -M main
   git push -u origin main
   ```

## 🚨 Troubleshooting

### Error: "git: command not found" setelah install
- **Solusi:** Restart PowerShell/terminal
- Pastikan Git ada di PATH
- Cek dengan: `where git` di PowerShell

### Error: "Permission denied"
- **Solusi:** Jalankan PowerShell sebagai Administrator
- Atau setup SSH key untuk GitHub

### Error: "Repository not found"
- **Solusi:** Pastikan repository GitHub sudah dibuat
- Pastikan URL remote benar: `https://github.com/bos-andi/nuris.git`

## 📝 Checklist

Setelah setup, pastikan:
- [ ] Git terinstall (`git --version` berhasil)
- [ ] Git ada di PATH
- [ ] Repository diinisialisasi (`git init`)
- [ ] Remote GitHub ditambahkan (`git remote -v`)
- [ ] Server/terminal sudah di-restart

## 💡 Catatan Penting

1. **Setelah install Git, WAJIB restart:**
   - PowerShell/terminal
   - XAMPP Apache
   - Atau restart komputer

2. **Untuk VPS/Server:**
   - Install Git di server juga
   - Pastikan Git ada di PATH server
   - Setup repository di server

3. **Alternatif (Jika Git Tidak Bisa Diinstall):**
   - Fitur "Update System" akan skip step Git Pull
   - Update manual via FTP/SSH
   - Atau gunakan Composer/Artisan commands saja

## 🔗 Link Berguna

- Download Git: https://git-scm.com/download/win
- Dokumentasi Git: https://git-scm.com/doc
- GitHub Setup: https://github.com/settings/tokens

---

**Setelah Git terinstall dan repository di-setup, fitur "Update System" akan berfungsi dengan baik!** ✅

