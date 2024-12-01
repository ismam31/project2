<x-layout>
<div class="content mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header bg-primary">
                        <h3 class="card-title text-white">
                            Report
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <h5 class="font-weight-bold">01/01/2024</h5>
                            </div>
                            <div class="row">
                                @foreach ($reports as $b)
                                <div class="col-md-2 mb-2">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h6>{{$b['name']}}</h6>
                                            <p>Penjualan: {{$b['quantity']}}</p>
                                            <p>Total: Rp {{$b ['total']}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
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