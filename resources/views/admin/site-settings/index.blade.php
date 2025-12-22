@extends('admin.layouts.app')

@section('title', 'Pengaturan Situs')

@section('content')
<div class="flex justify-between items-center mb-6">
    <div>
        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Pengaturan Situs</h4>
        <p class="text-sm text-gray-500 dark:text-gray-400">Kelola logo, favicon, dan meta tags untuk social media sharing</p>
    </div>
</div>

@if(session('success'))
<div class="alert alert-success mb-4">
    {{ session('success') }}
</div>
@endif

<div class="card">
    <div class="p-6">
        <form action="{{ route('admin.site-settings.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Site Information -->
                <div class="lg:col-span-2">
                    <h5 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-200">Informasi Situs</h5>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Nama Situs <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="site_name" value="{{ old('site_name', $settings['site_name']) }}" 
                           class="form-input w-full" required>
                    @error('site_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Deskripsi Situs
                    </label>
                    <textarea name="site_description" rows="3" 
                              class="form-input w-full">{{ old('site_description', $settings['site_description']) }}</textarea>
                    @error('site_description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Logo & Favicon -->
                <div class="lg:col-span-2 mt-4">
                    <h5 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-200">Logo & Favicon</h5>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Logo Hero Section
                    </label>
                    @if($settings['hero_logo'])
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $settings['hero_logo']) }}" alt="Hero Logo" 
                                 class="w-32 h-32 object-contain border border-gray-300 rounded p-2 bg-white">
                        </div>
                    @endif
                    <input type="file" name="hero_logo" accept="image/*" 
                           class="form-input w-full">
                    <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF, WEBP, SVG. Maks: 5MB</p>
                    @error('hero_logo')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Favicon
                    </label>
                    @if($settings['favicon'] && strpos($settings['favicon'], 'storage/') === 0)
                        <div class="mb-3">
                            <img src="{{ asset($settings['favicon']) }}" alt="Favicon" 
                                 class="w-16 h-16 object-contain border border-gray-300 rounded p-2 bg-white">
                        </div>
                    @elseif($settings['favicon'])
                        <div class="mb-3">
                            <img src="{{ asset($settings['favicon']) }}" alt="Favicon" 
                                 class="w-16 h-16 object-contain border border-gray-300 rounded p-2 bg-white">
                        </div>
                    @endif
                    <input type="file" name="favicon" accept="image/*,.ico" 
                           class="form-input w-full">
                    <p class="text-xs text-gray-500 mt-1">Format: ICO, PNG, JPG. Maks: 2MB. Ukuran disarankan: 32x32 atau 16x16</p>
                    @error('favicon')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Open Graph / Social Media -->
                <div class="lg:col-span-2 mt-4">
                    <h5 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-200">Social Media Sharing (Open Graph)</h5>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                        Pengaturan ini akan muncul sebagai thumbnail ketika halaman dibagikan di Facebook, Twitter, WhatsApp, dll.
                    </p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        OG Title
                    </label>
                    <input type="text" name="og_title" value="{{ old('og_title', $settings['og_title']) }}" 
                           class="form-input w-full" placeholder="Judul yang muncul saat share">
                    @error('og_title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        OG Description
                    </label>
                    <textarea name="og_description" rows="3" 
                              class="form-input w-full" placeholder="Deskripsi yang muncul saat share">{{ old('og_description', $settings['og_description']) }}</textarea>
                    @error('og_description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        OG Image (Thumbnail)
                    </label>
                    @if($settings['og_image'])
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $settings['og_image']) }}" alt="OG Image" 
                                 class="w-64 h-32 object-cover border border-gray-300 rounded">
                        </div>
                    @endif
                    <input type="file" name="og_image" accept="image/*" 
                           class="form-input w-full">
                    <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF, WEBP. Maks: 5MB. Ukuran disarankan: 1200x630px</p>
                    @error('og_image')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        OG URL
                    </label>
                    <input type="url" name="og_url" value="{{ old('og_url', $settings['og_url']) }}" 
                           class="form-input w-full" placeholder="https://example.com">
                    @error('og_url')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Twitter Card Type
                    </label>
                    <select name="twitter_card" class="form-select w-full">
                        <option value="summary" {{ old('twitter_card', $settings['twitter_card']) == 'summary' ? 'selected' : '' }}>Summary</option>
                        <option value="summary_large_image" {{ old('twitter_card', $settings['twitter_card']) == 'summary_large_image' ? 'selected' : '' }}>Summary Large Image</option>
                    </select>
                    @error('twitter_card')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mt-6 flex justify-end">
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_save_line me-2"></i>Simpan Pengaturan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

