@extends('admin.layouts.app')

@section('title', 'Buat Unit Khidmah Baru')

@section('content')
<div class="mb-6">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Buat Unit Khidmah Baru</h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">Tambah unit khidmah baru (Nuris Media, Nuris Medika, Nuris School Bank, atau Nuris Mart)</p>
</div>

<div class="card">
    <div class="p-6">
        <form action="{{ route('admin.unit-khidmah.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2">Pilih Unit Khidmah *</label>
                <div class="grid grid-cols-2 gap-3">
                    <label class="flex items-center p-3 border rounded cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors {{ old('unit_type') == 'nuris-media' ? 'border-primary bg-primary/5' : 'border-gray-300 dark:border-gray-600' }}">
                        <input type="radio" name="unit_type" value="nuris-media" class="form-radio text-primary me-2" {{ old('unit_type') == 'nuris-media' ? 'checked' : '' }} onchange="updateSlugAndTitle('nuris-media', 'Nuris Media', 'Unit Media & Komunikasi')">
                        <span class="text-sm font-medium">Nuris Media</span>
                    </label>
                    <label class="flex items-center p-3 border rounded cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors {{ old('unit_type') == 'nuris-medika' ? 'border-primary bg-primary/5' : 'border-gray-300 dark:border-gray-600' }}">
                        <input type="radio" name="unit_type" value="nuris-medika" class="form-radio text-primary me-2" {{ old('unit_type') == 'nuris-medika' ? 'checked' : '' }} onchange="updateSlugAndTitle('nuris-medika', 'Nuris Medika', 'Unit Kesehatan')">
                        <span class="text-sm font-medium">Nuris Medika</span>
                    </label>
                    <label class="flex items-center p-3 border rounded cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors {{ old('unit_type') == 'nuris-school-bank' ? 'border-primary bg-primary/5' : 'border-gray-300 dark:border-gray-600' }}">
                        <input type="radio" name="unit_type" value="nuris-school-bank" class="form-radio text-primary me-2" {{ old('unit_type') == 'nuris-school-bank' ? 'checked' : '' }} onchange="updateSlugAndTitle('nuris-school-bank', 'Nuris School Bank', 'Unit Keuangan')">
                        <span class="text-sm font-medium">Nuris School Bank</span>
                    </label>
                    <label class="flex items-center p-3 border rounded cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors {{ old('unit_type') == 'nuris-mart' ? 'border-primary bg-primary/5' : 'border-gray-300 dark:border-gray-600' }}">
                        <input type="radio" name="unit_type" value="nuris-mart" class="form-radio text-primary me-2" {{ old('unit_type') == 'nuris-mart' ? 'checked' : '' }} onchange="updateSlugAndTitle('nuris-mart', 'Nuris Mart', 'Unit Perdagangan')">
                        <span class="text-sm font-medium">Nuris Mart</span>
                    </label>
                </div>
                <p class="text-xs text-gray-500 mt-2">Pilih salah satu unit khidmah yang ingin dibuat atau edit</p>
                @error('slug')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <input type="hidden" id="slug" name="slug" value="{{ old('slug') }}" required>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="title">Judul *</label>
                <input type="text" id="title" name="title" class="form-input w-full" value="{{ old('title') }}" required placeholder="Contoh: Nuris Media">
                @error('title')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="subtitle">Subtitle</label>
                <input type="text" id="subtitle" name="subtitle" class="form-input w-full" value="{{ old('subtitle') }}" placeholder="Contoh: Unit Media & Komunikasi">
            </div>


            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="description">Deskripsi</label>
                <textarea id="description" name="description" class="form-input w-full" rows="4" placeholder="Deskripsi singkat tentang unit khidmah ini">{{ old('description') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="image">Gambar</label>
                <input type="file" id="image" name="image" class="form-input w-full" accept="image/*">
                <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF, WEBP. Maksimal 5MB. Rekomendasi ukuran: 1920x1080px. Gambar akan ditampilkan di samping konten.</p>
                @error('image')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="video_url">URL Video YouTube</label>
                <input type="url" id="video_url" name="video_url" class="form-input w-full" value="{{ old('video_url') }}" placeholder="https://youtu.be/... atau https://www.youtube.com/watch?v=...">
                <p class="text-xs text-gray-500 mt-1">Link video YouTube untuk ditampilkan di halaman</p>
                @error('video_url')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="narasi">Narasi/Transkrip Video</label>
                <textarea id="narasi" name="narasi" class="form-input w-full" rows="8" placeholder="Masukkan narasi atau transkrip dari video YouTube di sini...">{{ old('narasi') }}</textarea>
                <p class="text-xs text-gray-500 mt-1">Narasi atau transkrip dari video yang akan ditampilkan di halaman</p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="intro_text">Teks Pengantar</label>
                <textarea id="intro_text" name="intro_text" class="form-input w-full" rows="4" placeholder="Teks pengantar yang akan ditampilkan di bagian intro halaman">{{ old('intro_text') }}</textarea>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="visi">Visi</label>
                    <textarea id="visi" name="visi" class="form-input w-full" rows="3" placeholder="Visi unit khidmah">{{ old('visi') }}</textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="misi">Misi</label>
                    <textarea id="misi" name="misi" class="form-input w-full" rows="3" placeholder="Misi unit khidmah">{{ old('misi') }}</textarea>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="contact_email">Email Kontak</label>
                    <input type="email" id="contact_email" name="contact_email" class="form-input w-full" value="{{ old('contact_email') }}" placeholder="media@nuris.ac.id">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="contact_phone">Telepon Kontak</label>
                    <input type="text" id="contact_phone" name="contact_phone" class="form-input w-full" value="{{ old('contact_phone') }}" placeholder="(081) 234-567-890">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="operational_hours">Jam Operasional</label>
                    <input type="text" id="operational_hours" name="operational_hours" class="form-input w-full" value="{{ old('operational_hours') }}" placeholder="Senin - Jumat: 08:00 - 16:00 WIB">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="location">Lokasi</label>
                    <input type="text" id="location" name="location" class="form-input w-full" value="{{ old('location') }}" placeholder="Pondok Pesantren Nurul Islam, Mojokerto">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="meta_title">Meta Title</label>
                    <input type="text" id="meta_title" name="meta_title" class="form-input w-full" value="{{ old('meta_title') }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="order">Urutan</label>
                    <input type="number" id="order" name="order" class="form-input w-full" value="{{ old('order', 0) }}" min="0">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="meta_description">Meta Description</label>
                <textarea id="meta_description" name="meta_description" class="form-input w-full" rows="3">{{ old('meta_description') }}</textarea>
            </div>

            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" id="is_active" name="is_active" value="1" class="form-checkbox rounded" {{ old('is_active', true) ? 'checked' : '' }}>
                    <label for="is_active" class="ms-2 text-sm text-gray-600 dark:text-gray-200">Unit Khidmah Aktif</label>
                </div>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_save_line me-2"></i>Simpan
                </button>
                <a href="{{ route('admin.unit-khidmah.index') }}" class="btn bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-200">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>

<script>
    function updateSlugAndTitle(slug, title, subtitle) {
        document.getElementById('slug').value = slug;
        document.getElementById('title').value = title;
        document.getElementById('subtitle').value = subtitle;
    }

    // Auto-fill on page load if unit_type is set
    document.addEventListener('DOMContentLoaded', function() {
        const selectedUnit = document.querySelector('input[name="unit_type"]:checked');
        if (selectedUnit) {
            const slug = selectedUnit.value;
            const titles = {
                'nuris-media': { title: 'Nuris Media', subtitle: 'Unit Media & Komunikasi' },
                'nuris-medika': { title: 'Nuris Medika', subtitle: 'Unit Kesehatan' },
                'nuris-school-bank': { title: 'Nuris School Bank', subtitle: 'Unit Keuangan' },
                'nuris-mart': { title: 'Nuris Mart', subtitle: 'Unit Perdagangan' }
            };
            if (titles[slug]) {
                updateSlugAndTitle(slug, titles[slug].title, titles[slug].subtitle);
            }
        }
    });
</script>
@endsection

