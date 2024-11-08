<x-layout>
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

<div class="card-container">
    <?php
    // Data tamu dalam bentuk array
    $guests = [
        ["nama" => "Ninda", "jumlah_tamu" => 8, "jenis" => "Dine In", "no_meja" => "05", "tanggal" => "24 September 2024"],
        ["nama" => "Isman", "jumlah_tamu" => 8, "jenis" => "Dine In", "no_meja" => "05", "tanggal" => "24 September 2024"],
        ["nama" => "Ilham", "jumlah_tamu" => 8, "jenis" => "Dine In", "no_meja" => "05", "tanggal" => "24 September 2024"],
        ["nama" => "Isman", "jumlah_tamu" => 8, "jenis" => "Dine In", "no_meja" => "05", "tanggal" => "24 September 2024"],
        ["nama" => "Isman", "jumlah_tamu" => 8, "jenis" => "Dine In", "no_meja" => "05", "tanggal" => "24 September 2024"],
        ["nama" => "Isman", "jumlah_tamu" => 8, "jenis" => "Dine In", "no_meja" => "05", "tanggal" => "24 September 2024"],
    ];

    // Loop untuk menampilkan setiap kartu tamu
    foreach ($guests as $guest) {
        echo '<div class="card">';
        echo '<div class="card-header">1</div>';
        echo '<div class="card-content">';
        echo '<p><strong>Nama</strong> <span style="float: right;">' . htmlspecialchars($guest["nama"]) . '</span></p>';
        echo '<p><strong>Jumlah Tamu</strong> <span style="float: right;">' . htmlspecialchars($guest["jumlah_tamu"]) . '</span></p>';
        echo '<p><strong>Jenis</strong> <span style="float: right;">' . htmlspecialchars($guest["jenis"]) . '</span></p>';
        echo '<p><strong>No. Meja</strong> <span style="float: right;">' . htmlspecialchars($guest["no_meja"]) . '</span></p>';
        echo '<p><strong>Tanggal</strong> <span style="float: right;">' . htmlspecialchars($guest["tanggal"]) . '</span></p>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>

               
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
</x-layout>