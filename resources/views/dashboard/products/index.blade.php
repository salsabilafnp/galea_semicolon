@extends('dashboard.layouts.main')

@section('container')
  <div class="row justify-content-evenly">
    <div class="col-md-3">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0 align-items-center">
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title">Produk</h3>
              <p class="card-text text-success fw-bold">Tersedia: 10</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <i class="h1 bi bi-box-fill"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0 align-items-center">
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title">Produk</h3>
              <p class="card-text text-danger fw-bold">Habis: 10</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <i class="h1 bi bi-box-fill"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  @if (session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>
  @endif

  <div class="table-responsive col-lg-8">
    <div class="row justify-content-between">
      <a href="/dashboard/products/create" class="btn btn-primary m-3">Tambah Produk</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Kode Pesanan</th>
            <th scope="col">Nama Pembeli</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $product->title }}</td>
              <td>{{ $product->category->name }}</td>
              <td>
                <a href="/dashboard/products/{{ $product->slug }}" class="badge bg-info">
                  <span data-feather="eye"></span>
                </a>
                <a href="/dashboard/products/{{ $product->slug }}/edit" class="badge bg-warning">
                  <span data-feather="edit"></span>
                </a>
                <form action="/dashboard/products/{{ $product->slug }}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure to delete this?')">
                    <span data-feather="x-circle"></span>
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @endsection
