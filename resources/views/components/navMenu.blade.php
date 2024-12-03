<style>
    /* Custom hover background color for nav-links */
    .nav-link:hover {
        background-color: #f8f9fa; /* Warna biru untuk background saat di-hover */
        color: black !important;   /* Warna teks putih */
        border-radius: 4px;        /* Agar sudutnya sedikit melengkung */
    }
</style>

<nav class="main-header navbar navbar-expand navbar-primary">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav d-flex justify-content-center ml-auto mr-auto">
            <li class="nav-item mx-3">
                <a class="nav-link active {{request()->is('makanan') ? 'bg-light rounded' : ''}}" href="/makanan">Makanan<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link active {{request()->is('minuman') ? 'bg-light rounded' : ''}}" href="/minuman">Minuman</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link active {{request()->is('snack') ? 'bg-light rounded' : ''}}" href="/snack">Snack</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link active {{request()->is('kopi') ? 'bg-light rounded' : ''}}" href="/kopi">Kopi</a>
            </li>
        </ul>
        <div class="navbar">
            <div class="navbar-nav ml-auto">
                <a class="mr-4 dropdown-toggle" href="#" role="button" id="profileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="img/profile.jpg" width="30" height="30" class="rounded-circle" alt="Profile">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="profile">Your Profile</a>
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