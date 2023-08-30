<x-app-layout title="HOME">
    <!-- <h1>HOME</h1> -->
    <div class="special-event-slide mb-5">
        <div id="carouselAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner rounded-4">

                @foreach ($slideshow as $banner)
                <div class="carousel-item active">
                    <img src="{{ asset('storage/'.$banner->banner_img) }}" class="d-block w-100" loading="lazy" alt="...">
                </div>
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<div id="content-product" class="content">

    <div class="tabs-group my-4">

        <ul class="nav d-flex gap-2">
            <li class="nav-item">
                <button class="btn btn-sm btn-danger rounded-pill fw-bold text-light active" data-bs-toggle="tab" href="#game-content">Games</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-sm btn-danger rounded-pill fw-bold text-light" data-bs-toggle="tab" href="#pulsa-content">Pulsa</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-sm btn-danger rounded-pill fw-bold text-light" data-bs-toggle="tab" href="#voucher-content">Voucher</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-sm btn-danger rounded-pill fw-bold text-light" data-bs-toggle="tab" href="#joki-content">Joki</button>
            </li>
        </ul>
    </div>
    


    

    <div class="tab-content">
        <div id="game-content" class="tab-pane fade show in active">
            <div class="row">

                @foreach ($productGames as $game)
                    <div class="game-item col-4 col-sm-4 col-md-3 col-lg-2">
                        <a href="{{ url('/p/'.$game->prd_slug) }}" class="nav-link">
                            <div class="card">
                                <img src="{{asset('storage/'.$game->prd_img)}}" loading="lazy" class="card-img-top" alt="{{ $game->prd_name }}" />
                                <div class="card-body">
                                    <h6 class="card-title link">{{ $game->prd_name }}</h6>
                                    <small class="card-text text-purple">{{ $game->prd_dev }}</small>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
        
        <div id="pulsa-content" class="tab-pane fade">
            <div class="game-item col-4 col-sm-4 col-md-3 col-lg-2">
                <a href="" class="nav-link">
                    <div class="card">
                        <img src="assets/img/telkomsel.webp" loading="lazy" class="card-img-top" alt="Telkomsel" />
                        <div class="card-body">
                            <h6 class="card-title link">Telkomsel</h6>
                            <small class="card-text">Pulsa</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div id="voucher-content" class="tab-pane fade">
            <div class="game-item col-4 col-sm-4 col-md-3 col-lg-2">
                <a href="" class="nav-link">
                    <div class="card">
                        <img src="assets/img/telkomsel.webp" loading="lazy" class="card-img-top" alt="Telkomsel" />
                        <div class="card-body">
                            <h6 class="card-title link">Voucher</h6>
                            <small class="card-text">Voucher</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
        <div id="joki-content" class="tab-pane fade">
            <div class="game-item col-4 col-sm-4 col-md-3 col-lg-2">
                <a href="" class="nav-link">
                    <div class="card">
                        <img src="assets/img/telkomsel.webp" loading="lazy" class="card-img-top" alt="Telkomsel" />
                        <div class="card-body">
                            <h6 class="card-title link">Joki</h6>
                            <small class="card-text">Joki</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>

</div>
</x-app-layout>