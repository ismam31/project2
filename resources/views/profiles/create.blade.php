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
                   @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Profile</h1>
    <form action="{{ route('profiles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Restoran</label>
            <input type="text" name="nama_restoran" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Alamat Restoran</label>
            <input type="text" name="alamat_restoran" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Telepon Restoran</label>
            <input type="text" name="telepon_restoran" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Pesan Bawah</label>
            <textarea name="pesan_bawah" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection

                    
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
</x-layout>