<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Daily Shift</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #00215E;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            font-size: 10px;
        }

        th {
            background-color: #2C4E80;
            color: white;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <h1>Laporan Absensi</h1>
    <h4>Laporan Daily Shift dari <u>{{ $startDate }}</u> hingga <u>{{ $endDate }}</u></h4>
    <p>Untuk Karyawan : {{ $nama }}</p>
    <table>
        <thead>
            <tr>
                <th>Kd Daily Task</th>
                <th>Ploting Lantai</th>
                <th>Kd Karyawan</th>
                <th>Jenis Shift</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Checklist Masuk</th>
                <th>Checklist Keluar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dailyShifts as $semuaData)
                <tr>
                    <td>{{ $semuaData->kd_daily_task }}</td>
                    <td>{{ $semuaData->ploting_lantai }}</td>
                    <td>{{ $semuaData->kd_karyawan }}</td>
                    <td>{{ $semuaData->jenis_shift }}</td>
                    <td>{{ $semuaData->tanggal }}</td>
                    <td>{{ $semuaData->nama }}</td>
                    <td>{{ $semuaData->checklist_masuk }}</td>
                    <td>{{ $semuaData->checklist_keluar }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
