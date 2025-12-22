<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalPages = Page::count();
        $activePages = Page::where('is_active', true)->count();
        $inactivePages = Page::where('is_active', false)->count();
        
        // Articles statistics
        $totalArticles = \App\Models\Article::count();
        $publishedArticles = \App\Models\Article::where('is_published', true)->count();
        
        // Events statistics
        $totalEvents = \App\Models\Event::count();
        $upcomingEvents = \App\Models\Event::where('is_published', true)
            ->where('event_date', '>=', now())
            ->count();
        
        return view('admin.dashboard', compact(
            'totalPages', 
            'activePages', 
            'inactivePages',
            'totalArticles',
            'publishedArticles',
            'totalEvents',
            'upcomingEvents'
        ));
    }

    public function pages()
    {
        $pages = Page::orderBy('order')->orderBy('title')->get();
        return view('admin.pages.index', compact('pages'));
    }

    public function createPage()
    {
        return view('admin.pages.create');
    }

    public function storePage(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:pages,slug',
            'content' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'is_active' => 'boolean',
            'order' => 'nullable|integer',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        Page::create($validated);

        return redirect()->route('admin.pages')->with('success', 'Halaman berhasil dibuat.');
    }

    public function editPage($id)
    {
        $page = Page::findOrFail($id);
        return view('admin.pages.edit', compact('page'));
    }

    public function updatePage(Request $request, $id)
    {
        $page = Page::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:pages,slug,' . $id,
            'content' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'is_active' => 'boolean',
            'order' => 'nullable|integer',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        $page->update($validated);

        return redirect()->route('admin.pages')->with('success', 'Halaman berhasil diperbarui.');
    }

    public function deletePage($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();

        return redirect()->route('admin.pages')->with('success', 'Halaman berhasil dihapus.');
    }
}
