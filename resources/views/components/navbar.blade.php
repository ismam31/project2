<style>
    /* Custom hover background color for nav-links */
    .nav-link:hover {
        background-color: #0d6efd; /* Warna biru untuk background saat di-hover */
        color: white !important;   /* Warna teks putih */
        border-radius: 4px;        /* Agar sudutnya sedikit melengkung */
    }
</style>
<nav class="navbar sticky-top navbar-light bg-light navbar-expand-lg bg-light shadow">
    <img src="{{ asset('img/logouhuy.png') }}" alt="Logo" width="70" class="ml-4">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="row collapse navbar-collapse d-flex justify-content-around" id="navbarNav">
        <ul class="navbar-nav d-flex justify-content-center mr-auto ml-auto">
            <li class="nav-item mx-3">
                <a class="nav-link active {{request()->is('dashboard') ? ' bg-primary rounded text-white' : ''}}" href="/dashboard">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link active {{request()->is('pemesanan') ? 'bg-primary rounded text-white' : ''}}" href="/pemesanan">Pemesanan</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link active {{request()->is('pembayaran') ? 'bg-primary rounded text-white' : ''}}" href="/pembayaran">Pembayaran</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link active {{request()->is('daftarMenu') ? 'bg-primary rounded text-white' : ''}}" href="/daftarMenu">Daftar Menu</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link active {{request()->is('laporan') ? 'bg-primary rounded text-white' : ''}}" href="/laporan">Laporan</a>
            </li>

        </ul>
            <!-- Profile Dropdown -->
        <div class="navbar navbar-dropdown">
            <div class="navbar-nav ml-auto">
                <a class="mr-4 dropdown-toggle" href="#" role="button" id="profileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="img/profile.jpg" width="30" height="30" class="rounded-circle" alt="Profile">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="profiles">Your Profile</a>
                    <div class="dropdown-divider"></div>
                    <form action="{{ route('logout')}}" method="POST">
                        @csrf
                        <button class="dropdown-item" type="submit">Sign out</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    
</nav>