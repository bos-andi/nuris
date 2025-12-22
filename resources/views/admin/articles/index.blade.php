@extends('admin.layouts.app')

@section('title', 'Kelola Berita & Artikel')

@section('content')
<div class="flex justify-between items-center mb-6">
    <div>
        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Kelola Berita & Artikel</h4>
        <p class="text-sm text-gray-500 dark:text-gray-400">Daftar semua berita dan artikel</p>
    </div>
    <a href="{{ route('admin.articles.create') }}" class="btn bg-primary text-white">
        <i class="mgc_add_circle_line me-2"></i>Tambah Artikel
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
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Kategori</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Author</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Tanggal Publikasi</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Status</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Views</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($articles as $article)
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800">
                        <td class="py-3 px-4">
                            <div class="font-medium">{{ Str::limit($article->title, 50) }}</div>
                            <code class="text-xs text-gray-500">{{ Str::limit($article->slug, 30) }}</code>
                        </td>
                        <td class="py-3 px-4">{{ $article->category ?? '-' }}</td>
                        <td class="py-3 px-4">{{ $article->author ?? '-' }}</td>
                        <td class="py-3 px-4">
                            {{ $article->published_at ? $article->published_at->format('d M Y') : '-' }}
                        </td>
                        <td class="py-3 px-4">
                            @if($article->is_published)
                                <span class="px-2 py-1 text-xs rounded bg-success/10 text-success">Published</span>
                            @else
                                <span class="px-2 py-1 text-xs rounded bg-warning/10 text-warning">Draft</span>
                            @endif
                        </td>
                        <td class="py-3 px-4">{{ $article->views }}</td>
                        <td class="py-3 px-4">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('articles.show', $article->slug) }}" target="_blank" class="btn btn-sm bg-info text-white" title="Lihat">
                                    <i class="mgc_eye_line"></i>
                                </a>
                                <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-sm bg-primary text-white" title="Edit">
                                    <i class="mgc_edit_line"></i>
                                </a>
                                <a href="{{ route('admin.articles.delete', $article->id) }}" class="btn btn-sm bg-danger text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');" title="Hapus">
                                    <i class="mgc_delete_line"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="py-8 text-center text-gray-500 dark:text-gray-400">
                            Belum ada artikel. <a href="{{ route('admin.articles.create') }}" class="text-primary">Buat artikel pertama</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

