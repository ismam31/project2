<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Warung Tikungan</title>
        <!-- AdminLTE App -->
        <link rel="stylesheet" href="{{('../app/dist/css/adminlte.min.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"/>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}"/>
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}"/>

        <style>
            
        </style>
    </head>

    <body> 
        @include('layouts.navigasi')

            <!-- Main content -->
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
                                        <!-- /.col -->
                                        <div class="col-12 col-sm-6 col-md-6">
                                            <div class="info-box mb-3">
                                                <span class="info-box-icon bg-success elevation-1">
                                                    <i class="fas fa-money-bill"></i>
                                                </span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text"
                                                        >Total Harga Jual</span
                                                    >
                                                    <span
                                                        class="info-box-number"
                                                        id="pendapatanHargaJualID"
                                                        >Rp0</span
                                                    >
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
        <!-- jQuery -->
        <script src="../app/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../app/dist/js/adminlte.min.js"></script>
        <!-- Ion Slider -->
        <script src="../app/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <!-- Bootstrap slider -->
        <script src="../app/plugins/bootstrap-slider/bootstrap-slider.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../app/dist/js/demo.js"></script>
    </body>
</html>
