@extends('admin.admin-dashboard')
@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daily Shift</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Shift</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Daily Shift</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="tambah-daily-shift">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="kd_daily_task">Kd Daily Task</label>
                            <select class="form-control" id="kd_daily_task" name="kd_daily_task">
                                @foreach ($shiftTasks as $task)
                                    <option value="{{ $task->kd_daily_task }}">{{ $task->kd_daily_task }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="ploting_lantai">Ploting Lantai</label>
                            <input type="text" class="form-control" id="ploting_lantai" name="ploting_lantai"
                                placeholder="masukan plotingan lantai">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="kd_karyawan">Kd karyawan</label>
                            <input type="text" class="form-control" id="kd_karyawan" name="kd_karyawan"
                                placeholder="masukan kode karyawan">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="checklist_masuk">Check List Masuk</label>
                            <input type="time" class="form-control" id="checklist_masuk" name="checklist_masuk"
                                placeholder="masukan kode karyawan">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="jenis_shift">Jenis Shift</label>
                            <select class="form-control" id="jenis_shift" name="jenis_shift">
                                <option value="Pagi">Pagi</option>
                                <option value="Siang">Siang</option>
                                <option value="Malam">Malam</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="checklist_keluar">Check List Keluar</label>
                            <input type="time" class="form-control" id="checklist_keluar" name="checklist_keluar"
                                placeholder="masukan kode karyawan">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="float: right">Simpan</button>
            </div>
        </form>
    </div>
@endsection
