<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UnitKhidmah;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UnitKhidmahController extends Controller
{
    public function index()
    {
        $units = UnitKhidmah::orderBy('order')->orderBy('title')->get();
        return view('admin.unit-khidmah.index', compact('units'));
    }

    public function create()
    {
        return view('admin.unit-khidmah.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'slug' => 'required|string|max:255|unique:unit_khidmahs,slug',
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'video_url' => 'nullable|url',
            'narasi' => 'nullable|string',
            'intro_text' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'contact_email' => 'nullable|email',
            'contact_phone' => 'nullable|string',
            'operational_hours' => 'nullable|string',
            'location' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'is_active' => 'boolean',
            'order' => 'nullable|integer',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('unit-khidmah', 'public');
        }

        // Extract video ID from URL
        if (!empty($validated['video_url'])) {
            $unit = new UnitKhidmah();
            $validated['video_id'] = $unit->extractVideoId($validated['video_url']);
        }

        // Handle checkbox boolean
        $validated['is_active'] = $request->has('is_active') && $request->input('is_active') == '1';

        UnitKhidmah::create($validated);

        return redirect()->route('admin.unit-khidmah.index')->with('success', 'Unit Khidmah berhasil dibuat.');
    }

    public function edit($id)
    {
        $unit = UnitKhidmah::findOrFail($id);
        return view('admin.unit-khidmah.edit', compact('unit'));
    }

    public function update(Request $request, $id)
    {
        $unit = UnitKhidmah::findOrFail($id);

        $validated = $request->validate([
            'slug' => 'required|string|max:255|unique:unit_khidmahs,slug,' . $id,
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'video_url' => 'nullable|url',
            'narasi' => 'nullable|string',
            'intro_text' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'contact_email' => 'nullable|email',
            'contact_phone' => 'nullable|string',
            'operational_hours' => 'nullable|string',
            'location' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'is_active' => 'boolean',
            'order' => 'nullable|integer',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($unit->image) {
                Storage::disk('public')->delete($unit->image);
            }
            $validated['image'] = $request->file('image')->store('unit-khidmah', 'public');
        } else {
            // Keep existing image if no new image uploaded
            $validated['image'] = $unit->image;
        }

        // Extract video ID from URL
        if (!empty($validated['video_url'])) {
            $validated['video_id'] = $unit->extractVideoId($validated['video_url']);
        } else {
            $validated['video_id'] = null;
        }

        // Handle checkbox boolean
        $validated['is_active'] = $request->has('is_active') && $request->input('is_active') == '1';

        $unit->update($validated);

        return redirect()->route('admin.unit-khidmah.index')->with('success', 'Unit Khidmah berhasil diperbarui.');
    }

    public function delete($id)
    {
        $unit = UnitKhidmah::findOrFail($id);
        $unit->delete();

        return redirect()->route('admin.unit-khidmah.index')->with('success', 'Unit Khidmah berhasil dihapus.');
    }
}
