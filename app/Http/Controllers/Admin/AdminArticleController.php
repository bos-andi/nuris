<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('published_at', 'desc')->orderBy('created_at', 'desc')->get();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        $categories = Category::active()->orderBy('order')->orderBy('name')->get();
        $tags = Tag::active()->orderBy('order')->orderBy('name')->get();
        return view('admin.articles.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:articles,slug',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request->file('featured_image')->store('articles', 'public');
        }

        // Handle checkbox boolean - checkbox sends value "1" if checked, nothing if unchecked
        // Default to true if checkbox is checked (which it is by default in the form)
        $isPublished = $request->has('is_published') && $request->input('is_published') == '1';
        $validated['is_published'] = $isPublished;
        
        // Handle published_at logic
        if ($isPublished) {
            // If is_published is true, always set published_at to now() to ensure immediate visibility
            // This ensures articles appear immediately when published
            $validated['published_at'] = now();
        } else {
            // If is_published is false, set published_at to null
            $validated['published_at'] = null;
        }

        $article = Article::create($validated);

        // Sync tags
        if ($request->has('tags')) {
            $article->tags()->sync($request->tags);
        }

        // Log for debugging
        \Log::info('Article created', [
            'id' => $article->id,
            'title' => $article->title,
            'is_published' => $article->is_published,
            'published_at' => $article->published_at ? $article->published_at->format('Y-m-d H:i:s') : 'NULL',
        ]);

        $message = 'Artikel berhasil dibuat.';
        if ($isPublished) {
            $message .= ' Artikel telah dipublikasikan dan akan muncul di halaman berita.';
        } else {
            $message .= ' Artikel disimpan sebagai draft. Centang "Publikasikan Artikel" untuk mempublikasikan.';
        }

        return redirect()->route('admin.articles')->with('success', $message);
    }

    public function edit($id)
    {
        $article = Article::with('tags')->findOrFail($id);
        $categories = Category::active()->orderBy('order')->orderBy('name')->get();
        $tags = Tag::active()->orderBy('order')->orderBy('name')->get();
        return view('admin.articles.edit', compact('article', 'categories', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:articles,slug,' . $id,
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'is_published' => 'boolean',
            'published_at' => 'nullable|date',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            // Delete old image
            if ($article->featured_image) {
                Storage::disk('public')->delete($article->featured_image);
            }
            $validated['featured_image'] = $request->file('featured_image')->store('articles', 'public');
        } else {
            // Keep existing image if no new image uploaded
            unset($validated['featured_image']);
        }

        // Handle checkbox boolean - checkbox sends value "1" if checked, nothing if unchecked
        $isPublished = $request->has('is_published') && $request->input('is_published') == '1';
        $validated['is_published'] = $isPublished;
        
        // Handle published_at logic
        if ($isPublished) {
            // If is_published is true, always set published_at to now() to ensure immediate visibility
            // This ensures articles appear immediately when published
            $validated['published_at'] = now();
        } else {
            // If is_published is false, set published_at to null
            $validated['published_at'] = null;
        }

        $article->update($validated);

        // Sync tags
        if ($request->has('tags')) {
            $article->tags()->sync($request->tags);
        } else {
            $article->tags()->detach();
        }

        return redirect()->route('admin.articles')->with('success', 'Artikel berhasil diperbarui. ' . ($validated['is_published'] ? 'Artikel telah dipublikasikan.' : 'Artikel disimpan sebagai draft.'));
    }

    public function delete($id)
    {
        $article = Article::findOrFail($id);
        
        // Delete featured image if exists
        if ($article->featured_image) {
            Storage::disk('public')->delete($article->featured_image);
        }
        
        $article->delete();

        return redirect()->route('admin.articles')->with('success', 'Artikel berhasil dihapus.');
    }

    /**
     * Handle image upload from CKEditor
     */
    public function uploadImage(Request $request)
    {
        $request->validate([
            'upload' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:5120', // 5MB max
        ]);

        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('articles/content', $filename, 'public');
            $url = asset('storage/' . $path);

            return response()->json([
                'url' => $url
            ]);
        }

        return response()->json(['error' => 'Upload failed'], 400);
    }
}
