<style>
    /* Custom hover background color for nav-links */
    .nav-link:hover {
        background-color: #f8f9fa; /* Warna biru untuk background saat di-hover */
        color: black !important;   /* Warna teks putih */
        border-radius: 4px;        /* Agar sudutnya sedikit melengkung */
    }   
</style>
<nav class="card-header navbar navbar-expand-lg navbar-light bg-primary">
    <div class="collapse navbar-collapse d-flex justify-content-around" id="mainNav">
        <ul class="navbar-nav d-flex justify-content-center mr-auto ml-auto">
            <li class="nav-item mx-3">
                <a class="nav-link active {{request()->is('makanan') ? 'bg-light rounded' : ''}} text-white" href="makanan">Makanan <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link active {{request()->is('minuman') ? 'bg-light rounded' : ''}} text-white" href="minuman">Minuman</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link active {{request()->is('snack') ? 'bg-light rounded' : ''}} text-white" href="snack">Snack</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link active {{request()->is('kopi') ? 'bg-light rounded' : ''}} text-white" href="kopi">Kopi</a>
            </li>
        </ul>
    </div>
</nav>
<!-- <nav class="main-header navbar navbar-expand">
    <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active {{request()->is('makanan') ? 'bg-light rounded' : ''}}" href="/makanan">Makanan<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active {{request()->is('minuman') ? 'bg-light rounded' : ''}}" href="/minuman">Minuman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active {{request()->is('snack') ? 'bg-light rounded' : ''}}" href="/snack">Snack</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active {{request()->is('kopi') ? 'bg-light rounded' : ''}}" href="/kopi">Kopi</a>
            </li>
        </ul>
    </div>
</nav> -->