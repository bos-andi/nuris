@extends('admin.layouts.app')

@section('title', 'Edit Event')

@section('content')
<div class="mb-6">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Edit Event</h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">Edit event: {{ $event->title }}</p>
</div>

<div class="card">
    <div class="p-6">
        <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="title">Judul Event *</label>
                <input type="text" id="title" name="title" class="form-input w-full" value="{{ old('title', $event->title) }}" required>
                @error('title')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="slug">Slug</label>
                <input type="text" id="slug" name="slug" class="form-input w-full" value="{{ old('slug', $event->slug) }}" placeholder="Akan dibuat otomatis jika kosong">
                @error('slug')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="event_date">Tanggal Event *</label>
                    <input type="datetime-local" id="event_date" name="event_date" class="form-input w-full" value="{{ old('event_date', $event->event_date ? $event->event_date->format('Y-m-d\TH:i') : '') }}" required>
                    @error('event_date')
                        <p class="text-danger text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="event_end_date">Tanggal Selesai</label>
                    <input type="datetime-local" id="event_end_date" name="event_end_date" class="form-input w-full" value="{{ old('event_end_date', $event->event_end_date ? $event->event_end_date->format('Y-m-d\TH:i') : '') }}">
                    @error('event_end_date')
                        <p class="text-danger text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="location">Lokasi</label>
                    <input type="text" id="location" name="location" class="form-input w-full" value="{{ old('location', $event->location) }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="organizer">Penyelenggara</label>
                    <input type="text" id="organizer" name="organizer" class="form-input w-full" value="{{ old('organizer', $event->organizer) }}">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="description">Deskripsi Singkat</label>
                <textarea id="description" name="description" class="form-input w-full" rows="3">{{ old('description', $event->description) }}</textarea>
                <p class="text-xs text-gray-500 mt-1">Deskripsi singkat event yang akan ditampilkan di halaman list</p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="content">Konten Lengkap</label>
                <textarea id="content" name="content" class="form-input w-full" rows="10">{{ old('content', $event->content) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="featured_image">Featured Image</label>
                @if($event->featured_image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $event->featured_image) }}" alt="Current image" class="max-w-xs rounded" style="max-height: 200px;">
                    <p class="text-xs text-gray-500 mt-1">Gambar saat ini</p>
                </div>
                @endif
                <input type="file" id="featured_image" name="featured_image" class="form-input w-full" accept="image/*">
                <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF. Maksimal 2MB. Kosongkan jika tidak ingin mengubah gambar.</p>
                @error('featured_image')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid md:grid-cols-3 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="contact_person">Contact Person</label>
                    <input type="text" id="contact_person" name="contact_person" class="form-input w-full" value="{{ old('contact_person', $event->contact_person) }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="contact_phone">Telepon</label>
                    <input type="text" id="contact_phone" name="contact_phone" class="form-input w-full" value="{{ old('contact_phone', $event->contact_phone) }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="contact_email">Email</label>
                    <input type="email" id="contact_email" name="contact_email" class="form-input w-full" value="{{ old('contact_email', $event->contact_email) }}">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="published_at">Tanggal Publikasi</label>
                    <input type="datetime-local" id="published_at" name="published_at" class="form-input w-full" value="{{ old('published_at', $event->published_at ? $event->published_at->format('Y-m-d\TH:i') : '') }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="meta_title">Meta Title</label>
                    <input type="text" id="meta_title" name="meta_title" class="form-input w-full" value="{{ old('meta_title', $event->meta_title) }}">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="meta_description">Meta Description</label>
                <textarea id="meta_description" name="meta_description" class="form-input w-full" rows="3">{{ old('meta_description', $event->meta_description) }}</textarea>
            </div>

            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" id="is_published" name="is_published" value="1" class="form-checkbox rounded" {{ old('is_published', $event->is_published) ? 'checked' : '' }}>
                    <label for="is_published" class="ms-2 text-sm text-gray-600 dark:text-gray-200">Publikasikan Event</label>
                </div>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_save_line me-2"></i>Simpan Perubahan
                </button>
                <a href="{{ route('admin.events') }}" class="btn bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-200">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

