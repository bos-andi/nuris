@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="mb-6">
    <div class="flex items-center justify-between">
        <div>
            <h4 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Dashboard</h4>
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Selamat datang, <span class="font-semibold text-primary">{{ auth()->user()->name }}</span>!</p>
        </div>
        <div class="flex items-center gap-2">
            <div class="px-5 py-2.5 rounded-2xl shadow-lg" style="background: linear-gradient(135deg, #16a34a 0%, #22c55e 100%);">
                <p class="text-white text-sm font-bold">PP. Nurul Islam</p>
            </div>
        </div>
    </div>
</div>

<div class="grid xl:grid-cols-4 md:grid-cols-2 gap-6 mb-6">
    <div class="card">
        <div class="p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Total Halaman</p>
                    <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">{{ $totalPages }}</h3>
                </div>
                <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center">
                    <i class="mgc_file_text_line text-primary text-2xl"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Halaman Aktif</p>
                    <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">{{ $activePages }}</h3>
                </div>
                <div class="h-12 w-12 rounded-full bg-success/10 flex items-center justify-center">
                    <i class="mgc_check_circle_line text-success text-2xl"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Halaman Nonaktif</p>
                    <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">{{ $inactivePages }}</h3>
                </div>
                <div class="h-12 w-12 rounded-full bg-warning/10 flex items-center justify-center">
                    <i class="mgc_close_circle_line text-warning text-2xl"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Kunjungan Real-time</p>
                    <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-200" id="realtime-views">{{ $realtimeViews }}</h3>
                    <p class="text-xs text-gray-500 mt-1" id="realtime-label">5 menit terakhir</p>
                </div>
                <div class="h-12 w-12 rounded-full bg-info/10 flex items-center justify-center">
                    <i class="mgc_eye_line text-info text-2xl"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="grid xl:grid-cols-3 md:grid-cols-2 gap-6 mb-6">
    <div class="card">
        <div class="p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Total Artikel</p>
                    <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">{{ $totalArticles }}</h3>
                    <p class="text-xs text-gray-500 mt-1">{{ $publishedArticles }} dipublikasikan</p>
                </div>
                <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center">
                    <i class="mgc_newspaper_line text-primary text-2xl"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Total Event</p>
                    <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">{{ $totalEvents }}</h3>
                    <p class="text-xs text-gray-500 mt-1">{{ $upcomingEvents }} event mendatang</p>
                </div>
                <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center">
                    <i class="mgc_calendar_line text-primary text-2xl"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Akses Cepat</p>
                    <div class="flex gap-2 mt-2">
                        <a href="{{ route('admin.articles.create') }}" class="text-xs px-4 py-2 rounded-full bg-primary/10 text-primary hover:bg-primary hover:text-white transition-all duration-300 font-semibold shadow-sm hover:shadow-md">+ Artikel</a>
                        <a href="{{ route('admin.events.create') }}" class="text-xs px-4 py-2 rounded-full bg-primary/10 text-primary hover:bg-primary hover:text-white transition-all duration-300 font-semibold shadow-sm hover:shadow-md">+ Event</a>
                    </div>
                </div>
                <div class="h-12 w-12 rounded-full bg-primary/10 flex items-center justify-center">
                    <i class="mgc_add_circle_line text-primary text-2xl"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="grid md:grid-cols-2 gap-6">
    <div class="card">
        <div class="p-6">
            <h5 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4 flex items-center gap-2">
                <i class="mgc_lightning_line text-primary"></i>
                Aksi Cepat
            </h5>
            <div class="space-y-3">
                <a href="{{ route('admin.pages.create') }}" class="flex items-center gap-3 p-5 border-2 rounded-2xl hover:border-primary hover:shadow-lg transition-all duration-300 group" style="border-color: #dcfce7; background: linear-gradient(135deg, #ffffff 0%, #f0fdf4 100%);">
                    <div class="h-12 w-12 rounded-2xl bg-primary/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300" style="border-radius: 16px;">
                        <i class="mgc_add_circle_line text-primary text-2xl"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800 dark:text-gray-200 group-hover:text-primary transition-colors">Buat Halaman Baru</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Tambah konten baru</p>
                    </div>
                </a>
                <a href="{{ route('admin.articles.create') }}" class="flex items-center gap-3 p-5 border-2 rounded-2xl hover:border-primary hover:shadow-lg transition-all duration-300 group" style="border-color: #dcfce7; background: linear-gradient(135deg, #ffffff 0%, #f0fdf4 100%);">
                    <div class="h-12 w-12 rounded-2xl bg-primary/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300" style="border-radius: 16px;">
                        <i class="mgc_newspaper_line text-primary text-2xl"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800 dark:text-gray-200 group-hover:text-primary transition-colors">Buat Artikel Baru</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Tulis berita atau artikel</p>
                    </div>
                </a>
                <a href="{{ route('admin.events.create') }}" class="flex items-center gap-3 p-5 border-2 rounded-2xl hover:border-primary hover:shadow-lg transition-all duration-300 group" style="border-color: #dcfce7; background: linear-gradient(135deg, #ffffff 0%, #f0fdf4 100%);">
                    <div class="h-12 w-12 rounded-2xl bg-primary/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300" style="border-radius: 16px;">
                        <i class="mgc_calendar_line text-primary text-2xl"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800 dark:text-gray-200 group-hover:text-primary transition-colors">Buat Event Baru</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Tambah kegiatan baru</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-6">
            <h5 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4 flex items-center gap-2">
                <i class="mgc_link_line text-primary"></i>
                Tautan Cepat
            </h5>
            <div class="space-y-3">
                <a href="{{ route('admin.pages') }}" class="flex items-center gap-3 p-5 border-2 rounded-2xl hover:border-primary hover:shadow-lg transition-all duration-300 group" style="border-color: #dcfce7; background: linear-gradient(135deg, #ffffff 0%, #f0fdf4 100%);">
                    <div class="h-12 w-12 rounded-2xl bg-info/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300" style="border-radius: 16px;">
                        <i class="mgc_file_text_line text-info text-2xl"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800 dark:text-gray-200 group-hover:text-primary transition-colors">Kelola Halaman</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Lihat semua halaman</p>
                    </div>
                </a>
                <a href="{{ route('admin.articles') }}" class="flex items-center gap-3 p-5 border-2 rounded-2xl hover:border-primary hover:shadow-lg transition-all duration-300 group" style="border-color: #dcfce7; background: linear-gradient(135deg, #ffffff 0%, #f0fdf4 100%);">
                    <div class="h-12 w-12 rounded-2xl bg-primary/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300" style="border-radius: 16px;">
                        <i class="mgc_newspaper_line text-primary text-2xl"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800 dark:text-gray-200 group-hover:text-primary transition-colors">Kelola Artikel</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Lihat semua artikel</p>
                    </div>
                </a>
                <a href="{{ route('pages.index') }}" target="_blank" class="flex items-center gap-3 p-5 border-2 rounded-2xl hover:border-primary hover:shadow-lg transition-all duration-300 group" style="border-color: #dcfce7; background: linear-gradient(135deg, #ffffff 0%, #f0fdf4 100%);">
                    <div class="h-12 w-12 rounded-2xl bg-success/10 flex items-center justify-center group-hover:scale-110 transition-transform duration-300" style="border-radius: 16px;">
                        <i class="mgc_external_link_line text-success text-2xl"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800 dark:text-gray-200 group-hover:text-primary transition-colors">Lihat Website</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Buka di tab baru</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Visitor Statistics Section -->
<div class="grid md:grid-cols-2 gap-6 mt-6">
    <div class="card">
        <div class="p-6">
            <h5 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4 flex items-center gap-2">
                <i class="mgc_chart_line text-primary"></i>
                Statistik Perangkat
            </h5>
            <div id="device-stats" class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                    <span class="text-sm text-gray-600 dark:text-gray-400">Memuat data...</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-6">
            <h5 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4 flex items-center gap-2">
                <i class="mgc_browser_line text-primary"></i>
                Statistik Browser
            </h5>
            <div id="browser-stats" class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                    <span class="text-sm text-gray-600 dark:text-gray-400">Memuat data...</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="grid md:grid-cols-2 gap-6 mt-6">
    <div class="card">
        <div class="p-6">
            <h5 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4 flex items-center gap-2">
                <i class="mgc_computer_line text-primary"></i>
                Statistik OS
            </h5>
            <div id="os-stats" class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                    <span class="text-sm text-gray-600 dark:text-gray-400">Memuat data...</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="p-6">
            <h5 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4 flex items-center gap-2">
                <i class="mgc_file_text_line text-primary"></i>
                Halaman Paling Dikunjungi
            </h5>
            <div id="top-pages" class="space-y-2 max-h-64 overflow-y-auto">
                <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                    <span class="text-sm text-gray-600 dark:text-gray-400">Memuat data...</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card mt-6">
    <div class="p-6">
        <h5 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4 flex items-center gap-2">
            <i class="mgc_user_line text-primary"></i>
            Pengunjung Terkini (5 Menit Terakhir)
        </h5>
        <div id="recent-visitors" class="space-y-2 max-h-96 overflow-y-auto">
            <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                <span class="text-sm text-gray-600 dark:text-gray-400">Memuat data...</span>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function updateVisitorStats() {
        fetch('{{ route("admin.api.visitor-stats") }}?minutes=5')
            .then(response => response.json())
            .then(data => {
                // Update real-time views
                document.getElementById('realtime-views').textContent = data.realtime_views;
                
                // Update device stats
                const deviceStatsEl = document.getElementById('device-stats');
                if (Object.keys(data.device_stats).length > 0) {
                    deviceStatsEl.innerHTML = Object.entries(data.device_stats)
                        .map(([device, count]) => `
                            <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">${device.charAt(0).toUpperCase() + device.slice(1)}</span>
                                <span class="text-sm font-semibold text-primary">${count}</span>
                            </div>
                        `).join('');
                } else {
                    deviceStatsEl.innerHTML = '<div class="text-sm text-gray-500 dark:text-gray-400 text-center py-4">Tidak ada data</div>';
                }
                
                // Update browser stats
                const browserStatsEl = document.getElementById('browser-stats');
                if (Object.keys(data.browser_stats).length > 0) {
                    browserStatsEl.innerHTML = Object.entries(data.browser_stats)
                        .map(([browser, count]) => `
                            <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">${browser}</span>
                                <span class="text-sm font-semibold text-primary">${count}</span>
                            </div>
                        `).join('');
                } else {
                    browserStatsEl.innerHTML = '<div class="text-sm text-gray-500 dark:text-gray-400 text-center py-4">Tidak ada data</div>';
                }
                
                // Update OS stats
                const osStatsEl = document.getElementById('os-stats');
                if (Object.keys(data.os_stats).length > 0) {
                    osStatsEl.innerHTML = Object.entries(data.os_stats)
                        .map(([os, count]) => `
                            <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">${os}</span>
                                <span class="text-sm font-semibold text-primary">${count}</span>
                            </div>
                        `).join('');
                } else {
                    osStatsEl.innerHTML = '<div class="text-sm text-gray-500 dark:text-gray-400 text-center py-4">Tidak ada data</div>';
                }
                
                // Update top pages
                const topPagesEl = document.getElementById('top-pages');
                if (data.top_pages.length > 0) {
                    topPagesEl.innerHTML = data.top_pages
                        .map((page, index) => `
                            <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300 truncate">${page.page_title || page.url}</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 truncate">${page.url}</p>
                                </div>
                                <span class="text-sm font-semibold text-primary ml-2">${page.views}</span>
                            </div>
                        `).join('');
                } else {
                    topPagesEl.innerHTML = '<div class="text-sm text-gray-500 dark:text-gray-400 text-center py-4">Tidak ada data</div>';
                }
                
                // Update recent visitors
                const recentVisitorsEl = document.getElementById('recent-visitors');
                if (data.recent_visitors.length > 0) {
                    recentVisitorsEl.innerHTML = data.recent_visitors
                        .map(visitor => {
                            const viewedAt = new Date(visitor.viewed_at);
                            const timeAgo = getTimeAgo(viewedAt);
                            return `
                                <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-800 rounded-lg mb-2">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-700 dark:text-gray-300 truncate">${visitor.page_title || visitor.url}</p>
                                        <div class="flex items-center gap-2 mt-1">
                                            <span class="text-xs text-gray-500 dark:text-gray-400">${visitor.device_type || 'Unknown'}</span>
                                            <span class="text-xs text-gray-400">•</span>
                                            <span class="text-xs text-gray-500 dark:text-gray-400">${visitor.browser || 'Unknown'}</span>
                                            <span class="text-xs text-gray-400">•</span>
                                            <span class="text-xs text-gray-500 dark:text-gray-400">${visitor.os || 'Unknown'}</span>
                                        </div>
                                    </div>
                                    <div class="text-right ml-2">
                                        <p class="text-xs text-gray-500 dark:text-gray-400">${timeAgo}</p>
                                        <p class="text-xs text-gray-400">${visitor.ip_address}</p>
                                    </div>
                                </div>
                            `;
                        }).join('');
                } else {
                    recentVisitorsEl.innerHTML = '<div class="text-sm text-gray-500 dark:text-gray-400 text-center py-4">Tidak ada pengunjung dalam 5 menit terakhir</div>';
                }
            })
            .catch(error => {
                console.error('Error fetching visitor stats:', error);
            });
    }
    
    function getTimeAgo(date) {
        const seconds = Math.floor((new Date() - date) / 1000);
        if (seconds < 60) return 'Baru saja';
        const minutes = Math.floor(seconds / 60);
        if (minutes < 60) return `${minutes} menit lalu`;
        const hours = Math.floor(minutes / 60);
        if (hours < 24) return `${hours} jam lalu`;
        const days = Math.floor(hours / 24);
        return `${days} hari lalu`;
    }
    
    // Update stats immediately on page load
    updateVisitorStats();
    
    // Update stats every 10 seconds
    setInterval(updateVisitorStats, 10000);
</script>
@endpush
@endsection

