@extends('admin.admin-dashboard')

@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <p>Shift Task</p>
                    <h3>{{ $jmlST }}</h3>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-tasks"></i>
                </div>
                <a href="#" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <p>Absen Daily Shift</p>
                    <h3>{{ $jmlDS }}</h3>
                </div>
                <div class="icon">
                    <i class="nav-icon ion ion-ios-clock"></i>
                </div>
                <a href="#" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner text-white">
                    <p>Perubahan Daily Shift</p>
                    <h3>{{ $jmlUDS }}</h3>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-sync"></i>
                </div>
                <a href="#" class="small-box-footer" style="color: white;">Lihat <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <p>Laporan Kerusakan Toilet</p>
                    <h3>{{ $jmlDKT }}</h3>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-exclamation-triangle"></i>
                </div>
                <a href="#" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <h3>bagian grafik</h3>
    <!-- BAR CHART -->
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Grafik Absensi</h3>
        </div>
        <div class="card-body">
            <div class="chart">
                <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; width: 100%;"></canvas>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection

@section('script_custom')
    <script>
        $(function() {
            // Data yang telah diberikan sebelumnya dari controller
            var dates = {!! json_encode($dates) !!};
            var totals = {!! json_encode($totals) !!};

            // Membuat chart menggunakan Chart.js
            var ctx = document.getElementById('barChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: dates,
                    datasets: [{
                        label: 'Jumlah Absen Harian',
                        data: totals,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        });
    </script>
@endsection
