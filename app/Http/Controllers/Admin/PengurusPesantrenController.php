<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PengurusPesantren;
use Illuminate\Support\Facades\Storage;

class PengurusPesantrenController extends Controller
{
    public function index()
    {
        $pengurus = PengurusPesantren::ordered()->get();
        return view('admin.pengurus-pesantren.index', compact('pengurus'));
    }

    public function create()
    {
        return view('admin.pengurus-pesantren.create');
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
            $validated['foto'] = \App\Helpers\ImageHelper::resizeWithGD($request->file('foto'), 'pengurus-pesantren', 400, 533, 85);
        }

        $validated['is_active'] = $request->has('is_active') ? true : false;
        
        if (!isset($validated['order'])) {
            $maxOrder = PengurusPesantren::max('order') ?? 0;
            $validated['order'] = $maxOrder + 1;
        }

        PengurusPesantren::create($validated);

        return redirect()->route('admin.pengurus-pesantren')->with('success', 'Pengurus pesantren berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pengurus = PengurusPesantren::findOrFail($id);
        return view('admin.pengurus-pesantren.edit', compact('pengurus'));
    }

    public function update(Request $request, $id)
    {
        $pengurus = PengurusPesantren::findOrFail($id);

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
            $validated['foto'] = \App\Helpers\ImageHelper::resizeWithGD($request->file('foto'), 'pengurus-pesantren', 400, 533, 85);
        } else {
            unset($validated['foto']);
        }

        $validated['is_active'] = $request->has('is_active') ? true : false;

        $pengurus->update($validated);

        return redirect()->route('admin.pengurus-pesantren')->with('success', 'Pengurus pesantren berhasil diperbarui.');
    }

    public function delete($id)
    {
        $pengurus = PengurusPesantren::findOrFail($id);
        
        if ($pengurus->foto) {
            Storage::disk('public')->delete($pengurus->foto);
        }
        
        $pengurus->delete();

        return redirect()->route('admin.pengurus-pesantren')->with('success', 'Pengurus pesantren berhasil dihapus.');
    }
}
