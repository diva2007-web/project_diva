@extends('layouts.admin')
@section('content')
<div class="content-body-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Prestasi</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('prestasi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Tanggal Prestasi -->
                    <div class="form-group">
                        <label for="tgl_prestasi">Tanggal Prestasi</label>
                        <input type="date" name="tgl_prestasi" class="form-control @error('tgl_prestasi') is-invalid @enderror">
                        @error('tgl_prestasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Nama Prestasi -->
                    <div class="form-group">
                        <label for="nama_prestasi">Nama Prestasi</label>
                        <input type="text" name="nama_prestasi" class="form-control @error('nama_prestasi') is-invalid @enderror">
                        @error('nama_prestasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Tingkat -->
                    <div class="form-group">
                        <label for="tingkat">Tingkat</label>
                        <select name="tingkat" class="form-control @error('tingkat') is-invalid @enderror">
                            <option value="Sekolah">Sekolah</option>
                            <option value="Kecamatan">Kecamatan</option>
                            <option value="Kabupaten/Kota">Kabupaten/Kota</option>
                            <option value="Provinsi">Provinsi</option>
                            <option value="Nasional">Nasional</option>
                        </select>
                        @error('tingkat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Deskripsi -->
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"></textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Foto -->
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
                        @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
