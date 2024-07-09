@extends('user.user-dashboard')

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Absen Daily Shift</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Absen Daily Shift</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="row justify-content-between">
        <div class="d-flex justify-content-start m-2">
            <a href="/atur-print-daily-shift-user" class="btn btn-warning text-white">Print PDF</a>
        </div>
        <div class="d-flex justify-content-end m-2">
            <a href="/user-tambah-daily-shift" class="btn btn-success">Absen Daily Shift</a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Semua Absen Daily Shift Kamu</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Kd Daily Task</th>
                        <th>Ploting Lantai</th>
                        <th>Kd Karyawan</th>
                        <th>Jenis Shift</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Checklist Masuk</th>
                        <th>Checklist Keluar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $semuaData)
                        <tr>
                            <td>{{ $semuaData->kd_daily_task }}</td>
                            <td>{{ $semuaData->ploting_lantai }}</td>
                            <td>{{ $semuaData->kd_karyawan }}</td>
                            <td class="text-center">{{ $semuaData->jenis_shift }}</td>
                            <td class="text-center">{{ $semuaData->tanggal }}</td>
                            <td>{{ $semuaData->nama }}</td>
                            <td class="text-center">{{ $semuaData->checklist_masuk }}</td>
                            <td class="text-center">{{ $semuaData->checklist_keluar }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
