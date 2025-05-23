<?php

namespace App\Http\Controllers;
use App\Models\Karyawan;
use App\Models\Informasi;
use App\Models\eskul;
use App\Models\fasilitas;
use App\Models\prestasi;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        $eskul = Eskul::all();
        return view('welcome', compact('eskul','karyawan'));
    }
    public function about()
    {
        $informasi = Informasi::all();
        return view('about',compact('informasi'));
    }
    public function prestasis()
    {
        return view('prestasi1');
    }
}
