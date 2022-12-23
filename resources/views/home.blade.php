@extends('layouts.main')

@section('container')
  {{-- Info Categories of Products that available --}}
  <div id="carouselExampleCaptions" class="carousel slide pt-4" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
    <h3 class="display-5 text-center">Our New Products</h3>
    <div class="row justify-content-around">
      @for ($i = 0; $i < 4; $i++)
        <div class="col-md-3 col-sm-5">
          <div class="card p-2 mb-2 text-center">
            {{-- Pindah ke halaman penjelasan suatu produk --}}
            <a href="/product" class="text-decoration-none text-dark">
              {{-- Gambar Produk --}}
              <img src="https://source.unsplash.com/100x100?motorcycle-helmet" class="card-img my-1">
              <h4 class="fw-bold text-capitalize">nama produk</h4>
              <h6>Harga</h6>
            </a>
            {{-- add-to-cart --}}
            <a href="/" class="btn btn-primary">
              <i class="bi bi-cart-plus"></i> Add To Cart
            </a>
          </div>
        </div>
      @endfor
    </div>
    {{-- go to products page --}}
    <p class="fw-bold">Want to see more products?
      <a href="/products" class="text-decoration-none">See more ...</a>
    </p>
  </div>

  {{-- Some Products for Categories --}}
  <div class="categories">
    {{-- Heading for Category Section --}}
    <h3 class="display-6 text-center">Our Products by Categories</h3>

    {{-- Category 1, nanti ganti namanya sesuai kategori yang ada --}}
    <div class="category-1 text-center my-3">
      <div class="row justify-content-evenly">
        <div class="col-md-2 col-sm-3 align-self-center">
          <div class="card p-2 mb-2 text-center">
            {{-- Gambar untuk Category 1 --}}
            <img src="https://source.unsplash.com/100x100?motorcycle" class="card-img my-1">
            {{-- Lihat lebih banyak berdasarkan kategori 1 --}}
            <a href="/" class="btn btn-dark">Category 1</a>
          </div>
        </div>
        {{-- Produk yang tampil berdasarkan kategori 1 --}}
        @for ($i = 0; $i < 4; $i++)
          <div class="col-md-2 col-sm-4">
            <div class="card p-2 mb-2 text-center">
              {{-- Pindah ke halaman penjelasan suatu produk --}}
              <a href="/product" class="text-decoration-none text-dark">
                {{-- Gambar Produk --}}
                <img src="https://source.unsplash.com/100x100?motorcycle-helmet" class="card-img my-1">
                <h5 class="fw-bold text-capitalize">nama produk</h5>
                <h6>Harga</h6>
              </a>
              {{-- add-to-cart --}}
              <a href="/" class="btn btn-primary">
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
        <div class="col-md-2 col-sm-3 align-self-center">
          <div class="card p-2 mb-2 text-center">
            {{-- Gambar untuk Category 2 --}}
            <img src="https://source.unsplash.com/100x100?helmet" class="card-img my-1">
            {{-- Lihat lebih banyak berdasarkan kategori 1 --}}
            <a href="/" class="btn btn-dark">Category 2</a>
          </div>
        </div>
        {{-- Produk yang tampil berdasarkan kategori 2 --}}
        @for ($i = 0; $i < 4; $i++)
          <div class="col-md-2 col-sm-4">
            <div class="card p-2 mb-2 text-center">
              {{-- Pindah ke halaman penjelasan suatu produk --}}
              <a href="/product" class="text-decoration-none text-dark">
                {{-- Gambar Produk --}}
                <img src="https://source.unsplash.com/100x100?motorcycle-helmet" class="card-img my-1">
                <h5 class="fw-bold text-capitalize">nama produk</h5>
                <h6>Harga</h6>
              </a>
              {{-- add-to-cart --}}
              <a href="/" class="btn btn-primary">
                <i class="bi bi-cart-plus"></i> Add To Cart
              </a>
            </div>
          </div>
        @endfor
      </div>
    </div>
  </div>
@endsection
