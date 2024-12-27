<x-layout>
    <div class="content mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header bg-primary">
                            <h3 class="card-title text-white">
                                Informasi Total Hari Ini
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-4 col-md-4">
                                    <div class="info-box">
                                        <span class="info-box-icon bg-warning elevation-1"><i
                                                class="fas fa-box"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Total Barang Terjual</span>
                                            <span class="info-box-number" id="BarangTerjualID">Rp0</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                <div class="col-12 col-sm-4 col-md-4">
                                    <div class="info-box mb-3">
                                        <span class="info-box-icon bg-success elevation-1">
                                            <i class="fas fa-money-bill"></i>
                                        </span>
                                        <div class="info-box-content">
                                            <span class="info-box-text"
                                                >Total Harga Jual</span>
                                            <span
                                                class="info-box-number"
                                                id="pendapatanHargaJualID"
                                                >Rp0</span>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                <!-- fix for small devices only -->
                                <div
                                    class="clearfix hidden-md-up"
                                ></div>
                                <div class="col-12 col-sm-4 col-md-4">
                                    <div class="info-box mb-3">
                                        <span
                                            class="info-box-icon bg-danger elevation-1"
                                            ><i class="fas fa-minus"></i
                                        ></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text"
                                                >Total Pengeluaran</span
                                            >
                                            <span
                                                class="info-box-number"
                                                id="pengeluaranID"
                                                >Rp0</span
                                            >
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                <div class="col-12 col-sm-4 col-md-4">
                                    <div class="info-box mb-3">
                                        <span
                                            class="info-box-icon bg-success elevation-1"
                                            ><i
                                                class="fas fa-dollar-sign"
                                            ></i
                                        ></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text"
                                                >Total Keuntungan</span
                                            >
                                            <span
                                                class="info-box-number"
                                                id="keuntunganID"
                                                >Rp0</span
                                            >
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-12 col-sm-4 col-md-4">
                                    <div class="info-box mb-3">
                                        <span
                                            class="info-box-icon bg-success elevation-1"
                                            ><i
                                                class="fas fa-dollar-sign"
                                            ></i
                                        ></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text"
                                                >Total Pendapatan</span
                                            >
                                            <span
                                                class="info-box-number"
                                                id="pendapatanID"
                                                >Rp0</span
                                            >
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                <i class="far fa-chart-bar"></i>
                                <button type="button" class="btn btn-default btn-sm" id="realtime_button">Interactive Area Chart</button>
                                </h3>
                                <div class="card-tools">
                                Real time
                                    <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                                        <button type="button" class="btn btn-default btn-sm active" data-toggle="on">On</button>
                                        <button type="button" class="btn btn-default btn-sm" data-toggle="off">Off</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="interactive" style="height: 190px;"></div>
                            </div>
                            <!-- /.card-body-->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    @push('js')
    <script src="{{ asset('js/sensor.js') }}"></script>
    <script src="{{ asset('js/delete.js') }}"></script>
    @endpush
</x-layout>