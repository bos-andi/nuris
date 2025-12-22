<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;

class ArticleController extends Controller
{
    public function index()
    {
        // Get all published articles - more explicit query
        $articles = Article::where('is_published', true)
            ->where(function($query) {
                $query->whereNull('published_at')
                      ->orWhere('published_at', '<=', \Carbon\Carbon::now());
            })
            ->orderByRaw('COALESCE(published_at, created_at) DESC')
            ->paginate(9);

        // Debug: Log query result
        \Log::info('Articles index query', [
            'count' => $articles->count(),
            'total' => $articles->total(),
        ]);

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        // Check if article is published
        if (!$article->is_published) {
            abort(404);
        }
        
        // Check if published_at is in the future
        if ($article->published_at && $article->published_at->isFuture()) {
            abort(404);
        }
        
        // Increment views
        $article->increment('views');

        // Get related articles
        $relatedArticles = Article::published()
            ->where('id', '!=', $article->id)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        return view('articles.show', compact('article', 'relatedArticles'));
    }

    public function showBySlug($slug)
    {
        // Check if slug matches a published article
        $article = Article::where('slug', $slug)
            ->where('is_published', true)
            ->where(function($query) {
                $query->whereNull('published_at')
                      ->orWhere('published_at', '<=', now());
            })
            ->first();

        if (!$article) {
            // If article not found, abort 404 - let pages.display route handle it
            abort(404);
        }

        // Increment views
        $article->increment('views');

        // Get related articles
        $relatedArticles = Article::published()
            ->where('id', '!=', $article->id)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        return view('articles.show', compact('article', 'relatedArticles'));
    }
}
