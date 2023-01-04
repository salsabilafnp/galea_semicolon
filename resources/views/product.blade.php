@extends('layouts.main')

@section('container')
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row mw-100 mh-100">
                        <div class="col-md-6">
                            <div class="images p-3">
                                <div class="text-center p-4">
                                    <img id="main-image" src="../img/galea-logo.png" width="500" />
                                </div>
                                <div class="thumbnail text-center"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">
                                <div class="mt-4 mb-3"> <span class="text-muted brand">Full Face</span>
                                    <h5>AGV Pista GP RR</h5>
                                    <div class="price d-flex flex-row align-items-center"> <span class="act-price">Rp
                                            20.999.999</span>
                                        <div class="ml-2">
                                        </div>
                                    </div>
                                </div>

                                <p class="about" style="height:20em; overflow:auto">The AGV Pista GP RR Helmet is an
                                    exact replica of
                                    helmets worn by
                                    world
                                    championship racers. It meets stringent FIM Racing Homologation standards and
                                    provides
                                    the highest level of protection, even against glancing impacts that can cause
                                    rotational
                                    motion. Carbon fiber molded into an innovative shape lets the helmet move through
                                    air
                                    effortlessly. AGV Integrated Ventilation System (IVS) uses 5 large front metal air
                                    vents
                                    and 2 rear extractors to let air pass through the helmet freely. Four shell sizes
                                    used
                                    across 7 different helmet sizes get a closer fitting shell compared to other
                                    helmets.
                                    The helmet was designed for an aggressive tucked racing position with a face shield
                                    allowing for a maximum vertical view and wide horizontal view. AGV patented Visor
                                    Lock
                                    System (VLS) decreases the chance that the face shield comes opens in a crash. With
                                    a
                                    fit developed for MotoGP racers, the Pista GP RR lining allows for an optimized fit
                                    and
                                    positioning on your head. Everything about the AGV Pista GP RR Helmet is designed
                                    for
                                    high speed track performance.</p>
                                <div class="sizes mt-5">
                                    <div class="dropdown">
                                        <div class="product-options">
                                            <label>
                                                Size :
                                                <select class="input-select">
                                                    <option value="">S</option>
                                                    <option value="">M</option>
                                                    <option value="">L</option>
                                                    <option value="">XL</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart mt-4 align-items-center"> <a href="/" class="btn btn-sec">
                                        <i class="bi bi-cart-plus"></i> Add To Cart
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Heading for Category Section --}}
    <h3 class="display-6 text-center">Our Products</h3>

    {{-- Category 1, nanti ganti namanya sesuai kategori yang ada --}}
    <div class="category-1 text-center my-3">
        <div class="row justify-content-evenly">
            <div class="col-md-3 col-sm-4">
                <div class="card border-0 shadow p-2 mb-2 text-center">

                    <a href="/product" class="text-decoration-none text-dark">

                        <img src="https://source.unsplash.com/100x100?motorcycle-helmet" class="card-img my-1">
                        <h5 class="fw-bold text-capitalize">AGV PISTA GP R</h5>
                        <h6>Rp 15.999.999</h6>
                    </a>

                    <a href="/" class="btn btn-sec">
                        <i class="bi bi-cart-plus"></i> Add To Cart
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="card border-0 shadow p-2 mb-2 text-center">

                    <a href="/product" class="text-decoration-none text-dark">

                        <img src="https://source.unsplash.com/100x100?motorcycle-helmet" class="card-img my-1">
                        <h5 class="fw-bold text-capitalize">AGV PISTA GP R</h5>
                        <h6>Rp 15.999.999</h6>
                    </a>

                    <a href="/" class="btn btn-sec">
                        <i class="bi bi-cart-plus"></i> Add To Cart
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="card border-0 shadow p-2 mb-2 text-center">

                    <a href="/product" class="text-decoration-none text-dark">

                        <img src="https://source.unsplash.com/100x100?motorcycle-helmet" class="card-img my-1">
                        <h5 class="fw-bold text-capitalize">AGV PISTA GP R</h5>
                        <h6>Rp 15.999.999</h6>
                    </a>

                    <a href="/" class="btn btn-sec">
                        <i class="bi bi-cart-plus"></i> Add To Cart
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="card border-0 shadow p-2 mb-2 text-center">

                    <a href="/product" class="text-decoration-none text-dark">

                        <img src="https://source.unsplash.com/100x100?motorcycle-helmet" class="card-img my-1">
                        <h5 class="fw-bold text-capitalize">AGV PISTA GP R</h5>
                        <h6>Rp 15.999.999</h6>
                    </a>

                    <a href="/" class="btn btn-sec">
                        <i class="bi bi-cart-plus"></i> Add To Cart
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
