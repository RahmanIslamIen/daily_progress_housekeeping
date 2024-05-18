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
                        <li class="breadcrumb-item active">Tambah Shift Task</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Shift Task</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="tambah-shift-task">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="kd_daily_task">Kd Daily Task</label>
                    <input type="text" class="form-control" id="kd_daily_task" name="kd_daily_task">
                </div>
                <div class="form-group">
                    <label for="jam">jam</label>
                    <input type="time" class="form-control" id="jam" name="jam">
                </div>
                <div class="form-group">
                    <label for="task_pekerjaan">Task Pekerjaan</label>
                    <input type="text" class="form-control" id="task_pekerjaan" name="task_pekerjaan">
                </div>
                <div class="form-group">
                    <label for="jenis_toilet">Jenis Toilet</label>
                    <select class="form-control" id="jenis_toilet" name="jenis_toilet">
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                        <option value="vip">Vip</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="float: right">Simpan</button>
            </div>
        </form>
    </div>
@endsection
