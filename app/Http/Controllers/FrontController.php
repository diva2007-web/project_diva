<?php

namespace App\Http\Controllers;
use App\Models\Karyawan;
use App\Models\Informasi;
use App\Models\eskul;
use App\Models\fasilitas;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        $informasi = Informasi::all();
        $eskul = eskul::all();
        $fasilitas = fasilitas::all();
        return view('welcome', compact('karyawan','informasi','eskul','fasilitas'));
    }
}
