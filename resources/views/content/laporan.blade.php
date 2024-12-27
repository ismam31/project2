<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 90%;
            margin: 20px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table thead tr {
            background-color: #007bff;
            color: #fff;
            text-align: left;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;
            text-align: center;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Laporan Pemesanan</h1>
        <table>
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Jumlah Pesanan</th>
                    <th>Total Pendapatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laporans as $laporan)
                <tr>
                    <td>{{ $laporan->tanggal }}</td>
                    <td>{{ $laporan->jumlah_pesanan }}</td>
                    <td>Rp {{ number_format($laporan->total_pendapatan, 0, ',', '.') }}</td>
                    <td><a href="#" class="btn">Tampilkan Laporan</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
