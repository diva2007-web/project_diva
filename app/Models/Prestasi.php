<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;
    protected $fillable = ['id','tgl_prestasi','nama_prestasi','tingkat','deskripsi','foto'];
    public $timestamp = true;
}
