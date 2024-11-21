<style>
        /* Custom hover background color for nav-links */
        .nav-link:hover {
            background-color: #6c757d; /* Warna biru untuk background saat di-hover */
            color: white !important;   /* Warna teks putih */
            border-radius: 4px;        /* Agar sudutnya sedikit melengkung */
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
    </style>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <img src="{{ asset('img/logouhuy.png') }}" alt="Logo" width="70" class="ml-4">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active {{request()->is('dashboard') ? 'bg-secondary rounded text-white' : ''}}" href="/dashboard">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active {{request()->is('pemesanan') ? 'bg-secondary rounded text-white' : ''}}" href="/pemesanan">Pemesanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active {{request()->is('pembayaran') ? 'bg-secondary rounded text-white' : ''}}" href="/pembayaran">Pembayaran</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active {{request()->is('menu') ? 'bg-secondary rounded text-white' : ''}}" href="/menu">Daftar Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active {{request()->is('laporan') ? 'bg-secondary rounded text-white' : ''}}" href="/laporan">Laporan</a>
            </li>
            <!-- Profile Dropdown -->
            <div class="dropdown">
                <a class="mr-4 dropdown-toggle" href="#" role="button" id="profileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="img/profile.jpg" width="30" height="30" class="rounded-circle" alt="Profile">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="profile">Your Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Sign out</a>
                </div>
            </div>
        </ul>
        
    </div>
    
</nav>