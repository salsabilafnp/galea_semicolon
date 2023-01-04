@extends('dashboard.layouts.main')

@section('container')
  <div class="row justify-content-between align-items-center">
    <div class="col-md-3 col-sm-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0 align-items-center">
          <div class="col-md-8 col-sm-7">
            <div class="card-body">
              <h3 class="card-title">Produk</h3>
                <p class="card-text text-success fw-bold">Tersedia: {{ $stok_produk_tersedia }}</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-3 text-center">
            <i class="h1 bi bi-box-fill"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0 align-items-center">
          <div class="col-md-8 col-sm-7">
            <div class="card-body">
              <h3 class="card-title">Produk</h3>
                <p class="card-text text-danger fw-bold">Habis: {{ $stok_produk_habis }}</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-3 text-center">
            <i class="h1 bi bi-box-fill"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <a href="/dashboard/products/create" class="btn btn-main">Tambah Produk</a>
    </div>
  </div>

  <h2 class="text-center">Daftar Produk</h2>

  @if (session()->has('success'))
    <div class="row justify-content-center">
      <div class="alert alert-success col-md-8 text-center" role="alert">
        {{ session('success') }}
      </div>
    </div>
  @endif

  <div class="table-responsive text-center mt-3">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Gambar</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Kategori</th>
          <th scope="col">Harga</th>
          <th scope="col">Stok</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>
              @if (!$product->gambar)
                <img width="100" height="100" src="/img/galea.png" alt="default">
              @else
                <img width="100" height="100" src="/storage/products/{{ $product->gambar }}"
                  alt="{{ $product->nama_produk }}">
              @endif
            </td>
            <td class="fw-bold">{{ $product->nama_produk }}</td>
            <td class="text-uppercase">{{ $product->kategori }}</td>
            <td>Rp {{ $product->harga }}</td>
            <td>
              @if ($product->banyak_produk == 0)
                <p class="fw-bold text-danger">Habis</p>
              @else
                <p>{{ $product->banyak_produk }}</p>
              @endif
            </td>
            <td>
              <a href="/dashboard/products/{{ $product->slug }}" class="btn btn-sm btn-sec">
                <i class="bi bi-eye-fill"></i>
              </a>
              <a href="/dashboard/products/{{ $product->slug }}/edit" class="btn btn-sm btn-warning text-light">
                <i class="bi bi-pencil-square"></i>
              </a>
              <form action="/dashboard/products/{{ $product->slug }}" method="POST" class="d-inline">
                @csrf
                @method('delete')
                <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this?')">
                  <i class="bi bi-trash3-fill"></i>
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
