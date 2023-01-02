@extends('layouts.main')

@section('container')
    {{-- Some Products for Categories --}}
    <div class="categories my-5">
        {{-- Heading for Category Section --}}
        <h3 class="display-6 text-center">Our Products</h3>

        {{-- Category 1, nanti ganti namanya sesuai kategori yang ada --}}
        <div class="category-1 text-center my-3">
            <div class="row justify-content-evenly">
                <div class="col-md-2 align-self-center">
                    <div class="card border-0 shadow p-2 mb-2 text-center">
                        {{-- Gambar untuk Category 1 --}}
                        <img src="https://source.unsplash.com/100x100?motorcycle" class="card-img my-1">
                        {{-- Lihat lebih banyak berdasarkan kategori 1 --}}
                        <a href="/" class="btn btn-main">Category 1</a>
                    </div>
                </div>
                {{-- Produk yang tampil berdasarkan kategori 1 --}}
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-md-2 col-sm-4">
                        <div class="card border-0 shadow p-2 mb-2 text-center">
                            {{-- Pindah ke halaman penjelasan suatu produk --}}
                            <a href="/product" class="text-decoration-none text-dark">
                                {{-- Gambar Produk --}}
                                <img src="https://source.unsplash.com/100x100?motorcycle-helmet" class="card-img my-1">
                                <h5 class="fw-bold text-capitalize">nama produk</h5>
                                <h6>Harga</h6>
                            </a>
                            {{-- add-to-cart --}}
                            <a href="/" class="btn btn-sec">
                                <i class="bi bi-cart-plus"></i> Add To Cart
                            </a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        {{-- Category 2, nanti ganti namanya sesuai kategori yang ada --}}
        <div class="category-2 text-center my-3">
            <div class="row justify-content-evenly">
                <div class="col-md-2 align-self-center">
                    <div class="card border-0 shadow p-2 mb-2 text-center">
                        {{-- Gambar untuk Category 2 --}}
                        <img src="https://source.unsplash.com/100x100?helmet" class="card-img my-1">
                        {{-- Lihat lebih banyak berdasarkan kategori 1 --}}
                        <a href="/" class="btn btn-main">Category 2</a>
                    </div>
                </div>
                {{-- Produk yang tampil berdasarkan kategori 2 --}}
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-md-2 col-sm-4">
                        <div class="card border-0 shadow p-2 mb-2 text-center">
                            {{-- Pindah ke halaman penjelasan suatu produk --}}
                            <a href="/product" class="text-decoration-none text-dark">
                                {{-- Gambar Produk --}}
                                <img src="https://source.unsplash.com/100x100?motorcycle-helmet" class="card-img my-1">
                                <h5 class="fw-bold text-capitalize">nama produk</h5>
                                <h6>Harga</h6>
                            </a>
                            {{-- add-to-cart --}}
                            <a href="/" class="btn btn-sec">
                                <i class="bi bi-cart-plus"></i> Add To Cart
                            </a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
