<tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800">
    <td class="py-3 px-4">
        <div class="flex items-center gap-2" style="padding-left: {{ $level * 20 }}px;">
            @if($level > 0)
                <i class="mgc_arrow_right_line text-gray-400"></i>
            @endif
            @if($menu->icon)
                <i class="{{ $menu->icon }}"></i>
            @endif
            <span>{{ $menu->title }}</span>
        </div>
    </td>
    <td class="py-3 px-4">
        <span class="px-2 py-1 text-xs rounded bg-info/10 text-info">{{ ucfirst($menu->type) }}</span>
    </td>
    <td class="py-3 px-4">
        @if($menu->type === 'page')
            <code class="text-xs bg-gray-100 dark:bg-gray-700 px-2 py-1 rounded">{{ $menu->route ?? $menu->slug }}</code>
        @elseif($menu->type === 'link')
            <code class="text-xs bg-gray-100 dark:bg-gray-700 px-2 py-1 rounded">{{ $menu->url }}</code>
        @else
            <span class="text-gray-400">-</span>
        @endif
    </td>
    <td class="py-3 px-4">
        @if($menu->parent)
            <span class="text-sm text-gray-600 dark:text-gray-400">{{ $menu->parent->title }}</span>
        @else
            <span class="text-gray-400">-</span>
        @endif
    </td>
    <td class="py-3 px-4">
        @if($menu->is_active)
            <span class="px-2 py-1 text-xs rounded bg-success/10 text-success">Aktif</span>
        @else
            <span class="px-2 py-1 text-xs rounded bg-danger/10 text-danger">Nonaktif</span>
        @endif
    </td>
    <td class="py-3 px-4">{{ $menu->order }}</td>
    <td class="py-3 px-4">
        <div class="flex items-center justify-center gap-2">
            <a href="{{ route('admin.menus.edit', $menu->id) }}" class="btn btn-sm bg-info text-white">
                <i class="mgc_edit_line"></i>
            </a>
            <a href="{{ route('admin.menus.delete', $menu->id) }}" class="btn btn-sm bg-danger text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?');">
                <i class="mgc_delete_line"></i>
            </a>
        </div>
    </td>
</tr>
@foreach($menu->children as $child)
    @include('admin.menus.partials.menu-row', ['menu' => $child, 'level' => $level + 1])
@endforeach

