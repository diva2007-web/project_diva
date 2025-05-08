@extends('layouts.admin')
@section('content')
        <div class="content-body">
            <!-- row -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Karyawan</h4>
                        <a href="{{route('eskul.create')}}" class="btn btn-sm btn-primary" enctype="multipart/form-data">ADD</a>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Eskul</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach($eskul as $data)

                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$data->nama_eskul}}</td>
                                        <td>
                                            <img src="{{asset('storage/gambar/'. $data->foto)}}" alt="" style="width: 100px;">
                                        </td>

                                        <td>
                                            <form action="{{route('eskul.destroy', $data->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('eskul.edit', $data->id)}}" class="btn btn-sm btn-success">Edit</a> |
                                                <a href="{{route('eskul.show', $data->id)}}" class="btn btn-sm btn-warning">Show</a> |
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