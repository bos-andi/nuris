@extends('admin.layouts.app')

@section('title', 'Tambah Data Guru/Karyawan')

@section('content')
<div class="mb-6">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Tambah Data Guru/Karyawan</h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">Tambah data guru atau karyawan baru</p>
</div>

<div class="card">
    <div class="p-6">
        <form action="{{ route('admin.staff.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="nama">Nama Lengkap *</label>
                <input type="text" id="nama" name="nama" class="form-input w-full" value="{{ old('nama') }}" required>
                @error('nama')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="nip">NIP/NIK</label>
                    <input type="text" id="nip" name="nip" class="form-input w-full" value="{{ old('nip') }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="tmt">TMT (Tahun)</label>
                    <input type="text" id="tmt" name="tmt" class="form-input w-full" value="{{ old('tmt') }}" placeholder="Contoh: 2020" maxlength="4" pattern="[0-9]{4}">
                    <p class="text-xs text-gray-500 mt-1">Masukkan tahun saja (4 digit), contoh: 2020</p>
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="tempat_tanggal_lahir">Tempat Tanggal Lahir</label>
                <input type="text" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" class="form-input w-full" value="{{ old('tempat_tanggal_lahir') }}" placeholder="Contoh: Mojokerto, 01 Januari 1980">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" class="form-input w-full" rows="3" placeholder="Alamat lengkap">{{ old('alamat') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="pendidikan_terakhir">Pendidikan Terakhir</label>
                <input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-input w-full" value="{{ old('pendidikan_terakhir') }}" placeholder="Contoh: S1 Pendidikan, S2 Manajemen">
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="status">Status *</label>
                    <select id="status" name="status" class="form-input w-full" required>
                        <option value="Guru" {{ old('status') == 'Guru' ? 'selected' : '' }}>Guru</option>
                        <option value="Karyawan" {{ old('status') == 'Karyawan' ? 'selected' : '' }}>Karyawan</option>
                    </select>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="jabatan">Jabatan</label>
                    <input type="text" id="jabatan" name="jabatan" class="form-input w-full" value="{{ old('jabatan') }}" placeholder="Contoh: Guru Matematika">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="unit">Unit/Bagian</label>
                    <input type="text" id="unit" name="unit" class="form-input w-full" value="{{ old('unit') }}" placeholder="Contoh: SMP, SMA, TU">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-input w-full" value="{{ old('email') }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="no_hp">No. HP</label>
                    <input type="text" id="no_hp" name="no_hp" class="form-input w-full" value="{{ old('no_hp') }}" placeholder="Contoh: 081234567890">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="foto">Foto</label>
                <input type="file" id="foto" name="foto" class="form-input w-full" accept="image/*">
                <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF. Maksimal 2MB. Rekomendasi ukuran: 300x300px</p>
                @error('foto')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="order">Urutan</label>
                    <input type="number" id="order" name="order" class="form-input w-full" value="{{ old('order') }}" min="0" placeholder="Akan diatur otomatis jika kosong">
                    <p class="text-xs text-gray-500 mt-1">Urutan tampil (angka lebih kecil tampil lebih dulu)</p>
                </div>
                <div>
                    <label class="flex items-center gap-2 mt-6">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} class="form-checkbox">
                        <span class="text-sm font-medium text-gray-600 dark:text-gray-200">Aktifkan</span>
                    </label>
                    <p class="text-xs text-gray-500 mt-1">Data yang tidak aktif tidak akan ditampilkan</p>
                </div>
            </div>

            <div class="flex gap-3">
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_save_line me-2"></i>Simpan Data
                </button>
                <a href="{{ route('admin.staff') }}" class="btn bg-secondary text-white">
                    <i class="mgc_close_line me-2"></i>Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

