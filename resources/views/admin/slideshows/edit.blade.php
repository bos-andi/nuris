@extends('admin.layouts.app')

@section('title', 'Edit Slide')

@section('content')
<div class="mb-6">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Edit Slide</h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">Edit slide: {{ $slideshow->title }}</p>
</div>

<div class="card">
    <div class="p-6">
        <form action="{{ route('admin.slideshows.update', $slideshow->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="title">Judul Slide</label>
                <input type="text" id="title" name="title" class="form-input w-full" value="{{ old('title', $slideshow->title) }}">
                @error('title')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="subtitle">Subtitle</label>
                <input type="text" id="subtitle" name="subtitle" class="form-input w-full" value="{{ old('subtitle', $slideshow->subtitle) }}" placeholder="Contoh: Pondok Pesantren Nurul Islam">
                @error('subtitle')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="description">Deskripsi</label>
                <textarea id="description" name="description" class="form-input w-full" rows="3" placeholder="Deskripsi singkat untuk slide">{{ old('description', $slideshow->description) }}</textarea>
                @error('description')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="slide_type">Tipe Slide *</label>
                <select id="slide_type" name="slide_type" class="form-select w-full" required onchange="toggleSlideType()">
                    <option value="image" {{ old('slide_type', $slideshow->slide_type ?? 'image') == 'image' ? 'selected' : '' }}>Gambar</option>
                    <option value="video" {{ old('slide_type', $slideshow->slide_type ?? 'image') == 'video' ? 'selected' : '' }}>Video YouTube</option>
                </select>
                <p class="text-xs text-gray-500 mt-1">Pilih tipe slide: gambar atau video YouTube</p>
                @error('slide_type')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4" id="image_section" style="display: {{ old('slide_type', $slideshow->slide_type ?? 'image') == 'image' ? 'block' : 'none' }};">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="background_image">Gambar Background</label>
                @if($slideshow->background_image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $slideshow->background_image) }}" alt="{{ $slideshow->title }}" class="w-48 h-28 object-cover rounded border">
                        <p class="text-xs text-gray-500 mt-1">Gambar saat ini</p>
                    </div>
                @endif
                <input type="file" id="background_image" name="background_image" class="form-input w-full" accept="image/*">
                <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF. Maksimal 2MB. Rekomendasi ukuran: 1920x1080px. Kosongkan jika tidak ingin mengubah gambar.</p>
                @error('background_image')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4" id="video_section" style="display: {{ old('slide_type', $slideshow->slide_type ?? 'image') == 'video' ? 'block' : 'none' }};">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="video_url">URL Video YouTube *</label>
                <input type="text" id="video_url" name="video_url" class="form-input w-full" value="{{ old('video_url', $slideshow->video_url) }}" placeholder="Contoh: https://www.youtube.com/watch?v=cVxd_qeJQAI atau cVxd_qeJQAI">
                <p class="text-xs text-gray-500 mt-1">Masukkan URL lengkap YouTube atau hanya ID video (contoh: cVxd_qeJQAI)</p>
                @error('video_url')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="button_text">Teks Tombol</label>
                    <input type="text" id="button_text" name="button_text" class="form-input w-full" value="{{ old('button_text', $slideshow->button_text) }}" placeholder="Contoh: Daftar Sekarang">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="button_link">Link Tombol</label>
                    <input type="text" id="button_link" name="button_link" class="form-input w-full" value="{{ old('button_link', $slideshow->button_link) }}" placeholder="Contoh: /contact atau https://...">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="order">Urutan</label>
                    <input type="number" id="order" name="order" class="form-input w-full" value="{{ old('order', $slideshow->order) }}" min="0">
                    <p class="text-xs text-gray-500 mt-1">Urutan tampil slide (angka lebih kecil tampil lebih dulu)</p>
                </div>
                <div>
                    <label class="flex items-center gap-2 mt-6">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $slideshow->is_active) ? 'checked' : '' }} class="form-checkbox">
                        <span class="text-sm font-medium text-gray-600 dark:text-gray-200">Aktifkan Slide</span>
                    </label>
                    <p class="text-xs text-gray-500 mt-1">Slide yang tidak aktif tidak akan ditampilkan</p>
                </div>
            </div>

            <div class="flex gap-3">
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_save_line me-2"></i>Update Slide
                </button>
                <a href="{{ route('admin.slideshows') }}" class="btn bg-secondary text-white">
                    <i class="mgc_close_line me-2"></i>Batal
                </a>
            </div>
        </form>
    </div>
</div>

<script>
function toggleSlideType() {
    const slideType = document.getElementById('slide_type').value;
    const imageSection = document.getElementById('image_section');
    const videoSection = document.getElementById('video_section');
    const backgroundImage = document.getElementById('background_image');
    const videoUrl = document.getElementById('video_url');
    
    if (slideType === 'image') {
        imageSection.style.display = 'block';
        videoSection.style.display = 'none';
        if (backgroundImage) backgroundImage.required = false;
        if (videoUrl) videoUrl.required = false;
    } else {
        imageSection.style.display = 'none';
        videoSection.style.display = 'block';
        if (backgroundImage) backgroundImage.required = false;
        if (videoUrl) videoUrl.required = true;
    }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    toggleSlideType();
});
</script>
@endsection

