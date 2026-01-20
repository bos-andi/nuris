<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Page;
use App\Models\Gallery;
use App\Models\ProgramUnggulan;
use App\Models\UnitKhidmah;
use Illuminate\Support\Facades\Route;

class SitemapController extends Controller
{
    public function index()
    {
        try {
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
            try {
                $articles = Article::published()->get();
                foreach ($articles as $article) {
                    $urls[] = [
                        'loc' => $baseUrl . '/' . $article->slug,
                        'lastmod' => $article->updated_at ? $article->updated_at->format('Y-m-d') : now()->format('Y-m-d'),
                        'changefreq' => 'monthly',
                        'priority' => '0.7'
                    ];
                }
            } catch (\Exception $e) {
                // Skip articles if error
            }
            
            // Published pages (using is_active column)
            try {
                $pages = Page::where('is_active', true)->get();
                foreach ($pages as $page) {
                    $urls[] = [
                        'loc' => $baseUrl . '/' . $page->slug,
                        'lastmod' => $page->updated_at ? $page->updated_at->format('Y-m-d') : now()->format('Y-m-d'),
                        'changefreq' => 'monthly',
                        'priority' => '0.6'
                    ];
                }
            } catch (\Exception $e) {
                // Skip pages if error
            }
            
            // Published galleries
            try {
                $galleries = Gallery::published()->get();
                foreach ($galleries as $gallery) {
                    $urls[] = [
                        'loc' => $baseUrl . '/gallery/' . $gallery->slug,
                        'lastmod' => $gallery->updated_at ? $gallery->updated_at->format('Y-m-d') : now()->format('Y-m-d'),
                        'changefreq' => 'monthly',
                        'priority' => '0.5'
                    ];
                }
            } catch (\Exception $e) {
                // Skip galleries if error
            }
            
            // Published Program Unggulan
            try {
                $programUnggulan = ProgramUnggulan::where('is_active', true)->get();
                foreach ($programUnggulan as $program) {
                    $urls[] = [
                        'loc' => $baseUrl . '/' . $program->slug,
                        'lastmod' => $program->updated_at ? $program->updated_at->format('Y-m-d') : now()->format('Y-m-d'),
                        'changefreq' => 'monthly',
                        'priority' => '0.6'
                    ];
                }
            } catch (\Exception $e) {
                // Skip program unggulan if error
            }
            
            // Published Unit Khidmah
            try {
                $unitKhidmah = UnitKhidmah::where('is_active', true)->get();
                foreach ($unitKhidmah as $unit) {
                    $urls[] = [
                        'loc' => $baseUrl . '/' . $unit->slug,
                        'lastmod' => $unit->updated_at ? $unit->updated_at->format('Y-m-d') : now()->format('Y-m-d'),
                        'changefreq' => 'monthly',
                        'priority' => '0.6'
                    ];
                }
            } catch (\Exception $e) {
                // Skip unit khidmah if error
            }
            
            // Generate XML directly (no Blade layout)
            $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
            $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
            
            foreach ($urls as $url) {
                $xml .= '    <url>' . "\n";
                $xml .= '        <loc>' . htmlspecialchars($url['loc'], ENT_XML1, 'UTF-8') . '</loc>' . "\n";
                $xml .= '        <lastmod>' . htmlspecialchars($url['lastmod'], ENT_XML1, 'UTF-8') . '</lastmod>' . "\n";
                $xml .= '        <changefreq>' . htmlspecialchars($url['changefreq'], ENT_XML1, 'UTF-8') . '</changefreq>' . "\n";
                $xml .= '        <priority>' . htmlspecialchars($url['priority'], ENT_XML1, 'UTF-8') . '</priority>' . "\n";
                $xml .= '    </url>' . "\n";
            }
            
            $xml .= '</urlset>';
            
            return response($xml, 200)
                ->header('Content-Type', 'application/xml; charset=utf-8')
                ->header('Cache-Control', 'public, max-age=3600');
                
        } catch (\Exception $e) {
            // Return minimal valid sitemap even on error
            $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
            $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
            $xml .= '    <url>' . "\n";
            $xml .= '        <loc>https://nuris.or.id</loc>' . "\n";
            $xml .= '        <lastmod>' . now()->format('Y-m-d') . '</lastmod>' . "\n";
            $xml .= '        <changefreq>daily</changefreq>' . "\n";
            $xml .= '        <priority>1.0</priority>' . "\n";
            $xml .= '    </url>' . "\n";
            $xml .= '</urlset>';
            
            return response($xml, 200)
                ->header('Content-Type', 'application/xml; charset=utf-8')
                ->header('Cache-Control', 'public, max-age=3600');
        }
    }
}
