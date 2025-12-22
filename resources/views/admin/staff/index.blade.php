@extends('admin.layouts.app')

@section('title', 'Kelola Data Guru & Karyawan')

@section('content')
<div class="flex justify-between items-center mb-6">
    <div>
        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Kelola Data Guru & Karyawan</h4>
        <p class="text-sm text-gray-500 dark:text-gray-400">Daftar semua guru dan karyawan</p>
    </div>
    <div class="flex gap-2">
        <a href="{{ route('admin.staff.import') }}" class="btn bg-success text-white">
            <i class="mgc_upload_line me-2"></i>Import Excel
        </a>
        <a href="{{ route('admin.staff.create') }}" class="btn bg-primary text-white">
            <i class="mgc_add_circle_line me-2"></i>Tambah Data
        </a>
        @if($staff->count() > 0)
        <a href="{{ route('admin.staff.deleteAll') }}" class="btn bg-danger text-white" onclick="return confirm('PERINGATAN! Apakah Anda yakin ingin menghapus SEMUA data guru dan karyawan? Tindakan ini tidak dapat dibatalkan!');">
            <i class="mgc_delete_line me-2"></i>Hapus Semua Data
        </a>
        @endif
    </div>
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
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">NIP</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Jabatan</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Unit</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Status</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Aktif</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($staff as $s)
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800">
                        <td class="py-3 px-4">
                            <span class="px-2 py-1 text-xs rounded bg-primary/10 text-primary font-semibold">{{ $s->order }}</span>
                        </td>
                        <td class="py-3 px-4">
                            @if($s->foto)
                                <img src="{{ asset('storage/' . $s->foto) }}" alt="{{ $s->nama }}" class="w-16 h-16 object-cover rounded-full">
                            @else
                                <div class="w-16 h-16 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                                    <i class="mgc_user_3_line text-2xl text-gray-400"></i>
                                </div>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            <div class="font-medium">{{ $s->nama }}</div>
                        </td>
                        <td class="py-3 px-4">{{ $s->nip ?? '-' }}</td>
                        <td class="py-3 px-4">{{ $s->jabatan ?? '-' }}</td>
                        <td class="py-3 px-4">{{ $s->unit ?? '-' }}</td>
                        <td class="py-3 px-4">
                            @if($s->status == 'Guru')
                                <span class="px-2 py-1 text-xs rounded bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">Guru</span>
                            @else
                                <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Karyawan</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            @if($s->is_active)
                                <span class="px-2 py-1 text-xs rounded bg-success/10 text-success">Aktif</span>
                            @else
                                <span class="px-2 py-1 text-xs rounded bg-warning/10 text-warning">Tidak Aktif</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('admin.staff.edit', $s->id) }}" class="btn btn-sm bg-primary text-white" title="Edit">
                                    <i class="mgc_edit_line"></i>
                                </a>
                                <a href="{{ route('admin.staff.delete', $s->id) }}" class="btn btn-sm bg-danger text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');" title="Hapus">
                                    <i class="mgc_delete_line"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9" class="py-8 text-center text-gray-500 dark:text-gray-400">
                            Belum ada data. <a href="{{ route('admin.staff.create') }}" class="text-primary">Tambah data pertama</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

