@extends('user.user-dashboard')

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Permintaan Perubahan Toilet</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Permintaan Perubahan Toilet</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Permintaan Perubahan Toilet</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="user-tambah-permintaan-perubahan-toilet">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="kd_toilet">Kd Toilet</label>
                            <input type="text" class="form-control" id="kd_toilet" name="kd_toilet">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="kondisi_toilet">Kondisi Toilet</label>
                            <input type="text" class="form-control" id="kondisi_toilet" name="kondisi_toilet">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="ploting_lantai">Ploting Lantai</label>
                            <input type="text" class="form-control" id="ploting_lantai" name="ploting_lantai">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="jenis_toilet">Jenis Toilet</label>
                    <select class="form-control" id="jenis_toilet" name="jenis_toilet">
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                        <option value="vip">Vip</option>
                    </select>
                </div>
                <div class="form-group" hidden>
                    <label for="progress">Progress</label>
                    <input type="text" class="form-control" id="progress" name="progress" value="pelaporan" hidden>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="float: right">Simpan</button>
            </div>
        </form>
    </div>
@endsection
