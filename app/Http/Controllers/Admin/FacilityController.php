<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;
use Illuminate\Support\Facades\Storage;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::ordered()->get();
        return view('admin.facilities.index', compact('facilities'));
    }

    public function create()
    {
        return view('admin.facilities.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'video' => 'nullable|string|max:500',
            'category' => 'nullable|string|max:255',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('facilities', 'public');
        }

        // Handle checkbox boolean
        $validated['is_active'] = $request->has('is_active') ? true : false;
        
        // Set default order if not provided
        if (!isset($validated['order'])) {
            $maxOrder = Facility::max('order') ?? 0;
            $validated['order'] = $maxOrder + 1;
        }

        Facility::create($validated);

        return redirect()->route('admin.facilities')->with('success', 'Fasilitas berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $facility = Facility::findOrFail($id);
        return view('admin.facilities.edit', compact('facility'));
    }

    public function update(Request $request, $id)
    {
        $facility = Facility::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'video' => 'nullable|string|max:500',
            'category' => 'nullable|string|max:255',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($facility->image) {
                Storage::disk('public')->delete($facility->image);
            }
            $validated['image'] = $request->file('image')->store('facilities', 'public');
        } else {
            // Keep existing image if no new image uploaded
            unset($validated['image']);
        }

        // Handle checkbox boolean
        $validated['is_active'] = $request->has('is_active') ? true : false;

        $facility->update($validated);

        return redirect()->route('admin.facilities')->with('success', 'Fasilitas berhasil diperbarui.');
    }

    public function delete($id)
    {
        $facility = Facility::findOrFail($id);
        
        // Delete image if exists
        if ($facility->image) {
            Storage::disk('public')->delete($facility->image);
        }
        
        $facility->delete();

        return redirect()->route('admin.facilities')->with('success', 'Fasilitas berhasil dihapus.');
    }
}
