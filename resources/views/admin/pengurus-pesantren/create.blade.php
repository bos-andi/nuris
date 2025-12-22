@extends('admin.layouts.app')

@section('title', 'Tambah Pengurus Pesantren')

@section('content')
<div class="mb-6">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Tambah Pengurus Pesantren</h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">Tambah pengurus pesantren baru yang akan ditampilkan di halaman publik</p>
</div>

<div class="card">
    <div class="p-6">
        <form action="{{ route('admin.pengurus-pesantren.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="nama">Nama Lengkap *</label>
                <input type="text" id="nama" name="nama" class="form-input w-full" value="{{ old('nama') }}" required>
                @error('nama')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="jabatan">Jabatan *</label>
                <input type="text" id="jabatan" name="jabatan" class="form-input w-full" value="{{ old('jabatan') }}" placeholder="Contoh: Pengasuh, Wakil Pengasuh, Kepala Pesantren" required>
                @error('jabatan')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="jabatan_lengkap">Jabatan Lengkap</label>
                <input type="text" id="jabatan_lengkap" name="jabatan_lengkap" class="form-input w-full" value="{{ old('jabatan_lengkap') }}" placeholder="Contoh: Pengasuh PP. Nurul Islam">
                @error('jabatan_lengkap')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="kategori">Kategori</label>
                <input type="text" id="kategori" name="kategori" class="form-input w-full" value="{{ old('kategori') }}" placeholder="Contoh: Utama, Staf, dll">
                <p class="text-xs text-gray-500 mt-1">Kategori untuk mengelompokkan pengurus di halaman</p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="foto">Foto</label>
                <input type="file" id="foto" name="foto" class="form-input w-full" accept="image/*">
                <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF, WEBP. Maks: 2MB</p>
                @error('foto')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="order">Urutan</label>
                    <input type="number" id="order" name="order" class="form-input w-full" value="{{ old('order', 0) }}" min="0">
                    <p class="text-xs text-gray-500 mt-1">Urutan tampil (0 = pertama)</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2">Status</label>
                    <div class="flex items-center mt-2">
                        <input type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} class="form-checkbox">
                        <label for="is_active" class="ml-2 text-sm text-gray-600 dark:text-gray-200">Aktif</label>
                    </div>
                </div>
            </div>

            <div class="flex justify-end gap-2">
                <a href="{{ route('admin.pengurus-pesantren') }}" class="btn bg-gray-500 text-white">Batal</a>
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_save_line me-2"></i>Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

