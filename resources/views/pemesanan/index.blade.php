<x-layout>
<div class="content mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <!-- form start -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-primary">
                                    <h3 class="card-title">Daftar Menu</h3>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Gambar</th>
                                                <th>Nama Menu</th>
                                                <th>Harga</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($menus as $menu)
                                            <tr>
                                                <td><img src="{{ asset('storage/' . $menu->gambar) }}" alt="Menu" width="50"></td>
                                                <td>{{ $menu->nama_barang }}</td>
                                                <td>Rp. {{ number_format($menu->harga_jual) }}</td>
                                                <td>
                                                    <button class="btn btn-success tambah-btn" 
                                                            data-id="{{ $menu->id }}"
                                                            data-image="{{ asset('storage/' . $menu->gambar) }}" 
                                                            data-name="{{ $menu->nama_barang }}" 
                                                            data-price="{{ $menu->harga_jual }}">
                                                        Tambah
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-success">
                                    <h3 class="card-title">Pesanan</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="container mt-1">
                                            <div class="menu-card">
                                                <div class="form-group d-flex align-items-center mr-auto">
                                                    <div class="col-md-12" id="order-list">
                                                        <!-- Pesanan akan muncul di sini -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="order-list">
                                            <div class="form-group">
                                                <label for="discount">Discount</label>
                                                <div class="input-group">
                                                    <input type="number" class="form-control" id="discount" placeholder="Enter discount">
                                                    <div class="input-group-prepend">
                                                        <button class="input-group-text">
                                                            Apply
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="d-flex justify-content-between">
                                                    <button class="btn btn-primary flex-grow-1 mx-1" id="pay-button">Bayar</button>
                                                    <button class="btn btn-outline-primary flex-grow-1 mx-1" id="save-button">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @push('js')
                    <script src="{{ asset('js/menu.js') }}"></script>
                    @endpush
                    <!-- form end -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
</x-layout>