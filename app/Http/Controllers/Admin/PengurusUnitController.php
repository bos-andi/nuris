<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PengurusUnit;
use Illuminate\Support\Facades\Storage;

class PengurusUnitController extends Controller
{
    public function index()
    {
        $pengurus = PengurusUnit::ordered()->get();
        return view('admin.pengurus-unit.index', compact('pengurus'));
    }

    public function create()
    {
        return view('admin.pengurus-unit.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'jabatan_lengkap' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'unit' => 'nullable|string|max:255',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('pengurus-unit', 'public');
        }

        $validated['is_active'] = $request->has('is_active') ? true : false;
        
        if (!isset($validated['order'])) {
            $maxOrder = PengurusUnit::max('order') ?? 0;
            $validated['order'] = $maxOrder + 1;
        }

        PengurusUnit::create($validated);

        return redirect()->route('admin.pengurus-unit')->with('success', 'Pengurus unit berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pengurus = PengurusUnit::findOrFail($id);
        return view('admin.pengurus-unit.edit', compact('pengurus'));
    }

    public function update(Request $request, $id)
    {
        $pengurus = PengurusUnit::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'jabatan_lengkap' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'unit' => 'nullable|string|max:255',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('foto')) {
            if ($pengurus->foto) {
                Storage::disk('public')->delete($pengurus->foto);
            }
            $validated['foto'] = $request->file('foto')->store('pengurus-unit', 'public');
        } else {
            unset($validated['foto']);
        }

        $validated['is_active'] = $request->has('is_active') ? true : false;

        $pengurus->update($validated);

        return redirect()->route('admin.pengurus-unit')->with('success', 'Pengurus unit berhasil diperbarui.');
    }

    public function delete($id)
    {
        $pengurus = PengurusUnit::findOrFail($id);
        
        if ($pengurus->foto) {
            Storage::disk('public')->delete($pengurus->foto);
        }
        
        $pengurus->delete();

        return redirect()->route('admin.pengurus-unit')->with('success', 'Pengurus unit berhasil dihapus.');
    }
}
