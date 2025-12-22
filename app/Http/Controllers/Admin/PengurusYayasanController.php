<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PengurusYayasan;
use Illuminate\Support\Facades\Storage;

class PengurusYayasanController extends Controller
{
    public function index()
    {
        $pengurus = PengurusYayasan::ordered()->get();
        return view('admin.pengurus-yayasan.index', compact('pengurus'));
    }

    public function create()
    {
        return view('admin.pengurus-yayasan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'jabatan_lengkap' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'kategori' => 'nullable|string|max:255',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        // Handle foto upload
        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('pengurus-yayasan', 'public');
        }

        // Handle checkbox boolean
        $validated['is_active'] = $request->has('is_active') ? true : false;
        
        // Set default order if not provided
        if (!isset($validated['order'])) {
            $maxOrder = PengurusYayasan::max('order') ?? 0;
            $validated['order'] = $maxOrder + 1;
        }

        PengurusYayasan::create($validated);

        return redirect()->route('admin.pengurus-yayasan')->with('success', 'Pengurus yayasan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pengurus = PengurusYayasan::findOrFail($id);
        return view('admin.pengurus-yayasan.edit', compact('pengurus'));
    }

    public function update(Request $request, $id)
    {
        $pengurus = PengurusYayasan::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'jabatan_lengkap' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'kategori' => 'nullable|string|max:255',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        // Handle foto upload
        if ($request->hasFile('foto')) {
            // Delete old foto if exists
            if ($pengurus->foto) {
                Storage::disk('public')->delete($pengurus->foto);
            }
            $validated['foto'] = $request->file('foto')->store('pengurus-yayasan', 'public');
        } else {
            // Keep existing foto if no new foto uploaded
            unset($validated['foto']);
        }

        // Handle checkbox boolean
        $validated['is_active'] = $request->has('is_active') ? true : false;

        $pengurus->update($validated);

        return redirect()->route('admin.pengurus-yayasan')->with('success', 'Pengurus yayasan berhasil diperbarui.');
    }

    public function delete($id)
    {
        $pengurus = PengurusYayasan::findOrFail($id);
        
        // Delete foto if exists
        if ($pengurus->foto) {
            Storage::disk('public')->delete($pengurus->foto);
        }
        
        $pengurus->delete();

        return redirect()->route('admin.pengurus-yayasan')->with('success', 'Pengurus yayasan berhasil dihapus.');
    }
}
