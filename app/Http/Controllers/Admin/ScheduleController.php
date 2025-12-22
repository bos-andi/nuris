<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::orderBy('type')->orderBy('order')->orderBy('time')->get();
        return view('admin.schedules.index', compact('schedules'));
    }

    public function create()
    {
        return view('admin.schedules.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|in:daily,weekly',
            'day' => 'nullable|string|max:255',
            'time' => 'required|string|max:255',
            'activity' => 'required|string|max:500',
            'notes' => 'nullable|string',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        // Handle checkbox boolean
        $validated['is_active'] = $request->has('is_active') ? true : false;
        
        // Set default order if not provided
        if (!isset($validated['order'])) {
            $maxOrder = Schedule::where('type', $validated['type'])->max('order') ?? 0;
            $validated['order'] = $maxOrder + 1;
        }

        Schedule::create($validated);

        return redirect()->route('admin.schedules')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $schedule = Schedule::findOrFail($id);
        return view('admin.schedules.edit', compact('schedule'));
    }

    public function update(Request $request, $id)
    {
        $schedule = Schedule::findOrFail($id);

        $validated = $request->validate([
            'type' => 'required|in:daily,weekly',
            'day' => 'nullable|string|max:255',
            'time' => 'required|string|max:255',
            'activity' => 'required|string|max:500',
            'notes' => 'nullable|string',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        // Handle checkbox boolean
        $validated['is_active'] = $request->has('is_active') ? true : false;

        $schedule->update($validated);

        return redirect()->route('admin.schedules')->with('success', 'Jadwal berhasil diperbarui.');
    }

    public function delete($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();

        return redirect()->route('admin.schedules')->with('success', 'Jadwal berhasil dihapus.');
    }
}
