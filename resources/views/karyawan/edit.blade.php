@extends('layouts.admin')

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Karyawan</h4>
            </div>
            <div class="card-body">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input class="form-control" name="nama" type="text" value="{{ $karyawan->nama }}" id="nama" required>
                                </div>

                                <div class="form-group">
                                    <label>Jenis Kelamin</label><br>
                                    <label>Laki-laki</label>
                                    <input class="form-check-input" name="jenis_kelamin" type="radio" value="laki-laki" 
                                           @if($karyawan->jenis_kelamin == "laki-laki") checked @endif>
                                    <label>Perempuan</label>
                                    <input class="form-check-input" name="jenis_kelamin" type="radio" value="perempuan" 
                                           @if($karyawan->jenis_kelamin == "perempuan") checked @endif>
                                </div>

                                <div class="form-group">
                                    <label for="tugas">Tugas</label>
                                    <input class="form-control" name="tugas" type="text" value="{{ $karyawan->tugas }}" id="tugas" required>
                                </div>

                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <select class="form-control" name="jabatan" id="jabatan" required>
                                        <option value="staff" @if($karyawan->jabatan == 'staff') selected @endif>Staff</option>
                                        <option value="guru" @if($karyawan->jabatan == 'guru') selected @endif>Guru</option>
                                    </select>
                                </div>

                                <div class="mb-2">
                                    <label for="foto">Foto</label><br>
                                    @if($karyawan->foto)
                                    <img src="{{ Storage::url('gambar/' . $karyawan->foto) }}" alt="Foto Karyawan" class="img-thumbnail" width="100">
                                    @endif
                                    <input type="file" name="foto" id="foto" class="form-control @error('foto') is-invalid @enderror">
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
