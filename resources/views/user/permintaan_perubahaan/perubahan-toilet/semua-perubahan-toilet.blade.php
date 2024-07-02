@extends('user.user-dashboard')

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Permintaan Perubahan Kerusakan Toilet</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Permintaan Perubahan Kerusakan Toilet</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="row justify-content-between">
        <div class="d-flex justify-content-start m-2">

        </div>
        <div class="d-flex justify-content-end m-2">
            <a href="/user-tambah-permintaan-perubahan-toilet" class="btn btn-success">Tambah Data</a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Semua Permintaan Perubahan Kerusakan Toilet</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Kd Toilet</th>
                        <th>Kondisi Toilet</th>
                        <th>Keterangan</th>
                        <th>Ploting Lantai</th>
                        <th>Jenis Toilet</th>
                        <th>Progress</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $semuaData)
                        <tr>
                            <td>{{ $semuaData->kd_toilet }}</td>
                            <td>{{ $semuaData->kondisi_toilet }}</td>
                            <td>{{ $semuaData->keterangan }}</td>
                            <td class="text-center">{{ $semuaData->ploting_lantai }}</td>
                            <td class="text-center">{{ $semuaData->jenis_toilet }}</td>
                            <td>{{ $semuaData->progress }}</td>
                            <td class="text-center">
                                <form method="POST" action="/user-hapus-permintaan-perubahan-toilet/{{ $semuaData->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
