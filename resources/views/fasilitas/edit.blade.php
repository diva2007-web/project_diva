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
                            <form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label>Nama Fasilitas</label>
                                    <input class="form-control" name="nama_fasilitas" type="text" value="{{ $fasilitas->nama_fasilitas }}">
                                </div>
                                <div class="mb-2">
                                    <label for="">Foto</label>
                                    @if($fasilitas->foto)
                                    <img src="{{ Storage::url('gambar/'. $fasilitas->foto) }}" alt="Foto fasilitas" class="img-thumbnail" width="100">
                                    @endif
                                    <input type="file" name="foto" id="" class="form-control @error('foto') is-invalid @enderror" value="{{ $fasilitas->foto }}">
                                    @error('foto')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
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
