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
    <h1>Pengaturan Profile</h1>
    <a href="{{ route('profiles.create') }}" class="btn btn-primary">Tambah Profile</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama Restoran</th>
                <th>Alamat Restoran</th>
                <th>Telepon Restoran</th>
                <th>Pesan Bawah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($profiles as $profile)
            <tr>
                <td>{{ $profile->nama_restoran }}</td>
                <td>{{ $profile->alamat_restoran }}</td>
                <td>{{ $profile->telepon_restoran }}</td>
                <td>{{ $profile->pesan_bawah }}</td>
                <td>
                    <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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