@extends('admin.layouts.app')

@section('title', 'Edit Artikel')

@section('content')
<div class="mb-6">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Edit Artikel</h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">Edit artikel: {{ $article->title }}</p>
</div>

<div class="card">
    <div class="p-6">
        <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="title">Judul Artikel *</label>
                <input type="text" id="title" name="title" class="form-input w-full" value="{{ old('title', $article->title) }}" required>
                @error('title')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="slug">Slug</label>
                <input type="text" id="slug" name="slug" class="form-input w-full" value="{{ old('slug', $article->slug) }}" placeholder="Akan dibuat otomatis jika kosong">
                @error('slug')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="author">Author</label>
                    <input type="text" id="author" name="author" class="form-input w-full" value="{{ old('author', $article->author) }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="category_id">Kategori</label>
                    <select id="category_id" name="category_id" class="form-input w-full">
                        <option value="">Pilih Kategori</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $article->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    <p class="text-xs text-gray-500 mt-1">Atau gunakan kategori manual di bawah</p>
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="category">Kategori Manual (Opsional)</label>
                <input type="text" id="category" name="category" class="form-input w-full" value="{{ old('category', $article->category) }}" placeholder="Jika tidak memilih kategori di atas">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2">Tag</label>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-2 max-h-48 overflow-y-auto border border-gray-200 dark:border-gray-700 rounded p-3">
                    @foreach($tags as $tag)
                        <label class="flex items-center gap-2 cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800 p-2 rounded">
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}" class="form-checkbox rounded" {{ in_array($tag->id, old('tags', $article->tags->pluck('id')->toArray())) ? 'checked' : '' }}>
                            <span class="text-sm">{{ $tag->name }}</span>
                        </label>
                    @endforeach
                </div>
                @if($tags->isEmpty())
                    <p class="text-xs text-gray-500 mt-1">Belum ada tag. <a href="{{ route('admin.tags.create') }}" class="text-primary">Buat tag baru</a></p>
                @endif
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="excerpt">Ringkasan (Excerpt)</label>
                <textarea id="excerpt" name="excerpt" class="form-input w-full" rows="3">{{ old('excerpt', $article->excerpt) }}</textarea>
                <p class="text-xs text-gray-500 mt-1">Ringkasan singkat artikel yang akan ditampilkan di halaman list</p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="content">Konten *</label>
                <textarea id="content" name="content" class="form-input w-full" rows="15" required>{{ old('content', $article->content) }}</textarea>
                @error('content')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/tinymce@6/tinymce.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contentTextarea = document.getElementById('content');
            
            if (!contentTextarea) {
                console.error('Content textarea not found!');
                return;
            }
            
            console.log('Initializing TinyMCE...');
            
            tinymce.init({
                target: contentTextarea,
                height: 500,
                menubar: false,
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount',
                    'textcolor', 'colorpicker'
                ],
                toolbar: 'undo redo | blocks | ' +
                    'fontfamily fontsize | bold italic underline strikethrough | forecolor backcolor | ' +
                    'alignleft aligncenter alignright alignjustify | bullist numlist | ' +
                    'outdent indent | link image table | code fullscreen | removeformat',
                font_size_formats: '8pt 9pt 10pt 11pt 12pt 13pt 14pt 15pt 16pt 18pt 20pt 22pt 24pt 26pt 28pt 30pt 32pt 34pt 36pt 40pt 44pt 48pt 54pt 60pt 66pt 72pt 80pt 88pt 96pt',
                font_family_formats: 
                    'Arial=Arial, Helvetica, sans-serif; ' +
                    'Arial Black=Arial Black, Gadget, sans-serif; ' +
                    'Comic Sans MS=Comic Sans MS, cursive; ' +
                    'Courier New=Courier New, Courier, monospace; ' +
                    'Georgia=Georgia, serif; ' +
                    'Impact=Impact, Charcoal, sans-serif; ' +
                    'Lucida Console=Lucida Console, Monaco, monospace; ' +
                    'Lucida Sans Unicode=Lucida Sans Unicode, Lucida Grande, sans-serif; ' +
                    'Palatino Linotype=Palatino Linotype, Book Antiqua, Palatino, serif; ' +
                    'Tahoma=Tahoma, Geneva, sans-serif; ' +
                    'Times New Roman=Times New Roman, Times, serif; ' +
                    'Trebuchet MS=Trebuchet MS, Helvetica, sans-serif; ' +
                    'Verdana=Verdana, Geneva, sans-serif; ' +
                    'Symbol=Symbol; ' +
                    'Webdings=Webdings; ' +
                    'Wingdings=Wingdings, Zapf Dingbats',
                images_upload_url: '{{ route("admin.articles.upload-image") }}',
                images_upload_handler: function (blobInfo, progress) {
                    return new Promise(function (resolve, reject) {
                        var xhr = new XMLHttpRequest();
                        xhr.withCredentials = false;
                        xhr.open('POST', '{{ route("admin.articles.upload-image") }}');
                        
                        xhr.upload.onprogress = function (e) {
                            progress(e.loaded / e.total * 100);
                        };
                        
                        xhr.onload = function () {
                            if (xhr.status === 403) {
                                reject({ message: 'HTTP Error: ' + xhr.status, remove: true });
                                return;
                            }
                            
                            if (xhr.status < 200 || xhr.status >= 300) {
                                reject('HTTP Error: ' + xhr.status);
                                return;
                            }
                            
                            var json = JSON.parse(xhr.responseText);
                            
                            if (!json || typeof json.url != 'string') {
                                reject('Invalid JSON: ' + xhr.responseText);
                                return;
                            }
                            
                            resolve(json.url);
                        };
                        
                        xhr.onerror = function () {
                            reject('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
                        };
                        
                        var formData = new FormData();
                        formData.append('upload', blobInfo.blob(), blobInfo.filename());
                        formData.append('_token', '{{ csrf_token() }}');
                        
                        xhr.send(formData);
                    });
                },
                image_resize: true,
                image_dimensions: true,
                setup: function(editor) {
                    editor.on('init', function() {
                        console.log('✅ TinyMCE initialized successfully!');
                    });
                    
                    // Sync content to textarea before form submit
                    editor.on('change', function() {
                        editor.save();
                    });
                }
            });
            
            // Ensure TinyMCE content is saved before form submit
            const form = document.querySelector('form[action*="admin/articles"]');
            if (form) {
                form.addEventListener('submit', function(e) {
                    // Get TinyMCE instance
                    if (typeof tinymce !== 'undefined' && tinymce.get('content')) {
                        const editor = tinymce.get('content');
                        if (editor) {
                            // Save content to textarea
                            editor.save();
                            console.log('TinyMCE content saved before submit');
                        }
                    }
                });
            }
        });
    </script>
    @endpush

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="featured_image">Featured Image</label>
                @if($article->featured_image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $article->featured_image) }}" alt="Current image" class="max-w-xs rounded" style="max-height: 200px;">
                    <p class="text-xs text-gray-500 mt-1">Gambar saat ini</p>
                </div>
                @endif
                <input type="file" id="featured_image" name="featured_image" class="form-input w-full" accept="image/*">
                <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF. Maksimal 2MB. Kosongkan jika tidak ingin mengubah gambar.</p>
                @error('featured_image')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="published_at">Tanggal Publikasi</label>
                    <input type="datetime-local" id="published_at" name="published_at" class="form-input w-full" value="{{ old('published_at', $article->published_at ? $article->published_at->format('Y-m-d\TH:i') : '') }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="meta_title">Meta Title</label>
                    <input type="text" id="meta_title" name="meta_title" class="form-input w-full" value="{{ old('meta_title', $article->meta_title) }}">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="meta_description">Meta Description</label>
                <textarea id="meta_description" name="meta_description" class="form-input w-full" rows="3">{{ old('meta_description', $article->meta_description) }}</textarea>
            </div>

            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" id="is_published" name="is_published" value="1" class="form-checkbox rounded" {{ old('is_published', $article->is_published) ? 'checked' : '' }}>
                    <label for="is_published" class="ms-2 text-sm text-gray-600 dark:text-gray-200">Publikasikan Artikel</label>
                </div>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_save_line me-2"></i>Simpan Perubahan
                </button>
                <a href="{{ route('admin.articles') }}" class="btn bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-200">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>


@endsection

