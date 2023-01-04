@extends('layouts.main')

@section('container')
    {{-- Info Categories of Products that available --}}
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/600x200?helmet" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/600x200?motorcycle" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/600x200?helmet-motorcycle" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- Newest Products --}}
    <div class="new-products text-center my-5">
        <h3 class="display-5">Our New Products</h3>
        <div class="row justify-content-around">
            @foreach ($products as $barang)
                <div class="col-md-3 col-sm-5">
                    <div class="card border-0 shadow p-2 mb-2 text-center">
                        {{-- Pindah ke halaman penjelasan suatu produk --}}
                        <a href="/product" class="text-decoration-none text-dark">
                            {{-- Gambar Produk --}}
                            <img src="https://source.unsplash.com/100x100?motorcycle-helmet" class="card-img my-1">
                            <h4 class="fw-bold text-capitalize">{{ $barang->nama_produk }}</h4>
                            <h6>{{ $barang->harga }}</h6>
                        </a>
                        {{-- add-to-cart --}}
                        <a href="/" class="btn btn-sec">
                            <i class="bi bi-cart-plus"></i> Add To Cart
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- go to products page --}}
        <p class="fw-bold">Want to see more products?
            <a href="/products" class="text-decoration-none">See more ...</a>
        </p>
    </div>

    {{-- Some Products for Categories --}}
    <div class="categories my-5">
        {{-- Heading for Category Section --}}
        <h3 class="display-6 text-center">Our Products</h3>

        {{-- Category 1, nanti ganti namanya sesuai kategori yang ada --}}
        <div class="category-1 text-center my-3">
            <div class="row justify-content-evenly">
                {{-- Produk yang tampil berdasarkan kategori 1 --}}
                @foreach ($products_kategori_casual as $barang)
                    <div class="col-md-3 col-sm-4">
                        <div class="card border-0 shadow p-2 mb-2 text-center">
                            {{-- Pindah ke halaman penjelasan suatu produk --}}
                            <a href="/product" class="text-decoration-none text-dark">
                                {{-- Gambar Produk --}}
                                <img src="https://source.unsplash.com/100x100?motorcycle-helmet" class="card-img my-1">
                                <h5 class="fw-bold text-capitalize">{{ $barang->nama_produk }}</h5>
                                <h6>{{ $barang->harga }}</h6>
                            </a>
                            {{-- add-to-cart --}}
                            <a href="/" class="btn btn-sec">
                                <i class="bi bi-cart-plus"></i> Add To Cart
                            </a>
                        </div>
                    </div>
                @endforeach
                @foreach ($products_kategori_casual as $barang)
                    <div class="col-md-3 col-sm-4">
                        <div class="card border-0 shadow p-2 mb-2 text-center">
                            {{-- Pindah ke halaman penjelasan suatu produk --}}
                            <a href="/product" class="text-decoration-none text-dark">
                                {{-- Gambar Produk --}}
                                <img src="https://source.unsplash.com/100x100?motorcycle-helmet" class="card-img my-1">
                                <h5 class="fw-bold text-capitalize">{{ $barang->nama_produk }}</h5>
                                <h6>{{ $barang->harga }}</h6>
                            </a>
                            {{-- add-to-cart --}}
                            <a href="/" class="btn btn-sec">
                                <i class="bi bi-cart-plus"></i> Add To Cart
                            </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($products_kategori_sport as $barang)
                    <div class="col-md-3 col-sm-4">
                        <div class="card border-0 shadow p-2 mb-2 text-center">
                            {{-- Pindah ke halaman penjelasan suatu produk --}}
                            <a href="/product" class="text-decoration-none text-dark">
                                {{-- Gambar Produk --}}
                                <img src="https://source.unsplash.com/100x100?motorcycle-helmet" class="card-img my-1">
                                <h5 class="fw-bold text-capitalize">{{ $barang->nama_produk }}</h5>
                                <h6>{{ $barang->harga }}</h6>
                            </a>
                            {{-- add-to-cart --}}
                            <a href="/" class="btn btn-sec">
                                <i class="bi bi-cart-plus"></i> Add To Cart
                            </a>
                        </div>
                    </div>
                @endforeach
                @foreach ($products_kategori_sport as $barang)
                    <div class="col-md-3 col-sm-4">
                        <div class="card border-0 shadow p-2 mb-2 text-center">
                            {{-- Pindah ke halaman penjelasan suatu produk --}}
                            <a href="/product" class="text-decoration-none text-dark">
                                {{-- Gambar Produk --}}
                                <img src="https://source.unsplash.com/100x100?motorcycle-helmet" class="card-img my-1">
                                <h5 class="fw-bold text-capitalize">{{ $barang->nama_produk }}</h5>
                                <h6>{{ $barang->harga }}</h6>
                            </a>
                            {{-- add-to-cart --}}
                            <a href="/" class="btn btn-sec">
                                <i class="bi bi-cart-plus"></i> Add To Cart
                            </a>
                        </div>
                    </div>
                @endforeach
                @foreach ($products_kategori_sport as $barang)
                    <div class="col-md-3 col-sm-4">
                        <div class="card border-0 shadow p-2 mb-2 text-center">
                            {{-- Pindah ke halaman penjelasan suatu produk --}}
                            <a href="/product" class="text-decoration-none text-dark">
                                {{-- Gambar Produk --}}
                                <img src="https://source.unsplash.com/100x100?motorcycle-helmet" class="card-img my-1">
                                <h5 class="fw-bold text-capitalize">{{ $barang->nama_produk }}</h5>
                                <h6>{{ $barang->harga }}</h6>
                            </a>
                            {{-- add-to-cart --}}
                            <a href="/" class="btn btn-sec">
                                <i class="bi bi-cart-plus"></i> Add To Cart
                            </a>
                        </div>
                    </div>
                @endforeach
                @foreach ($products_kategori_sport as $barang)
                    <div class="col-md-3 col-sm-4">
                        <div class="card border-0 shadow p-2 mb-2 text-center">
                            {{-- Pindah ke halaman penjelasan suatu produk --}}
                            <a href="/product" class="text-decoration-none text-dark">
                                {{-- Gambar Produk --}}
                                <img src="https://source.unsplash.com/100x100?motorcycle-helmet" class="card-img my-1">
                                <h5 class="fw-bold text-capitalize">{{ $barang->nama_produk }}</h5>
                                <h6>{{ $barang->harga }}</h6>
                            </a>
                            {{-- add-to-cart --}}
                            <a href="/" class="btn btn-sec">
                                <i class="bi bi-cart-plus"></i> Add To Cart
                            </a>
                        </div>
                    </div>
                @endforeach
                <p class="fw-bold pt-5">
                    <a href="/products" class="text-decoration-none">View all</a>
                </p>
            </div>
        </div>
    </div>
@endsection
