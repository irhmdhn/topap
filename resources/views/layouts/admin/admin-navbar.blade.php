<main class="py-0 wrapper">
  @if (Auth::check())

    <header class="navbar sticky-top flex-lg-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="{{ route('adminHome') }}">
          <img src="{{ asset($web_logo_hor) }}" width="100" alt="" srcset="">
        </a>

        

        <ul class="navbar-nav flex-row me-lg-auto">
          <li class="nav-item text-nowrap">
            <button class="nav-link btn btn-link px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
              <i class="fa-solid fa-magnifying-glass text-light"></i>
            </button>
          </li>
          <li class="nav-item text-nowrap d-lg-none">
            <button class="nav-link btn btn-link px-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa-solid fa-bars-staggered text-light"></i>
            </button>
          </li>
        </ul>
        <div id="navbarSearch" class="navbar-search w-100 collapse">
          <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
        </div>
        
      </header>
      
      <section class="container-fluid">
        <div class="row">

            <aside class="sidebar col-lg-2 p-0 shadow">
                <div class="offcanvas-lg offcanvas-end position-fixed mx-auto" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="sidebarMenuLabel">
                      Menu
                    </h5>
                    <button type="button" class="btn btn-link" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"><i class="fa-solid fa-xmark text-light"></i></button>
                  </div>
                  <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('a/dashboard') ? 'active':'' }}" aria-current="page" href="{{ route('adminHome') }}">
                          <div class="icon-nav">
                            <i class="fa-solid fa-house"></i>
                          </div>
                          Dashboard
                        </a>
                      </li>
                    </ul>
                    <h6 class="px-3 mt-4 mb-1 text-secondary text-uppercase">
                        <small>KATEGORI</small>
                      </h6>
                    <ul class="nav flex-column">    
                      <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('a/product') ? 'active':'' }}" href="{{ route('product.index') }}">
                            <div class="icon-nav">
                              <i class="fa-solid fa-box-open"></i>
                            </div>
                          Produk
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('a/product/create') ? 'active':'' }}" href="{{ route('product.create') }}">
                            <div class="icon-nav">
                              <i class="fa-solid fa-plus"></i>
                            </div>
                          Tambah Produk
                        </a>
                      </li>
                    </ul>
          
                    <h6 class="px-3 mt-4 mb-1 text-secondary text-uppercase">
                      <small>LAPORAN</small>
                    </h6>
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('a/transaction') ? 'active':'' }}" href="{{ route('transaction') }}">
                            <div class="icon-nav">
                                <i class="fa-solid fa-right-left"></i>
                            </div>
                          Transaksi
                        </a>
                      </li>
                    </ul>
          
                    {{-- <hr class="my-3"> --}}
                    <h6 class="px-3 mt-4 mb-1 text-secondary text-uppercase">
                      <small>PENGATURAN</small>
                    </h6>
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('a/s/admin') ? 'active':'' }}" href="{{route('slideshow.index')}}">
                          <div class="icon-nav">
                            <i class="fa-solid fa-user-tie"></i>
                            </div>
                          Admin
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('a/s/slideshow') ? 'active':'' }}" href="{{route('slideshow.index')}}">
                          <div class="icon-nav">
                            <i class="fa-solid fa-rectangle-ad"></i>
                            </div>
                          Slide Show
                        </a>
                      </li>
                    </ul>
                    <div class="nav-item my-5">
                      <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <button id="btn-logout" type="submit" class="btn btn-outline-danger d-flex align-items-center gap-2 mx-auto">
                          Logout
                          <div class="icon-nav">
                            <i class="fa-solid fa-right-from-bracket"></i>
                          </div>
                        </button>
                      </form>

                    </div>
                  </div>
                </div>
              </aside>

              <section id="content" class="col-lg-10 px-4">
                    
<div class="pt-4 pb-2 mb-3">
  <h1 class="h2">{{$title}}</h1>

</div>
@endif