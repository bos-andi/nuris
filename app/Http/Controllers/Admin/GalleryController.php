<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\GalleryItem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::orderBy('type')->orderBy('order')->orderBy('created_at', 'desc')->get();
        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'type' => 'required|in:photo,video',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'order' => 'nullable|integer',
            'is_published' => 'boolean',
        ];

        if ($request->type === 'photo') {
            $rules['photos'] = 'required|array|min:1';
            $rules['photos.*'] = 'image|mimes:jpeg,png,jpg,gif,webp';
        } else {
            $rules['video_url'] = 'nullable|string|max:500';
            $rules['video_embed_code'] = 'nullable|string';
        }

        $validated = $request->validate($rules);

        // Handle checkbox boolean
        $validated['is_published'] = $request->has('is_published') && $request->input('is_published') == '1';

        // Set default order if not provided
        if (!isset($validated['order'])) {
            $maxOrder = Gallery::max('order') ?? 0;
            $validated['order'] = $maxOrder + 1;
        }

        if ($request->type === 'photo' && $request->hasFile('photos')) {
            // Check GD extension before processing
            if (!extension_loaded('gd') || !function_exists('imagecreatefromjpeg')) {
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'GD Extension tidak aktif! Silakan aktifkan extension GD di php.ini. Buka C:\\xampp\\php\\php.ini dan hapus tanda ; pada baris extension=gd, lalu restart Apache.');
            }

            // Generate title and slug for gallery
            $title = $validated['title'] ?? 'Gallery ' . date('Y-m-d H:i:s');
            $slug = Str::slug($title . '-' . time());

            // Create gallery
            $gallery = Gallery::create([
                'title' => $title,
                'slug' => $slug,
                'type' => 'photo',
                'description' => $validated['description'] ?? null,
                'image_path' => null, // Will be set to first photo
                'order' => $validated['order'],
                'is_published' => $validated['is_published'],
            ]);

            // Handle multiple photo uploads as gallery items
            $photos = $request->file('photos');
            $uploadedCount = 0;
            $firstImagePath = null;

            foreach ($photos as $index => $photo) {
                // Compress image to max 500KB
                $compressedPath = $this->compressImage($photo);

                // Set first image as gallery thumbnail
                if ($index === 0) {
                    $firstImagePath = $compressedPath;
                }

                // Create gallery item
                GalleryItem::create([
                    'gallery_id' => $gallery->id,
                    'image_path' => $compressedPath,
                    'order' => $index,
                ]);

                $uploadedCount++;
            }

            // Update gallery with first image as thumbnail
            if ($firstImagePath) {
                $gallery->update(['image_path' => $firstImagePath]);
            }

            $message = 'Gallery berhasil dibuat dengan ' . $uploadedCount . ' foto.';
        } elseif ($request->type === 'video') {
            // Handle video upload
            $title = $validated['title'] ?? 'Video ' . time();
            $slug = Str::slug($title);

            Gallery::create([
                'title' => $title,
                'slug' => $slug,
                'type' => 'video',
                'description' => $validated['description'] ?? null,
                'video_url' => $validated['video_url'] ?? null,
                'video_embed_code' => $validated['video_embed_code'] ?? null,
                'order' => $validated['order'],
                'is_published' => $validated['is_published'],
            ]);

            $message = 'Video berhasil ditambahkan.';
        } else {
            return redirect()->back()->with('error', 'Tipe gallery tidak valid atau foto tidak ditemukan.');
        }

        return redirect()->route('admin.galleries.index')->with('success', $message);
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id)->load('items');
        return view('admin.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
            'photos' => 'nullable|array',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,webp',
            'video_url' => 'nullable|string|max:500',
            'video_embed_code' => 'nullable|string',
            'order' => 'nullable|integer',
            'is_published' => 'boolean',
            'delete_items' => 'nullable|array',
            'delete_items.*' => 'integer',
        ]);

        // Handle thumbnail update for photo type
        if ($gallery->type === 'photo' && $request->hasFile('thumbnail')) {
            // Delete old thumbnail
            if ($gallery->image_path) {
                Storage::disk('public')->delete($gallery->image_path);
            }
            // Compress and save new thumbnail
            $validated['image_path'] = $this->compressImage($request->file('thumbnail'));
        } else {
            $validated['image_path'] = $gallery->image_path;
        }

        // Handle adding new photos to existing gallery
        if ($gallery->type === 'photo' && $request->hasFile('photos')) {
            // Check GD extension
            if (!extension_loaded('gd') || !function_exists('imagecreatefromjpeg')) {
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'GD Extension tidak aktif! Silakan aktifkan extension GD di php.ini.');
            }

            $photos = $request->file('photos');
            $maxOrder = $gallery->items()->max('order') ?? -1;

            foreach ($photos as $index => $photo) {
                $compressedPath = $this->compressImage($photo);
                
                GalleryItem::create([
                    'gallery_id' => $gallery->id,
                    'image_path' => $compressedPath,
                    'order' => $maxOrder + $index + 1,
                ]);
            }
        }

        // Handle deleting gallery items
        if ($request->has('delete_items') && is_array($request->delete_items)) {
            foreach ($request->delete_items as $itemId) {
                $item = GalleryItem::find($itemId);
                if ($item && $item->gallery_id == $gallery->id) {
                    // Delete image file
                    if ($item->image_path) {
                        Storage::disk('public')->delete($item->image_path);
                    }
                    $item->delete();
                }
            }
        }

        // Handle checkbox boolean
        $validated['is_published'] = $request->has('is_published') && $request->input('is_published') == '1';

        // Update slug if title changed
        if (!empty($validated['title']) && $validated['title'] !== $gallery->title) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        $gallery->update($validated);

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery berhasil diperbarui.');
    }

    public function delete($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Delete all gallery items and their images
        foreach ($gallery->items as $item) {
            if ($item->image_path) {
                Storage::disk('public')->delete($item->image_path);
            }
        }

        // Delete gallery thumbnail
        if ($gallery->image_path) {
            Storage::disk('public')->delete($gallery->image_path);
        }

        $gallery->delete();

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery berhasil dihapus.');
    }

    /**
     * Compress image to max 500KB
     */
    private function compressImage($file)
    {
        $maxSize = 500 * 1024; // 500KB in bytes

        // Check if GD extension is available
        if (!extension_loaded('gd') || !function_exists('imagecreatefromjpeg')) {
            \Log::warning('GD extension not loaded. Please enable GD extension in php.ini. Saving original file without compression.');
            // Save original file without compression
            return $file->store('galleries', 'public');
        }

        // Compress image using GD library
        try {
            $imageInfo = @getimagesize($file->getRealPath());
            if (!$imageInfo) {
                return $file->store('galleries', 'public');
            }

            $mimeType = $imageInfo['mime'];
            $originalWidth = $imageInfo[0];
            $originalHeight = $imageInfo[1];
            $maxDimension = 1920; // Max width or height

            // Create image resource based on type
            $source = null;
            switch ($mimeType) {
                case 'image/jpeg':
                    if (function_exists('imagecreatefromjpeg')) {
                        $source = @imagecreatefromjpeg($file->getRealPath());
                    }
                    break;
                case 'image/png':
                    if (function_exists('imagecreatefrompng')) {
                        $source = @imagecreatefrompng($file->getRealPath());
                    }
                    break;
                case 'image/gif':
                    if (function_exists('imagecreatefromgif')) {
                        $source = @imagecreatefromgif($file->getRealPath());
                    }
                    break;
                case 'image/webp':
                    if (function_exists('imagecreatefromwebp')) {
                        $source = @imagecreatefromwebp($file->getRealPath());
                    }
                    break;
            }

            if (!$source) {
                \Log::warning('Failed to create image resource. Saving original file.');
                return $file->store('galleries', 'public');
            }

            // Calculate initial dimensions maintaining aspect ratio
            $newWidth = $originalWidth;
            $newHeight = $originalHeight;
            if ($originalWidth > $maxDimension || $originalHeight > $maxDimension) {
                if ($originalWidth > $originalHeight) {
                    $newWidth = $maxDimension;
                    $newHeight = intval(($originalHeight * $maxDimension) / $originalWidth);
                } else {
                    $newHeight = $maxDimension;
                    $newWidth = intval(($originalWidth * $maxDimension) / $originalHeight);
                }
            }

            // Save compressed image
            $filename = time() . '_' . Str::random(10) . '.jpg';
            $path = 'galleries/' . $filename;
            $fullPath = storage_path('app/public/' . $path);

            // Ensure directory exists
            $directory = dirname($fullPath);
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }

            // Try different quality and dimensions until file size <= 500KB
            $quality = 90;
            $currentWidth = $newWidth;
            $currentHeight = $newHeight;
            $attempts = 0;
            $maxAttempts = 15;

            do {
                // Create destination image
                $destination = imagecreatetruecolor($currentWidth, $currentHeight);
                
                // Preserve transparency for PNG and GIF
                if ($mimeType == 'image/png' || $mimeType == 'image/gif') {
                    imagealphablending($destination, false);
                    imagesavealpha($destination, true);
                    $transparent = imagecolorallocatealpha($destination, 255, 255, 255, 127);
                    imagefilledrectangle($destination, 0, 0, $currentWidth, $currentHeight, $transparent);
                }

                // Resize image
                imagecopyresampled($destination, $source, 0, 0, 0, 0, $currentWidth, $currentHeight, $originalWidth, $originalHeight);

                // Save as JPEG
                imagejpeg($destination, $fullPath, $quality);
                
                // Free destination memory
                imagedestroy($destination);

                // Check file size
                $fileSize = filesize($fullPath);
                
                if ($fileSize <= $maxSize) {
                    break; // Success!
                }

                // Reduce quality first
                if ($quality > 50) {
                    $quality -= 10;
                } else {
                    // If quality is already low, reduce dimensions
                    $currentWidth = intval($currentWidth * 0.9);
                    $currentHeight = intval($currentHeight * 0.9);
                    $quality = 80; // Reset quality for new size
                }

                $attempts++;
            } while ($attempts < $maxAttempts && filesize($fullPath) > $maxSize);

            // Free source memory
            if ($source) {
                imagedestroy($source);
            }

            return $path;
        } catch (\Exception $e) {
            // If compression fails, save original
            \Log::error('Image compression failed: ' . $e->getMessage());
            return $file->store('galleries', 'public');
        }
    }
}
