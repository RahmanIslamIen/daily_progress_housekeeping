@extends('user.user-dashboard')

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Permintaan Perubahan Daily Shift</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Permintaan Perubahan Daily Shift</li>
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
            <a href="/user-tambah-permintaan-perubahan-daily-shift" class="btn btn-success">Tambah Data</a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Semua Permintaan Perubahan Daily Shift</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr style="font-size: 11px">
                        <th>Kd Daily Task</th>
                        <th>Ploting lantai</th>
                        <th>Kd Karyawan</th>
                        <th>Jenis Shift</th>
                        <th>tanggal</th>
                        <th>Nama</th>
                        <th>Checklist Masuk</th>
                        <th>Checklist Keluar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $semuaData)
                        <tr style="font-size: 11px">
                            <td>{{ $semuaData->kd_daily_task }}</td>
                            <td>{{ $semuaData->ploting_lantai }}</td>
                            <td>{{ $semuaData->kd_karyawan }}</td>
                            <td>{{ $semuaData->jenis_shift }}</td>
                            <td>{{ $semuaData->tanggal }}</td>
                            <td>{{ $semuaData->nama }}</td>
                            <td>{{ $semuaData->checklist_masuk }}</td>
                            <td>{{ $semuaData->checklist_keluar }}</td>
                            <td class="text-center">
                                <form method="POST"
                                    action="/user-hapus-permintaan-perubahan-daily-shift/{{ $semuaData->id }}">
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
