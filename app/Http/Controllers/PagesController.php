<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Gallery;
use App\Models\Slideshow;
use App\Models\Facility;
use App\Models\Schedule;
use App\Models\PengurusYayasan;
use App\Models\PengurusPesantren;
use App\Models\PengurusDewanPusat;
use App\Models\PengurusUnit;
use App\Models\Event;
use App\Models\UnitKhidmah;
use App\Models\ProgramUnggulan;

class PagesController extends Controller
{
    public function index()
    {
        // Get active slideshows ordered by order
        $slideshows = Slideshow::active()->ordered()->get();

        // Get latest published articles - ensure immediate visibility
        // Use the published scope from model
        $latestArticles = Article::published()
            ->orderByRaw('COALESCE(published_at, created_at) DESC')
            ->limit(6)
            ->get();

        // Debug: Log to see what articles are being retrieved
        \Log::info('Homepage Latest Articles', [
            'count' => $latestArticles->count(),
            'articles' => $latestArticles->map(function($article) {
                return [
                    'id' => $article->id,
                    'title' => $article->title,
                    'is_published' => $article->is_published,
                    'published_at' => $article->published_at ? $article->published_at->format('Y-m-d H:i:s') : 'NULL',
                    'created_at' => $article->created_at->format('Y-m-d H:i:s'),
                ];
            })->toArray(),
        ]);

        // Get latest gallery photos (6 photos)
        $latestPhotos = Gallery::published()
            ->ofType('photo')
            ->ordered()
            ->limit(6)
            ->get();

        // Get latest gallery videos (3 videos)
        $latestVideos = Gallery::published()
            ->ofType('video')
            ->ordered()
            ->limit(3)
            ->get();

        // Get pengurus yayasan for homepage (limit 4)
        $pengurusYayasan = PengurusYayasan::active()
            ->where(function($query) {
                $query->where('kategori', 'Utama')->orWhereNull('kategori');
            })
            ->ordered()
            ->limit(4)
            ->get();

        // Get latest published events (limit 3)
        $latestEvents = Event::where('is_published', true)
            ->where(function($query) {
                $query->whereNull('published_at')
                      ->orWhere('published_at', '<=', now());
            })
            ->orderBy('event_date', 'desc')
            ->limit(3)
            ->get();

        $siteName = \App\Models\SiteSetting::get('site_name', 'PP. Nurul Islam');
        
        return view('pages.index', [
            'title' => 'Beranda - ' . $siteName,
            'slideshows' => $slideshows,
            'latestArticles' => $latestArticles,
            'latestPhotos' => $latestPhotos,
            'latestVideos' => $latestVideos,
            'pengurusYayasan' => $pengurusYayasan,
            'latestEvents' => $latestEvents
        ]);
    }

    public function psb()
    {
        $siteName = \App\Models\SiteSetting::get('site_name', 'PP. Nurul Islam');
        return view('pages.psb-2026', [
            'title' => 'PSB 2026 - Penerimaan Santri Baru - ' . $siteName
        ]);
    }

    public function displayOrArticle($slug)
    {
        // First, check if slug matches a published article
        $article = Article::with('categoryModel', 'tags')
            ->where('slug', $slug)
            ->where('is_published', true)
            ->where(function($query) {
                $query->whereNull('published_at')
                      ->orWhere('published_at', '<=', now());
            })
            ->first();

        if ($article) {
            // Increment views
            $article->increment('views');

            // Get related articles
            $relatedArticles = Article::published()
                ->where('id', '!=', $article->id)
                ->inRandomOrder()
                ->limit(3)
                ->get();

            // Get latest articles for sidebar
            $latestArticles = Article::published()
                ->where('id', '!=', $article->id)
                ->orderByRaw('COALESCE(published_at, created_at) DESC')
                ->limit(5)
                ->get();

            // Get categories and tags for sidebar
            $categories = Category::active()->withCount('articles')->orderBy('order')->orderBy('name')->get();
            $tags = Tag::active()->withCount('articles')->orderBy('order')->orderBy('name')->get();

            return view('articles.show', compact('article', 'relatedArticles', 'latestArticles', 'categories', 'tags'));
        }

        // If not an article, try to display as page
        return $this->display($slug);
    }

    public function display($page)
    {
        // Check if it's a program unggulan page
        $programUnggulan = ProgramUnggulan::where('slug', $page)->where('is_active', true)->first();
        if ($programUnggulan) {
            return view('pages.program-unggulan', [
                'title' => $programUnggulan->title,
                'program' => $programUnggulan,
            ]);
        }

        // Check if it's a unit khidmah page
        $unitKhidmah = UnitKhidmah::where('slug', $page)->where('is_active', true)->first();
        if ($unitKhidmah) {
            return view('pages.unit-khidmah', [
                'title' => $unitKhidmah->title,
                'unit' => $unitKhidmah,
            ]);
        }
        
        $view = 'pages.' . $page;
        
        if (!view()->exists($view)) {
            abort(404);
        }
        
        // If it's the facilities page, get facilities data
        if ($page === 'fasilitas') {
            $facilities = Facility::active()->ordered()->get();
            $facilitiesByCategory = $facilities->groupBy('category');
            
            return view($view, [
                'title' => 'Fasilitas',
                'facilities' => $facilities,
                'facilitiesByCategory' => $facilitiesByCategory,
            ]);
        }

        // If it's the kegiatan yaumiyah page, get schedules data
        if ($page === 'kegiatan-yaumiyah') {
            $dailySchedules = Schedule::active()->where('type', 'daily')->ordered()->get();
            $weeklySchedules = Schedule::active()->where('type', 'weekly')->ordered()->get();
            
            return view($view, [
                'title' => 'Kegiatan Yaumiyah',
                'dailySchedules' => $dailySchedules,
                'weeklySchedules' => $weeklySchedules,
            ]);
        }

        // If it's the pengurus-yayasan page, get pengurus yayasan data
        if ($page === 'pengurus-yayasan') {
            $pengurusUtama = PengurusYayasan::active()->where(function($query) {
                $query->where('kategori', 'Utama')->orWhereNull('kategori');
            })->ordered()->get();
            $pengurusStaf = PengurusYayasan::active()->where('kategori', 'Staf Bidang Administrasi')->ordered()->get();
            $pengurusKeuangan = PengurusYayasan::active()->where('kategori', 'Staf Bidang Keuangan')->ordered()->get();
            
            return view($view, [
                'title' => 'Pengurus Yayasan',
                'pengurusUtama' => $pengurusUtama,
                'pengurusStaf' => $pengurusStaf,
                'pengurusKeuangan' => $pengurusKeuangan,
            ]);
        }

        // If it's the pengurus-pesantren page, get pengurus pesantren data
        if ($page === 'pengurus-pesantren') {
            $pengurusUtama = PengurusPesantren::active()->where(function($query) {
                $query->where('kategori', 'Utama')->orWhereNull('kategori');
            })->ordered()->get();
            $pengurusByCategory = PengurusPesantren::active()->whereNotNull('kategori')->ordered()->get()->groupBy('kategori');
            
            return view($view, [
                'title' => 'Pengurus Pesantren',
                'pengurusUtama' => $pengurusUtama,
                'pengurusByCategory' => $pengurusByCategory,
            ]);
        }

        // If it's the dewan-pengurus-pusat page, get pengurus dewan pusat data
        if ($page === 'dewan-pengurus-pusat') {
            $pengurusByCategory = PengurusDewanPusat::active()->ordered()->get()->groupBy('kategori');
            
            return view($view, [
                'title' => 'Dewan Pengurus Pusat',
                'pengurusByCategory' => $pengurusByCategory,
            ]);
        }

        // If it's the pengurus-unit page, get pengurus unit data
        if ($page === 'pengurus-unit') {
            $pengurusByUnit = PengurusUnit::active()->ordered()->get()->groupBy('unit');
            
            return view($view, [
                'title' => 'Pengurus Unit',
                'pengurusByUnit' => $pengurusByUnit,
            ]);
        }
        
        return view($view, ['title' => ucfirst($page)]);
    }
}

