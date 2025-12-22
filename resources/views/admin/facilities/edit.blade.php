@extends('admin.layouts.app')

@section('title', 'Edit Fasilitas')

@section('content')
<div class="mb-6">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Edit Fasilitas</h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">Edit fasilitas: {{ $facility->title }}</p>
</div>

<div class="card">
    <div class="p-6">
        <form action="{{ route('admin.facilities.update', $facility->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="title">Nama Fasilitas *</label>
                <input type="text" id="title" name="title" class="form-input w-full" value="{{ old('title', $facility->title) }}" required placeholder="Contoh: Masjid, Perpustakaan, Laboratorium">
                @error('title')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="description">Deskripsi</label>
                <textarea id="description" name="description" class="form-input w-full" rows="4" placeholder="Deskripsi lengkap tentang fasilitas ini">{{ old('description', $facility->description) }}</textarea>
                @error('description')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="category">Kategori</label>
                    <input type="text" id="category" name="category" class="form-input w-full" value="{{ old('category', $facility->category) }}" placeholder="Contoh: Pendidikan, Asrama, Penunjang">
                    <p class="text-xs text-gray-500 mt-1">Kategori untuk mengelompokkan fasilitas</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="icon">Icon (Font Awesome)</label>
                    <input type="text" id="icon" name="icon" class="form-input w-full" value="{{ old('icon', $facility->icon) }}" placeholder="Contoh: fa-solid fa-mosque">
                    <p class="text-xs text-gray-500 mt-1">Kode icon Font Awesome (jika tidak upload gambar)</p>
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="image">Gambar</label>
                @if($facility->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $facility->image) }}" alt="{{ $facility->title }}" class="w-48 h-32 object-cover rounded border">
                        <p class="text-xs text-gray-500 mt-1">Gambar saat ini</p>
                    </div>
                @endif
                <input type="file" id="image" name="image" class="form-input w-full" accept="image/*">
                <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF, WEBP. Maksimal 5MB. Rekomendasi ukuran: 800x600px. Kosongkan jika tidak ingin mengubah gambar.</p>
                @error('image')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="video">Video URL</label>
                <input type="text" id="video" name="video" class="form-input w-full" value="{{ old('video', $facility->video) }}" placeholder="Contoh: https://www.youtube.com/watch?v=... atau URL video lainnya">
                <p class="text-xs text-gray-500 mt-1">Link video YouTube atau video lainnya (opsional)</p>
                @error('video')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="order">Urutan</label>
                    <input type="number" id="order" name="order" class="form-input w-full" value="{{ old('order', $facility->order) }}" min="0">
                    <p class="text-xs text-gray-500 mt-1">Urutan tampil (angka lebih kecil tampil lebih dulu)</p>
                </div>
                <div>
                    <label class="flex items-center gap-2 mt-6">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $facility->is_active) ? 'checked' : '' }} class="form-checkbox">
                        <span class="text-sm font-medium text-gray-600 dark:text-gray-200">Aktifkan</span>
                    </label>
                    <p class="text-xs text-gray-500 mt-1">Fasilitas yang tidak aktif tidak akan ditampilkan</p>
                </div>
            </div>

            <div class="flex gap-3">
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_save_line me-2"></i>Update Fasilitas
                </button>
                <a href="{{ route('admin.facilities') }}" class="btn bg-secondary text-white">
                    <i class="mgc_close_line me-2"></i>Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

