@extends('admin.layouts.app')

@section('title', 'Kelola Jadwal Kegiatan Yaumiyah')

@section('content')
<div class="flex justify-between items-center mb-6">
    <div>
        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Kelola Jadwal Kegiatan Yaumiyah</h4>
        <p class="text-sm text-gray-500 dark:text-gray-400">Daftar jadwal harian dan mingguan</p>
    </div>
    <a href="{{ route('admin.schedules.create') }}" class="btn bg-primary text-white">
        <i class="mgc_add_circle_line me-2"></i>Tambah Jadwal
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
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Tipe</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Hari</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Waktu</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Kegiatan</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Keterangan</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Status</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($schedules as $schedule)
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800">
                        <td class="py-3 px-4">
                            @if($schedule->type == 'daily')
                                <span class="px-2 py-1 text-xs rounded bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">Harian</span>
                            @else
                                <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Mingguan</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            <div class="text-sm">{{ $schedule->day ?: '-' }}</div>
                        </td>
                        <td class="py-3 px-4">
                            <div class="font-medium">{{ $schedule->time }}</div>
                        </td>
                        <td class="py-3 px-4">
                            <div class="text-sm">{{ Str::limit($schedule->activity, 50) }}</div>
                        </td>
                        <td class="py-3 px-4">
                            <div class="text-sm text-gray-600">{{ Str::limit($schedule->notes, 30) ?: '-' }}</div>
                        </td>
                        <td class="py-3 px-4">
                            @if($schedule->is_active)
                                <span class="px-2 py-1 text-xs rounded bg-success/10 text-success">Aktif</span>
                            @else
                                <span class="px-2 py-1 text-xs rounded bg-warning/10 text-warning">Tidak Aktif</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('admin.schedules.edit', $schedule->id) }}" class="btn btn-sm bg-primary text-white" title="Edit">
                                    <i class="mgc_edit_line"></i>
                                </a>
                                <a href="{{ route('admin.schedules.delete', $schedule->id) }}" class="btn btn-sm bg-danger text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus jadwal ini?');" title="Hapus">
                                    <i class="mgc_delete_line"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="py-8 text-center text-gray-500 dark:text-gray-400">
                            Belum ada jadwal. <a href="{{ route('admin.schedules.create') }}" class="text-primary">Tambah jadwal pertama</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

