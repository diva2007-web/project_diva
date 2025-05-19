@extends('layouts.admin')
@section('content')
<div class="content-body-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Prestasi</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('prestasi.update', $prestasi->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="tgl_prestasi">Tanggal Prestasi</label>
                        <input type="text" name="tgl_prestasi" class="form-control @error('tgl_prestasi') is-invalid @enderror" value="{{ $prestasi->tgl_prestasi }}">
                        @error('tgl_prestasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Nama Prestasi -->
                    <div class="form-group">
                        <label for="nama_prestasi">Nama Prestasi</label>
                        <input type="text" name="nama_prestasi" class="form-control @error('nama_prestasi') is-invalid @enderror" value="{{ $prestasi->nama_prestasi }}">
                        @error('nama_prestasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Tingkat -->
                    <div class="form-group">
                        <label for="tingkat">Tingkat</label>
                        <select name="tingkat" class="form-control @error('tingkat') is-invalid @enderror">
                            @foreach(['Sekolah', 'Kecamatan', 'Kabupaten/Kota', 'Provinsi', 'Nasional'] as $tingkat)
                                <option value="{{ $tingkat }}" {{ old('tingkat', $prestasi->tingkat) == $tingkat ? 'selected' : '' }}>
                                    {{ $tingkat }}
                                </option>
                            @endforeach
                        </select>
                        @error('tingkat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Deskripsi -->
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">{{ $prestasi->deskripsi }}</textarea>
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
                        @if($prestasi->foto)
                            <div class="mt-2">
                                <img src="{{ asset('storage/gambar/' . $prestasi->foto) }}" alt="Foto Prestasi" width="150">
                            </div>
                        @endif
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
