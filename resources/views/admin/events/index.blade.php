@extends('admin.layouts.app')

@section('title', 'Kelola Event')

@section('content')
<div class="flex justify-between items-center mb-6">
    <div>
        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Kelola Event</h4>
        <p class="text-sm text-gray-500 dark:text-gray-400">Daftar semua event dan kegiatan</p>
    </div>
    <a href="{{ route('admin.events.create') }}" class="btn bg-primary text-white">
        <i class="mgc_add_circle_line me-2"></i>Tambah Event
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
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Judul Event</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Tanggal Event</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Lokasi</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Penyelenggara</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Status</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($events as $event)
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800">
                        <td class="py-3 px-4">
                            <div class="font-medium">{{ Str::limit($event->title, 50) }}</div>
                            <code class="text-xs text-gray-500">{{ Str::limit($event->slug, 30) }}</code>
                        </td>
                        <td class="py-3 px-4">
                            <div>{{ $event->event_date->format('d M Y') }}</div>
                            @if($event->event_end_date)
                            <div class="text-xs text-gray-500">Sampai: {{ $event->event_end_date->format('d M Y') }}</div>
                            @endif
                        </td>
                        <td class="py-3 px-4">{{ $event->location ?? '-' }}</td>
                        <td class="py-3 px-4">{{ $event->organizer ?? '-' }}</td>
                        <td class="py-3 px-4">
                            @if($event->is_published)
                                <span class="px-2 py-1 text-xs rounded bg-success/10 text-success">Published</span>
                            @else
                                <span class="px-2 py-1 text-xs rounded bg-warning/10 text-warning">Draft</span>
                            @endif
                            @if($event->isUpcoming())
                                <span class="px-2 py-1 text-xs rounded bg-info/10 text-info ml-1">Upcoming</span>
                            @elseif($event->isPast())
                                <span class="px-2 py-1 text-xs rounded bg-gray-100 text-gray-600 ml-1">Past</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('events.show', $event->slug) }}" target="_blank" class="btn btn-sm bg-info text-white" title="Lihat">
                                    <i class="mgc_eye_line"></i>
                                </a>
                                <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-sm bg-primary text-white" title="Edit">
                                    <i class="mgc_edit_line"></i>
                                </a>
                                <a href="{{ route('admin.events.delete', $event->id) }}" class="btn btn-sm bg-danger text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus event ini?');" title="Hapus">
                                    <i class="mgc_delete_line"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="py-8 text-center text-gray-500 dark:text-gray-400">
                            Belum ada event. <a href="{{ route('admin.events.create') }}" class="text-primary">Buat event pertama</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

