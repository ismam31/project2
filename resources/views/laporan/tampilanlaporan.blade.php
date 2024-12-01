<x-layout>
<div class="content mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header bg-primary">
                        <h3 class="card-title text-white">
                            My Profile
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                      <!-- Laporan Header -->
        <div class="text-center mb-3">
            <h5>{{ date('d/m/Y') }}</h5>
            <button class="btn btn-primary mt-2">Tampilkan Laporan</button>
        </div>

        <!-- Cards Section -->
        <div class="row">
            @foreach ($menus as $menu)
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $menu->name }}</h5>
                            <p class="mb-2">Penjualan: <strong>{{ $menu->sales_count }}</strong></p>
                            <p class="mb-0">Rp {{ number_format($menu->price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
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