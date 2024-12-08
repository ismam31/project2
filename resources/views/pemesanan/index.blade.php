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
                                            <button class="btn btn-success btn-add-menu" 
                                                    data-id="{{ $menu->id }}" 
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
                                    <div class="container mt-1">
                                        <div class="menu-card">
                                            <div class="form-group d-flex align-items-center mr-auto border border-outline-secondary p-1">
                                                <img src="{{ asset('storage/menus/nasi_goreng.jpg')}}" style="width: 100px;" alt="Menu Image">
                                                <div class="menu-details">
                                                    <h6 class="mb-1">Bawang Goreng</h6>
                                                    <h6 class="text-success mt-1">Rp 10.000</h6>
                                                </div>
                                                <div class="menu-quantity ml-auto border-outline-secondary">
                                                    <div class="menu-actions d-flex">
                                                        <button class="btn btn-outline-secondary btn-sm">-</button>
                                                        <input type="text" value="1" readonly style="width: 50px; text-align: center;">
                                                        <button class="btn btn-outline-secondary btn-sm">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container mt-1">
                                        <div class="menu-card">
                                            <div class="form-group d-flex align-items-center mr-auto border border-outline-secondary p-1">
                                                <img src="{{ asset('storage/menus/nasi_goreng.jpg')}}" style="width: 100px;" alt="Menu Image">
                                                <div class="menu-details">
                                                    <h6 class="mb-1">Bawang Goreng</h6>
                                                    <h6 class="text-success mt-1">Rp 10.000</h6>
                                                </div>
                                                <div class="menu-quantity ml-auto border-outline-secondary">
                                                    <div class="menu-actions d-flex">
                                                        <button class="btn btn-outline-secondary btn-sm">-</button>
                                                        <input type="text" value="1" readonly style="width: 50px; text-align: center;">
                                                        <button class="btn btn-outline-secondary btn-sm">+</button>
                                                    </div>
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
                                        <div class="col-md-4">
                                            <ul id="order-list" class="list-group"></ul>
                                            <h5>Subtotal: Rp. <span id="subtotal">0</span></h5>
                                            <button id="checkout" class="btn btn-primary btn-block">Bayar</button>
                                        </div>
                                        <h5>Subtotal: <span id="subtotal">0</span></h5>
                                        <button class="btn btn-primary btn-block" id="pay-button">Bayar</button>
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