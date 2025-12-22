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
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Role</p>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ ucfirst(auth()->user()->role) }}</h3>
                </div>
                <div class="h-12 w-12 rounded-full bg-info/10 flex items-center justify-center">
                    <i class="mgc_user_3_line text-info text-2xl"></i>
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
@endsection

