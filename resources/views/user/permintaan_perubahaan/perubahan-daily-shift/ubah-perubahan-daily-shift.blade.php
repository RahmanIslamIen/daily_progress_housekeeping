@extends('user.user-dashboard')

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Permintaan Perubahan Shift Task</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Permintaan Perubahan Shift Task</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Permintaan Perubahan Shift Task</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/ubah-permintaan-perubahan-daily-shift/{{ $data->id }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="kd_daily_task">Kd Daily Task</label>
                    <input type="text" class="form-control" id="kd_daily_task" name="kd_daily_task"
                        value="{{ $data->kd_daily_task }}">
                </div>
                <div class="form-group">
                    <label for="ploting_lantai">Ploting Lantai</label>
                    <input type="text" class="form-control" id="ploting_lantai" name="ploting_lantai"
                        value="{{ $data->ploting_lantai }}">
                </div>
                <div class="form-group">
                    <label for="kd_karyawan">Kode karyawan</label>
                    <input type="text" class="form-control" id="kd_karyawan" name="kd_karyawan"
                        value="{{ $data->kd_karyawan }}">
                </div>
                <div class="form-group">
                    <label for="jenis_shift">Jenis Toilet</label>
                    <select class="form-control" id="jenis_shift" name="jenis_shift">
                        <option value="pagi" {{ $data->jenis_toilet == 'pria' ? 'selected' : '' }}>Pagi</option>
                        <option value="siang" {{ $data->jenis_toilet == 'wanita' ? 'selected' : '' }}>Siang</option>
                        <option value="malam" {{ $data->jenis_toilet == 'vip' ? 'selected' : '' }}>Malam</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ $data->tanggal }}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="checklist_masuk">Checklist Masuk</label>
                    <input type="time" class="form-control" id="checklist_masuk" name="checklist_masuk"
                        value="{{ $data->checklist_masuk }}">
                </div>
                <div class="form-group">
                    <label for="checklist_keluar">Nama</label>
                    <input type="time" class="form-control" id="checklist_keluar" name="checklist_keluar"
                        value="{{ $data->checklist_keluar }}">
                </div>
                <div class="form-group">
                    <label for="approval">Approval</label>
                    <input type="text" class="form-control" id="approval" name="approval"
                        value="{{ $data->approval }}">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="float: right">Simpan</button>
            </div>
        </form>
    </div>
@endsection
