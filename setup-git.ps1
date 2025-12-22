# Script Setup Git untuk Repository NURIS
# Jalankan script ini setelah Git terinstall

Write-Host "========================================" -ForegroundColor Cyan
Write-Host "  Setup Git Repository NURIS" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""

# Cek apakah Git terinstall
if (-not (Get-Command git -ErrorAction SilentlyContinue)) {
    Write-Host "ERROR: Git tidak terinstall!" -ForegroundColor Red
    Write-Host ""
    Write-Host "Silakan install Git terlebih dahulu:" -ForegroundColor Yellow
    Write-Host "1. Download dari: https://git-scm.com/download/win" -ForegroundColor Yellow
    Write-Host "2. Install dengan default settings" -ForegroundColor Yellow
    Write-Host "3. Restart PowerShell setelah install" -ForegroundColor Yellow
    Write-Host "4. Jalankan script ini lagi" -ForegroundColor Yellow
    exit 1
}

Write-Host "[1/6] Cek Git version..." -ForegroundColor Green
git --version
Write-Host ""

# Cek apakah sudah ada repository
if (Test-Path .git) {
    Write-Host "[2/6] Git repository sudah ada" -ForegroundColor Yellow
    Write-Host "      Melanjutkan setup..." -ForegroundColor Yellow
} else {
    Write-Host "[2/6] Inisialisasi Git repository..." -ForegroundColor Green
    git init
    Write-Host "      ✓ Repository diinisialisasi" -ForegroundColor Green
}

Write-Host ""

# Konfigurasi user (opsional - skip jika sudah dikonfigurasi)
Write-Host "[3/6] Konfigurasi Git user..." -ForegroundColor Green
$currentName = git config user.name
$currentEmail = git config user.email

if (-not $currentName) {
    Write-Host "      User name belum dikonfigurasi" -ForegroundColor Yellow
    $userName = Read-Host "      Masukkan nama Anda (atau tekan Enter untuk skip)"
    if ($userName) {
        git config user.name $userName
        Write-Host "      ✓ User name dikonfigurasi" -ForegroundColor Green
    }
} else {
    Write-Host "      User name: $currentName" -ForegroundColor Cyan
}

if (-not $currentEmail) {
    Write-Host "      User email belum dikonfigurasi" -ForegroundColor Yellow
    $userEmail = Read-Host "      Masukkan email Anda (atau tekan Enter untuk skip)"
    if ($userEmail) {
        git config user.email $userEmail
        Write-Host "      ✓ User email dikonfigurasi" -ForegroundColor Green
    }
} else {
    Write-Host "      User email: $currentEmail" -ForegroundColor Cyan
}

Write-Host ""

# Cek remote origin
Write-Host "[4/6] Setup remote origin..." -ForegroundColor Green
$remoteUrl = git remote get-url origin 2>$null

if ($remoteUrl) {
    Write-Host "      Remote origin sudah ada: $remoteUrl" -ForegroundColor Yellow
    $update = Read-Host "      Update ke https://github.com/bos-andi/nuris.git? (y/n)"
    if ($update -eq "y" -or $update -eq "Y") {
        git remote set-url origin https://github.com/bos-andi/nuris.git
        Write-Host "      ✓ Remote origin diupdate" -ForegroundColor Green
    }
} else {
    Write-Host "      Menambahkan remote origin..." -ForegroundColor Cyan
    git remote add origin https://github.com/bos-andi/nuris.git
    Write-Host "      ✓ Remote origin ditambahkan" -ForegroundColor Green
}

Write-Host ""

# Verifikasi remote
Write-Host "[5/6] Verifikasi remote..." -ForegroundColor Green
git remote -v
Write-Host ""

# Add dan commit file
Write-Host "[6/6] Menambahkan file ke Git..." -ForegroundColor Green
Write-Host "      Menambahkan semua file..." -ForegroundColor Cyan
git add .

$hasChanges = git diff --cached --quiet
if (-not $hasChanges) {
    Write-Host "      Tidak ada perubahan untuk di-commit" -ForegroundColor Yellow
} else {
    Write-Host "      File siap untuk di-commit" -ForegroundColor Green
    Write-Host ""
    Write-Host "      Commit message: 'Initial commit: Setup project NURIS'" -ForegroundColor Cyan
    git commit -m "Initial commit: Setup project NURIS"
    Write-Host "      ✓ File di-commit" -ForegroundColor Green
}

Write-Host ""

# Setup branch main
Write-Host "      Setup branch main..." -ForegroundColor Cyan
git branch -M main
Write-Host "      ✓ Branch main siap" -ForegroundColor Green

Write-Host ""
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "  Setup Selesai!" -ForegroundColor Green
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""
Write-Host "Langkah selanjutnya:" -ForegroundColor Yellow
Write-Host "1. Push ke GitHub dengan perintah:" -ForegroundColor White
Write-Host "   git push -u origin main" -ForegroundColor Cyan
Write-Host ""
Write-Host "2. Jika diminta username/password:" -ForegroundColor White
Write-Host "   - Username: username GitHub Anda" -ForegroundColor Cyan
Write-Host "   - Password: Gunakan Personal Access Token (bukan password)" -ForegroundColor Cyan
Write-Host "   - Buat token di: https://github.com/settings/tokens" -ForegroundColor Cyan
Write-Host ""
Write-Host "3. Setelah push berhasil, fitur 'Update System' di VPS akan berfungsi!" -ForegroundColor Green
Write-Host ""

