@extends('admin.layouts.app')

@section('title', 'Kelola Menu Website')

@section('content')
<div class="flex justify-between items-center mb-6">
    <div>
        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Kelola Menu Website</h4>
        <p class="text-sm text-gray-500 dark:text-gray-400">Atur menu navigasi website</p>
    </div>
    <a href="{{ route('admin.menus.create') }}" class="btn bg-primary text-white">
        <i class="mgc_add_circle_line me-2"></i>Tambah Menu
    </a>
</div>

<div class="card">
    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Judul</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Tipe</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">URL/Route</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Parent</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Status</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Urutan</th>
                        <th class="text-center py-3 px-4 font-semibold text-gray-700 dark:text-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($menus as $menu)
                        @include('admin.menus.partials.menu-row', ['menu' => $menu, 'level' => 0])
                    @empty
                    <tr>
                        <td colspan="7" class="py-8 text-center text-gray-500 dark:text-gray-400">
                            Belum ada menu. <a href="{{ route('admin.menus.create') }}" class="text-primary">Buat menu pertama</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

