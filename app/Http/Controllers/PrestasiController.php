<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasi = Prestasi::latest()->get();
        return view('prestasi.index', compact('prestasi'));
    }

    public function create()
    {
        return view('prestasi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tgl_prestasi' => 'required|date',
            'nama_prestasi' => 'required|unique:prestasis',
            'deskripsi' => 'required',
            'tingkat' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $prestasi = new Prestasi();
        $prestasi->tgl_prestasi = $request->tgl_prestasi;
        $prestasi->nama_prestasi = $request->nama_prestasi;
        $prestasi->tingkat = $request->tingkat;
        $prestasi->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
            $img->move(public_path('storage/gambar'), $name);
            $prestasi->foto = $name;
        }

        $prestasi->save();
        return redirect()->route('prestasi.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.show', compact('prestasi'));
    }

    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.edit', compact('prestasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tgl_prestasi' => 'required|date',
            'nama_prestasi' => 'required',
            'deskripsi' => 'required',
            'tingkat' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $prestasi = Prestasi::findOrFail($id);
        $prestasi->tgl_prestasi = $request->tgl_prestasi;
        $prestasi->nama_prestasi = $request->nama_prestasi;
        $prestasi->tingkat = $request->tingkat;
        $prestasi->deskripsi = $request->deskripsi;

        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 9999) . '_' . $img->getClientOriginalName();
            $img->move(public_path('storage/gambar'), $name);
            $prestasi->foto = $name;
        }

        $prestasi->save();
        return redirect()->route('prestasi.index')->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();
        return redirect()->route('prestasi.index')->with('success', 'Data Berhasil Dihapus');
    }
}
