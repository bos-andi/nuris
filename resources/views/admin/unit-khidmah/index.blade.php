@extends('admin.layouts.app')

@section('title', 'Kelola Unit Khidmah')

@section('content')
<div class="flex justify-between items-center mb-6">
    <div>
        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Kelola Unit Khidmah</h4>
        <p class="text-sm text-gray-500 dark:text-gray-400">Daftar semua unit khidmah (Nuris Media, Nuris Medika, Nuris School Bank, Nuris Mart)</p>
    </div>
    <a href="{{ route('admin.unit-khidmah.create') }}" class="btn bg-primary text-white">
        <i class="mgc_add_circle_line me-2"></i>Tambah Unit Khidmah
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
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Judul</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Slug</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Video</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Status</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Urutan</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($units as $unit)
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800">
                        <td class="py-3 px-4">
                            <div class="font-medium">{{ $unit->title }}</div>
                            @if($unit->subtitle)
                                <div class="text-sm text-gray-500">{{ $unit->subtitle }}</div>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            <code class="text-xs bg-gray-100 dark:bg-gray-700 px-2 py-1 rounded">{{ $unit->slug }}</code>
                        </td>
                        <td class="py-3 px-4">
                            @if($unit->video_url)
                                <span class="px-2 py-1 text-xs rounded bg-info/10 text-info">
                                    <i class="mgc_video_line me-1"></i>Ada Video
                                </span>
                            @else
                                <span class="text-gray-400 text-sm">-</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            @if($unit->is_active)
                                <span class="px-2 py-1 text-xs rounded bg-success/10 text-success">Aktif</span>
                            @else
                                <span class="px-2 py-1 text-xs rounded bg-danger/10 text-danger">Nonaktif</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">{{ $unit->order }}</td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('admin.unit-khidmah.edit', $unit->id) }}" class="btn btn-sm bg-primary text-white" title="Edit">
                                    <i class="mgc_edit_line"></i>
                                </a>
                                <a href="{{ route('admin.unit-khidmah.delete', $unit->id) }}" class="btn btn-sm bg-danger text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus unit khidmah ini?');" title="Hapus">
                                    <i class="mgc_delete_line"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="py-8 text-center text-gray-500 dark:text-gray-400">
                            Belum ada unit khidmah. <a href="{{ route('admin.unit-khidmah.create') }}" class="text-primary">Tambah unit khidmah pertama</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

