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
                        <li class="breadcrumb-item active">Edit Shift Task</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Shift Task</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/ubah-shift-task/{{ $data->id }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="kd_daily_task">Kd Daily Task</label>
                    <input type="text" class="form-control" id="kd_daily_task" name="kd_daily_task"
                        value="{{ $data->kd_daily_task }}" readonly>
                </div>
                <div class="form-group">
                    <label for="jam">jam</label>
                    <input type="time" class="form-control" id="jam" name="jam" value="{{ $data->jam }}">
                </div>
                <div class="form-group">
                    <label for="task_pekerjaan">Task Pekerjaan</label>
                    <input type="text" class="form-control" id="task_pekerjaan" name="task_pekerjaan"
                        value="{{ $data->task_pekerjaan }}">
                </div>
                <div class="form-group">
                    <label for="jenis_toilet">Jenis Toilet</label>
                    <select class="form-control" id="jenis_toilet" name="jenis_toilet">
                        <option value="pria" {{ $data->jenis_toilet == 'pria' ? 'selected' : '' }}>Pria</option>
                        <option value="wanita" {{ $data->jenis_toilet == 'wanita' ? 'selected' : '' }}>Wanita</option>
                        <option value="vip" {{ $data->jenis_toilet == 'vip' ? 'selected' : '' }}>Vip</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan"
                        value="{{ $data->keterangan }}">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="float: right">Simpan</button>
            </div>
        </form>
    </div>
@endsection
