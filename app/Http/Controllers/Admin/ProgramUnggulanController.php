<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProgramUnggulan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProgramUnggulanController extends Controller
{
    public function index()
    {
        $programs = ProgramUnggulan::orderBy('order')->orderBy('title')->get();
        return view('admin.program-unggulan.index', compact('programs'));
    }

    public function create()
    {
        return view('admin.program-unggulan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'unit_type' => 'required|in:expert-classes,leadership-problem-solving,takhossus-kader-dakwah',
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
            'video_url' => 'nullable|url',
            'content' => 'nullable|string',
            'intro_text' => 'nullable|string',
            'tujuan' => 'nullable|string',
            'materi' => 'nullable|string',
            'durasi' => 'nullable|string',
            'sasaran' => 'nullable|string',
            'benefit' => 'nullable|string',
            'contact_email' => 'nullable|email',
            'contact_phone' => 'nullable|string',
            'pendaftaran_info' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'is_active' => 'boolean',
            'order' => 'nullable|integer',
        ]);

        // Auto-fill slug and title based on unit_type
        $unitTypes = [
            'expert-classes' => ['slug' => 'expert-classes', 'title' => 'Expert Classes', 'subtitle' => 'Program Kelas Ahli'],
            'leadership-problem-solving' => ['slug' => 'leadership-problem-solving', 'title' => 'Leadership & Problem Solving', 'subtitle' => 'Program Kepemimpinan dan Pemecahan Masalah'],
            'takhossus-kader-dakwah' => ['slug' => 'takhossus-kader-dakwah', 'title' => 'Takhossus bi At-Takhsis (Kader Dakwah)', 'subtitle' => 'Program Kader Dakwah'],
        ];

        if (isset($unitTypes[$validated['unit_type']])) {
            $validated['slug'] = $unitTypes[$validated['unit_type']]['slug'];
            $validated['title'] = $unitTypes[$validated['unit_type']]['title'];
            if (empty($validated['subtitle'])) {
                $validated['subtitle'] = $unitTypes[$validated['unit_type']]['subtitle'];
            }
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('program-unggulan', 'public');
        }

        // Extract video ID from URL
        if (!empty($validated['video_url'])) {
            $program = new ProgramUnggulan();
            $validated['video_id'] = $program->extractVideoId($validated['video_url']);
        }

        // Handle checkbox boolean
        $validated['is_active'] = $request->has('is_active') && $request->input('is_active') == '1';

        unset($validated['unit_type']); // Remove unit_type as it's not in fillable

        ProgramUnggulan::create($validated);

        return redirect()->route('admin.program-unggulan.index')->with('success', 'Program Unggulan berhasil dibuat.');
    }

    public function edit($id)
    {
        $program = ProgramUnggulan::findOrFail($id);
        return view('admin.program-unggulan.edit', compact('program'));
    }

    public function update(Request $request, $id)
    {
        $program = ProgramUnggulan::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
            'video_url' => 'nullable|url',
            'content' => 'nullable|string',
            'intro_text' => 'nullable|string',
            'tujuan' => 'nullable|string',
            'materi' => 'nullable|string',
            'durasi' => 'nullable|string',
            'sasaran' => 'nullable|string',
            'benefit' => 'nullable|string',
            'contact_email' => 'nullable|email',
            'contact_phone' => 'nullable|string',
            'pendaftaran_info' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'is_active' => 'boolean',
            'order' => 'nullable|integer',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($program->image) {
                Storage::disk('public')->delete($program->image);
            }
            $validated['image'] = $request->file('image')->store('program-unggulan', 'public');
        }

        // Extract video ID from URL
        if (!empty($validated['video_url'])) {
            $program->video_url = $validated['video_url'];
            $validated['video_id'] = $program->extractVideoId($validated['video_url']);
        }

        // Handle checkbox boolean
        $validated['is_active'] = $request->has('is_active') && $request->input('is_active') == '1';

        // Update slug if title changed
        if (!empty($validated['title']) && $validated['title'] !== $program->title) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        $program->update($validated);

        return redirect()->route('admin.program-unggulan.index')->with('success', 'Program Unggulan berhasil diperbarui.');
    }

    public function delete($id)
    {
        $program = ProgramUnggulan::findOrFail($id);

        // Delete image file
        if ($program->image) {
            Storage::disk('public')->delete($program->image);
        }

        $program->delete();

        return redirect()->route('admin.program-unggulan.index')->with('success', 'Program Unggulan berhasil dihapus.');
    }
}
