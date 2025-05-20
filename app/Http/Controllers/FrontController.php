<?php

namespace App\Http\Controllers;
use App\Models\Karyawan;
use App\Models\Informasi;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        $informasi = Informasi::all();
        return view('welcome', compact('karyawan','informasi'));
    }
}
