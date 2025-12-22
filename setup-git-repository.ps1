# Script Setup Git Repository untuk NURIS
# Jalankan script ini di PowerShell dengan: .\setup-git-repository.ps1

Write-Host "========================================" -ForegroundColor Cyan
Write-Host "Setup Git Repository untuk NURIS" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""

# Cek apakah Git terinstall
Write-Host "[1/7] Mengecek Git installation..." -ForegroundColor Yellow
try {
    $gitVersion = git --version 2>&1
    Write-Host "✓ Git ditemukan: $gitVersion" -ForegroundColor Green
} catch {
    Write-Host "✗ Git tidak ditemukan di PATH!" -ForegroundColor Red
    Write-Host "  Silakan install Git dari: https://git-scm.com/download/win" -ForegroundColor Yellow
    Write-Host "  Setelah install, RESTART PowerShell dan jalankan script ini lagi." -ForegroundColor Yellow
    exit 1
}

# Navigate ke project directory
$projectPath = "c:\xampp8.2\htdocs\nuris"
Set-Location $projectPath
Write-Host "[2/7] Berpindah ke: $projectPath" -ForegroundColor Yellow

# Inisialisasi Git repository
Write-Host "[3/7] Inisialisasi Git repository..." -ForegroundColor Yellow
if (Test-Path .git) {
    Write-Host "✓ Git repository sudah ada" -ForegroundColor Green
} else {
    git init
    Write-Host "✓ Git repository berhasil diinisialisasi" -ForegroundColor Green
}

# Konfigurasi Git user (jika belum)
Write-Host "[4/7] Konfigurasi Git user..." -ForegroundColor Yellow
$gitUser = git config user.name
$gitEmail = git config user.email

if (-not $gitUser) {
    Write-Host "  Git user.name belum dikonfigurasi" -ForegroundColor Yellow
    $inputName = Read-Host "  Masukkan nama Anda"
    git config user.name $inputName
    Write-Host "✓ user.name diset ke: $inputName" -ForegroundColor Green
} else {
    Write-Host "✓ user.name: $gitUser" -ForegroundColor Green
}

if (-not $gitEmail) {
    Write-Host "  Git user.email belum dikonfigurasi" -ForegroundColor Yellow
    $inputEmail = Read-Host "  Masukkan email Anda"
    git config user.email $inputEmail
    Write-Host "✓ user.email diset ke: $inputEmail" -ForegroundColor Green
} else {
    Write-Host "✓ user.email: $gitEmail" -ForegroundColor Green
}

# Setup remote origin
Write-Host "[5/7] Setup remote GitHub..." -ForegroundColor Yellow
$remoteUrl = "https://github.com/bos-andi/nuris.git"
$existingRemote = git remote get-url origin 2>&1

if ($LASTEXITCODE -eq 0) {
    Write-Host "✓ Remote origin sudah ada: $existingRemote" -ForegroundColor Green
    $changeRemote = Read-Host "  Apakah ingin mengubah remote ke $remoteUrl? (y/n)"
    if ($changeRemote -eq "y" -or $changeRemote -eq "Y") {
        git remote set-url origin $remoteUrl
        Write-Host "✓ Remote origin diupdate" -ForegroundColor Green
    }
} else {
    git remote add origin $remoteUrl
    Write-Host "✓ Remote origin ditambahkan: $remoteUrl" -ForegroundColor Green
}

# Verifikasi remote
Write-Host "[6/7] Verifikasi remote..." -ForegroundColor Yellow
git remote -v
Write-Host "✓ Remote berhasil dikonfigurasi" -ForegroundColor Green

# Add semua file dan commit
Write-Host "[7/7] Menambahkan file dan commit..." -ForegroundColor Yellow
Write-Host "  Menambahkan semua file ke staging..." -ForegroundColor Cyan
git add .

$status = git status --short
if ($status) {
    Write-Host "  File yang akan di-commit:" -ForegroundColor Cyan
    git status --short | ForEach-Object { Write-Host "    $_" -ForegroundColor Gray }
    
    $commitMessage = Read-Host "  Masukkan commit message (atau tekan Enter untuk 'Initial commit')"
    if ([string]::IsNullOrWhiteSpace($commitMessage)) {
        $commitMessage = "Initial commit: Setup project NURIS"
    }
    
    git commit -m $commitMessage
    Write-Host "✓ File berhasil di-commit" -ForegroundColor Green
    
    # Push ke GitHub
    Write-Host ""
    Write-Host "  Mencoba push ke GitHub..." -ForegroundColor Cyan
    Write-Host "  Catatan: Anda mungkin diminta login GitHub" -ForegroundColor Yellow
    
    $pushChoice = Read-Host "  Apakah ingin push sekarang? (y/n)"
    if ($pushChoice -eq "y" -or $pushChoice -eq "Y") {
        git branch -M main
        git push -u origin main
        
        if ($LASTEXITCODE -eq 0) {
            Write-Host "✓ Push ke GitHub berhasil!" -ForegroundColor Green
        } else {
            Write-Host "✗ Push gagal. Mungkin perlu setup authentication." -ForegroundColor Red
            Write-Host "  Lihat panduan di SETUP_GIT.md untuk setup GitHub Personal Access Token" -ForegroundColor Yellow
        }
    } else {
        Write-Host "  Push dilewati. Anda bisa push manual nanti dengan:" -ForegroundColor Yellow
        Write-Host "    git branch -M main" -ForegroundColor Cyan
        Write-Host "    git push -u origin main" -ForegroundColor Cyan
    }
} else {
    Write-Host "✓ Tidak ada perubahan untuk di-commit" -ForegroundColor Green
}

Write-Host ""
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "Setup selesai!" -ForegroundColor Green
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""
Write-Host "Fitur 'Update System' di admin panel sekarang siap digunakan!" -ForegroundColor Green
Write-Host ""
Write-Host "Command yang berguna:" -ForegroundColor Yellow
Write-Host "  git status          - Cek status repository" -ForegroundColor Cyan
Write-Host "  git add .            - Tambahkan semua perubahan" -ForegroundColor Cyan
Write-Host "  git commit -m 'msg'  - Commit perubahan" -ForegroundColor Cyan
Write-Host "  git push             - Push ke GitHub" -ForegroundColor Cyan
Write-Host "  git pull             - Pull dari GitHub" -ForegroundColor Cyan
Write-Host ""

