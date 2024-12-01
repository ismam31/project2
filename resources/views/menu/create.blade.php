<x-layout>
<div class="content mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header bg-primary">
                        <h3 class="card-title text-white">
                            Tambah Menu
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <!-- Tampilkan pesan sukses -->
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <!-- form start -->
                        <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if($errors->any())
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_barang">Nama Menu</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="nama_barang" id="nama_barang"
                                            placeholder="Nama Menu" autocomplete="off"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_barang">Jumlah Menu</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-users"></i>
                                            </span>
                                        </div>
                                        <input type="number" class="form-control" name="jumlah_barang" id="jumlah_barang"
                                            placeholder="Jumlah Menu" autocomplete="off" data-type="currency"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jenisPesanan">Kategori</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-thumbs-up"></i>
                                            </span>
                                        </div>
                                        <select class="form-control" name="category" id="metodeFormControlSelect1">
                                            <option value="" disabled selected>Pilih Kategori</option>
                                            <option value="Makanan" {{ old('category') == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                                            <option value="Minuman" {{ old('category') == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                                            <option value="Snack" {{ old('category') == 'Snack' ? 'selected' : '' }}>Snack</option>
                                            <option value="Kopi" {{ old('category') == 'Kopi' ? 'selected' : '' }}>Kopi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="harga_modal">Harga Modal</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-users"></i>
                                            </span>
                                        </div>
                                        <input type="number" class="form-control" name="harga_modal" id="harga_modal"
                                            placeholder="Harga Modal" autocomplete="off" data-type="currency"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="harga_jual">Harga Jual</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-users"></i>
                                            </span>
                                        </div>
                                        <input type="number" class="form-control" name="harga_jual" id="harga_jual"
                                            placeholder="Harga Jual" autocomplete="off" data-type="currency"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="file">
                                            <input type="file" name="gambar" class="file-input" id="exampleInputFile">
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button class="btn btn-success" type="submit" name="submit"
                                    id="TambahBarangButton" onclick="tambahBarang()">
                                    Simpan Barang
                                </button>
                            </div>
                        </form>
                    <!-- form end -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
</x-layout>