<nav id="navbar" class="container-fluid p-0 position-fixed" >
    <div id="sidenav-1" class="sidenav navbar navbar-expand-lg py-0 px-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ $web_url }}">
                <img src="{{ asset($web_logo) }}" alt="TOPAP-LOGO" height="44px">
            </a>
            <button class="navbar-toggler border-0 p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars-staggered text-light"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav gap-3">
                    <a class="nav-link" href="{{ url('/')}}">Home</a>
                    <li class="nav-item dropdown dropdown-kategori">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/#content-product') }}">Games</a></li>
                            <li><a class="dropdown-item" href="{{ url('/#content-product') }}">Pulsa</a></li>
                            <li><a class="dropdown-item" href="{{ url('/#content-product') }}">Voucher</a></li>
                            <li><a class="dropdown-item" href="{{ url('/#content-product') }}">Joki</a></li>
                        </ul>
                    </li>
                    <a class="nav-link" href="{{ url('/pricelist')}}">Daftar harga</a>
                    <a class="nav-link" href="{{ url('/about-us')}}">Tentang kami</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<main class="container px-lg-5">