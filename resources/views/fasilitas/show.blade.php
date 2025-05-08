@extends('layouts.admin')
@section('content')
        <div class="content-body">
            <!-- row -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Fasilitas</h4>
                    </div>
                    <div class="card-body">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="{{ route('informasi.update', $informasi->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="nama_lengkap">Nama fasilitas</label>
                                            <input type="text" class="form-control" name="nama_fasilitas" value="{{ $fasilitas->nama_fasilitas }}" disabled>
                                        </div>
                                        <div class="mb-2">
                                            <label for="">Foto</label><br>
                                            @if($informasi->foto)
                                            <img src="{{asset('storage/gambar/'. $informasi->foto)}}" alt="" style="width: 150px;">
                                            @endif
                                            <input type="file" name="foto" id="" class="form-control @error('foto') is-invalid @enderror" value="{{$fasilitas->foto}}" disabled>
                                            @error('foto')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <br>
                                        <a href="{{ route('fasilitas.index') }}" class="btn btn-primary">Kembali</a>
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