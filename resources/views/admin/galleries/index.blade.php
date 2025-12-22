@extends('admin.layouts.app')

@section('title', 'Kelola Gallery')

@section('content')
<div class="flex justify-between items-center mb-6">
    <div>
        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Kelola Gallery</h4>
        <p class="text-sm text-gray-500 dark:text-gray-400">Daftar semua foto dan video gallery</p>
    </div>
    <a href="{{ route('admin.galleries.create') }}" class="btn bg-primary text-white">
        <i class="mgc_add_circle_line me-2"></i>Tambah Gallery
    </a>
</div>

@if(session('success'))
<div class="alert alert-success mb-4">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger mb-4">
    {{ session('error') }}
</div>
@endif

<div class="card">
    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Tipe</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Gambar/Thumbnail</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Judul</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Urutan</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Status</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($galleries as $gallery)
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800">
                        <td class="py-3 px-4">
                            @if($gallery->type === 'photo')
                                <span class="px-2 py-1 text-xs rounded bg-info/10 text-info">
                                    <i class="mgc_image_line me-1"></i>Foto
                                </span>
                            @else
                                <span class="px-2 py-1 text-xs rounded bg-danger/10 text-danger">
                                    <i class="mgc_video_line me-1"></i>Video
                                </span>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            @if($gallery->image_path)
                                <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}" class="w-20 h-20 object-cover rounded">
                            @else
                                <span class="text-gray-400 text-sm">-</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            <div class="font-medium">{{ $gallery->title ?: '-' }}</div>
                            @if($gallery->description)
                                <div class="text-sm text-gray-500 mt-1">{{ Str::limit($gallery->description, 50) }}</div>
                            @endif
                        </td>
                        <td class="py-3 px-4">{{ $gallery->order }}</td>
                        <td class="py-3 px-4">
                            @if($gallery->is_published)
                                <span class="px-2 py-1 text-xs rounded bg-success/10 text-success">Published</span>
                            @else
                                <span class="px-2 py-1 text-xs rounded bg-warning/10 text-warning">Draft</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('admin.galleries.edit', $gallery->id) }}" class="btn btn-sm bg-primary text-white" title="Edit">
                                    <i class="mgc_edit_line"></i>
                                </a>
                                <a href="{{ route('admin.galleries.delete', $gallery->id) }}" class="btn btn-sm bg-danger text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus gallery ini?');" title="Hapus">
                                    <i class="mgc_delete_line"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="py-8 text-center text-gray-500 dark:text-gray-400">
                            Belum ada gallery. <a href="{{ route('admin.galleries.create') }}" class="text-primary">Tambah gallery pertama</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

