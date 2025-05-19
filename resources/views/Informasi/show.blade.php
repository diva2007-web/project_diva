@extends('layouts.admin')

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Informasi</h4>
            </div>
            <div class="card-body">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route('informasi.update', $informasi->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nama_lengkap">Judul</label>
                                    <input type="text" class="form-control" name="judul" value="{{ $informasi->judul }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nama_lengkap">Deskripsi</label>
                                    <input type="text" class="form-control" name="deskripsi" value="{{ $informasi->deskripsi }}" disabled>
                                </div>
                                <div class="mb-2">
                                    <label for="">Foto</label><br>
                                    @if($informasi->foto)
                                    <img src="{{asset('storage/gambar/'. $informasi->foto)}}" alt="Foto Informasi" style="width: 150px;">
                                    @endif
                                    <input type="file" name="foto" id="" class="form-control @error('foto') is-invalid @enderror" value="{{$informasi->foto}}" disabled>
                                    @error('foto')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <br>
                                <a href="{{ route('informasi.index') }}" class="btn btn-primary">Kembali</a>
                            </form>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->

<!--**********************************
    Footer start
***********************************-->
@endsection
