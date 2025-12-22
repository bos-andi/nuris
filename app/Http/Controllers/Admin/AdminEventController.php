<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminEventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('event_date', 'desc')->get();
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:events,slug',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'event_date' => 'required|date',
            'event_end_date' => 'nullable|date|after_or_equal:event_date',
            'location' => 'nullable|string|max:255',
            'organizer' => 'nullable|string|max:255',
            'contact_person' => 'nullable|string|max:255',
            'contact_phone' => 'nullable|string|max:255',
            'contact_email' => 'nullable|email|max:255',
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
            $validated['featured_image'] = $request->file('featured_image')->store('events', 'public');
        }

        // Handle checkbox boolean
        $validated['is_published'] = $request->has('is_published') ? true : false;
        
        // Set published_at if is_published is true and published_at is not set
        if ($validated['is_published'] && empty($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        Event::create($validated);

        return redirect()->route('admin.events')->with('success', 'Event berhasil dibuat.');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:events,slug,' . $id,
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'event_date' => 'required|date',
            'event_end_date' => 'nullable|date|after_or_equal:event_date',
            'location' => 'nullable|string|max:255',
            'organizer' => 'nullable|string|max:255',
            'contact_person' => 'nullable|string|max:255',
            'contact_phone' => 'nullable|string|max:255',
            'contact_email' => 'nullable|email|max:255',
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
            if ($event->featured_image) {
                Storage::disk('public')->delete($event->featured_image);
            }
            $validated['featured_image'] = $request->file('featured_image')->store('events', 'public');
        }

        // Handle checkbox boolean
        $validated['is_published'] = $request->has('is_published') ? true : false;
        
        // Set published_at if is_published is true and published_at is not set
        if ($validated['is_published'] && empty($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        $event->update($validated);

        return redirect()->route('admin.events')->with('success', 'Event berhasil diperbarui.');
    }

    public function delete($id)
    {
        $event = Event::findOrFail($id);
        
        // Delete featured image if exists
        if ($event->featured_image) {
            Storage::disk('public')->delete($event->featured_image);
        }
        
        $event->delete();

        return redirect()->route('admin.events')->with('success', 'Event berhasil dihapus.');
    }
}
