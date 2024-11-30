

<nav class="main-header navbar navbar-expand navbar-primary">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active {{request()->is('makanan') ? 'bg-secondary rounded text-white' : ''}}" href="/makanan">Makanan<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active {{request()->is('minuman') ? 'bg-secondary rounded text-white' : ''}}" href="/minuman">Minuman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active {{request()->is('snack') ? 'bg-secondary rounded text-white' : ''}}" href="/snack">Snack</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active {{request()->is('kopi') ? 'bg-secondary rounded text-white' : ''}}" href="/kopi">Kopi</a>
            </li>
        </ul>
    </div>
</nav>