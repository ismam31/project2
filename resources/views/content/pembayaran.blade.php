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

<div class="card-container">
    
<?php
    // Daftar pesanan
    $pesanan = [
        ['nama' => 'Ninda', 'jumlah_tamu' => 8, 'jenis' => 'Dine In', 'no_meja' => '05', 'tanggal' => '24 September 2024'],
        ['nama' => 'Ismam', 'jumlah_tamu' => 8, 'jenis' => 'Dine In', 'no_meja' => '05', 'tanggal' => '24 September 2024'],
        ['nama' => 'Ilham', 'jumlah_tamu' => 8, 'jenis' => 'Dine In', 'no_meja' => '05', 'tanggal' => '24 September 2024'],
        ['nama' => 'Faqih', 'jumlah_tamu' => 8, 'jenis' => 'Dine In', 'no_meja' => '05', 'tanggal' => '24 September 2024'],
        ['nama' => 'Adi', 'jumlah_tamu' => 8, 'jenis' => 'Dine In', 'no_meja' => '05', 'tanggal' => '24 September 2024'],
        ['nama' => 'Zahran', 'jumlah_tamu' => 8, 'jenis' => 'Dine In', 'no_meja' => '05', 'tanggal' => '24 September 2024'],
        ['nama' => 'Ubay', 'jumlah_tamu' => 8, 'jenis' => 'Dine In', 'no_meja' => '05', 'tanggal' => '24 September 2024'],
        ['nama' => 'Afif', 'jumlah_tamu' => 8, 'jenis' => 'Dine In', 'no_meja' => '05', 'tanggal' => '24 September 2024'],
    ];

    // Looping untuk menampilkan setiap kartu pesanan
    foreach ($pesanan as $index => $data) {
        echo '<div class="card">';
        echo '<div class="card-header">' . ($index + 1) . '</div>'; // Menampilkan angka di atas kartu
        echo '<div class="card-content">';
        echo '<p><strong>Nama:</strong> <span style="float: right;">'  . $data['nama'] . '</span></p>';
        echo '<p><strong>Jumlah Tamu:</strong> <span style="float: right;">'  . $data['jumlah_tamu'] . '</span></p>';
        echo '<p><strong>Jenis:</strong> <span style="float: right;">' . $data['jenis'] . '</span></p>';
        echo '<p><strong>No. Meja:</strong> <span style="float: right;">'  . $data['no_meja'] . '</span></p>';
        echo '<p><strong>Tanggal:</strong> <span style="float: right;">' . $data['tanggal'] . '</span></p>';
        echo '</div>';
        echo '</div>';
    }
    ?>

</body>


</x-layout>
