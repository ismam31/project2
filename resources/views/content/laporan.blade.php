<x-layout>
<div class="content mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header bg-primary">
                        <h3 class="card-title text-white">
                            Laporan
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                        <!-- Navbar -->


    <!-- Container -->
    <div class="container mt-4">
        <h1 class="text-center">Laporan</h1>
        <div class="row">
            @foreach ($laporanDates as $date)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <p class="card-text font-weight-bold">{{ $date }}</p>
                            <button class="btn btn-primary">Tampilkan Laporan</button>
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