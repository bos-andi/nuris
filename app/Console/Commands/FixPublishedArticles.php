<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Article;

class FixPublishedArticles extends Command
{
    protected $signature = 'articles:fix-published';
    protected $description = 'Fix articles that should be published';

    public function handle()
    {
        $this->info('Checking articles...');
        
        $articles = Article::all();
        $fixed = 0;
        
        foreach ($articles as $article) {
            if ($article->is_published && empty($article->published_at)) {
                $article->published_at = $article->created_at;
                $article->save();
                $fixed++;
                $this->info("Fixed article: {$article->title}");
            }
        }
        
        $this->info("Fixed {$fixed} articles.");
        
        // Show published articles count
        $publishedCount = Article::where('is_published', true)
            ->where(function($query) {
                $query->whereNull('published_at')
                      ->orWhere('published_at', '<=', now());
            })
            ->count();
        
        $this->info("Total published articles: {$publishedCount}");
        
        return 0;
    }
}

