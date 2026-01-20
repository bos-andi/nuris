<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Page;
use App\Models\Gallery;
use Illuminate\Support\Facades\Route;

class SitemapController extends Controller
{
    public function index()
    {
        $baseUrl = 'https://nuris.or.id';
        
        $urls = [];
        
        // Homepage
        $urls[] = [
            'loc' => $baseUrl,
            'lastmod' => now()->format('Y-m-d'),
            'changefreq' => 'daily',
            'priority' => '1.0'
        ];
        
        // Static pages
        $staticPages = [
            '/berita',
            '/gallery/foto',
            '/gallery/video',
            '/data-guru-karyawan',
            '/psb',
            '/psb-2026',
        ];
        
        foreach ($staticPages as $page) {
            $urls[] = [
                'loc' => $baseUrl . $page,
                'lastmod' => now()->format('Y-m-d'),
                'changefreq' => 'weekly',
                'priority' => '0.8'
            ];
        }
        
        // Published articles
        $articles = Article::published()->get();
        foreach ($articles as $article) {
            $urls[] = [
                'loc' => $baseUrl . '/' . $article->slug,
                'lastmod' => $article->updated_at->format('Y-m-d'),
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ];
        }
        
        // Published pages
        $pages = Page::where('is_published', true)->get();
        foreach ($pages as $page) {
            $urls[] = [
                'loc' => $baseUrl . '/' . $page->slug,
                'lastmod' => $page->updated_at->format('Y-m-d'),
                'changefreq' => 'monthly',
                'priority' => '0.6'
            ];
        }
        
        // Published galleries
        $galleries = Gallery::published()->get();
        foreach ($galleries as $gallery) {
            $urls[] = [
                'loc' => $baseUrl . '/gallery/' . $gallery->slug,
                'lastmod' => $gallery->updated_at->format('Y-m-d'),
                'changefreq' => 'monthly',
                'priority' => '0.5'
            ];
        }
        
        $xml = view('sitemap.index', compact('urls'))->render();
        
        return response($xml, 200)->header('Content-Type', 'text/xml');
    }
}
