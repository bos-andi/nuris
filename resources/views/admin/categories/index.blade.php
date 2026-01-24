@extends('admin.layouts.app')

@section('title', 'Kelola Kategori')

@section('content')
<div class="flex justify-between items-center mb-6">
    <div>
        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Kelola Kategori</h4>
        <p class="text-sm text-gray-500 dark:text-gray-400">Daftar semua kategori berita</p>
    </div>
    <a href="{{ route('admin.categories.create') }}" class="btn bg-primary text-white">
        <i class="mgc_add_circle_line me-2"></i>Tambah Kategori
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
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Nama</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Slug</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Warna</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Urutan</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Status</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800">
                        <td class="py-3 px-4">
                            <div class="font-medium">{{ $category->name }}</div>
                            @if($category->description)
                            <p class="text-xs text-gray-500 mt-1">{{ Str::limit($category->description, 50) }}</p>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            <code class="text-xs text-gray-500">{{ $category->slug }}</code>
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center gap-2">
                                <div class="w-6 h-6 rounded" style="background-color: {{ $category->color }}"></div>
                                <span class="text-xs">{{ $category->color }}</span>
                            </div>
                        </td>
                        <td class="py-3 px-4">{{ $category->order }}</td>
                        <td class="py-3 px-4">
                            @if($category->is_active)
                                <span class="px-2 py-1 text-xs rounded bg-success/10 text-success">Aktif</span>
                            @else
                                <span class="px-2 py-1 text-xs rounded bg-warning/10 text-warning">Nonaktif</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm bg-primary text-white" title="Edit">
                                    <i class="mgc_edit_line"></i>
                                </a>
                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm bg-danger text-white" title="Hapus">
                                        <i class="mgc_delete_line"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="py-8 text-center text-gray-500 dark:text-gray-400">
                            Belum ada kategori. <a href="{{ route('admin.categories.create') }}" class="text-primary">Buat kategori pertama</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

