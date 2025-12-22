@extends('admin.layouts.app')

@section('title', 'Kelola Halaman')

@section('content')
<div class="flex justify-between items-center mb-6">
    <div>
        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Kelola Halaman</h4>
        <p class="text-sm text-gray-500 dark:text-gray-400">Daftar semua halaman website</p>
    </div>
    <a href="{{ route('admin.pages.create') }}" class="btn bg-primary text-white">
        <i class="mgc_add_circle_line me-2"></i>Tambah Halaman
    </a>
</div>

<div class="card">
    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Judul</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Slug</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Status</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Urutan</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pages as $page)
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800">
                        <td class="py-3 px-4">{{ $page->title }}</td>
                        <td class="py-3 px-4">
                            <code class="text-xs bg-gray-100 dark:bg-gray-700 px-2 py-1 rounded">{{ $page->slug }}</code>
                        </td>
                        <td class="py-3 px-4">
                            @if($page->is_active)
                                <span class="px-2 py-1 text-xs rounded bg-success/10 text-success">Aktif</span>
                            @else
                                <span class="px-2 py-1 text-xs rounded bg-danger/10 text-danger">Nonaktif</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">{{ $page->order }}</td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-sm bg-info text-white">
                                    <i class="mgc_edit_line"></i>
                                </a>
                                <a href="{{ route('admin.pages.delete', $page->id) }}" class="btn btn-sm bg-danger text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus halaman ini?');">
                                    <i class="mgc_delete_line"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="py-8 text-center text-gray-500 dark:text-gray-400">
                            Belum ada halaman. <a href="{{ route('admin.pages.create') }}" class="text-primary">Buat halaman pertama</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

