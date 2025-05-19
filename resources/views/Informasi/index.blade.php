@extends('layouts.admin')

@section('content')
<div class="content-body-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Informasi</h4>
                <a href="{{ route('informasi.create') }}" class="btn btn-sm btn-primary">ADD</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($informasi as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->judul }}</td>
                                    <td>{{ $data->deskripsi }}</td>
                                    <td>
                                        <img src="{{ asset('storage/gambar/' . $data->foto) }}" alt="Foto" style="width: 100px;">
                                    </td>
                                    <td>
                                        <form action="{{ route('informasi.destroy', $data->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('informasi.edit', $data->id) }}" class="btn btn-sm btn-success">Edit</a>
                                            <a href="{{ route('informasi.show', $data->id) }}" class="btn btn-sm btn-warning">Show</a>
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            @if($informasi->isEmpty())
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada data informasi.</td>
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
