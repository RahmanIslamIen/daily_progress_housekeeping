<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Kerusakan Toilet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #00215E;
        }
    </style>
</head>

<body>
    <h1>Kerusakan Toilet</h1>

    <p>kd karyawan : {{ $data->kd_karyawan }}</p>
    <p>kd toilet :{{ $data->kd_toilet }}</p>
    <p>tanggal pembuatan : {{ $data->tanggal_pembuatan }}</p>
    <p>tanggal kejadian : {{ $data->tanggal_kejadian }}</p>
    <p>nama kerusakan : {{ $data->nama_kerusakan }}</p>
    <p>lokasi kerusakan :{{ $data->lokasi_kerusakan }}</p>
    <p>kronologi kerusakan : {{ $data->kronologi_kerusakan }}</p>
    <p>tindakan : {{ $data->tindakan }}</p>
    <p>lampiran foto : {{ $data->lampiran_foto }}</p>
    <p>yang melaporkan :{{ $data->yang_melaporkan }}</p>
    <p>yang mengetahui : {{ $data->yang_mengetahui }}</p>
    <p>catatan perbaiakan : {{ $data->catatan_perbaikan }}</p>
    <p>yang mengerjakan : {{ $data->yang_mengerjakan }}</p>

</body>

</html>
