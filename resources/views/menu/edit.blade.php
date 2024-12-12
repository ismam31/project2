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
                        <form action="{{ route('menu.update', $menu->id) }}" method="POST" encytype="multipart/form-data">
                            @csrf
                            @method('PUT')
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
                                            placeholder="Nama Menu" value="{{ $menu->nama_barang }}" autocomplete="off"/>
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
                                            placeholder="Jumlah Menu" value="{{ $menu->jumlah_barang }}" autocomplete="off" data-type="currency"/>
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
                                            placeholder="Harga Modal" value="{{ $menu->harga_modal }}" autocomplete="off" data-type="currency"/>
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
                                            placeholder="Harga Jual" value="{{ $menu->harga_jual }}" autocomplete="off" data-type="currency"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="gambar" value="{{ $menu->gambar }}" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    @if($menu->gambar)
                                        <div class="mt-2">
                                            <p>Gambar yang ada:</p>
                                            <img src="{{ asset('storage/menus' . $menu->gambar) }}" alt="Gambar Menu" width="100">
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button class="btn btn-success" type="submit" name="submit"
                                    id="TambahBarangButton" onclick="tambahBarang()">
                                    Simpan
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