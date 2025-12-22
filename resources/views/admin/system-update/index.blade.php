@extends('admin.layouts.app')

@section('title', 'Update System')

@section('content')
<div class="mb-6">
    <div class="flex items-center justify-between">
        <div>
            <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Update System</h4>
            <p class="text-sm text-gray-500 dark:text-gray-400">Update system dari repository Git (pull, composer install, migrate, cache clear)</p>
        </div>
        <div class="text-right">
            @if($latestUpdate)
            <div class="bg-primary/10 border border-primary/20 rounded-lg p-3">
                <div class="text-xs text-gray-500 dark:text-gray-400 mb-1">Versi Terbaru</div>
                <div class="text-2xl font-bold text-primary">v{{ $latestUpdate->version }}</div>
                <div class="text-xs text-gray-500 dark:text-gray-400 mt-1">{{ $latestUpdate->formatted_date }}</div>
            </div>
            @else
            <div class="bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg p-3">
                <div class="text-xs text-gray-500 dark:text-gray-400 mb-1">Versi Terbaru</div>
                <div class="text-2xl font-bold text-gray-600 dark:text-gray-400">v0</div>
                <div class="text-xs text-gray-500 dark:text-gray-400 mt-1">Belum ada update</div>
            </div>
            @endif
        </div>
    </div>
    <div class="mt-4 flex items-center gap-4 text-sm text-gray-600 dark:text-gray-400">
        <span><i class="mgc_history_line me-1"></i>Total Update: <strong class="text-gray-800 dark:text-gray-200">{{ $totalUpdates }}</strong> kali</span>
        <span><i class="mgc_arrow_right_line me-1"></i>Update Berikutnya: <strong class="text-primary">v{{ $nextVersion }}</strong></span>
    </div>
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
                <button type="submit" class="btn bg-warning text-white">
                    <i class="mgc_refresh_2_line me-2"></i>Update System Sekarang
                </button>
            </div>
        </form>
    </div>
</div>

@if(session('update_steps'))
<div class="card">
    <div class="p-6">
        <h5 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">
            Hasil Update System
            @if(session('update_version'))
                <span class="badge bg-primary ms-2">Versi {{ session('update_version') }}</span>
            @endif
            @if(session('update_has_error'))
                <span class="badge bg-danger ms-2">Ada Error</span>
            @else
                <span class="badge bg-success ms-2">Berhasil</span>
            @endif
        </h5>
        
        <div class="space-y-4">
            @foreach(session('update_steps') as $index => $step)
            <div class="border rounded-lg p-4 {{ $step['status'] === 'error' ? 'border-red-300 dark:border-red-700 bg-red-50 dark:bg-red-900/10' : ($step['status'] === 'success' ? 'border-green-300 dark:border-green-700 bg-green-50 dark:bg-green-900/10' : ($step['status'] === 'skipped' ? 'border-yellow-300 dark:border-yellow-700 bg-yellow-50 dark:bg-yellow-900/10' : 'border-gray-300 dark:border-gray-700')) }}">
                <div class="flex items-start justify-between">
                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                Step {{ $index + 1 }}: {{ $step['name'] }}
                            </span>
                            @if($step['status'] === 'success')
                                <span class="badge bg-success">
                                    <i class="mgc_check_circle_line me-1"></i>Berhasil
                                </span>
                            @elseif($step['status'] === 'error')
                                <span class="badge bg-danger">
                                    <i class="mgc_close_circle_line me-1"></i>Error
                                </span>
                            @elseif($step['status'] === 'skipped')
                                <span class="badge bg-warning">
                                    <i class="mgc_skip_line me-1"></i>Dilewati
                                </span>
                            @else
                                <span class="badge bg-info">
                                    <i class="mgc_loading_line animate-spin me-1"></i>Memproses
                                </span>
                            @endif
                        </div>
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">{{ $step['description'] }}</p>
                        
                        @if($step['output'])
                        <div class="mt-2 p-2 bg-gray-100 dark:bg-gray-800 rounded text-xs font-mono text-gray-700 dark:text-gray-300">
                            {{ $step['output'] }}
                        </div>
                        @endif
                        
                        @if($step['error'])
                        <div class="mt-2 p-2 bg-red-100 dark:bg-red-900/20 border border-red-300 dark:border-red-700 rounded text-xs font-mono text-red-700 dark:text-red-300">
                            <strong>Error:</strong> {{ $step['error'] }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        @if(session('update_errors') && count(session('update_errors')) > 0)
        <div class="mt-4 p-4 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg">
            <h6 class="text-sm font-semibold text-red-800 dark:text-red-200 mb-2">
                <i class="mgc_alert_line me-2"></i>Daftar Error:
            </h6>
            <ul class="list-disc list-inside text-sm text-red-700 dark:text-red-300 space-y-1">
                @foreach(session('update_errors') as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
@endif

<!-- Update History -->
<div class="card">
    <div class="p-6">
        <h5 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">
            <i class="mgc_history_line me-2"></i>History Update System
        </h5>
        
        @if($updates->count() > 0)
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700 dark:text-gray-300">Versi</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700 dark:text-gray-300">Tanggal Update</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700 dark:text-gray-300">Diupdate Oleh</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700 dark:text-gray-300">Status</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700 dark:text-gray-300">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($updates as $update)
                    <tr class="border-b border-gray-100 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors">
                        <td class="py-3 px-4">
                            <span class="font-semibold text-primary">v{{ $update->version }}</span>
                        </td>
                        <td class="py-3 px-4 text-sm text-gray-600 dark:text-gray-400">
                            {{ $update->formatted_date }}
                        </td>
                        <td class="py-3 px-4 text-sm text-gray-600 dark:text-gray-400">
                            {{ $update->updated_by_name ?? 'System' }}
                        </td>
                        <td class="py-3 px-4">
                            @if($update->status === 'success')
                                <span class="badge bg-success">
                                    <i class="mgc_check_circle_line me-1"></i>Berhasil
                                </span>
                            @elseif($update->status === 'partial')
                                <span class="badge bg-warning">
                                    <i class="mgc_alert_line me-1"></i>Sebagian
                                </span>
                            @else
                                <span class="badge bg-danger">
                                    <i class="mgc_close_circle_line me-1"></i>Error
                                </span>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            <button type="button" onclick="showUpdateDetail({{ $update->id }})" class="text-primary hover:text-primary/80 text-sm">
                                <i class="mgc_eye_line me-1"></i>Lihat Detail
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="mt-4">
            {{ $updates->links() }}
        </div>
        @else
        <div class="text-center py-8 text-gray-500 dark:text-gray-400">
            <i class="mgc_history_line text-4xl mb-3 opacity-50"></i>
            <p>Belum ada history update system.</p>
        </div>
        @endif
    </div>
</div>

<!-- Update Detail Modal -->
<div id="updateDetailModal" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 hidden">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl max-w-4xl w-full mx-4 max-h-[90vh] overflow-hidden flex flex-col">
        <div class="p-6 border-b border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                    <i class="mgc_info_line me-2"></i>Detail Update
                </h3>
                <button type="button" onclick="closeUpdateDetailModal()" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                    <i class="mgc_close_line text-xl"></i>
                </button>
            </div>
        </div>
        
        <div class="p-6 overflow-y-auto flex-1" id="updateDetailContent">
            <!-- Content will be loaded via AJAX -->
        </div>
        
        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
            <button type="button" onclick="closeUpdateDetailModal()" class="btn bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-200">
                Tutup
            </button>
        </div>
    </div>
</div>

<!-- Progress Modal -->
<div id="progressModal" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 hidden">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-xl max-w-2xl w-full mx-4 max-h-[90vh] overflow-hidden flex flex-col">
        <div class="p-6 border-b border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                    <i class="mgc_refresh_2_line me-2"></i>Memproses Update System
                </h3>
                <button type="button" id="closeModalBtn" onclick="closeProgressModal()" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300" disabled>
                    <i class="mgc_close_line text-xl"></i>
                </button>
            </div>
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">Mohon tunggu, jangan tutup halaman ini</p>
        </div>
        
        <div class="p-6 overflow-y-auto flex-1">
            <div id="progressSteps" class="space-y-4">
                <!-- Steps will be dynamically added here -->
            </div>
        </div>
        
        <div class="p-6 border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900" id="modalFooter">
            <div class="flex items-center justify-center" id="loadingIndicator">
                <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-primary"></div>
                <span class="ml-3 text-sm text-gray-600 dark:text-gray-400">Memproses...</span>
            </div>
            <div id="resultIndicator" class="hidden">
                <div class="text-center mb-4">
                    <div id="resultMessage" class="text-lg font-semibold mb-2"></div>
                    <div id="resultDetails" class="text-sm text-gray-600 dark:text-gray-400"></div>
                </div>
                <div class="flex gap-2 justify-center">
                    <button type="button" onclick="closeProgressModal()" class="btn bg-primary text-white">
                        <i class="mgc_check_line me-2"></i>Tutup
                    </button>
                    <button type="button" onclick="window.location.reload()" class="btn bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-200">
                        <i class="mgc_refresh_2_line me-2"></i>Lihat Detail
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
const steps = [
    { name: 'Git Pull', description: 'Mengambil perubahan terbaru dari repository GitHub' },
    { name: 'Composer Install', description: 'Menginstall dan memperbarui dependencies PHP' },
    { name: 'Database Migration', description: 'Menjalankan migrasi database' },
    { name: 'Clear Cache', description: 'Membersihkan semua cache aplikasi' },
    { name: 'Optimize', description: 'Mengoptimalkan aplikasi dengan caching' }
];

function showProgressModal() {
    const modal = document.getElementById('progressModal');
    const closeBtn = document.getElementById('closeModalBtn');
    const loadingIndicator = document.getElementById('loadingIndicator');
    const resultIndicator = document.getElementById('resultIndicator');
    
    modal.classList.remove('hidden');
    closeBtn.disabled = true;
    closeBtn.style.opacity = '0.5';
    closeBtn.style.cursor = 'not-allowed';
    loadingIndicator.classList.remove('hidden');
    resultIndicator.classList.add('hidden');
    
    const stepsContainer = document.getElementById('progressSteps');
    stepsContainer.innerHTML = '';
    
    steps.forEach((step, index) => {
        const stepDiv = document.createElement('div');
        stepDiv.className = 'border rounded-lg p-4 border-gray-300 dark:border-gray-700';
        stepDiv.id = `step-${index}`;
        stepDiv.innerHTML = `
            <div class="flex items-start justify-between">
                <div class="flex-1">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                            Step ${index + 1}: ${step.name}
                        </span>
                        <span class="badge bg-info" id="step-${index}-badge">
                            <i class="mgc_loading_line animate-spin me-1"></i>Memproses
                        </span>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400">${step.description}</p>
                </div>
            </div>
        `;
        stepsContainer.appendChild(stepDiv);
    });
}

function closeProgressModal() {
    const modal = document.getElementById('progressModal');
    modal.classList.add('hidden');
    // Reload page to show detailed results
    window.location.reload();
}

document.getElementById('updateForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const button = this.querySelector('button[type="submit"]');
    button.disabled = true;
    button.innerHTML = '<i class="mgc_loading_line animate-spin me-2"></i>Memproses...';
    
    showProgressModal();
    
    // Submit form
    const formData = new FormData(this);
    
    fetch(this.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
        }
    })
    .then(response => {
        if (response.redirected) {
            // If redirected, reload page to show results
            window.location.href = response.url;
            return;
        }
        
        if (response.ok) {
            return response.json();
        } else {
            throw new Error('Network response was not ok');
        }
    })
    .then(data => {
            if (data) {
                // Update progress steps
                updateProgressSteps(data.steps);
                
                // Hide loading indicator
                document.getElementById('loadingIndicator').classList.add('hidden');
                
                // Enable close button
                const closeBtn = document.getElementById('closeModalBtn');
                closeBtn.disabled = false;
                closeBtn.style.opacity = '1';
                closeBtn.style.cursor = 'pointer';
                
                // Show result indicator
                const resultIndicator = document.getElementById('resultIndicator');
                const resultMessage = document.getElementById('resultMessage');
                const resultDetails = document.getElementById('resultDetails');
                
                resultIndicator.classList.remove('hidden');
                
                // Clear previous content
                resultDetails.innerHTML = '';
                
                // Add version info if available
                let versionInfo = '';
                if (data.version) {
                    versionInfo = '<div class="mb-3 p-2 bg-primary/10 border border-primary/20 rounded text-sm"><strong>Versi:</strong> v' + data.version + ' - ' + new Date().toLocaleString('id-ID') + '</div>';
                }
                
                if (data.success) {
                    resultMessage.innerHTML = '<span class="text-success"><i class="mgc_check_circle_line me-2"></i>Update Berhasil!</span>';
                    resultDetails.innerHTML = versionInfo + '<p class="text-gray-700 dark:text-gray-300">' + data.message + '</p>';
                } else {
                    resultMessage.innerHTML = '<span class="text-danger"><i class="mgc_close_circle_line me-2"></i>Update Selesai dengan Error</span>';
                    resultDetails.innerHTML = versionInfo + '<p class="text-red-700 dark:text-red-300 font-medium">' + data.message + '</p>';
                    
                    // Show errors if any
                    if (data.errors && data.errors.length > 0) {
                        const errorList = document.createElement('div');
                        errorList.className = 'mt-3 p-3 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded text-left';
                        errorList.innerHTML = '<strong class="text-red-800 dark:text-red-200 text-sm block mb-2">Daftar Error:</strong><ul class="list-disc list-inside text-xs text-red-700 dark:text-red-300 space-y-1">';
                        data.errors.forEach(error => {
                            errorList.innerHTML += '<li>' + error + '</li>';
                        });
                        errorList.innerHTML += '</ul>';
                        resultDetails.appendChild(errorList);
                    }
                }
                
                // Don't auto-close, let user close manually after reviewing
            }
    })
    .catch(error => {
        console.error('Error:', error);
        closeProgressModal();
        alert('Terjadi error saat memproses update. Silakan coba lagi.');
        button.disabled = false;
        button.innerHTML = '<i class="mgc_refresh_2_line me-2"></i>Update System Sekarang';
    });
});

function updateProgressSteps(steps) {
    steps.forEach((step, index) => {
        const stepDiv = document.getElementById(`step-${index}`);
        const badge = document.getElementById(`step-${index}-badge`);
        
        if (stepDiv && badge) {
            let badgeClass = 'badge ';
            let badgeIcon = '';
            let badgeText = '';
            
            if (step.status === 'success') {
                badgeClass += 'bg-success';
                badgeIcon = '<i class="mgc_check_circle_line me-1"></i>';
                badgeText = 'Berhasil';
            } else if (step.status === 'error') {
                badgeClass += 'bg-danger';
                badgeIcon = '<i class="mgc_close_circle_line me-1"></i>';
                badgeText = 'Error';
            } else if (step.status === 'skipped') {
                badgeClass += 'bg-warning';
                badgeIcon = '<i class="mgc_skip_line me-1"></i>';
                badgeText = 'Dilewati';
            } else {
                badgeClass += 'bg-info';
                badgeIcon = '<i class="mgc_loading_line animate-spin me-1"></i>';
                badgeText = 'Memproses';
            }
            
            badge.className = badgeClass;
            badge.innerHTML = badgeIcon + badgeText;
            
            // Add output if available
            if (step.output) {
                let outputDiv = stepDiv.querySelector('.step-output');
                if (!outputDiv) {
                    outputDiv = document.createElement('div');
                    outputDiv.className = 'mt-2 p-2 bg-gray-100 dark:bg-gray-800 rounded text-xs font-mono text-gray-700 dark:text-gray-300 step-output';
                    stepDiv.querySelector('.flex-1').appendChild(outputDiv);
                }
                outputDiv.textContent = step.output;
            }
            
            // Add error if available
            if (step.error) {
                let errorDiv = stepDiv.querySelector('.step-error');
                if (!errorDiv) {
                    errorDiv = document.createElement('div');
                    errorDiv.className = 'mt-2 p-2 bg-red-100 dark:bg-red-900/20 border border-red-300 dark:border-red-700 rounded text-xs font-mono text-red-700 dark:text-red-300 step-error';
                    stepDiv.querySelector('.flex-1').appendChild(errorDiv);
                }
                errorDiv.innerHTML = '<strong>Error:</strong> ' + step.error;
            }
        }
    });
}

function showUpdateDetail(updateId) {
    const modal = document.getElementById('updateDetailModal');
    const content = document.getElementById('updateDetailContent');
    
    modal.classList.remove('hidden');
    content.innerHTML = '<div class="text-center py-8"><div class="animate-spin rounded-full h-8 w-8 border-b-2 border-primary mx-auto"></div><p class="mt-4 text-gray-600 dark:text-gray-400">Memuat detail...</p></div>';
    
    fetch(`/admin/system-update/${updateId}/detail`, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            let html = `
                <div class="mb-4">
                    <div class="flex items-center justify-between mb-2">
                        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Versi ${data.update.version}</h4>
                        ${data.update.status === 'success' ? '<span class="badge bg-success">Berhasil</span>' : (data.update.status === 'partial' ? '<span class="badge bg-warning">Sebagian</span>' : '<span class="badge bg-danger">Error</span>')}
                    </div>
                    <div class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                        <p><strong>Tanggal:</strong> ${data.update.formatted_date}</p>
                        <p><strong>Diupdate Oleh:</strong> ${data.update.updated_by_name || 'System'}</p>
                    </div>
                </div>
            `;
            
            if (data.update.steps_data && data.update.steps_data.length > 0) {
                html += '<div class="space-y-4 mt-4">';
                data.update.steps_data.forEach((step, index) => {
                    const statusClass = step.status === 'success' ? 'border-green-300 bg-green-50 dark:bg-green-900/10' : 
                                      (step.status === 'error' ? 'border-red-300 bg-red-50 dark:bg-red-900/10' : 
                                      (step.status === 'skipped' ? 'border-yellow-300 bg-yellow-50 dark:bg-yellow-900/10' : 'border-gray-300'));
                    const statusBadge = step.status === 'success' ? '<span class="badge bg-success">Berhasil</span>' : 
                                      (step.status === 'error' ? '<span class="badge bg-danger">Error</span>' : 
                                      (step.status === 'skipped' ? '<span class="badge bg-warning">Dilewati</span>' : '<span class="badge bg-info">Memproses</span>'));
                    
                    html += `
                        <div class="border rounded-lg p-4 ${statusClass}">
                            <div class="flex items-center justify-between mb-2">
                                <span class="font-semibold text-gray-800 dark:text-gray-200">Step ${index + 1}: ${step.name}</span>
                                ${statusBadge}
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">${step.description}</p>
                            ${step.output ? `<div class="mt-2 p-2 bg-gray-100 dark:bg-gray-800 rounded text-xs font-mono text-gray-700 dark:text-gray-300">${step.output}</div>` : ''}
                            ${step.error ? `<div class="mt-2 p-2 bg-red-100 dark:bg-red-900/20 border border-red-300 dark:border-red-700 rounded text-xs font-mono text-red-700 dark:text-red-300"><strong>Error:</strong> ${step.error}</div>` : ''}
                        </div>
                    `;
                });
                html += '</div>';
            }
            
            if (data.update.errors_data && data.update.errors_data.length > 0) {
                html += `
                    <div class="mt-4 p-4 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg">
                        <h6 class="text-sm font-semibold text-red-800 dark:text-red-200 mb-2">Daftar Error:</h6>
                        <ul class="list-disc list-inside text-sm text-red-700 dark:text-red-300 space-y-1">
                `;
                data.update.errors_data.forEach(error => {
                    html += `<li>${error}</li>`;
                });
                html += '</ul></div>';
            }
            
            content.innerHTML = html;
        } else {
            content.innerHTML = '<div class="text-center py-8 text-red-600 dark:text-red-400">Gagal memuat detail update.</div>';
        }
    })
    .catch(error => {
        console.error('Error:', error);
        content.innerHTML = '<div class="text-center py-8 text-red-600 dark:text-red-400">Terjadi error saat memuat detail.</div>';
    });
}

function closeUpdateDetailModal() {
    document.getElementById('updateDetailModal').classList.add('hidden');
}
</script>
@endsection
