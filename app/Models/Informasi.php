<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;
    public $table='informasi';
    protected $fillable = ['id','judul','deskripsi','foto'];
    public $timestamp = true;

    public function deleteImages()
    {
        if ($this->foto && file_exists(public_path('storage/gambar/'.$this->foto))){
            return unlink(public_path('storage/gambar'. $this->foto));
        }
    }
}
