<x-layout>

<style>
    .card-header {
        padding: 0px;
        margin: 0px;
    }
</style>

<div class="content mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header bg-primary d-flex justify-content-around">
                        <x-navMenu></x-navMenu>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="row mt-3">
                        @forelse ($menus as $index => $menu)
                            <div class="col-md-2">
                                <div class="card">
                                    <img src="{{ asset('storage/' . $menu->gambar) }}" class="card-img-top" width="100%" alt="{{ $menu->nama_barang }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $menu->nama_barang }}</h5>
                                        <p class="card-text">Rp. {{ number_format($menu->harga_jual, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="text-center">Data tidak ditemukan
                            </div>
                        @endforelse
                    </div>
                    <!-- form end -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
</x-layout>