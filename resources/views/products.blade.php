@extends('layouts.main')

@section('container')
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    <!-- aside Widget -->
                    <div class="aside w-50">
                        <h3 class="aside-title pb-4">Categories</h3>
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action btn-sec" aria-current="true">
                                <p class="mb-1">All</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <p class="mb-1">Full Face</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <p class="mb-1">Half Face</p>
                            </a>
                        </div>
                    </div>
                    <!-- /aside Widget -->



                </div>
                <!-- /ASIDE -->

                <!-- STORE -->
                <div id="store" class="col-md-9">
                    <!-- store header filter -->
                    <div class="store-filter clearfix pt-2 d-flex justify-content-between">
                        <span class="store-qty w-75">Showing products</span>

                        <div class="input-group mb-3 w-25 pt-3 text-right">
                            <input type="text" class="form-control" placeholder="Search..."
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary btn-sec" type="button" id="button-addon2"><i
                                    class="bi bi-search"></i></button>
                        </div>
                    </div>
                    <!-- /store header filter -->

                    <!-- store products -->
                    <div class="categories my-2">




                        <div class="category-1 text-center my-3">
                            <div class="row justify-content-evenly">
                                <div class="col-md-3 col-sm-4">
                                    <div class="card border-0 shadow p-2 mb-2 text-center">

                                        <a href="/product" class="text-decoration-none text-dark">

                                            <img src="https://source.unsplash.com/100x100?motorcycle-helmet"
                                                class="card-img my-1">
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

                                            <img src="https://source.unsplash.com/100x100?motorcycle-helmet"
                                                class="card-img my-1">
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

                                            <img src="https://source.unsplash.com/100x100?motorcycle-helmet"
                                                class="card-img my-1">
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

                                            <img src="https://source.unsplash.com/100x100?motorcycle-helmet"
                                                class="card-img my-1">
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

                                            <img src="https://source.unsplash.com/100x100?motorcycle-helmet"
                                                class="card-img my-1">
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

                                            <img src="https://source.unsplash.com/100x100?motorcycle-helmet"
                                                class="card-img my-1">
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

                                            <img src="https://source.unsplash.com/100x100?motorcycle-helmet"
                                                class="card-img my-1">
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

                                            <img src="https://source.unsplash.com/100x100?motorcycle-helmet"
                                                class="card-img my-1">
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

                                            <img src="https://source.unsplash.com/100x100?motorcycle-helmet"
                                                class="card-img my-1">
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

                                            <img src="https://source.unsplash.com/100x100?motorcycle-helmet"
                                                class="card-img my-1">
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

                                            <img src="https://source.unsplash.com/100x100?motorcycle-helmet"
                                                class="card-img my-1">
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

                                            <img src="https://source.unsplash.com/100x100?motorcycle-helmet"
                                                class="card-img my-1">
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

                                            <img src="https://source.unsplash.com/100x100?motorcycle-helmet"
                                                class="card-img my-1">
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

                                            <img src="https://source.unsplash.com/100x100?motorcycle-helmet"
                                                class="card-img my-1">
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

                                            <img src="https://source.unsplash.com/100x100?motorcycle-helmet"
                                                class="card-img my-1">
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

                                            <img src="https://source.unsplash.com/100x100?motorcycle-helmet"
                                                class="card-img my-1">
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
                    </div>
                    <!-- /store products -->
                </div>
                <!-- /STORE -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
@endsection
