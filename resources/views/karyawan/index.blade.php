@extends('layouts.admin')

@section('content')
<div class="content-body-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Informasi</h4>
                <a href="{{ route('karyawan.create') }}" class="btn btn-sm btn-primary">ADD</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tugas</th>
                                <th>Jabatan</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($karyawan as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->jenis_kelamin }}</td>
                                <td>{{ $data->tugas }}</td>
                                <td>{{ $data->jabatan }}</td>
                                <td>
                                    <img src="{{ asset('storage/gambar/' . $data->foto) }}" alt="" style="width: 100px;">
                                </td>
                                <td>
                                    <form action="{{ route('karyawan.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('karyawan.edit', $data->id) }}" class="btn btn-sm btn-success">Edit</a> |
                                        <a href="{{ route('karyawan.show', $data->id) }}" class="btn btn-sm btn-warning">Show</a> |
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
