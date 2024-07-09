@extends('admin.admin-dashboard')

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Shift Task</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Shift Task</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="row justify-content-between">
        <div class="d-flex justify-content-start m-2">
            <a href="print-pdf-shift-task" class="btn btn-warning text-white" target="_blank">Print PDF</a>
        </div>
        <div class="d-flex justify-content-end m-2">
            <a href="/tambah-shift-task" class="btn btn-success">Tambah Data</a>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Semua Data Shift Task</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Kd Daily Task</th>
                        <th>Jam</th>
                        <th>Task Pekerjaan</th>
                        <th>Jenis Toilet</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $semuaData)
                        <tr>
                            <td>{{ $semuaData->kd_daily_task }}</td>
                            <td class="text-center">{{ $semuaData->jam }}</td>
                            <td>{{ $semuaData->task_pekerjaan }}</td>
                            <td class="text-center">{{ $semuaData->jenis_toilet }}</td>
                            <td>{{ substr($semuaData->keterangan, 0, 50) }}</td>
                            <td class="text-center">
                                <div class="row">
                                    <div class="col">
                                        <a href="ubah-shift-task/{{ $semuaData->id }}" class="btn btn-xs btn-info">edit</a>
                                    </div>
                                    <div class="col">
                                        <form method="POST" action="/hapus-shift-task/{{ $semuaData->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-xs btn-danger"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
