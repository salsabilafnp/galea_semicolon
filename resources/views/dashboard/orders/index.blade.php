@extends('dashboard.layouts.main')

@section('container')
  <div class="row justify-content-between align-items-center">
    <div class="col-md-3 col-sm-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0 align-items-center">
          <div class="col-md-8 col-sm-7">
            <div class="card-body">
              <h3 class="card-title">Pesanan</h3>
              <p class="card-text fw-bold">Dikemas: {{ $order_dikemas }}</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-3 text-center">
            <i class="h1 bi bi-clipboard-data-fill"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0 align-items-center">
          <div class="col-md-8 col-sm-7">
            <div class="card-body">
              <h3 class="card-title">Pesanan</h3>
              <p class="card-text text-primary fw-bold">Dikirim: {{ $order_dikirim }}</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-3 text-center">
            <i class="h1 bi bi-clipboard-data-fill"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0 align-items-center">
          <div class="col-md-8 col-sm-7">
            <div class="card-body">
              <h3 class="card-title">Pesanan</h3>
              <p class="card-text fw-bold">Dikemas: {{ $order_dikemas }}</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-3 text-center">
            <i class="h1 bi bi-clipboard-data-fill"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <a href="/dashboard/orders/create" class="btn btn-main">Tambah Pesanan</a>
    </div>
  </div>

  <h2 class="my-2 text-center">Pesanan Terbaru</h2>

  @if (session()->has('success'))
    <div class="row justify-content-center">
      <div class="alert alert-success col-md-8 text-center" role="alert">
        {{ session('success') }}
      </div>
    </div>
  @endif

  <div class="table-responsive justify-content-between mt-3">
    {{-- Info Pesanan Terbaru --}}
    <div class="text-center">
      <table class="table table-hover table-sm">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Kode Pesanan</th>
            <th scope="col">Nama Pembeli</th>
            <th scope="col">Info Produk</th>
            <th scope="col">Total Bayar</th>
            <th scope="col">Status Pesanan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($orders as $order)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $order->kode_pesanan }}</td>
              <td>{{ $order->nama_pemesan }}</td>
              <td>{{ $products->where('id', $order->id_produk)->value('nama_produk') }} - {{ $order->jumlah_produk }}</td>
              <td>{{ $order->total_bayar }}</td>
              <td class="text-capitalize">{{ $order->status_pesanan }}</td>
              <td>
                <a href="/dashboard/orders/{{ $order->kode_pesanan }}" class="btn btn-sm btn-sec">
                  <i class="bi bi-eye-fill"></i>
                </a>
                <a href="/dashboard/orders/{{ $order->kode_pesanan }}/edit" class="btn btn-sm btn-warning text-light">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <form action="/dashboard/orders/{{ $order->kode_pesanan }}" method="POST" class="d-inline">
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
  </div>
@endsection
