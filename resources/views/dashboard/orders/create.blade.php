@extends('dashboard.layouts.main')

@section('container')
  <h2 class="text-center">Tambah Pesanan</h2>

  <div class="row justify-content-center">
    <div class="col-lg-8">
      <form method="POST" action="{{ route('orders.store') }}" class="mb-5" enctype="multipart/form-data">
        @csrf
        {{-- Nama Pembeli --}}
        <div class="mb-3">
          <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
          <input type="text" class="form-control @error('nama_pemesan') is-invalid @enderror" id="nama_pemesan"
            name="nama_pemesan" required autofocus value="{{ old('nama_pemesan') }}">
          @error('nama_pemesan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        {{-- Nomor HP --}}
        <div class="mb-3">
          <label for="nomor_hp" class="form-label">Nomor Handphone</label>
          <input type="text" class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp"
            value="{{ old('nomor_hp') }}">
          @error('nomor_hp')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        {{-- Alamat --}}
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat Penerima</label>
          <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required>{{ old('alamat') }}</textarea>
          @error('alamat')
            <p>{{ $message }}</p>
          @enderror
        </div>
        {{-- Nama Produk --}}
        <div class="mb-3">
          <label for="id_produk" class="form-label">Produk</label>
          <select class="form-select" name="id_produk">
            <option disabled selected>Pilih Produk</option>
            @foreach ($products as $product)
              @if (old('id_produk') == $product->id)
                <option value="{{ $product->id }}" selected>{{ $product->nama_produk }}</option>
              @else
                <option value="{{ $product->id }}">{{ $product->nama_produk }}</option>
              @endif
            @endforeach
          </select>
        </div>
        {{-- Jumlah Produk --}}
        <div class="mb-3">
          <label for="jumlah_produk" class="form-label">Jumlah Produk</label>
          <input type="number" class="form-control @error('jumlah_produk') is-invalid @enderror" name="jumlah_produk"
            value="{{ old('jumlah_produk') }}">
          @error('jumlah_produk')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        {{-- Ongkir --}}
        <div class="mb-3">
          <label for="ongkir" class="form-label">Ongkos Kirim</label>
          <input type="number" class="form-control @error('ongkir') is-invalid @enderror" name="ongkir"
            value="{{ old('ongkir') }}">
          @error('ongkir')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        {{-- Metode Bayar --}}
        <div class="mb-3">
          <label for="metode_bayar" class="form-label">Metode Bayar</label>
          <select class="form-select" name="metode_bayar">
            <option disabled selected>Pilih Metode Bayar</option>
            <option value="COD">COD</option>
            <option value="Transfer">Transfer</option>
          </select>
        </div>
        {{-- Bukti Bayar --}}
        <div class="mb-3">
          <label for="bukti_bayar" class="form-label">Bukti Bayar</label>
          <img class="img-preview img-fluid mb-3 col-sm-5">
          <input class="form-control  @error('bukti_bayar') is-invalid @enderror" type="file" id="bukti_bayar"
            name="bukti_bayar" onchange="previewImage()">
          @error('bukti_bayar')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <button type="submit" class="btn btn-main">Tambah Pesanan</button>
        <a href="/dashboard/orders" class="btn btn-sec">Kembali</a>

      </form>
    </div>
  </div>

  <script>
    function previewImage() {
      const buktiBayar = document.querySelector('#bukti_bayar');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(buktiBayar.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }
  </script>
@endsection
