
<x-layout>
    <div class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Pesan Baru</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="#" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="namaTamu">Nama</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa-solid fa-boxes-stacked"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="namaTamu" id="namaTamu"
                                            placeholder="Nama" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jumlahTamu">Jumlah Tamu</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa-solid fa-boxes-stacked"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="jmlTamu" id="jumlahTamu"
                                            placeholder="Jumlah Tamu" autocomplete="off" data-type="currency" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jenisPesanan">Pilih Metode</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa-solid fa-boxes-stacked"></i>
                                            </span>
                                        </div>
                                        <select class="form-control" id="metodeFormControlSelect1">
                                            <option>Dine In</option>
                                            <option>Take Away</option>
                                            <option>Delivery</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nomorMeja">Nomor Meja</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                Rp
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="nomorMeja" name="nomorMeja"
                                            placeholder="Nomor Meja" autocomplete="off" data-type="currency" />
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button class="btn btn-success" type="submit" name="submit"
                                    id="TambahBarangButton" onclick="tambahBarang()">
                                    Tambah Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</x-layout>