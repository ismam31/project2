<x-layout>
    <div class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Pelanggan Baru</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- Tampilkan pesan sukses -->
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <!-- Tampilkan error validasi -->
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- form start -->
                        <form action="{{ route('order.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Nama Pelanggan</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="name" id="namaTamu"
                                            placeholder="Nama Pelanggan" autocomplete="off" value="{{ old('name') }}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jumlahPelanggan">Jumlah Pelanggan</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-users"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="guest_count" id="jumlahPelanggan"
                                            placeholder="Jumlah Pelanggan" autocomplete="off" data-type="currency" value="{{ old('guest_count') }}" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jenisPesanan">Jenis Pemesanan</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-thumbs-up"></i>
                                            </span>
                                        </div>
                                        <select class="form-control" name="category" id="metodeFormControlSelect1">
                                            <option value="" disabled selected>Pilih Jenis Pemesanan</option>
                                            <option value="Dine In" {{ old('category') == 'Dine In' ? 'selected' : '' }}>Dine In</option>
                                            <option value="Take Away" {{ old('category') == 'Take Away' ? 'selected' : '' }}>Take Away</option>
                                            <option value="Delivery" {{ old('category') == 'Delivery' ? 'selected' : '' }}>Delivery</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nomorMeja">Nomor Meja</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-store"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="nomorMeja" name="table_number"
                                            placeholder="Nomor Meja" autocomplete="off" data-type="currency" />
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button class="btn btn-success" type="submit" name="submit"
                                    id="TambahBarangButton" onclick="tambahBarang()">Tambah Pelanggan</button>
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