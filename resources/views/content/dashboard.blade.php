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
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                <i class="far fa-chart-bar"></i>
                                Interactive Area Chart
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
                                <div id="interactive" style="height: 100px;"></div>
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

    <script>
        $(function () {
                    /*
            * Flot Interactive Chart
            * -----------------------
            */
            // We use an inline data source in the example, usually data would
            // be fetched from a server
            var data        = [],
                totalPoints = 100

            function getRandomData() {

                if (data.length > 0) {
                    data = data.slice(1)
                }

                // Do a random walk
                while (data.length < totalPoints) {

                    var prev = data.length > 0 ? data[data.length - 1] : 50,
                        y    = prev + Math.random() * 10 - 5

                    if (y < 0) {
                    y = 0
                    } else if (y > 100) {
                    y = 100
                    }

                    data.push(y)
                }

                // Zip the generated y values with the x values
                var res = []
                for (var i = 0; i < data.length; ++i) {
                    res.push([i, data[i]])
                }

                return res
                }

                var interactive_plot = $.plot('#interactive', [
                    {
                    data: getRandomData(),
                    }
                ],
                {
                    grid: {
                    borderColor: '#f3f3f3',
                    borderWidth: 1,
                    tickColor: '#f3f3f3'
                    },
                    series: {
                    color: '#3c8dbc',
                    lines: {
                        lineWidth: 2,
                        show: true,
                        fill: true,
                    },
                    },
                    yaxis: {
                    min: 0,
                    max: 100,
                    show: true
                    },
                    xaxis: {
                    show: true
                    }
                }
                )

                var updateInterval = 500 //Fetch data ever x milliseconds
                var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
                function update() {

                interactive_plot.setData([getRandomData()])

                // Since the axes don't change, we don't need to call plot.setupGrid()
                interactive_plot.draw()
                if (realtime === 'on') {
                    setTimeout(update, updateInterval)
                }
                }

                //INITIALIZE REALTIME DATA FETCHING
                if (realtime === 'on') {
                update()
                }
                //REALTIME TOGGLE
                $('#realtime .btn').click(function () {
                if ($(this).data('toggle') === 'on') {
                    realtime = 'on'
                }
                else {
                    realtime = 'off'
                }
                update()
                })
                /*
                * END INTERACTIVE CHART
                */
        })
    </script>
</x-layout>