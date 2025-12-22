# 🔄 Mengubah Git Remote dari HTTPS ke SSH

## 📋 Informasi
Repository GitHub: **https://github.com/bos-andi/nuris.git**

Akan diubah menjadi: **git@github.com:bos-andi/nuris.git**

## ✅ Langkah-langkah

### 1. Buka PowerShell di Folder Project

```powershell
cd c:\xampp8.2\htdocs\nuris
```

### 2. Cek Remote URL Saat Ini

```powershell
git remote -v
```

Akan menampilkan:
```
origin  https://github.com/bos-andi/nuris.git (fetch)
origin  https://github.com/bos-andi/nuris.git (push)
```

### 3. Ubah Remote URL ke SSH

```powershell
git remote set-url origin git@github.com:bos-andi/nuris.git
```

### 4. Verifikasi Perubahan

```powershell
git remote -v
```

Sekarang harus menampilkan:
```
origin  git@github.com:bos-andi/nuris.git (fetch)
origin  git@github.com:bos-andi/nuris.git (push)
```

### 5. Test Koneksi SSH

```powershell
git fetch origin
```

Jika berhasil, berarti SSH sudah terkonfigurasi dengan benar.

## 🔑 Setup SSH Key (Jika Belum)

Jika belum punya SSH key, ikuti langkah berikut:

### Langkah 1: Generate SSH Key

```powershell
ssh-keygen -t ed25519 -C "your_email@example.com"
```

**Catatan:**
- Tekan Enter untuk menggunakan default location
- Bisa set passphrase atau kosongkan (Enter 2x)

### Langkah 2: Start SSH Agent

```powershell
# Start agent
eval "$(ssh-agent -s)"

# Add key
ssh-add ~/.ssh/id_ed25519
```

**Untuk Windows PowerShell:**
```powershell
# Start agent
Start-Service ssh-agent

# Add key
ssh-add $env:USERPROFILE\.ssh\id_ed25519
```

### Langkah 3: Copy Public Key

```powershell
# Copy public key ke clipboard
cat ~/.ssh/id_ed25519.pub | clip
```

**Untuk Windows PowerShell:**
```powershell
Get-Content $env:USERPROFILE\.ssh\id_ed25519.pub | Set-Clipboard
```

### Langkah 4: Tambahkan ke GitHub

1. Buka: https://github.com/settings/keys
2. Klik **"New SSH key"**
3. Isi:
   - **Title**: "NURIS Project" (atau nama lain)
   - **Key**: Paste public key yang sudah di-copy
4. Klik **"Add SSH key"**

### Langkah 5: Test SSH Connection

```powershell
ssh -T git@github.com
```

Jika berhasil, akan menampilkan:
```
Hi bos-andi! You've successfully authenticated, but GitHub does not provide shell access.
```

## ✅ Setelah Setup SSH

1. **Remote URL sudah diubah ke SSH**
2. **SSH key sudah ditambahkan ke GitHub**
3. **Test connection berhasil**

Sekarang fitur "Update System" akan menggunakan SSH untuk Git operations.

## 🚨 Troubleshooting

### Error: "Permission denied (publickey)"
- **Solusi**: Pastikan SSH key sudah ditambahkan ke GitHub
- Cek dengan: `ssh -T git@github.com`

### Error: "Could not resolve hostname"
- **Solusi**: Cek koneksi internet
- Atau gunakan HTTPS jika SSH tidak bisa

### Error: "Host key verification failed"
- **Solusi**: 
```powershell
ssh-keyscan github.com >> ~/.ssh/known_hosts
```

**Untuk Windows:**
```powershell
ssh-keyscan github.com >> $env:USERPROFILE\.ssh\known_hosts
```

## 📝 Catatan

1. **SSH lebih aman** daripada HTTPS untuk Git operations
2. **Tidak perlu input password/token** setiap kali push/pull
3. **Lebih cepat** untuk operasi Git yang sering

## 🔄 Kembali ke HTTPS (Jika Perlu)

Jika ingin kembali ke HTTPS:

```powershell
git remote set-url origin https://github.com/bos-andi/nuris.git
```

---

**Setelah remote URL diubah ke SSH, fitur "Update System" akan menggunakan SSH untuk semua operasi Git!** ✅

