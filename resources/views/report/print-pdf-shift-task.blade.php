<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Shift Task</title>
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
    <h1>Shift Task</h1>
    <table>
        <thead>
            <tr>
                <th>Kd Daily Task</th>
                <th>Jam</th>
                <th>Task Pekerjaan</th>
                <th>Jenis Toilet</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <!-- Mulai loop data -->
            @foreach ($data as $semuaData)
                <tr>
                    <td>{{ $semuaData->kd_daily_task }}</td>
                    <td>{{ $semuaData->jam }}</td>
                    <td>{{ $semuaData->task_pekerjaan }}</td>
                    <td>{{ $semuaData->jenis_toilet }}</td>
                    <td>{{ $semuaData->keterangan }}</td>
                </tr>
            @endforeach
            <!-- Akhir loop data -->
        </tbody>
    </table>
</body>

</html>
