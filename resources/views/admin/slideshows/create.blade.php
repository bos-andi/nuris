@extends('admin.layouts.app')

@section('title', 'Buat Slide Baru')

@section('content')
<div class="mb-6">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Buat Slide Baru</h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">Tambah slide baru untuk hero section</p>
</div>

<div class="card">
    <div class="p-6">
        <form action="{{ route('admin.slideshows.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="title">Judul Slide</label>
                <input type="text" id="title" name="title" class="form-input w-full" value="{{ old('title') }}">
                @error('title')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="subtitle">Subtitle</label>
                <input type="text" id="subtitle" name="subtitle" class="form-input w-full" value="{{ old('subtitle') }}" placeholder="Contoh: Pondok Pesantren Nurul Islam">
                @error('subtitle')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="description">Deskripsi</label>
                <textarea id="description" name="description" class="form-input w-full" rows="3" placeholder="Deskripsi singkat untuk slide">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            @php
                $fontSettings = old('font_settings', []);
                $defaultFonts = [
                    'Arial' => 'Arial',
                    'Helvetica' => 'Helvetica',
                    'Times New Roman' => 'Times New Roman',
                    'Georgia' => 'Georgia',
                    'Verdana' => 'Verdana',
                    'Courier New' => 'Courier New',
                    'Tahoma' => 'Tahoma',
                    'Trebuchet MS' => 'Trebuchet MS',
                    'Impact' => 'Impact',
                    'Comic Sans MS' => 'Comic Sans MS',
                    'Roboto' => 'Roboto',
                    'Open Sans' => 'Open Sans',
                    'Lato' => 'Lato',
                    'Montserrat' => 'Montserrat',
                    'Poppins' => 'Poppins',
                    'Raleway' => 'Raleway',
                    'Oswald' => 'Oswald',
                ];
            @endphp

            <!-- Font Settings Section -->
            <div class="mb-6 border-t pt-4">
                <h5 class="text-md font-semibold text-gray-800 dark:text-gray-200 mb-4">Pengaturan Font</h5>
                <p class="text-xs text-gray-500 dark:text-gray-400 mb-4">Atur font untuk judul, subtitle, dan deskripsi slide</p>
                
                <!-- Title Font Settings -->
                <div class="mb-6 p-4 border rounded-lg bg-gray-50 dark:bg-gray-800">
                    <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-3">Font Judul Slide</label>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Font Family</label>
                            <select name="font_settings[title][font_family]" class="form-select w-full font-select" data-field="title" data-property="fontFamily">
                                @foreach($defaultFonts as $fontKey => $fontName)
                                    <option value="{{ $fontKey }}" {{ ($fontSettings['title']['font_family'] ?? 'Arial') == $fontKey ? 'selected' : '' }}>{{ $fontName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Ukuran Font</label>
                            <input type="text" name="font_settings[title][font_size]" value="{{ $fontSettings['title']['font_size'] ?? '48px' }}" class="form-input w-full font-size-input" data-field="title" data-property="fontSize" placeholder="48px">
                        </div>
                        <div>
                            <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Font Weight</label>
                            <select name="font_settings[title][font_weight]" class="form-select w-full font-weight-select" data-field="title" data-property="fontWeight">
                                <option value="normal" {{ ($fontSettings['title']['font_weight'] ?? 'normal') == 'normal' ? 'selected' : '' }}>Normal</option>
                                <option value="bold" {{ ($fontSettings['title']['font_weight'] ?? 'normal') == 'bold' ? 'selected' : '' }}>Bold</option>
                                <option value="100" {{ ($fontSettings['title']['font_weight'] ?? 'normal') == '100' ? 'selected' : '' }}>100</option>
                                <option value="200" {{ ($fontSettings['title']['font_weight'] ?? 'normal') == '200' ? 'selected' : '' }}>200</option>
                                <option value="300" {{ ($fontSettings['title']['font_weight'] ?? 'normal') == '300' ? 'selected' : '' }}>300</option>
                                <option value="400" {{ ($fontSettings['title']['font_weight'] ?? 'normal') == '400' ? 'selected' : '' }}>400</option>
                                <option value="500" {{ ($fontSettings['title']['font_weight'] ?? 'normal') == '500' ? 'selected' : '' }}>500</option>
                                <option value="600" {{ ($fontSettings['title']['font_weight'] ?? 'normal') == '600' ? 'selected' : '' }}>600</option>
                                <option value="700" {{ ($fontSettings['title']['font_weight'] ?? 'normal') == '700' ? 'selected' : '' }}>700</option>
                                <option value="800" {{ ($fontSettings['title']['font_weight'] ?? 'normal') == '800' ? 'selected' : '' }}>800</option>
                                <option value="900" {{ ($fontSettings['title']['font_weight'] ?? 'normal') == '900' ? 'selected' : '' }}>900</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Font Style</label>
                            <select name="font_settings[title][font_style]" class="form-select w-full font-style-select" data-field="title" data-property="fontStyle">
                                <option value="normal" {{ ($fontSettings['title']['font_style'] ?? 'normal') == 'normal' ? 'selected' : '' }}>Normal</option>
                                <option value="italic" {{ ($fontSettings['title']['font_style'] ?? 'normal') == 'italic' ? 'selected' : '' }}>Italic</option>
                                <option value="oblique" {{ ($fontSettings['title']['font_style'] ?? 'normal') == 'oblique' ? 'selected' : '' }}>Oblique</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Warna</label>
                            <div class="flex gap-2">
                                <input type="color" name="font_settings[title][color]" value="{{ $fontSettings['title']['color'] ?? '#000000' }}" class="form-input w-16 h-10 p-1 font-color-input" data-field="title" data-property="color">
                                <input type="text" value="{{ $fontSettings['title']['color'] ?? '#000000' }}" class="form-input flex-1 font-color-text" data-field="title" placeholder="#000000">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Text Align</label>
                            <select name="font_settings[title][text_align]" class="form-select w-full text-align-select" data-field="title" data-property="textAlign">
                                <option value="left" {{ ($fontSettings['title']['text_align'] ?? 'left') == 'left' ? 'selected' : '' }}>Kiri</option>
                                <option value="center" {{ ($fontSettings['title']['text_align'] ?? 'left') == 'center' ? 'selected' : '' }}>Tengah</option>
                                <option value="right" {{ ($fontSettings['title']['text_align'] ?? 'left') == 'right' ? 'selected' : '' }}>Kanan</option>
                                <option value="justify" {{ ($fontSettings['title']['text_align'] ?? 'left') == 'justify' ? 'selected' : '' }}>Rata Kiri-Kanan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3 p-3 bg-white dark:bg-gray-900 border rounded">
                        <p class="text-xs text-gray-500 dark:text-gray-400 mb-1">Preview:</p>
                        <div id="preview-title" style="font-family: {{ $fontSettings['title']['font_family'] ?? 'Arial' }}; font-size: {{ $fontSettings['title']['font_size'] ?? '48px' }}; font-weight: {{ $fontSettings['title']['font_weight'] ?? 'normal' }}; font-style: {{ $fontSettings['title']['font_style'] ?? 'normal' }}; color: {{ $fontSettings['title']['color'] ?? '#000000' }}; text-align: {{ $fontSettings['title']['text_align'] ?? 'left' }};">
                            {{ old('title') ?: 'Judul Slide Preview' }}
                        </div>
                    </div>
                </div>

                <!-- Subtitle Font Settings -->
                <div class="mb-6 p-4 border rounded-lg bg-gray-50 dark:bg-gray-800">
                    <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-3">Font Subtitle</label>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Font Family</label>
                            <select name="font_settings[subtitle][font_family]" class="form-select w-full font-select" data-field="subtitle" data-property="fontFamily">
                                @foreach($defaultFonts as $fontKey => $fontName)
                                    <option value="{{ $fontKey }}" {{ ($fontSettings['subtitle']['font_family'] ?? 'Arial') == $fontKey ? 'selected' : '' }}>{{ $fontName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Ukuran Font</label>
                            <input type="text" name="font_settings[subtitle][font_size]" value="{{ $fontSettings['subtitle']['font_size'] ?? '24px' }}" class="form-input w-full font-size-input" data-field="subtitle" data-property="fontSize" placeholder="24px">
                        </div>
                        <div>
                            <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Font Weight</label>
                            <select name="font_settings[subtitle][font_weight]" class="form-select w-full font-weight-select" data-field="subtitle" data-property="fontWeight">
                                <option value="normal" {{ ($fontSettings['subtitle']['font_weight'] ?? 'normal') == 'normal' ? 'selected' : '' }}>Normal</option>
                                <option value="bold" {{ ($fontSettings['subtitle']['font_weight'] ?? 'normal') == 'bold' ? 'selected' : '' }}>Bold</option>
                                <option value="100" {{ ($fontSettings['subtitle']['font_weight'] ?? 'normal') == '100' ? 'selected' : '' }}>100</option>
                                <option value="200" {{ ($fontSettings['subtitle']['font_weight'] ?? 'normal') == '200' ? 'selected' : '' }}>200</option>
                                <option value="300" {{ ($fontSettings['subtitle']['font_weight'] ?? 'normal') == '300' ? 'selected' : '' }}>300</option>
                                <option value="400" {{ ($fontSettings['subtitle']['font_weight'] ?? 'normal') == '400' ? 'selected' : '' }}>400</option>
                                <option value="500" {{ ($fontSettings['subtitle']['font_weight'] ?? 'normal') == '500' ? 'selected' : '' }}>500</option>
                                <option value="600" {{ ($fontSettings['subtitle']['font_weight'] ?? 'normal') == '600' ? 'selected' : '' }}>600</option>
                                <option value="700" {{ ($fontSettings['subtitle']['font_weight'] ?? 'normal') == '700' ? 'selected' : '' }}>700</option>
                                <option value="800" {{ ($fontSettings['subtitle']['font_weight'] ?? 'normal') == '800' ? 'selected' : '' }}>800</option>
                                <option value="900" {{ ($fontSettings['subtitle']['font_weight'] ?? 'normal') == '900' ? 'selected' : '' }}>900</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Font Style</label>
                            <select name="font_settings[subtitle][font_style]" class="form-select w-full font-style-select" data-field="subtitle" data-property="fontStyle">
                                <option value="normal" {{ ($fontSettings['subtitle']['font_style'] ?? 'normal') == 'normal' ? 'selected' : '' }}>Normal</option>
                                <option value="italic" {{ ($fontSettings['subtitle']['font_style'] ?? 'normal') == 'italic' ? 'selected' : '' }}>Italic</option>
                                <option value="oblique" {{ ($fontSettings['subtitle']['font_style'] ?? 'normal') == 'oblique' ? 'selected' : '' }}>Oblique</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Warna</label>
                            <div class="flex gap-2">
                                <input type="color" name="font_settings[subtitle][color]" value="{{ $fontSettings['subtitle']['color'] ?? '#000000' }}" class="form-input w-16 h-10 p-1 font-color-input" data-field="subtitle" data-property="color">
                                <input type="text" value="{{ $fontSettings['subtitle']['color'] ?? '#000000' }}" class="form-input flex-1 font-color-text" data-field="subtitle" placeholder="#000000">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Text Align</label>
                            <select name="font_settings[subtitle][text_align]" class="form-select w-full text-align-select" data-field="subtitle" data-property="textAlign">
                                <option value="left" {{ ($fontSettings['subtitle']['text_align'] ?? 'left') == 'left' ? 'selected' : '' }}>Kiri</option>
                                <option value="center" {{ ($fontSettings['subtitle']['text_align'] ?? 'left') == 'center' ? 'selected' : '' }}>Tengah</option>
                                <option value="right" {{ ($fontSettings['subtitle']['text_align'] ?? 'left') == 'right' ? 'selected' : '' }}>Kanan</option>
                                <option value="justify" {{ ($fontSettings['subtitle']['text_align'] ?? 'left') == 'justify' ? 'selected' : '' }}>Rata Kiri-Kanan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3 p-3 bg-white dark:bg-gray-900 border rounded">
                        <p class="text-xs text-gray-500 dark:text-gray-400 mb-1">Preview:</p>
                        <div id="preview-subtitle" style="font-family: {{ $fontSettings['subtitle']['font_family'] ?? 'Arial' }}; font-size: {{ $fontSettings['subtitle']['font_size'] ?? '24px' }}; font-weight: {{ $fontSettings['subtitle']['font_weight'] ?? 'normal' }}; font-style: {{ $fontSettings['subtitle']['font_style'] ?? 'normal' }}; color: {{ $fontSettings['subtitle']['color'] ?? '#000000' }}; text-align: {{ $fontSettings['subtitle']['text_align'] ?? 'left' }};">
                            {{ old('subtitle') ?: 'Subtitle Preview' }}
                        </div>
                    </div>
                </div>

                <!-- Description Font Settings -->
                <div class="mb-6 p-4 border rounded-lg bg-gray-50 dark:bg-gray-800">
                    <label class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-3">Font Deskripsi</label>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Font Family</label>
                            <select name="font_settings[description][font_family]" class="form-select w-full font-select" data-field="description" data-property="fontFamily">
                                @foreach($defaultFonts as $fontKey => $fontName)
                                    <option value="{{ $fontKey }}" {{ ($fontSettings['description']['font_family'] ?? 'Arial') == $fontKey ? 'selected' : '' }}>{{ $fontName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Ukuran Font</label>
                            <input type="text" name="font_settings[description][font_size]" value="{{ $fontSettings['description']['font_size'] ?? '16px' }}" class="form-input w-full font-size-input" data-field="description" data-property="fontSize" placeholder="16px">
                        </div>
                        <div>
                            <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Font Weight</label>
                            <select name="font_settings[description][font_weight]" class="form-select w-full font-weight-select" data-field="description" data-property="fontWeight">
                                <option value="normal" {{ ($fontSettings['description']['font_weight'] ?? 'normal') == 'normal' ? 'selected' : '' }}>Normal</option>
                                <option value="bold" {{ ($fontSettings['description']['font_weight'] ?? 'normal') == 'bold' ? 'selected' : '' }}>Bold</option>
                                <option value="100" {{ ($fontSettings['description']['font_weight'] ?? 'normal') == '100' ? 'selected' : '' }}>100</option>
                                <option value="200" {{ ($fontSettings['description']['font_weight'] ?? 'normal') == '200' ? 'selected' : '' }}>200</option>
                                <option value="300" {{ ($fontSettings['description']['font_weight'] ?? 'normal') == '300' ? 'selected' : '' }}>300</option>
                                <option value="400" {{ ($fontSettings['description']['font_weight'] ?? 'normal') == '400' ? 'selected' : '' }}>400</option>
                                <option value="500" {{ ($fontSettings['description']['font_weight'] ?? 'normal') == '500' ? 'selected' : '' }}>500</option>
                                <option value="600" {{ ($fontSettings['description']['font_weight'] ?? 'normal') == '600' ? 'selected' : '' }}>600</option>
                                <option value="700" {{ ($fontSettings['description']['font_weight'] ?? 'normal') == '700' ? 'selected' : '' }}>700</option>
                                <option value="800" {{ ($fontSettings['description']['font_weight'] ?? 'normal') == '800' ? 'selected' : '' }}>800</option>
                                <option value="900" {{ ($fontSettings['description']['font_weight'] ?? 'normal') == '900' ? 'selected' : '' }}>900</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Font Style</label>
                            <select name="font_settings[description][font_style]" class="form-select w-full font-style-select" data-field="description" data-property="fontStyle">
                                <option value="normal" {{ ($fontSettings['description']['font_style'] ?? 'normal') == 'normal' ? 'selected' : '' }}>Normal</option>
                                <option value="italic" {{ ($fontSettings['description']['font_style'] ?? 'normal') == 'italic' ? 'selected' : '' }}>Italic</option>
                                <option value="oblique" {{ ($fontSettings['description']['font_style'] ?? 'normal') == 'oblique' ? 'selected' : '' }}>Oblique</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Warna</label>
                            <div class="flex gap-2">
                                <input type="color" name="font_settings[description][color]" value="{{ $fontSettings['description']['color'] ?? '#000000' }}" class="form-input w-16 h-10 p-1 font-color-input" data-field="description" data-property="color">
                                <input type="text" value="{{ $fontSettings['description']['color'] ?? '#000000' }}" class="form-input flex-1 font-color-text" data-field="description" placeholder="#000000">
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs text-gray-600 dark:text-gray-400 mb-1">Text Align</label>
                            <select name="font_settings[description][text_align]" class="form-select w-full text-align-select" data-field="description" data-property="textAlign">
                                <option value="left" {{ ($fontSettings['description']['text_align'] ?? 'left') == 'left' ? 'selected' : '' }}>Kiri</option>
                                <option value="center" {{ ($fontSettings['description']['text_align'] ?? 'left') == 'center' ? 'selected' : '' }}>Tengah</option>
                                <option value="right" {{ ($fontSettings['description']['text_align'] ?? 'left') == 'right' ? 'selected' : '' }}>Kanan</option>
                                <option value="justify" {{ ($fontSettings['description']['text_align'] ?? 'left') == 'justify' ? 'selected' : '' }}>Rata Kiri-Kanan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3 p-3 bg-white dark:bg-gray-900 border rounded">
                        <p class="text-xs text-gray-500 dark:text-gray-400 mb-1">Preview:</p>
                        <div id="preview-description" style="font-family: {{ $fontSettings['description']['font_family'] ?? 'Arial' }}; font-size: {{ $fontSettings['description']['font_size'] ?? '16px' }}; font-weight: {{ $fontSettings['description']['font_weight'] ?? 'normal' }}; font-style: {{ $fontSettings['description']['font_style'] ?? 'normal' }}; color: {{ $fontSettings['description']['color'] ?? '#000000' }}; text-align: {{ $fontSettings['description']['text_align'] ?? 'left' }};">
                            {{ old('description') ?: 'Deskripsi Preview' }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="slide_type">Tipe Slide *</label>
                <select id="slide_type" name="slide_type" class="form-select w-full" required onchange="toggleSlideType()">
                    <option value="image" {{ old('slide_type', 'image') == 'image' ? 'selected' : '' }}>Gambar</option>
                    <option value="video" {{ old('slide_type') == 'video' ? 'selected' : '' }}>Video YouTube</option>
                </select>
                <p class="text-xs text-gray-500 mt-1">Pilih tipe slide: gambar atau video YouTube</p>
                @error('slide_type')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4" id="image_section" style="display: {{ old('slide_type', 'image') == 'image' ? 'block' : 'none' }};">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="background_image">Gambar Background *</label>
                <input type="file" id="background_image" name="background_image" class="form-input w-full" accept="image/*">
                <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF. Maksimal 2MB. Rekomendasi ukuran: 1920x1080px</p>
                @error('background_image')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4" id="video_section" style="display: {{ old('slide_type') == 'video' ? 'block' : 'none' }};">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="video_url">URL Video YouTube *</label>
                <input type="text" id="video_url" name="video_url" class="form-input w-full" value="{{ old('video_url') }}" placeholder="Contoh: https://www.youtube.com/watch?v=cVxd_qeJQAI atau cVxd_qeJQAI">
                <p class="text-xs text-gray-500 mt-1">Masukkan URL lengkap YouTube atau hanya ID video (contoh: cVxd_qeJQAI)</p>
                @error('video_url')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="button_text">Teks Tombol</label>
                    <input type="text" id="button_text" name="button_text" class="form-input w-full" value="{{ old('button_text') }}" placeholder="Contoh: Daftar Sekarang">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="button_link">Link Tombol</label>
                    <input type="text" id="button_link" name="button_link" class="form-input w-full" value="{{ old('button_link') }}" placeholder="Contoh: /contact atau https://...">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="order">Urutan</label>
                    <input type="number" id="order" name="order" class="form-input w-full" value="{{ old('order') }}" min="0" placeholder="Akan diatur otomatis jika kosong">
                    <p class="text-xs text-gray-500 mt-1">Urutan tampil slide (angka lebih kecil tampil lebih dulu)</p>
                </div>
                <div>
                    <label class="flex items-center gap-2 mt-6">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} class="form-checkbox">
                        <span class="text-sm font-medium text-gray-600 dark:text-gray-200">Aktifkan Slide</span>
                    </label>
                    <p class="text-xs text-gray-500 mt-1">Slide yang tidak aktif tidak akan ditampilkan</p>
                </div>
            </div>

            <div class="flex gap-3">
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_save_line me-2"></i>Simpan Slide
                </button>
                <a href="{{ route('admin.slideshows') }}" class="btn bg-secondary text-white">
                    <i class="mgc_close_line me-2"></i>Batal
                </a>
            </div>
        </form>
    </div>
</div>

<script>
function toggleSlideType() {
    const slideType = document.getElementById('slide_type').value;
    const imageSection = document.getElementById('image_section');
    const videoSection = document.getElementById('video_section');
    const backgroundImage = document.getElementById('background_image');
    const videoUrl = document.getElementById('video_url');
    
    if (slideType === 'image') {
        imageSection.style.display = 'block';
        videoSection.style.display = 'none';
        if (backgroundImage) backgroundImage.required = true;
        if (videoUrl) videoUrl.required = false;
    } else {
        imageSection.style.display = 'none';
        videoSection.style.display = 'block';
        if (backgroundImage) backgroundImage.required = false;
        if (videoUrl) videoUrl.required = true;
    }
}

// Font Preview Update Function
function updateFontPreview(field) {
    const preview = document.getElementById(`preview-${field}`);
    if (!preview) return;

    const fontFamily = document.querySelector(`select[name="font_settings[${field}][font_family]"]`)?.value || 'Arial';
    const fontSize = document.querySelector(`input[name="font_settings[${field}][font_size]"]`)?.value || '16px';
    const fontWeight = document.querySelector(`select[name="font_settings[${field}][font_weight]"]`)?.value || 'normal';
    const fontStyle = document.querySelector(`select[name="font_settings[${field}][font_style]"]`)?.value || 'normal';
    const color = document.querySelector(`input[name="font_settings[${field}][color]"]`)?.value || '#000000';
    const textAlign = document.querySelector(`select[name="font_settings[${field}][text_align]"]`)?.value || 'left';

    // Get the actual content from the input fields
    let content = '';
    if (field === 'title') {
        content = document.getElementById('title')?.value || 'Judul Slide Preview';
    } else if (field === 'subtitle') {
        content = document.getElementById('subtitle')?.value || 'Subtitle Preview';
    } else if (field === 'description') {
        content = document.getElementById('description')?.value || 'Deskripsi Preview';
    }

    preview.textContent = content;
    preview.style.fontFamily = fontFamily;
    preview.style.fontSize = fontSize;
    preview.style.fontWeight = fontWeight;
    preview.style.fontStyle = fontStyle;
    preview.style.color = color;
    preview.style.textAlign = textAlign;
}

// Sync color picker with text input
function syncColorInputs(field) {
    const colorInput = document.querySelector(`input[name="font_settings[${field}][color]"]`);
    const colorText = document.querySelector(`.font-color-text[data-field="${field}"]`);
    
    if (colorInput && colorText) {
        // Sync picker to text
        colorInput.addEventListener('input', function() {
            colorText.value = this.value;
            updateFontPreview(field);
        });
        
        // Sync text to picker
        colorText.addEventListener('input', function() {
            if (/^#[0-9A-F]{6}$/i.test(this.value)) {
                colorInput.value = this.value;
                updateFontPreview(field);
            }
        });
    }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    toggleSlideType();
    
    // Initialize font preview updates for all fields
    ['title', 'subtitle', 'description'].forEach(field => {
        // Update preview when font settings change
        document.querySelectorAll(`[data-field="${field}"]`).forEach(element => {
            element.addEventListener('change', () => updateFontPreview(field));
            element.addEventListener('input', () => updateFontPreview(field));
        });
        
        // Sync color inputs
        syncColorInputs(field);
        
        // Update preview when title/subtitle/description change
        const contentField = document.getElementById(field);
        if (contentField) {
            contentField.addEventListener('input', () => updateFontPreview(field));
        }
    });
    
    // Initial preview update
    ['title', 'subtitle', 'description'].forEach(field => {
        updateFontPreview(field);
    });
});
</script>
@endsection

