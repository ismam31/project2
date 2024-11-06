<x-layout>
    <section class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <a href="#">
                                <h3 class="card-title text-white">
                                    Tambah Menu
                                </h3>
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <form action="daftarBarang.php?page=admin&action=update" method="GET">
                            <div class="card-body">
                                <div class="table table-responsive">
                                    <table id="daftarBarangTable"
                                        class="table table-bordered table-hover display nowrap"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th hidden></th>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah Barang</th>
                                                <th>Harga Modal</th>
                                                <th>Harga Jual</th>
                                                <th>Action Button</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td hidden></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td style="text-align:center;">
                                                <a href ="#"><i class="fas fa-edit fa-2x" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-trash fa-2x" style="color:red;" aria-hidden="true"></i></a>
                                            </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th hidden></th>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah Barang</th>
                                                <th>Harga Modal</th>
                                                <th>Harga Jual</th>
                                                <th>Action Button</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            </p>
                            <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
</x-layout>