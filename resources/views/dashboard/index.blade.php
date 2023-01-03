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
    <div class="col-md-3 col-sm-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0 align-items-center">
          <div class="col-md-8 col-sm-7">
            <div class="card-body">
              <h3 class="card-title">Pesanan</h3>
              <p class="card-text fw-bold">Dikemas: 10</p>
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
              <p class="card-text text-primary fw-bold">Dikirim: 10</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-3 text-center">
            <i class="h1 bi bi-clipboard-data-fill"></i>
          </div>
        </div>
      </div>
    </div>

    {{-- Info Pesanan Terbaru --}}
    <div class="row justify-content-between">
      <div class="col-md-8 text-center card mb-2">
        <h2 class="my-2">Pesanan Terbaru</h2>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Kode Pesanan</th>
              <th scope="col">Nama Pembeli</th>
            </tr>
          </thead>
          <tbody>
            @for ($i = 1; $i <= 5; $i++)
              <tr>
                <th scope="row">{{ $i }}</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
            @endfor
          </tbody>
        </table>
      </div>
      <div class="col-md-3 text-center card mb-2">
        <h2 class="my-2">Daftar Admin</h2>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama</th>
            </tr>
          </thead>
          <tbody>
            @for ($i = 1; $i <= 5; $i++)
              <tr>
                <th scope="row">{{ $i }}</th>
                <td>Mark</td>
              </tr>
            @endfor
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
