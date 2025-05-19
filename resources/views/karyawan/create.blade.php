@extends('layouts.admin')

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Karyawan</h4>
            </div>
            <div class="card-body">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route('karyawan.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input class="form-control" name="nama" type="text" id="nama" required>
                                </div>

                                <div class="form-group">
                                    <label>Jenis Kelamin</label><br>
                                    <input type="radio" name="jenis_kelamin" value="laki-laki" id="laki-laki" required> Laki-laki
                                    <input type="radio" name="jenis_kelamin" value="perempuan" id="perempuan" required> Perempuan
                                </div>

                                <div class="form-group">
                                    <label for="tugas">Tugas</label>
                                    <input class="form-control" name="tugas" type="text" id="tugas" required>
                                </div>

                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <select class="form-control" name="jabatan" id="jabatan" required>
                                        <option value="staff">Staff</option>
                                        <option value="guru">Guru</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" id="foto" required>
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
@endsection
