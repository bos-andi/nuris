@extends('admin.layouts.app')

@section('title', 'Edit Menu')

@section('content')
<div class="mb-6">
    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Edit Menu</h4>
    <p class="text-sm text-gray-500 dark:text-gray-400">Ubah informasi menu</p>
</div>

<div class="card">
    <div class="p-6">
        <form action="{{ route('admin.menus.update', $menu->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="title">Judul Menu *</label>
                <input type="text" id="title" name="title" class="form-input w-full" value="{{ old('title', $menu->title) }}" required>
                @error('title')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="slug">Slug</label>
                <input type="text" id="slug" name="slug" class="form-input w-full" value="{{ old('slug', $menu->slug) }}" placeholder="Akan dibuat otomatis jika kosong">
                @error('slug')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="type">Tipe Menu *</label>
                <select id="type" name="type" class="form-select w-full" required onchange="toggleMenuFields()">
                    <option value="page" {{ old('type', $menu->type) == 'page' ? 'selected' : '' }}>Halaman</option>
                    <option value="link" {{ old('type', $menu->type) == 'link' ? 'selected' : '' }}>Link Eksternal</option>
                    <option value="dropdown" {{ old('type', $menu->type) == 'dropdown' ? 'selected' : '' }}>Dropdown</option>
                </select>
                @error('type')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4" id="route-field" style="display: {{ old('type', $menu->type) == 'page' ? 'block' : 'none' }};">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="route">Route/Slug Halaman</label>
                <input type="text" id="route" name="route" class="form-input w-full" value="{{ old('route', $menu->route) }}" placeholder="contoh: sekilas-nuris">
                <p class="text-xs text-gray-500 mt-1">Masukkan slug halaman yang sudah dibuat</p>
            </div>

            <div class="mb-4" id="url-field" style="display: {{ old('type', $menu->type) == 'link' ? 'block' : 'none' }};">
                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="url">URL</label>
                <input type="text" id="url" name="url" class="form-input w-full" value="{{ old('url', $menu->url) }}" placeholder="https://example.com">
                @error('url')
                    <p class="text-danger text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="parent_id">Menu Parent</label>
                    <select id="parent_id" name="parent_id" class="form-select w-full">
                        <option value="">Tidak ada (Menu Utama)</option>
                        @foreach($parentMenus as $parent)
                            <option value="{{ $parent->id }}" {{ old('parent_id', $menu->parent_id) == $parent->id ? 'selected' : '' }}>
                                {{ $parent->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="order">Urutan</label>
                    <input type="number" id="order" name="order" class="form-input w-full" value="{{ old('order', $menu->order) }}">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="icon">Icon</label>
                    <input type="text" id="icon" name="icon" class="form-input w-full" value="{{ old('icon', $menu->icon) }}" placeholder="mgc_home_3_line">
                    <p class="text-xs text-gray-500 mt-1">Nama class icon (MingCute Icons)</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="target">Target</label>
                    <select id="target" name="target" class="form-select w-full">
                        <option value="_self" {{ old('target', $menu->target) == '_self' ? 'selected' : '' }}>Tab yang sama</option>
                        <option value="_blank" {{ old('target', $menu->target) == '_blank' ? 'selected' : '' }}>Tab baru</option>
                    </select>
                </div>
            </div>

            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" id="is_active" name="is_active" value="1" class="form-checkbox rounded" {{ old('is_active', $menu->is_active) ? 'checked' : '' }}>
                    <label for="is_active" class="ms-2 text-sm text-gray-600 dark:text-gray-200">Menu Aktif</label>
                </div>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="btn bg-primary text-white">
                    <i class="mgc_save_line me-2"></i>Update
                </button>
                <a href="{{ route('admin.menus') }}" class="btn bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-200">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
function toggleMenuFields() {
    const type = document.getElementById('type').value;
    const routeField = document.getElementById('route-field');
    const urlField = document.getElementById('url-field');
    
    if (type === 'page') {
        routeField.style.display = 'block';
        urlField.style.display = 'none';
    } else if (type === 'link') {
        routeField.style.display = 'none';
        urlField.style.display = 'block';
    } else {
        routeField.style.display = 'none';
        urlField.style.display = 'none';
    }
}
</script>
@endpush
@endsection

