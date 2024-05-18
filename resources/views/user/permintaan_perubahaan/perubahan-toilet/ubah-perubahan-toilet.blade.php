@extends('user.user-dashboard')

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ubah Permintaan Perubahan Toilet</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Ubah Permintaan Perubahan Toilet</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Ubah Permintaan Perubahan Toilet</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/ubah-permintaan-perubahan-toilet/{{ $data->id }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="kd_toilet">Kd Toilet</label>
                    <input type="text" class="form-control" id="kd_toilet" name="kd_toilet"
                        value="{{ $data->kd_toilet }}">
                </div>
                <div class="form-group">
                    <label for="kondisi_toilet">Kondisi Toilet</label>
                    <input type="text" class="form-control" id="kondisi_toilet" name="kondisi_toilet"
                        value="{{ $data->kondisi_toilet }}">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan"
                        value="{{ $data->keterangan }}">
                </div>
                <div class="form-group">
                    <label for="ploting_lantai">Ploting Lantai</label>
                    <input type="text" class="form-control" id="ploting_lantai" name="ploting_lantai"
                        value="{{ $data->ploting_lantai }}">
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
                    <label for="progress">Progress</label>
                    <input type="text" class="form-control" id="progress" name="progress" value="{{ $data->progress }}">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="float: right">Simpan</button>
            </div>
        </form>
    </div>
@endsection
