@extends('admin.layouts.app')

@section('title', 'Buat Program Unggulan Baru')

@section('content')
<div class="mb-6">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Buat Program Unggulan Baru</h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">Tambah program unggulan baru (Expert Classes, Leadership & Problem Solving, atau Takhossus Kader Dakwah)</p>
</div>

<div class="card">
    <div class="p-6">
        <form action="{{ route('admin.program-unggulan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2">Pilih Program Unggulan *</label>
                <div class="grid grid-cols-1 gap-3">
                    <label class="flex items-center p-4 border rounded cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors {{ old('unit_type') == 'expert-classes' ? 'border-primary bg-primary/5' : 'border-gray-300 dark:border-gray-600' }}">
                        <input type="radio" name="unit_type" value="expert-classes" class="form-radio text-primary me-3" {{ old('unit_type') == 'expert-classes' ? 'checked' : '' }} onchange="updateSlugAndTitle('expert-classes', 'Expert Classes', 'Program Kelas Ahli')">
                        <div>
                            <span class="text-sm font-semibold block">Expert Classes</span>
                            <span class="text-xs text-gray-500">Program Kelas Ahli</span>
                        </div>
                    </label>
                    <label class="flex items-center p-4 border rounded cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors {{ old('unit_type') == 'leadership-problem-solving' ? 'border-primary bg-primary/5' : 'border-gray-300 dark:border-gray-600' }}">
                        <input type="radio" name="unit_type" value="leadership-problem-solving" class="form-radio text-primary me-3" {{ old('unit_type') == 'leadership-problem-solving' ? 'checked' : '' }} onchange="updateSlugAndTitle('leadership-problem-solving', 'Leadership & Problem Solving', 'Program Kepemimpinan dan Pemecahan Masalah')">
                        <div>
                            <span class="text-sm font-semibold block">Leadership & Problem Solving</span>
                            <span class="text-xs text-gray-500">Program Kepemimpinan dan Pemecahan Masalah</span>
                        </div>
                    </label>
                    <label class="flex items-center p-4 border rounded cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors {{ old('unit_type') == 'takhossus-kader-dakwah' ? 'border-primary bg-primary/5' : 'border-gray-300 dark:border-gray-600' }}">
                        <input type="radio" name="unit_type" value="takhossus-kader-dakwah" class="form-radio text-primary me-3" {{ old('unit_type') == 'takhossus-kader-dakwah' ? 'checked' : '' }} onchange="updateSlugAndTitle('takhossus-kader-dakwah', 'Takhossus bi At-Takhsis (Kader Dakwah)', 'Program Kader Dakwah')">
                        <div>
                            <span class="text-sm font-semibold block">Takhossus bi At-Takhsis (Kader Dakwah)</span>
                            <span class="text-xs text-gray-500">Program Kader Dakwah</span>
                        </div>
                    </label>
                </div>
                <p class="text-xs text-gray-500 mt-2">Pilih salah satu program unggulan yang ingin dibuat atau edit</p>
                @error('unit_type')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="title">Judul *</label>
                <input type="text" id="title" name="title" class="form-input w-full" value="{{ old('title') }}" required placeholder="Contoh: Expert Classes">
                @error('title')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="subtitle">Subtitle</label>
                <input type="text" id="subtitle" name="subtitle" class="form-input w-full" value="{{ old('subtitle') }}" placeholder="Contoh: Program Kelas Ahli">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="description">Deskripsi</label>
                <textarea id="description" name="description" class="form-input w-full" rows="4" placeholder="Deskripsi singkat tentang program unggulan ini">{{ old('description') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="image">Gambar</label>
                <input type="file" id="image" name="image" class="form-input w-full" accept="image/*">
                <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF, WEBP. Maksimal 5MB. Rekomendasi ukuran: 1920x1080px.</p>
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
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="intro_text">Teks Pengantar</label>
                <textarea id="intro_text" name="intro_text" class="form-input w-full" rows="4" placeholder="Teks pengantar yang akan ditampilkan di bagian intro halaman">{{ old('intro_text') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="content">Konten Lengkap</label>
                <textarea id="content" name="content" class="form-input w-full" rows="8" placeholder="Konten lengkap tentang program unggulan ini...">{{ old('content') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="tujuan">Tujuan Program</label>
                <textarea id="tujuan" name="tujuan" class="form-input w-full" rows="4" placeholder="Tujuan dari program unggulan ini">{{ old('tujuan') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="materi">Materi Pembelajaran</label>
                <textarea id="materi" name="materi" class="form-input w-full" rows="4" placeholder="Materi yang akan dipelajari dalam program ini">{{ old('materi') }}</textarea>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="durasi">Durasi Program</label>
                    <input type="text" id="durasi" name="durasi" class="form-input w-full" value="{{ old('durasi') }}" placeholder="Contoh: 6 Bulan, 1 Tahun">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="sasaran">Sasaran Peserta</label>
                    <input type="text" id="sasaran" name="sasaran" class="form-input w-full" value="{{ old('sasaran') }}" placeholder="Contoh: Santri Kelas 3 Aliyah">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="benefit">Manfaat/Benefit</label>
                <textarea id="benefit" name="benefit" class="form-input w-full" rows="4" placeholder="Manfaat yang akan didapat peserta program ini">{{ old('benefit') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="pendaftaran_info">Informasi Pendaftaran</label>
                <textarea id="pendaftaran_info" name="pendaftaran_info" class="form-input w-full" rows="4" placeholder="Informasi tentang cara pendaftaran program ini">{{ old('pendaftaran_info') }}</textarea>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="contact_email">Email Kontak</label>
                    <input type="email" id="contact_email" name="contact_email" class="form-input w-full" value="{{ old('contact_email') }}" placeholder="program@nuris.ac.id">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="contact_phone">Telepon Kontak</label>
                    <input type="text" id="contact_phone" name="contact_phone" class="form-input w-full" value="{{ old('contact_phone') }}" placeholder="(081) 234-567-890">
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
                    <label for="is_active" class="ms-2 text-sm text-gray-600 dark:text-gray-200">Program Unggulan Aktif</label>
                </div>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_save_line me-2"></i>Simpan
                </button>
                <a href="{{ route('admin.program-unggulan.index') }}" class="btn bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-200">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>

<script>
    function updateSlugAndTitle(slug, title, subtitle) {
        document.getElementById('title').value = title;
        document.getElementById('subtitle').value = subtitle;
    }

    // Auto-fill on page load if unit_type is set
    document.addEventListener('DOMContentLoaded', function() {
        const selectedProgram = document.querySelector('input[name="unit_type"]:checked');
        if (selectedProgram) {
            const slug = selectedProgram.value;
            const programs = {
                'expert-classes': { title: 'Expert Classes', subtitle: 'Program Kelas Ahli' },
                'leadership-problem-solving': { title: 'Leadership & Problem Solving', subtitle: 'Program Kepemimpinan dan Pemecahan Masalah' },
                'takhossus-kader-dakwah': { title: 'Takhossus bi At-Takhsis (Kader Dakwah)', subtitle: 'Program Kader Dakwah' }
            };
            if (programs[slug]) {
                updateSlugAndTitle(slug, programs[slug].title, programs[slug].subtitle);
            }
        }
    });
</script>
@endsection

