<?php

namespace App\Http\Controllers;

use App\Models\Eskul;
use Illuminate\Http\Request;

class EskulController extends Controller
{
    public function index()
    {
        $eskul = Eskul::latest()->get();
        return view('eskul.index', compact('eskul'));
    }

    public function create()
    {
        return view('eskul.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_eskul' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $eskul = new Eskul();
        $eskul->nama_eskul = $request->nama_eskul;

        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
            $img->move(public_path('storage/gambar'), $name);
            $eskul->foto = $name;
        }

        $eskul->save();
        return redirect()->route('eskul.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $eskul = Eskul::findOrFail($id);
        return view('eskul.show', compact('eskul'));
    }

    public function edit($id)
    {
        $eskul = Eskul::findOrFail($id);
        return view('eskul.edit', compact('eskul'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_eskul' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $eskul = Eskul::findOrFail($id);
        $eskul->nama_eskul = $request->nama_eskul;

        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
            $img->move(public_path('storage/gambar'), $name);
            $eskul->foto = $name;
        }

        $eskul->save();
        return redirect()->route('eskul.index')->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $eskul = Eskul::findOrFail($id);
        $eskul->delete();
        return redirect()->route('eskul.index')->with('success', 'Data Berhasil Dihapus');
    }
}
