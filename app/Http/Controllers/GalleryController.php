<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display gallery photos page.
     */
    public function photos()
    {
        $galleries = Gallery::published()
            ->ofType('photo')
            ->with('items')
            ->ordered()
            ->paginate(12);

        return view('galleries.photos', compact('galleries'));
    }

    /**
     * Display gallery detail page.
     */
    public function show($slug)
    {
        $gallery = Gallery::where('slug', $slug)
            ->where('is_published', true)
            ->with('items')
            ->firstOrFail();

        // Get related galleries
        $relatedGalleries = Gallery::published()
            ->ofType($gallery->type)
            ->where('id', '!=', $gallery->id)
            ->ordered()
            ->limit(6)
            ->get();

        return view('galleries.show', compact('gallery', 'relatedGalleries'));
    }

    /**
     * Display gallery videos page.
     */
    public function videos()
    {
        $videos = Gallery::published()
            ->ofType('video')
            ->ordered()
            ->paginate(12);

        return view('galleries.videos', compact('videos'));
    }
}
