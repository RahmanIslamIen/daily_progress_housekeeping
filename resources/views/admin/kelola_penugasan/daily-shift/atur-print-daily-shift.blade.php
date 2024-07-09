@extends('admin.admin-dashboard')
@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Atur Print Daily Shift</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Atur Print</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Atur Print Daily Shift</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/print-pdf-daily-shift">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="start_date">Tanggal Mulai</label>
                    <input type="date" class="form-control" id="start_date" name="start_date">
                </div>
                <div class="form-group">
                    <label for="end_date">Tanggal Akhir</label>
                    <input type="date" class="form-control" id="end_date" name="end_date">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <select class="form-control" id="nama" name="nama">
                        <option value="">Pilih Nama Karyawan</option>
                        @foreach ($listNamaKaryawan as $nama)
                            <option value="{{ $nama }}">{{ $nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="float: right">Cetak Print</button>
            </div>
        </form>
    </div>
@endsection
