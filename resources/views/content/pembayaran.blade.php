<x-layout>

<head>
    
<div class="content mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header bg-primary">
                        <h3 class="card-title text-white">
                            Daftar Pesanan
                        </h3>
                    </div>
                     
</head>

<body>
<style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            max-width: 800px;
            margin: auto;
        }
        .card {
            width: 30%;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #40739e;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .title {
            font-size: 1.2em;
            font-weight: bold;
        }
        .content {
            margin: 10px 0;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Daftar Pesanan</h1>
</div>

<div class="container">
    <?php
    // Daftar pesanan
    $pesanan = [
        ['nama' => 'Ninda', 'jumlah_tamu' => 8, 'jenis' => 'Dine In', 'no_meja' => '05', 'tanggal' => '24 September 2024'],
        ['nama' => 'Isman', 'jumlah_tamu' => 8, 'jenis' => 'Dine In', 'no_meja' => '05', 'tanggal' => '24 September 2024'],
        ['nama' => 'Ilham', 'jumlah_tamu' => 8, 'jenis' => 'Dine In', 'no_meja' => '05', 'tanggal' => '24 September 2024'],
        ['nama' => 'Imam', 'jumlah_tamu' => 8, 'jenis' => 'Dine In', 'no_meja' => '05', 'tanggal' => '24 September 2024'],
        ['nama' => 'Isman', 'jumlah_tamu' => 8, 'jenis' => 'Dine In', 'no_meja' => '05', 'tanggal' => '24 September 2024'],
        ['nama' => 'Isman', 'jumlah_tamu' => 8, 'jenis' => 'Dine In', 'no_meja' => '05', 'tanggal' => '24 September 2024'],
    ];

    // Looping untuk menampilkan setiap kartu pesanan
    foreach ($pesanan as $index => $data) {
        echo '<div class="card">';
        echo '<div class="title"> ' . ($index + 1) . ' </div>';
        echo '<div class="content">';
        echo '<p><strong>Nama:</strong> ' . $data['nama'] . '</p>';
        echo '<p><strong>Jumlah Tamu:</strong> ' . $data['jumlah_tamu'] . '</p>';
        echo '<p><strong>Jenis:</strong> ' . $data['jenis'] . '</p>';
        echo '<p><strong>No. Meja:</strong> ' . $data['no_meja'] . '</p>';
        echo '<p><strong>Tanggal:</strong> ' . $data['tanggal'] . '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>
</body>


</x-layout>
