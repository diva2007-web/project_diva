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
                                    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" type="text" value="{{$karyawan->nama}}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label><br>
                                            <input class="form-check-input" name="jenis_kelamin" type="radio" value="{{$karyawan->jenis_kelamin}}" disabled>Laki-laki
                                            <input class="form-check-input" name="jenis_kelamin" type="radio" value="{{$karyawan->jenis_kelamin}}" disabled>Perempuan
                                        </div>
                                        <div class="form-group">
                                            <label>Tugas</label>
                                            <input class="form-control" name="tugas" type="text" value="{{$karyawan->tugas}}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <select class="form-control" name="jabatan" value="{{$karyawan->jabatan}}" disabled>
                                                <option value="staff">Staff</option>
                                                <option value="guru">Guru</option>
                                            </select>
                                        </div>
                                        <div class="mb-2">
                                            <label for="">Foto</label><br>
                                            @if($karyawan->foto)
                                            <img src="{{asset('storage/gambar/'. $karyawan->foto)}}" alt="" style="width: 150px;">
                                            @endif
                                            <input type="file" name="foto" id="" class="form-control @error('foto') is-invalid @enderror" value="{{$karyawan->foto}}" disabled>
                                            @error('foto')
                                            <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <br>
                                        <a href="{{ route('karyawan.index') }}" class="btn btn-primary">Kembali</a>
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