<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        @if (Auth::check())
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }} - <span
                        class="text-white">{{ Auth::user()->kd_karyawan }}</span>
                </a>
                <span class="badge badge-info">{{ Auth::user()->role }}</span>
            </div>
        @else
            <script>
                window.location.href = '{{ route('login') }}';
            </script>
        @endif
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-header">ABSENSI HARIAN</li>
            <li class="nav-item">
                <a href="/user-semua-daily-shift" class="nav-link">
                    <img src="/assets/icons/daily_shift.png" width="32px" height="32px">
                    <p>
                        Daily Shift
                    </p>
                </a>
            </li>
            <li class="nav-header">LAPORAN KERUSAKAN</li>
            <li class="nav-item">
                <a href="/user-semua-kerusakan-toilet" class="nav-link">
                    <img src="/assets/icons/report.png" width="32px" height="32px">
                    <p>
                        Data Kerusakan Toilet
                    </p>
                </a>
            </li>
            <li class="nav-header">PERMINTAAN PERUBAHAN</li>
            <li class="nav-item">
                <a href="/user-semua-permintaan-perubahan-daily-shift" class="nav-link">
                    <img src="/assets/icons/change_daily_shift.png" width="32px" height="32px">
                    <p>Perubahan Daily Shift</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/user-semua-permintaan-perubahan-toilet" class="nav-link">
                    <img src="/assets/icons/change_report.png" width="32px" height="32px">
                    <p>Perubahan Toilet</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
