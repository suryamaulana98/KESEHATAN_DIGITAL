<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data TTD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @page {
            size: A4;
            margin: 0;
        }

        body {
            margin: 2cm;
        }

        .table-container {
            width: 100%;
            overflow-x: auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 8px;
            border: 1px solid #000;
        }

        .table thead th {
            background-color: #f0f0f0;
        }
    </style>
</head>

<body>
    <center>
        <h3>DATA TABLET TAMBAH DARAH KELAS SMKN 1 LUMAJANG</h3>
    </center>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NAMA KELAS</th>
                    <th>STATUS</th>
                    <th>JUMLAH</th>
                    <th>TANGGAL</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($user as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->kelas->kelas }}</td>
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->jumlah }}</td>
                        <td>{{ $data->created_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Tidak ada data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
