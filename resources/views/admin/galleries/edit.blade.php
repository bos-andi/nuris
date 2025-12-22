@extends('admin.layouts.app')

@section('title', 'Edit Gallery')

@section('content')
<div class="mb-6">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Edit Gallery</h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">Edit gallery: {{ $gallery->title ?: 'Gallery #' . $gallery->id }}</p>
</div>

<div class="card">
    <div class="p-6">
        <form action="{{ route('admin.galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2">Tipe Gallery</label>
                <div class="flex gap-4">
                    <span class="px-3 py-2 rounded bg-gray-100 dark:bg-gray-700">
                        @if($gallery->type === 'photo')
                            <i class="mgc_image_line me-2"></i>Foto
                        @else
                            <i class="mgc_video_line me-2"></i>Video
                        @endif
                    </span>
                </div>
                <p class="text-xs text-gray-500 mt-1">Tipe gallery tidak dapat diubah</p>
            </div>

            @if($gallery->type === 'photo')
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="thumbnail">Thumbnail Gallery</label>
                @if($gallery->image_path)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}" class="w-full max-w-md h-auto object-cover rounded border" style="max-height: 300px;">
                        <p class="text-xs text-gray-500 mt-1">Thumbnail saat ini (gambar yang ditampilkan di list gallery)</p>
                    </div>
                @endif
                <input type="file" id="thumbnail" name="thumbnail" class="form-input w-full" accept="image/*">
                <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF, WEBP. Ukuran file berapapun akan otomatis dikompres menjadi maksimal 500KB. Kosongkan jika tidak ingin mengubah thumbnail.</p>
                @error('thumbnail')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Existing Photos -->
            @if($gallery->items->count() > 0)
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2">Foto dalam Gallery ({{ $gallery->items->count() }} foto)</label>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4 border rounded" style="background-color: #f9fafb;">
                    @foreach($gallery->items as $item)
                    <div class="relative group">
                        <img src="{{ asset('storage/' . $item->image_path) }}" alt="Foto {{ $loop->iteration }}" class="w-full h-32 object-cover rounded border">
                        <label class="absolute top-2 right-2 cursor-pointer">
                            <input type="checkbox" name="delete_items[]" value="{{ $item->id }}" class="form-checkbox bg-red-500 border-red-500">
                            <span class="absolute -top-1 -right-1 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs">×</span>
                        </label>
                        <p class="text-xs text-gray-600 mt-1 text-center">Hapus</p>
                    </div>
                    @endforeach
                </div>
                <p class="text-xs text-gray-500 mt-2">Centang foto yang ingin dihapus</p>
            </div>
            @endif

            <!-- Add More Photos -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="photos">Tambah Foto ke Gallery</label>
                <input type="file" id="photos" name="photos[]" class="form-input w-full" accept="image/*" multiple>
                <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF, WEBP. Ukuran file berapapun akan otomatis dikompres menjadi maksimal 500KB. Anda bisa memilih lebih dari 1 foto sekaligus.</p>
                @error('photos')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
                @error('photos.*')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            @else
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="video_url">URL Video</label>
                <input type="text" id="video_url" name="video_url" class="form-input w-full" value="{{ old('video_url', $gallery->video_url) }}" placeholder="https://youtube.com/watch?v=... atau https://vimeo.com/...">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="video_embed_code">Embed Code Video</label>
                <textarea id="video_embed_code" name="video_embed_code" class="form-input w-full" rows="4" placeholder="<iframe src='...'></iframe>">{{ old('video_embed_code', $gallery->video_embed_code) }}</textarea>
            </div>
            @endif

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="title">Judul</label>
                <input type="text" id="title" name="title" class="form-input w-full" value="{{ old('title', $gallery->title) }}" placeholder="Judul gallery">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="description">Deskripsi</label>
                <textarea id="description" name="description" class="form-input w-full" rows="3" placeholder="Deskripsi gallery">{{ old('description', $gallery->description) }}</textarea>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="order">Urutan</label>
                    <input type="number" id="order" name="order" class="form-input w-full" value="{{ old('order', $gallery->order) }}" min="0">
                </div>
                <div>
                    <label class="flex items-center gap-2 mt-6">
                        <input type="checkbox" name="is_published" value="1" {{ old('is_published', $gallery->is_published) ? 'checked' : '' }} class="form-checkbox">
                        <span class="text-sm font-medium text-gray-600 dark:text-gray-200">Publish</span>
                    </label>
                </div>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_save_line me-2"></i>Update
                </button>
                <a href="{{ route('admin.galleries.index') }}" class="btn bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-200">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

