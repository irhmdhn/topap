</main>

<footer class="text-center text-lg-start mt-5">
    <hr>
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row mt-4">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                <div class="d-flex justify-content-center mb-4 mx-auto">
                    <img src="{{ asset($web_logo) }}" height="100" alt="Logo TOPAP" loading="lazy" />
                </div>

                <p class="text-center">Nikmati proses top up voucher game yang praktis hanya di TOPAP</p>

                <ul class="list-unstyled d-flex flex-row justify-content-center">
                    <li>
                        <a class="text-white px-2" href="#!">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a class="text-white px-2" href="#!">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a class="text-white ps-2" href="#!">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">Menu Cepat</h5>

                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="mb-2 dropdown-kategori">
                        <div class="w-100">
                            <a class="dropdown-toggle nav-link w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Kategori
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/#content-product') }}">Games</a></li>
                                <li><a class="dropdown-item" href="{{ url('/#content-product') }}">Pulsa</a></li>
                                <li><a class="dropdown-item" href="{{ url('/#content-product') }}">Voucher</a></li>
                                <li><a class="dropdown-item" href="{{ url('/#content-product') }}">Joki</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-2">
                        <a href="#!" class="nav-link">Daftar Harga</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!" class="nav-link">Tentang Kami</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!" class="nav-link">Kontak</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!" class="nav-link">FAQ</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">Rekomendasi</h5>

                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="#!" class="nav-link">Mobile Legend</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!" class="nav-link">Free Fire</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="nav-link">PUBG Mobile</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">Contact</h5>

                <ul class="list-unstyled">
                    <li>
                        <p><i class="fas fa-map-marker-alt pe-2"></i>Yogyakarta, Indonesia</p>
                    </li>
                    <li>
                        <p><i class="fas fa-phone pe-2"></i>+ 6282-6282-6282</p>
                    </li>
                    <li>
                        <p><i class="fas fa-envelope pe-2 mb-0"></i>topap@gmail.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3">
        © 2023 Copyright:
        <a class="text-white" href="{{ $web_url }}">TOPAP</a>
    </div>
    <!-- Copyright -->
</footer>

  