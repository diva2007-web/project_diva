@extends('layouts.admin')
@section('content')
        <div class="content-body">
            <!-- row -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Fasilitas</h4>
                        <a href="{{route('fasilitas.create')}}" class="btn btn-sm btn-primary" enctype="multipart/form-data">ADD</a>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Fasilitas</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach($fasilitas as $data)

                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->nama_fasilitas}}</td>
                                        <td>
                                            <img src="{{asset('storage/gambar/'. $data->foto)}}" alt="" style="width: 100px;">
                                        </td>

                                        <td>
                                            <form action="{{route('fasilitas.destroy', $data->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('fasilitas.edit', $data->id)}}" class="btn btn-sm btn-success">Edit</a> |
                                                <a href="{{route('fasilitas.show', $data->id)}}" class="btn btn-sm btn-warning">Show</a> |
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                            </form>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
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