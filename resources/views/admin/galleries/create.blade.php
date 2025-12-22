@extends('admin.layouts.app')

@section('title', 'Tambah Gallery')

@section('content')
<div class="mb-6">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Tambah Gallery</h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">Tambah foto atau video baru ke gallery</p>
</div>

@if(session('error'))
<div class="alert alert-danger mb-4">
    <strong>Error:</strong> {{ session('error') }}
    <br><br>
    <strong>Cara mengaktifkan GD Extension di XAMPP:</strong>
    <ol class="list-decimal list-inside mt-2 space-y-1">
        <li>Buka XAMPP Control Panel</li>
        <li>Klik "Config" di sebelah Apache → Pilih "PHP (php.ini)"</li>
        <li>Cari baris <code class="bg-gray-100 px-1 rounded">;extension=gd</code></li>
        <li>Hapus tanda <code class="bg-gray-100 px-1 rounded">;</code> sehingga menjadi <code class="bg-gray-100 px-1 rounded">extension=gd</code></li>
        <li>Simpan file (Ctrl+S) dan restart Apache di XAMPP Control Panel</li>
    </ol>
</div>
@endif

<div class="card">
    <div class="p-6">
        <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data" id="galleryForm">
            @csrf
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2">Tipe Gallery *</label>
                <div class="flex gap-4">
                    <label class="flex items-center cursor-pointer">
                        <input type="radio" name="type" value="photo" class="form-radio text-primary me-2" checked onchange="toggleGalleryType('photo')">
                        <span class="text-sm font-medium">Foto</span>
                    </label>
                    <label class="flex items-center cursor-pointer">
                        <input type="radio" name="type" value="video" class="form-radio text-primary me-2" onchange="toggleGalleryType('video')">
                        <span class="text-sm font-medium">Video</span>
                    </label>
                </div>
            </div>

            <!-- Photo Upload Section -->
            <div id="photoSection">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="photos">Upload Foto *</label>
                    <input type="file" id="photos" name="photos[]" class="form-input w-full" accept="image/*" multiple onchange="handleFileSelect(event)">
                    <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF, WEBP. Ukuran file berapapun akan otomatis dikompres menjadi maksimal 500KB.</p>
                    <p class="text-xs text-gray-500 mt-1">Anda bisa memilih lebih dari 1 foto sekaligus. Foto yang sudah dipilih akan ditampilkan di bawah.</p>
                    @error('photos')
                        <p class="text-danger text-sm mt-1">{{ $message }}</p>
                    @enderror
                    @error('photos.*')
                        <p class="text-danger text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Photo Preview Section -->
                <div id="photoPreview" class="mb-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4"></div>
            </div>

            <!-- Video Section -->
            <div id="videoSection" style="display: none;">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="video_url">URL Video</label>
                    <input type="text" id="video_url" name="video_url" class="form-input w-full" value="{{ old('video_url') }}" placeholder="https://youtube.com/watch?v=... atau https://vimeo.com/...">
                    <p class="text-xs text-gray-500 mt-1">Link video YouTube, Vimeo, atau platform video lainnya</p>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="video_embed_code">Embed Code Video</label>
                    <textarea id="video_embed_code" name="video_embed_code" class="form-input w-full" rows="4" placeholder="<iframe src='...'></iframe>">{{ old('video_embed_code') }}</textarea>
                    <p class="text-xs text-gray-500 mt-1">Kode embed video (opsional, jika tidak menggunakan URL)</p>
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="title">Judul</label>
                <input type="text" id="title" name="title" class="form-input w-full" value="{{ old('title') }}" placeholder="Judul gallery (opsional)">
                <p class="text-xs text-gray-500 mt-1">Jika kosong, akan dibuat otomatis (Foto 1, Foto 2, dll atau Video + timestamp)</p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="description">Deskripsi</label>
                <textarea id="description" name="description" class="form-input w-full" rows="3" placeholder="Deskripsi gallery (opsional)">{{ old('description') }}</textarea>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="order">Urutan</label>
                    <input type="number" id="order" name="order" class="form-input w-full" value="{{ old('order') }}" min="0">
                </div>
                <div>
                    <label class="flex items-center gap-2 mt-6">
                        <input type="checkbox" name="is_published" value="1" {{ old('is_published', true) ? 'checked' : '' }} class="form-checkbox">
                        <span class="text-sm font-medium text-gray-600 dark:text-gray-200">Publish</span>
                    </label>
                </div>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_save_line me-2"></i>Simpan
                </button>
                <a href="{{ route('admin.galleries.index') }}" class="btn bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-200">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>

<script>
    let selectedPhotos = [];

    function toggleGalleryType(type) {
        const photoSection = document.getElementById('photoSection');
        const videoSection = document.getElementById('videoSection');
        const photosInput = document.getElementById('photos');
        const videoUrlInput = document.getElementById('video_url');
        const videoEmbedInput = document.getElementById('video_embed_code');

        if (type === 'photo') {
            photoSection.style.display = 'block';
            videoSection.style.display = 'none';
            photosInput.setAttribute('required', 'required');
            videoUrlInput.removeAttribute('required');
            videoEmbedInput.removeAttribute('required');
        } else {
            photoSection.style.display = 'none';
            videoSection.style.display = 'block';
            photosInput.removeAttribute('required');
        }
    }

    function handleFileSelect(event) {
        const files = Array.from(event.target.files);
        
        files.forEach(file => {
            // Check if file already selected
            const exists = selectedPhotos.some(photo => photo.name === file.name && photo.size === file.size);
            if (exists) {
                return;
            }

            // No size limit - all images will be compressed to 500KB

            // Add to selected photos
            selectedPhotos.push(file);

            // Create preview
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('photoPreview');
                const photoIndex = selectedPhotos.length - 1;
                
                const photoDiv = document.createElement('div');
                photoDiv.className = 'relative group';
                photoDiv.dataset.index = photoIndex;
                photoDiv.innerHTML = `
                    <div class="relative">
                        <img src="${e.target.result}" alt="${file.name}" class="w-full h-32 object-cover rounded border">
                        <button type="button" onclick="removePhoto(${photoIndex})" class="absolute top-2 right-2 bg-red-500 text-white rounded-full p-1 opacity-0 group-hover:opacity-100 transition-opacity">
                            <i class="mgc_close_line text-sm"></i>
                        </button>
                        <div class="absolute bottom-0 left-0 right-0 bg-black/50 text-white text-xs p-1 rounded-b">
                            ${file.name} (${formatFileSize(file.size)})
                        </div>
                    </div>
                `;
                preview.appendChild(photoDiv);
            };
            reader.readAsDataURL(file);
        });

        // Update file input to include all selected files
        updateFileInput();
    }

    function removePhoto(index) {
        // Remove from array
        selectedPhotos.splice(index, 1);
        
        // Remove preview
        const preview = document.getElementById('photoPreview');
        const photoDiv = preview.querySelector(`[data-index="${index}"]`);
        if (photoDiv) {
            photoDiv.remove();
        }

        // Re-index remaining photos
        const remainingDivs = preview.querySelectorAll('[data-index]');
        remainingDivs.forEach((div, newIndex) => {
            div.dataset.index = newIndex;
            const removeBtn = div.querySelector('button');
            if (removeBtn) {
                removeBtn.setAttribute('onclick', `removePhoto(${newIndex})`);
            }
        });

        // Update file input
        updateFileInput();
    }

    function updateFileInput() {
        const input = document.getElementById('photos');
        const dataTransfer = new DataTransfer();
        
        selectedPhotos.forEach(file => {
            dataTransfer.items.add(file);
        });
        
        input.files = dataTransfer.files;
    }

    function formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return Math.round(bytes / Math.pow(k, i) * 100) / 100 + ' ' + sizes[i];
    }

    // Prevent form submission if no photos selected for photo type
    document.getElementById('galleryForm').addEventListener('submit', function(e) {
        const type = document.querySelector('input[name="type"]:checked').value;
        if (type === 'photo' && selectedPhotos.length === 0) {
            e.preventDefault();
            alert('Silakan pilih minimal 1 foto.');
            return false;
        }
    });
</script>
@endsection

