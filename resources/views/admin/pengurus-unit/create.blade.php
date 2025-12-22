@extends('admin.layouts.app')

@section('title', 'Tambah Pengurus Unit')

@section('content')
<div class="mb-6">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Tambah Pengurus Unit</h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">Tambah pengurus unit baru yang akan ditampilkan di halaman publik</p>
</div>

<div class="card">
    <div class="p-6">
        <form action="{{ route('admin.pengurus-unit.store') }}" method="POST" enctype="multipart/form-data">
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
                <input type="text" id="jabatan" name="jabatan" class="form-input w-full" value="{{ old('jabatan') }}" placeholder="Contoh: Ketua, Kepala, Wakamad, Wakasek" required>
                @error('jabatan')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="jabatan_lengkap">Jabatan Lengkap</label>
                <input type="text" id="jabatan_lengkap" name="jabatan_lengkap" class="form-input w-full" value="{{ old('jabatan_lengkap') }}" placeholder="Contoh: Ketua STAI, Kepala MA">
                @error('jabatan_lengkap')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="unit">Unit *</label>
                <select id="unit" name="unit" class="form-select w-full" required>
                    <option value="">Pilih Unit</option>
                    <option value="STAI" {{ old('unit') == 'STAI' ? 'selected' : '' }}>Sekolah Tinggi Agama Islam (STAI)</option>
                    <option value="MA" {{ old('unit') == 'MA' ? 'selected' : '' }}>Madrasah Aliyah (MA)</option>
                    <option value="MTs" {{ old('unit') == 'MTs' ? 'selected' : '' }}>Madrasah Tsanawiyah (MTs)</option>
                    <option value="MTs 2" {{ old('unit') == 'MTs 2' ? 'selected' : '' }}>Madrasah Tsanawiyah 2 (MTs 2)</option>
                    <option value="SMP UBQ" {{ old('unit') == 'SMP UBQ' ? 'selected' : '' }}>Sekolah Menengah Pertama Unggulan Berbasis Al-Qur'an (SMP UBQ)</option>
                    <option value="SMK UBP" {{ old('unit') == 'SMK UBP' ? 'selected' : '' }}>Sekolah Menengah Kejuruan Unggulan Berbasis Pesantren (SMK UBP)</option>
                    <option value="MA 2 AD" {{ old('unit') == 'MA 2 AD' ? 'selected' : '' }}>Madrasah Aliyah 2 Ad-Dauliyah (MA 2 AD)</option>
                    <option value="SMA GS" {{ old('unit') == 'SMA GS' ? 'selected' : '' }}>Sekolah Menengah Atas Global School (SMA GS)</option>
                    <option value="MDTA 1" {{ old('unit') == 'MDTA 1' ? 'selected' : '' }}>Madrasah Diniyah Takmiliyah Awaliyah (MDTA 1)</option>
                    <option value="MDTA 1 Nuris 2" {{ old('unit') == 'MDTA 1 Nuris 2' ? 'selected' : '' }}>Madrasah Diniyah Takmiliyah Awaliyah (MDTA 1 Nuris 2)</option>
                    <option value="MDTA 2 Nuris 2" {{ old('unit') == 'MDTA 2 Nuris 2' ? 'selected' : '' }}>Madrasah Diniyah Takmiliyah Awaliyah (MDTA 2 Nuris 2)</option>
                    <option value="MDTA 3 Nuris 2" {{ old('unit') == 'MDTA 3 Nuris 2' ? 'selected' : '' }}>Madrasah Diniyah Takmiliyah Awaliyah 3 Nuris 2 (MDTA 3 Nuris 2)</option>
                    <option value="MDTW" {{ old('unit') == 'MDTW' ? 'selected' : '' }}>Madrasah Diniyah Takmiliyah Wustho (MDTW)</option>
                    <option value="MDTW 2" {{ old('unit') == 'MDTW 2' ? 'selected' : '' }}>Madrasah Diniyah Takmiliyah Wustho 2 (MDTW 2)</option>
                    <option value="MDTW 2 Nuris 2" {{ old('unit') == 'MDTW 2 Nuris 2' ? 'selected' : '' }}>Madrasah Diniyah Takmiliyah Wustha 2 Nuris 2 (MDTW 2 Nuris 2)</option>
                    <option value="MDTU + Program TbT" {{ old('unit') == 'MDTU + Program TbT' ? 'selected' : '' }}>Madrasah Diniyah Takmiliyah Ulya (MDTU) + Program TbT</option>
                </select>
                @error('unit')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
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
                <a href="{{ route('admin.pengurus-unit') }}" class="btn bg-gray-500 text-white">Batal</a>
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_save_line me-2"></i>Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

