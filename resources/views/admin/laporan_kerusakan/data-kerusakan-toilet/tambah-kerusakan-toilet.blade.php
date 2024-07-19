@extends('admin.admin-dashboard')
@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kerusakan Toilet</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Kerusakan Toilet</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Kerusakan Toilet</h3>
        </div>
        <!-- Notifikasi Sukses atau Error -->
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="/tambah-kerusakan-toilet" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="kd_karyawan">Kd karyawan</label>
                            <input type="text" class="form-control" id="kd_karyawan" name="kd_karyawan">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="kd_toilet">Kd Toilet</label>
                            <input type="text" class="form-control" id="kd_toilet" name="kd_toilet">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="tanggal_pembuatan">Tanggal Pembuatan</label>
                            <input type="date" class="form-control" id="tanggal_pembuatan" name="tanggal_pembuatan">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="tanggal_kejadian">Tanggal Kejadian</label>
                            <input type="date" class="form-control" id="tanggal_kejadian" name="tanggal_kejadian">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nama_kerusakan">Nama Kerusakan</label>
                    <input type="text" class="form-control" id="nama_kerusakan" name="nama_kerusakan">
                </div>
                <div class="form-group">
                    <label for="lokasi_kerusakan">Lokasi Kerusakan</label>
                    <input type="text" class="form-control" id="lokasi_kerusakan" name="lokasi_kerusakan">
                </div>
                <div class="form-group">
                    <label for="kronologi_kerusakan">Kronologi Kerusakan</label>
                    <input type="text" class="form-control" id="kronologi_kerusakan" name="kronologi_kerusakan">
                </div>
                <div class="form-group">
                    <label for="tindakan">Tindakan</label>
                    <input type="text" class="form-control" id="tindakan" name="tindakan">
                </div>
                <div class="form-group">
                    <label for="lampiran_foto" class="form-label">Lampiran Foto</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="lampiran_foto" name="lampiran_foto"
                                accept="image/*">
                            <label class="custom-file-label" for="lampiran_foto">Pilih File</label>
                        </div>
                    </div>
                    <img id="preview" src="#" alt="Preview Gambar"
                        style="display: none; margin-top: 10px; max-width: 200px;" />
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="yang_melaporkan">Yang Melaporkan</label>
                            <input type="text" class="form-control" id="yang_melaporkan" name="yang_melaporkan">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="yang_mengetahui">Yang Mengetahui</label>
                            <input type="text" class="form-control" id="yang_mengetahui" name="yang_mengetahui">
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="catatan_perbaikan">Catatan Perbaikan</label>
                    <input type="text" class="form-control" id="catatan_perbaikan" name="catatan_perbaikan">
                </div>
                <div class="form-group">
                    <label for="yang_mengerjakan">Yang Mengerjakan</label>
                    <input type="text" class="form-control" id="yang_mengerjakan" name="yang_mengerjakan">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="float: right">Simpan</button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('lampiran_foto').addEventListener('change', function(event) {
            const input = event.target;
            const preview = document.getElementById('preview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = '#';
                preview.style.display = 'none';
            }
        });
    </script>
@endsection
