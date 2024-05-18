@extends('user.user-dashboard')

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Lapor Kerusakan Toilet</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Semua Laporan Kerusakan Toilet</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="row justify-content-between">
        <div class="d-flex justify-content-start m-2">
            <!-- Kosongkan kolom setengah -->
        </div>
        <div class="d-flex justify-content-end m-2">
            <a href="/user-tambah-kerusakan-toilet" class="btn btn-success">Tambah Data</a>
        </div>
    </div>

    @foreach ($data as $semuaData)
        <div class="card">
            <div class="card-header" hidden>
                <h3 class="card-title">Semua Kerusakan Toilet</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <p>kd karyawan : {{ $semuaData->kd_karyawan }}</p>
                <p>kd toilet :{{ $semuaData->kd_toilet }}</p>
                <p>tanggal pembuatan : {{ $semuaData->tanggal_pembuatan }}</p>
                <p>tanggal kejadian : {{ $semuaData->tanggal_kejadian }}</p>
                <p>nama kerusakan : {{ $semuaData->nama_kerusakan }}</p>
                <p>lokasi kerusakan :{{ $semuaData->lokasi_kerusakan }}</p>
                <p>kronologi kerusakan : {{ $semuaData->kronologi_kerusakan }}</p>
                <p>tindakan : {{ $semuaData->tindakan }}</p>
                <p>lampiran foto : {{ $semuaData->lampiran_foto }}</p>
                <p>yang melaporkan :{{ $semuaData->yang_melaporkan }}</p>
                <p>yang mengetahui : {{ $semuaData->yang_mengetahui }}</p>
                <p>catatan perbaiakan : {{ $semuaData->catatan_perbaikan }}</p>
                <p>yang mengerjakan : {{ $semuaData->yang_mengerjakan }}</p>
                <div style="display: inline-block; float: right;">
                    <table>
                        <tr>
                            <td><a href="/print-pdf-keruskan-toilet/{{ $semuaData->id }}" class="btn btn-warning"
                                    target="_blank">Print PDF</a>
                            </td>
                            </td>
                            <td>
                                <form method="POST" action="/user-hapus-kerusakan-toilet/{{ $semuaData->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-s btn-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    @endforeach
@endsection
