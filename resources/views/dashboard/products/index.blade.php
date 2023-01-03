@extends('dashboard.layouts.main')

@section('container')
  <div class="row justify-content-between">
    <div class="col-md-3 col-sm-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0 align-items-center">
          <div class="col-md-8 col-sm-7">
            <div class="card-body">
              <h3 class="card-title">Produk</h3>
              <p class="card-text text-success fw-bold">Tersedia: 10</p>
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
              <p class="card-text text-danger fw-bold">Habis: 10</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-3 text-center">
            <i class="h1 bi bi-box-fill"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <a href="/dashboard/products/create" class="btn btn-main m-3">Tambah Produk</a>
    </div>
  </div>

  @if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>
  @endif


  <div class="table-responsive text-center">
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
            <td>{{ $product->gambar }}</td>
            <td>{{ $product->nama_produk }}</td>
            <td class="text-uppercase">{{ $product->kategori }}</td>
            <td>Rp {{ $product->harga }}</td>
            <td>{{ $product->banyak_produk }}</td>
            <td>
              <a href="/dashboard/products/{{ $product->slug }}" class="badge bg-info text-decoration-none">
                <i class="bi bi-eye-fill"></i>
              </a>
              <a href="/dashboard/products/{{ $product->slug }}/edit" class="badge bg-warning">
                <i class="bi bi-pencil-square"></i>
              </a>
              <form action="/dashboard/products/{{ $product->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure to delete this?')">
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
