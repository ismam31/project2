<x-layout>
<div class="content mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Daftar Menu</h4>
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
                                                    data-name="{{ $menu->gambar }}" 
                                                    data-price="{{ $menu->harga_jual }}">
                                                Tambah
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-4">
                            <h4>Pesanan</h4>
                            <ul id="order-list" class="list-group"></ul>
                            <h5>Subtotal: Rp. <span id="subtotal">0</span></h5>
                            <button id="checkout" class="btn btn-primary btn-block">Bayar</button>
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