<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageView;
use Illuminate\Support\Str;
use Carbon\Carbon;

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
        
        // Visitor statistics
        $totalViews = PageView::count();
        $todayViews = PageView::today()->count();
        $realtimeViews = PageView::realtime(5)->count(); // Last 5 minutes
        
        return view('admin.dashboard', compact(
            'totalPages', 
            'activePages', 
            'inactivePages',
            'totalArticles',
            'publishedArticles',
            'totalEvents',
            'upcomingEvents',
            'totalViews',
            'todayViews',
            'realtimeViews'
        ));
    }

    public function getVisitorStats(Request $request)
    {
        $minutes = $request->get('minutes', 5);
        
        // Real-time stats (last N minutes)
        $realtimeViews = PageView::realtime($minutes)->count();
        $realtimeVisitors = PageView::realtime($minutes)
            ->distinct('session_id')
            ->count('session_id');
        
        // Device stats
        $deviceStats = PageView::realtime($minutes)
            ->selectRaw('device_type, COUNT(*) as count')
            ->whereNotNull('device_type')
            ->groupBy('device_type')
            ->get()
            ->pluck('count', 'device_type');
        
        // Browser stats
        $browserStats = PageView::realtime($minutes)
            ->selectRaw('browser, COUNT(*) as count')
            ->whereNotNull('browser')
            ->groupBy('browser')
            ->orderBy('count', 'desc')
            ->limit(5)
            ->get()
            ->pluck('count', 'browser');
        
        // OS stats
        $osStats = PageView::realtime($minutes)
            ->selectRaw('os, COUNT(*) as count')
            ->whereNotNull('os')
            ->groupBy('os')
            ->orderBy('count', 'desc')
            ->limit(5)
            ->get()
            ->pluck('count', 'os');
        
        // Top pages
        $topPages = PageView::realtime($minutes)
            ->selectRaw('url, page_title, COUNT(*) as views')
            ->groupBy('url', 'page_title')
            ->orderBy('views', 'desc')
            ->limit(10)
            ->get();
        
        // Recent visitors
        $recentVisitors = PageView::realtime($minutes)
            ->orderBy('viewed_at', 'desc')
            ->limit(20)
            ->get(['url', 'page_title', 'ip_address', 'device_type', 'browser', 'os', 'viewed_at']);
        
        return response()->json([
            'realtime_views' => $realtimeViews,
            'realtime_visitors' => $realtimeVisitors,
            'device_stats' => $deviceStats,
            'browser_stats' => $browserStats,
            'os_stats' => $osStats,
            'top_pages' => $topPages,
            'recent_visitors' => $recentVisitors,
            'updated_at' => now()->toDateTimeString(),
        ]);
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
