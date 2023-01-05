@extends('dashboard.layouts.main')

@section('container')
  <div class="row justify-content-evenly">
    <div class="col-md-5">
      <img src="/storage/orders/{{ $orders->bukti_bayar }}" alt="{{ $orders->kode_pesanan }}" width="300" height="400"
        class="img-fluid rounded bg-galea">
    </div>
    <div class="col-md-5 align-self-center">
      {{-- Buttons --}}
      <a href="/dashboard/orders/" class="btn btn-main text-light">
        <i class="bi bi-arrow-left-circle-fill"></i>
      </a>
      <a href="/dashboard/orders/{{ $orders->kode_pesanan }}/edit" class="btn btn-warning text-light">
        <i class="bi bi-pencil-square"></i>
      </a>
      <form action="/dashboard/orders/{{ $orders->kode_pesanan }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">
          <i class="bi bi-trash3-fill"></i>
        </button>
      </form>
      {{-- Content --}}
      {{-- Nama Produk --}}
      <h2 class="display-3 my-2 text-capitalize">{{ $orders->kode_pesanan }}</h2>
      <p class="fw-bold mb-1">Nama Pembeli: {{ $orders->nama_pemesan }}</p>
      <p class="mb-1">Nomor Handphone: {{ $orders->nomor_hp }}</p>
      <p class="mb-1">Alamat Penerima: {{ $orders->alamat }}</p>
      <p class="fw-bold mt-3 mb-1">Produk: {{ $products->where('id', $orders->id_produk)->value('nama_produk') }} <span class="fst-italic">
          sebanyak</span> {{ $orders->jumlah_produk }}</p>
      <p class="mb-1">Harga Produk: {{ $products->where('id', $orders->id_produk)->value('harga') }} x {{ $orders->jumlah_produk }}</p>
      <p class="mb-1">Ongkos Kirim: {{ $orders->ongkir }}</p>
      <p class="mb-1">Total Bayar: {{ $orders->total_bayar }}</p>
      <p class="mb-1">Metode Bayar: {{ $orders->metode_bayar }}</p>
      <p class="fw-bold mt-3 mb-1">Status Pesanan: {{ $orders->status_pesanan }}</p>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">
      <h2></h2>


    </div>
  </div>
@endsection
