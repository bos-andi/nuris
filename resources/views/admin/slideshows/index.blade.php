@extends('admin.layouts.app')

@section('title', 'Kelola Slideshow')

@section('content')
<div class="flex justify-between items-center mb-6">
    <div>
        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Kelola Slideshow</h4>
        <p class="text-sm text-gray-500 dark:text-gray-400">Daftar semua slide untuk hero section</p>
    </div>
    <a href="{{ route('admin.slideshows.create') }}" class="btn bg-primary text-white">
        <i class="mgc_add_circle_line me-2"></i>Tambah Slide
    </a>
</div>

@if(session('success'))
<div class="alert alert-success mb-4">
    {{ session('success') }}
</div>
@endif

<div class="card">
    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Urutan</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Gambar</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Judul</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Subtitle</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Status</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($slideshows as $slideshow)
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800">
                        <td class="py-3 px-4">
                            <span class="px-2 py-1 text-xs rounded bg-primary/10 text-primary font-semibold">{{ $slideshow->order }}</span>
                        </td>
                        <td class="py-3 px-4">
                            @if($slideshow->background_image)
                                <img src="{{ asset('storage/' . $slideshow->background_image) }}" alt="{{ $slideshow->title }}" class="w-20 h-12 object-cover rounded">
                            @else
                                <span class="text-gray-400 text-sm">Tidak ada gambar</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            <div class="font-medium">{{ Str::limit($slideshow->title, 40) }}</div>
                        </td>
                        <td class="py-3 px-4">
                            <div class="text-sm text-gray-600">{{ Str::limit($slideshow->subtitle, 30) ?: '-' }}</div>
                        </td>
                        <td class="py-3 px-4">
                            @if($slideshow->is_active)
                                <span class="px-2 py-1 text-xs rounded bg-success/10 text-success">Aktif</span>
                            @else
                                <span class="px-2 py-1 text-xs rounded bg-warning/10 text-warning">Tidak Aktif</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('admin.slideshows.edit', $slideshow->id) }}" class="btn btn-sm bg-primary text-white" title="Edit">
                                    <i class="mgc_edit_line"></i>
                                </a>
                                <a href="{{ route('admin.slideshows.delete', $slideshow->id) }}" class="btn btn-sm bg-danger text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus slide ini?');" title="Hapus">
                                    <i class="mgc_delete_line"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="py-8 text-center text-gray-500 dark:text-gray-400">
                            Belum ada slide. <a href="{{ route('admin.slideshows.create') }}" class="text-primary">Buat slide pertama</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

