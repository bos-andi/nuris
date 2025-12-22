# Script untuk mengubah Git Remote dari HTTPS ke SSH
# Repository: https://github.com/bos-andi/nuris.git -> git@github.com:bos-andi/nuris.git

Write-Host "========================================" -ForegroundColor Cyan
Write-Host "Ubah Git Remote ke SSH" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""

# Navigate ke project directory
$projectPath = "c:\xampp8.2\htdocs\nuris"
Set-Location $projectPath
Write-Host "[1/4] Berpindah ke: $projectPath" -ForegroundColor Yellow

# Cek apakah Git repository ada
Write-Host "[2/4] Mengecek Git repository..." -ForegroundColor Yellow
if (-not (Test-Path .git)) {
    Write-Host "✗ Git repository tidak ditemukan!" -ForegroundColor Red
    Write-Host "  Jalankan 'git init' terlebih dahulu." -ForegroundColor Yellow
    exit 1
}
Write-Host "✓ Git repository ditemukan" -ForegroundColor Green

# Cek remote saat ini
Write-Host "[3/4] Mengecek remote saat ini..." -ForegroundColor Yellow
$currentRemote = git remote get-url origin 2>&1

if ($LASTEXITCODE -eq 0) {
    Write-Host "  Remote saat ini: $currentRemote" -ForegroundColor Cyan
    
    if ($currentRemote -like "*git@github.com*") {
        Write-Host "✓ Remote sudah menggunakan SSH!" -ForegroundColor Green
        Write-Host "  Tidak perlu diubah." -ForegroundColor Yellow
        exit 0
    }
    
    Write-Host ""
    Write-Host "  Akan diubah dari:" -ForegroundColor Yellow
    Write-Host "    $currentRemote" -ForegroundColor Gray
    Write-Host "  Menjadi:" -ForegroundColor Yellow
    Write-Host "    git@github.com:bos-andi/nuris.git" -ForegroundColor Green
    Write-Host ""
    
    $confirm = Read-Host "  Lanjutkan? (y/n)"
    if ($confirm -ne "y" -and $confirm -ne "Y") {
        Write-Host "  Dibatalkan." -ForegroundColor Yellow
        exit 0
    }
} else {
    Write-Host "  Remote belum ada, akan ditambahkan..." -ForegroundColor Yellow
}

# Ubah remote ke SSH
Write-Host "[4/4] Mengubah remote ke SSH..." -ForegroundColor Yellow
git remote set-url origin git@github.com:bos-andi/nuris.git

if ($LASTEXITCODE -eq 0) {
    Write-Host "✓ Remote berhasil diubah ke SSH!" -ForegroundColor Green
} else {
    # Jika set-url gagal, coba add
    git remote remove origin 2>&1 | Out-Null
    git remote add origin git@github.com:bos-andi/nuris.git
    
    if ($LASTEXITCODE -eq 0) {
        Write-Host "✓ Remote berhasil ditambahkan (SSH)!" -ForegroundColor Green
    } else {
        Write-Host "✗ Gagal mengubah remote!" -ForegroundColor Red
        exit 1
    }
}

# Verifikasi
Write-Host ""
Write-Host "Verifikasi remote:" -ForegroundColor Cyan
git remote -v

Write-Host ""
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "Selesai!" -ForegroundColor Green
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""
Write-Host "Catatan:" -ForegroundColor Yellow
Write-Host "  - Pastikan SSH key sudah ditambahkan ke GitHub" -ForegroundColor Yellow
Write-Host "  - Test dengan: ssh -T git@github.com" -ForegroundColor Yellow
Write-Host "  - Atau lihat panduan di: CHANGE_GIT_REMOTE_TO_SSH.md" -ForegroundColor Yellow
Write-Host ""

