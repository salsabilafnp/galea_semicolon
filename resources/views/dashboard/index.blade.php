@extends('dashboard.layouts.main')

@section('container')
  {{-- Info Dasar --}}
  <div class="row justify-content-evenly">
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

    <div class="row justify-content-between">
      {{-- Info Pesanan Terbaru --}}
      <div class="col-md-8 text-center card mb-2">
        <h2 class="my-2">Pesanan Terbaru</h2>
        <table class="table table-hover table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Kode Pesanan</th>
              <th scope="col">Nama Pembeli</th>
              <th scope="col">Info Produk</th>
              <th scope="col">Total Bayar</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $order)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $order->kode_pesanan }}</td>
                <td>{{ $order->nama_pemesan }}</td>
                <td>{{ $products->where('id', $order->id_produk)->value('nama_produk') }} - {{ $order->jumlah_produk }}
                </td>
                <td>{{ $order->total_bayar }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{-- Daftar Admin --}}
      <div class="col-md-3 text-center card mb-2">
        <h2 class="my-2">Daftar Admin</h2>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama Admin</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($admin as $adm)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $adm->name }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
