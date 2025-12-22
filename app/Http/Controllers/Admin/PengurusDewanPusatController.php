<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PengurusDewanPusat;
use Illuminate\Support\Facades\Storage;

class PengurusDewanPusatController extends Controller
{
    public function index()
    {
        $pengurus = PengurusDewanPusat::ordered()->get();
        return view('admin.pengurus-dewan-pusat.index', compact('pengurus'));
    }

    public function create()
    {
        return view('admin.pengurus-dewan-pusat.create');
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

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('pengurus-dewan-pusat', 'public');
        }

        $validated['is_active'] = $request->has('is_active') ? true : false;
        
        if (!isset($validated['order'])) {
            $maxOrder = PengurusDewanPusat::max('order') ?? 0;
            $validated['order'] = $maxOrder + 1;
        }

        PengurusDewanPusat::create($validated);

        return redirect()->route('admin.pengurus-dewan-pusat')->with('success', 'Pengurus dewan pusat berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pengurus = PengurusDewanPusat::findOrFail($id);
        return view('admin.pengurus-dewan-pusat.edit', compact('pengurus'));
    }

    public function update(Request $request, $id)
    {
        $pengurus = PengurusDewanPusat::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'jabatan_lengkap' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'kategori' => 'nullable|string|max:255',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('foto')) {
            if ($pengurus->foto) {
                Storage::disk('public')->delete($pengurus->foto);
            }
            $validated['foto'] = $request->file('foto')->store('pengurus-dewan-pusat', 'public');
        } else {
            unset($validated['foto']);
        }

        $validated['is_active'] = $request->has('is_active') ? true : false;

        $pengurus->update($validated);

        return redirect()->route('admin.pengurus-dewan-pusat')->with('success', 'Pengurus dewan pusat berhasil diperbarui.');
    }

    public function delete($id)
    {
        $pengurus = PengurusDewanPusat::findOrFail($id);
        
        if ($pengurus->foto) {
            Storage::disk('public')->delete($pengurus->foto);
        }
        
        $pengurus->delete();

        return redirect()->route('admin.pengurus-dewan-pusat')->with('success', 'Pengurus dewan pusat berhasil dihapus.');
    }
}
