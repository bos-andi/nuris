@extends('admin.layouts.app')

@section('title', 'Buat Artikel Baru')

@section('content')
<div class="mb-6">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Buat Artikel Baru</h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">Tambah artikel baru ke website</p>
</div>

<div class="card">
    <div class="p-6">
        <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="title">Judul Artikel *</label>
                <input type="text" id="title" name="title" class="form-input w-full" value="{{ old('title') }}" required>
                @error('title')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="slug">Slug</label>
                <input type="text" id="slug" name="slug" class="form-input w-full" value="{{ old('slug') }}" placeholder="Akan dibuat otomatis jika kosong">
                @error('slug')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="author">Author</label>
                    <input type="text" id="author" name="author" class="form-input w-full" value="{{ old('author') }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="category">Kategori</label>
                    <input type="text" id="category" name="category" class="form-input w-full" value="{{ old('category') }}">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="excerpt">Ringkasan (Excerpt)</label>
                <textarea id="excerpt" name="excerpt" class="form-input w-full" rows="3">{{ old('excerpt') }}</textarea>
                <p class="text-xs text-gray-500 mt-1">Ringkasan singkat artikel yang akan ditampilkan di halaman list</p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="content">Konten *</label>
                <textarea id="content" name="content" class="form-input w-full" rows="15" required>{{ old('content') }}</textarea>
                @error('content')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="featured_image">Featured Image</label>
                <input type="file" id="featured_image" name="featured_image" class="form-input w-full" accept="image/*">
                <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF. Maksimal 2MB</p>
                @error('featured_image')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="published_at">Tanggal Publikasi</label>
                    <input type="datetime-local" id="published_at" name="published_at" class="form-input w-full" value="{{ old('published_at') }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="meta_title">Meta Title</label>
                    <input type="text" id="meta_title" name="meta_title" class="form-input w-full" value="{{ old('meta_title') }}">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="meta_description">Meta Description</label>
                <textarea id="meta_description" name="meta_description" class="form-input w-full" rows="3">{{ old('meta_description') }}</textarea>
            </div>

            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" id="is_published" name="is_published" value="1" class="form-checkbox rounded" {{ old('is_published', true) ? 'checked' : '' }}>
                    <label for="is_published" class="ms-2 text-sm text-gray-600 dark:text-gray-200">Publikasikan Artikel</label>
                    <p class="text-xs text-gray-500 ms-2">Centang untuk langsung mempublikasikan artikel</p>
                </div>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_save_line me-2"></i>Simpan
                </button>
                <a href="{{ route('admin.articles') }}" class="btn bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-200">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

