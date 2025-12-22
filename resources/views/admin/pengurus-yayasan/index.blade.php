@extends('admin.layouts.app')

@section('title', 'Kelola Pengurus Yayasan')

@section('content')
<div class="flex justify-between items-center mb-6">
    <div>
        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Kelola Pengurus Yayasan</h4>
        <p class="text-sm text-gray-500 dark:text-gray-400">Daftar semua pengurus yayasan yang ditampilkan di halaman utama</p>
    </div>
    <a href="{{ route('admin.pengurus-yayasan.create') }}" class="btn bg-primary text-white">
        <i class="mgc_add_circle_line me-2"></i>Tambah Pengurus
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
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Foto</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Nama</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Jabatan</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Kategori</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Aktif</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pengurus as $p)
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800">
                        <td class="py-3 px-4">
                            <span class="px-2 py-1 text-xs rounded bg-primary/10 text-primary font-semibold">{{ $p->order }}</span>
                        </td>
                        <td class="py-3 px-4">
                            @if($p->foto)
                                <img src="{{ asset('storage/' . $p->foto) }}" alt="{{ $p->nama }}" class="w-16 h-16 object-cover rounded">
                            @else
                                <img src="{{ asset('img/team/vl-team-inner-1.1.png') }}" alt="{{ $p->nama }}" class="w-16 h-16 object-cover rounded">
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            <div class="font-medium">{{ $p->nama }}</div>
                        </td>
                        <td class="py-3 px-4">
                            <div class="font-medium">{{ $p->jabatan }}</div>
                            @if($p->jabatan_lengkap)
                                <div class="text-sm text-gray-500">{{ Str::limit($p->jabatan_lengkap, 40) }}</div>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            @if($p->kategori)
                                <span class="px-2 py-1 text-xs rounded bg-info/10 text-info">{{ $p->kategori }}</span>
                            @else
                                <span class="text-gray-400">-</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            @if($p->is_active)
                                <span class="px-2 py-1 text-xs rounded bg-success/10 text-success">Aktif</span>
                            @else
                                <span class="px-2 py-1 text-xs rounded bg-danger/10 text-danger">Tidak Aktif</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('admin.pengurus-yayasan.edit', $p->id) }}" class="btn btn-sm bg-warning text-white">
                                    <i class="mgc_edit_line"></i>
                                </a>
                                <a href="{{ route('admin.pengurus-yayasan.delete', $p->id) }}" class="btn btn-sm bg-danger text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus pengurus ini?');">
                                    <i class="mgc_delete_line"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="py-8 text-center text-gray-500">
                            Belum ada data pengurus yayasan. <a href="{{ route('admin.pengurus-yayasan.create') }}" class="text-primary">Tambah pengurus pertama</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

