@extends('admin.layouts.app')

@section('title', 'Edit Halaman')

@section('content')
<div class="mb-6">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Edit Halaman</h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">Ubah informasi halaman</p>
</div>

<div class="card">
    <div class="p-6">
        <form action="{{ route('admin.pages.update', $page->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="title">Judul Halaman *</label>
                <input type="text" id="title" name="title" class="form-input w-full" value="{{ old('title', $page->title) }}" required>
                @error('title')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="slug">Slug</label>
                <input type="text" id="slug" name="slug" class="form-input w-full" value="{{ old('slug', $page->slug) }}" placeholder="Akan dibuat otomatis jika kosong">
                @error('slug')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="content">Konten</label>
                <textarea id="content" name="content" class="form-input w-full" rows="10">{{ old('content', $page->content) }}</textarea>
                @error('content')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="meta_title">Meta Title</label>
                    <input type="text" id="meta_title" name="meta_title" class="form-input w-full" value="{{ old('meta_title', $page->meta_title) }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="order">Urutan</label>
                    <input type="number" id="order" name="order" class="form-input w-full" value="{{ old('order', $page->order) }}">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="meta_description">Meta Description</label>
                <textarea id="meta_description" name="meta_description" class="form-input w-full" rows="3">{{ old('meta_description', $page->meta_description) }}</textarea>
            </div>

            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" id="is_active" name="is_active" value="1" class="form-checkbox rounded" {{ old('is_active', $page->is_active) ? 'checked' : '' }}>
                    <label for="is_active" class="ms-2 text-sm text-gray-600 dark:text-gray-200">Halaman Aktif</label>
                </div>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_save_line me-2"></i>Update
                </button>
                <a href="{{ route('admin.pages') }}" class="btn bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-200">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

