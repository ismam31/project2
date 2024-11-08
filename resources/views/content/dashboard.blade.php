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
                                <div class="col-12 col-sm-6 col-md-6">
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
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <!-- /.col -->
                                <div class="col-12 col-sm-6 col-md-6">
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
                                <div class="col-12 col-sm-6 col-md-6">
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
                                <div class="col-12 col-sm-6 col-md-6">
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
                                <div class="col-12 col-sm-6 col-md-6">
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
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</x-layout>