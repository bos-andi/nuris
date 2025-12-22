@extends('admin.layouts.app')

@section('title', 'Edit Program Unggulan')

@section('content')
<div class="mb-6">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Edit Program Unggulan</h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">Edit program unggulan: {{ $program->title }}</p>
</div>

<div class="card">
    <div class="p-6">
        <form action="{{ route('admin.program-unggulan.update', $program->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2">Program Unggulan</label>
                <div class="grid grid-cols-1 gap-3">
                    <label class="flex items-center p-4 border rounded cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors {{ $program->slug == 'expert-classes' ? 'border-primary bg-primary/5' : 'border-gray-300 dark:border-gray-600 opacity-50' }}">
                        <input type="radio" name="unit_type" value="expert-classes" class="form-radio text-primary me-3" {{ $program->slug == 'expert-classes' ? 'checked' : '' }} disabled>
                        <div>
                            <span class="text-sm font-semibold block">Expert Classes</span>
                            <span class="text-xs text-gray-500">Program Kelas Ahli</span>
                        </div>
                    </label>
                    <label class="flex items-center p-4 border rounded cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors {{ $program->slug == 'leadership-problem-solving' ? 'border-primary bg-primary/5' : 'border-gray-300 dark:border-gray-600 opacity-50' }}">
                        <input type="radio" name="unit_type" value="leadership-problem-solving" class="form-radio text-primary me-3" {{ $program->slug == 'leadership-problem-solving' ? 'checked' : '' }} disabled>
                        <div>
                            <span class="text-sm font-semibold block">Leadership & Problem Solving</span>
                            <span class="text-xs text-gray-500">Program Kepemimpinan dan Pemecahan Masalah</span>
                        </div>
                    </label>
                    <label class="flex items-center p-4 border rounded cursor-pointer hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors {{ $program->slug == 'takhossus-kader-dakwah' ? 'border-primary bg-primary/5' : 'border-gray-300 dark:border-gray-600 opacity-50' }}">
                        <input type="radio" name="unit_type" value="takhossus-kader-dakwah" class="form-radio text-primary me-3" {{ $program->slug == 'takhossus-kader-dakwah' ? 'checked' : '' }} disabled>
                        <div>
                            <span class="text-sm font-semibold block">Takhossus bi At-Takhsis (Kader Dakwah)</span>
                            <span class="text-xs text-gray-500">Program Kader Dakwah</span>
                        </div>
                    </label>
                </div>
                <p class="text-xs text-gray-500 mt-2">Program unggulan yang sedang diedit (tidak dapat diubah)</p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="title">Judul *</label>
                <input type="text" id="title" name="title" class="form-input w-full" value="{{ old('title', $program->title) }}" required>
                @error('title')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="subtitle">Subtitle</label>
                <input type="text" id="subtitle" name="subtitle" class="form-input w-full" value="{{ old('subtitle', $program->subtitle) }}">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="description">Deskripsi</label>
                <textarea id="description" name="description" class="form-input w-full" rows="4">{{ old('description', $program->description) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="image">Gambar</label>
                @if($program->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $program->image) }}" alt="{{ $program->title }}" class="w-full max-w-md h-auto object-cover rounded border" style="max-height: 300px;">
                        <p class="text-xs text-gray-500 mt-1">Gambar saat ini</p>
                    </div>
                @endif
                <input type="file" id="image" name="image" class="form-input w-full" accept="image/*">
                <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF, WEBP. Maksimal 5MB. Kosongkan jika tidak ingin mengubah gambar.</p>
                @error('image')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="video_url">URL Video YouTube</label>
                <input type="url" id="video_url" name="video_url" class="form-input w-full" value="{{ old('video_url', $program->video_url) }}" placeholder="https://youtu.be/...">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="intro_text">Teks Pengantar</label>
                <textarea id="intro_text" name="intro_text" class="form-input w-full" rows="4">{{ old('intro_text', $program->intro_text) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="content">Konten Lengkap</label>
                <textarea id="content" name="content" class="form-input w-full" rows="8">{{ old('content', $program->content) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="tujuan">Tujuan Program</label>
                <textarea id="tujuan" name="tujuan" class="form-input w-full" rows="4">{{ old('tujuan', $program->tujuan) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="materi">Materi Pembelajaran</label>
                <textarea id="materi" name="materi" class="form-input w-full" rows="4">{{ old('materi', $program->materi) }}</textarea>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="durasi">Durasi Program</label>
                    <input type="text" id="durasi" name="durasi" class="form-input w-full" value="{{ old('durasi', $program->durasi) }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="sasaran">Sasaran Peserta</label>
                    <input type="text" id="sasaran" name="sasaran" class="form-input w-full" value="{{ old('sasaran', $program->sasaran) }}">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="benefit">Manfaat/Benefit</label>
                <textarea id="benefit" name="benefit" class="form-input w-full" rows="4">{{ old('benefit', $program->benefit) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="pendaftaran_info">Informasi Pendaftaran</label>
                <textarea id="pendaftaran_info" name="pendaftaran_info" class="form-input w-full" rows="4">{{ old('pendaftaran_info', $program->pendaftaran_info) }}</textarea>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="contact_email">Email Kontak</label>
                    <input type="email" id="contact_email" name="contact_email" class="form-input w-full" value="{{ old('contact_email', $program->contact_email) }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="contact_phone">Telepon Kontak</label>
                    <input type="text" id="contact_phone" name="contact_phone" class="form-input w-full" value="{{ old('contact_phone', $program->contact_phone) }}">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="meta_title">Meta Title</label>
                    <input type="text" id="meta_title" name="meta_title" class="form-input w-full" value="{{ old('meta_title', $program->meta_title) }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="order">Urutan</label>
                    <input type="number" id="order" name="order" class="form-input w-full" value="{{ old('order', $program->order) }}" min="0">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="meta_description">Meta Description</label>
                <textarea id="meta_description" name="meta_description" class="form-input w-full" rows="3">{{ old('meta_description', $program->meta_description) }}</textarea>
            </div>

            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" id="is_active" name="is_active" value="1" class="form-checkbox rounded" {{ old('is_active', $program->is_active) ? 'checked' : '' }}>
                    <label for="is_active" class="ms-2 text-sm text-gray-600 dark:text-gray-200">Program Unggulan Aktif</label>
                </div>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_save_line me-2"></i>Update
                </button>
                <a href="{{ route('admin.program-unggulan.index') }}" class="btn bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-200">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

