@extends('dashboard.layouts.main')

@section('container')
  <div class="row justify-content-evenly">
    <div class="col-md-5">
      <img src="/storage/products/{{ $products->gambar }}" alt="{{ $products->nama_produk }}" width="400" height="400"
        class="img-fluid rounded bg-galea">
    </div>
    <div class="col-md-5 align-self-center">
      {{-- Buttons --}}
      <a href="/dashboard/products/" class="btn btn-main text-light">
        <i class="bi bi-arrow-left-circle-fill"></i>
      </a>
      <a href="/dashboard/products/{{ $products->slug }}/edit" class="btn btn-warning text-light">
        <i class="bi bi-pencil-square"></i>
      </a>
      <form action="/dashboard/products/{{ $products->slug }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">
          <i class="bi bi-trash3-fill"></i>
        </button>
      </form>
      {{-- Content --}}
      {{-- Nama Produk --}}
      <h2 class="display-3 mb-4 text-capitalize">{{ $products->nama_produk }}</h2>
      <span class="text-muted text-uppercase">{{ $products->kategori }}</span>
      {{-- Deskripsi --}}
      <article class="my-3 fs-5">
        {!! $products->deskripsi !!}
      </article>
      {{-- Stok --}}
      @if ($products->banyak_produk == 0)
        <p class="fw-bold text-danger">Habis</p>
      @else
        <p>{{ $products->banyak_produk }}</p>
      @endif
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">
      <h2></h2>


    </div>
  </div>
@endsection
