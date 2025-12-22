@extends('admin.layouts.app')

@section('title', 'Update System')

@section('content')
<div class="mb-6">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Update System</h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">Update system dari repository Git (pull, composer install, migrate, cache clear)</p>
</div>

@if(session('success'))
<div class="alert alert-success mb-4">
    <i class="mgc_check_circle_line me-2"></i>{{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger mb-4">
    <i class="mgc_close_circle_line me-2"></i>{{ session('error') }}
</div>
@endif

<div class="card mb-4">
    <div class="p-6">
        <div class="mb-4">
            <h5 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-3">Informasi Update</h5>
            <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-4 mb-4">
                <p class="text-sm text-blue-800 dark:text-blue-200 mb-2">
                    <strong>Perhatian:</strong> Fitur ini akan melakukan update system dengan langkah-langkah berikut:
                </p>
                <ol class="list-decimal list-inside text-sm text-blue-800 dark:text-blue-200 space-y-1">
                    <li>Git Pull - Mengambil perubahan terbaru dari repository</li>
                    <li>Composer Install - Menginstall/update dependencies</li>
                    <li>Database Migration - Menjalankan migration database</li>
                    <li>Clear Cache - Membersihkan semua cache</li>
                    <li>Optimize - Mengoptimalkan aplikasi</li>
                </ol>
            </div>
        </div>

        <form action="{{ route('admin.system-update.update') }}" method="POST" id="updateForm">
            @csrf
            <div class="flex gap-2">
                <button type="submit" class="btn bg-warning text-white" onclick="return confirm('Apakah Anda yakin ingin melakukan update system? Proses ini mungkin memakan waktu beberapa menit.');">
                    <i class="mgc_refresh_2_line me-2"></i>Update System Sekarang
                </button>
            </div>
        </form>
    </div>
</div>

@if(session('output'))
<div class="card">
    <div class="p-6">
        <h5 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Output Update</h5>
        <div class="bg-gray-900 text-green-400 p-4 rounded-lg overflow-x-auto" style="font-family: 'Courier New', monospace; font-size: 13px; line-height: 1.6; max-height: 500px; overflow-y: auto;">
            <pre style="margin: 0; white-space: pre-wrap; word-wrap: break-word;">{{ session('output') }}</pre>
        </div>
    </div>
</div>
@endif

@if(session('errors') && count(session('errors')) > 0)
<div class="card mt-4">
    <div class="p-6">
        <h5 class="text-lg font-semibold text-red-600 dark:text-red-400 mb-4">Errors</h5>
        <div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg p-4">
            <ul class="list-disc list-inside text-sm text-red-800 dark:text-red-200 space-y-1">
                @foreach(session('errors') as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif

<script>
document.getElementById('updateForm').addEventListener('submit', function(e) {
    const button = this.querySelector('button[type="submit"]');
    button.disabled = true;
    button.innerHTML = '<i class="mgc_loading_line animate-spin me-2"></i>Memproses Update...';
    
    // Show loading overlay
    const loadingOverlay = document.createElement('div');
    loadingOverlay.className = 'fixed inset-0 bg-black/50 flex items-center justify-center z-50';
    loadingOverlay.innerHTML = `
        <div class="bg-white dark:bg-gray-800 rounded-lg p-6 text-center">
            <i class="mgc_loading_line animate-spin text-4xl text-primary mb-4"></i>
            <p class="text-lg font-semibold text-gray-800 dark:text-gray-200">Sedang memproses update...</p>
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Mohon tunggu, jangan tutup halaman ini</p>
        </div>
    `;
    document.body.appendChild(loadingOverlay);
});
</script>
@endsection

