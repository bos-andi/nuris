<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slideshow;
use Illuminate\Support\Facades\Storage;

class SlideshowController extends Controller
{
    public function index()
    {
        $slideshows = Slideshow::orderBy('order')->orderBy('created_at', 'desc')->get();
        return view('admin.slideshows.index', compact('slideshows'));
    }

    public function create()
    {
        return view('admin.slideshows.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'slide_type' => 'required|in:image,video',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video_url' => 'nullable|string|max:500',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        // Handle background image upload (only for image type)
        if ($request->hasFile('background_image') && $request->slide_type === 'image') {
            $validated['background_image'] = $request->file('background_image')->store('slideshows', 'public');
        } elseif ($request->slide_type === 'video') {
            $validated['background_image'] = null;
        }

        // Set slide_type
        $validated['slide_type'] = $request->slide_type ?? 'image';

        // Handle checkbox boolean
        $validated['is_active'] = $request->has('is_active') ? true : false;
        
        // Set default order if not provided
        if (!isset($validated['order'])) {
            $maxOrder = Slideshow::max('order') ?? 0;
            $validated['order'] = $maxOrder + 1;
        }

        // Set title to null if empty
        if (empty($validated['title'])) {
            $validated['title'] = null;
        }

        Slideshow::create($validated);

        return redirect()->route('admin.slideshows')->with('success', 'Slideshow berhasil dibuat.');
    }

    public function edit($id)
    {
        $slideshow = Slideshow::findOrFail($id);
        return view('admin.slideshows.edit', compact('slideshow'));
    }

    public function update(Request $request, $id)
    {
        $slideshow = Slideshow::findOrFail($id);

        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'slide_type' => 'required|in:image,video',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video_url' => 'nullable|string|max:500',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        // Handle background image upload (only for image type)
        if ($request->hasFile('background_image') && $request->slide_type === 'image') {
            // Delete old image if exists
            if ($slideshow->background_image) {
                Storage::disk('public')->delete($slideshow->background_image);
            }
            $validated['background_image'] = $request->file('background_image')->store('slideshows', 'public');
        } elseif ($request->slide_type === 'video') {
            // Delete old image if switching to video
            if ($slideshow->background_image) {
                Storage::disk('public')->delete($slideshow->background_image);
            }
            $validated['background_image'] = null;
        }

        // Set slide_type
        $validated['slide_type'] = $request->slide_type ?? $slideshow->slide_type ?? 'image';

        // Handle checkbox boolean
        $validated['is_active'] = $request->has('is_active') ? true : false;

        // Set title to null if empty
        if (empty($validated['title'])) {
            $validated['title'] = null;
        }

        $slideshow->update($validated);

        return redirect()->route('admin.slideshows')->with('success', 'Slideshow berhasil diperbarui.');
    }

    public function delete($id)
    {
        $slideshow = Slideshow::findOrFail($id);
        
        // Delete image if exists
        if ($slideshow->background_image) {
            Storage::disk('public')->delete($slideshow->background_image);
        }
        
        $slideshow->delete();

        return redirect()->route('admin.slideshows')->with('success', 'Slideshow berhasil dihapus.');
    }
}
