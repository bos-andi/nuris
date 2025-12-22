<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::whereNull('parent_id')
            ->orderBy('order')
            ->with('children')
            ->get();
        
        return view('admin.menus.index', compact('menus'));
    }

    public function create()
    {
        $parentMenus = Menu::whereNull('parent_id')->orderBy('title')->get();
        return view('admin.menus.create', compact('parentMenus'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:menus,slug',
            'type' => 'required|in:page,link,dropdown',
            'url' => 'nullable|string|max:255',
            'route' => 'nullable|string|max:255',
            'parent_id' => 'nullable|exists:menus,id',
            'order' => 'nullable|integer',
            'is_active' => 'boolean',
            'icon' => 'nullable|string|max:255',
            'target' => 'nullable|in:_self,_blank',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        Menu::create($validated);

        return redirect()->route('admin.menus')->with('success', 'Menu berhasil dibuat.');
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        $parentMenus = Menu::whereNull('parent_id')
            ->where('id', '!=', $id)
            ->orderBy('title')
            ->get();
        return view('admin.menus.edit', compact('menu', 'parentMenus'));
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:menus,slug,' . $id,
            'type' => 'required|in:page,link,dropdown',
            'url' => 'nullable|string|max:255',
            'route' => 'nullable|string|max:255',
            'parent_id' => 'nullable|exists:menus,id',
            'order' => 'nullable|integer',
            'is_active' => 'boolean',
            'icon' => 'nullable|string|max:255',
            'target' => 'nullable|in:_self,_blank',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        $menu->update($validated);

        return redirect()->route('admin.menus')->with('success', 'Menu berhasil diperbarui.');
    }

    public function delete($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('admin.menus')->with('success', 'Menu berhasil dihapus.');
    }

    public function updateOrder(Request $request)
    {
        $menus = $request->input('menus');
        
        foreach ($menus as $index => $menu) {
            Menu::where('id', $menu['id'])->update([
                'order' => $index + 1,
                'parent_id' => $menu['parent_id'] ?? null,
            ]);
        }

        return response()->json(['success' => true]);
    }
}
