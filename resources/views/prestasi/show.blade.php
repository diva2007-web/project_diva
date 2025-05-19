@extends('layouts.admin')

@section('content')
<div class="content-body-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Detail Prestasi</h4>
            </div>
            <div class="card-body">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="form-group">
                                <label for="nama_prestasi">Nama Prestasi</label>
                                <input type="text" class="form-control" value="{{ $prestasi->nama_prestasi }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="tingkat">Tingkat</label>
                                <input type="text" class="form-control" value="{{ $prestasi->tingkat }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" rows="4" disabled>{{ $prestasi->deskripsi }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="foto">Foto</label><br>
                                <img src="{{ asset('storage/gambar/' . $prestasi->foto) }}" alt="Foto Prestasi" style="max-width: 300px;">
                            </div>

                            <a href="{{ route('prestasi.index') }}" class="btn btn-primary mt-3">Kembali</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
