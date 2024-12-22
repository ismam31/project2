<!DOCTYPE html>
 <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
         <title>Daftar Pesanan</title>
          <style> 
          th { 
            color: #000000; /* Warna hitam pekat */ 
            font-weight: bold; /* Teks tebal */
             } 
          </style> 
     </head> 
<x-layout>
    
<div class="content mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header bg-primary">
                        <h3 class="card-title text-white">
                            Daftar Pesanan
                        </h3>
                    </div>
                <div class="card-container">
                    <div class="container-fluid">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="info-box">
                                        <div class="info-box-content text-dark">
                                            <div class="table table-responsive">
                                                <table class="col-6 col-sm-12 col-md-12 text-secondary">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Pelanggan</th>
                                                            <th>Jumlah Pelanggan</th>
                                                            <th>Jenis Pemesanan</th>
                                                            <th>Nomor Meja</th>
                                                            <th>Waktu/Tanggal</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                        <tbody>
                                                            @forelse ($orders as $index => $order)
                                                            <tr>
                                                                <td>{{ $index + 1}} </td>
                                                                <td>{{ $order->name}} </td>
                                                                <td>{{ $order->guest_count}} </td>
                                                                <td>{{ $order->category}} </td>
                                                                <td>{{ $order->table_number ?? '-' }} </td>
                                                                <td>{{ $order->created_at->format('H:i d F Y') }} </td>
                                                                <td> <a href="makanan">
                                                                        <i class="fas fa-eye"></i>
                                                                    </a>
                                                                    <form action="{{ route('order.destroy', $order->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                        <button type="submit" style="background:none; border:none; color:red;">
                                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            @empty
                                                            <tr>
                                                                <td colspan="6" class="text-center">Tidak ada pesanan</td>
                                                            </tr>
                                                            @endforelse
                                                        </tbody>
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Pelanggan</th>
                                                            <th>Jumlah Pelanggan</th>
                                                            <th>Jenis Pemesanan</th>
                                                            <th>Nomor Meja</th>
                                                            <th>Waktu/Tanggal</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>


</x-layout>

