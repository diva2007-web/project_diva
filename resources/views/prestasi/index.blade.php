@extends('layouts.admin')

@section('content')
<div class="content-body-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Prestasi</h4>
                <a href="{{ route('prestasi.create') }}" class="btn btn-sm btn-primary">Tambah</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Tingkat</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($prestasi as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->tgl_prestasi }}</td>
                                    <td>{{ $data->tingkat }}</td>
                                    <td>{{ \Str::limit($data->deskripsi, 50) }}</td>
                                    <td>
                                        <img src="{{ asset('storage/gambar/' . $data->foto) }}" alt="Foto" style="width: 100px; height: auto;">
                                    </td>
                                    <td>
                                        <a href="{{ route('prestasi.show', $data->id) }}" class="btn btn-sm btn-warning">Detail</a>
                                        <a href="{{ route('prestasi.edit', $data->id) }}" class="btn btn-sm btn-success">Edit</a>
                                        <form action="{{ route('prestasi.destroy', $data->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            @if($prestasi->isEmpty())
                                <tr>
                                    <td colspan="6" class="text-center">Belum ada data prestasi.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
