@extends('layouts.admin')

@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PENDAFTARAN</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Basic Form Elements
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{ route('eskul.update', $eskul->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="nama_lengkap">Nama Eskul</label>
                                        <input type="text" class="form-control" name="nama_eskul" value="{{ $eskul->nama_eskul }}" disabled>
                                    </div>
                                    <div class="mb-2">
                                    <label for="">Foto</label><br>
                                    @if($eskul->foto)
                                    <img src="{{asset('storage/gambar/'. $eskul->foto)}}" alt="Foto eskul" style="width: 150px;">
                                    @endif
                                    <input type="file" name="foto" id="" class="form-control @error('foto') is-invalid @enderror" value="{{$eskul->foto}}" disabled>
                                    @error('foto')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                    <br>
                                    <a href="{{ route('eskul.index') }}" class="btn btn-primary">Kembali</a>
                                </form>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection
