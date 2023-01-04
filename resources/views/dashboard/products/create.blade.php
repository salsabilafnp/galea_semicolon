@extends('dashboard.layouts.main')

@section('container')
  <h2 class="text-center">Tambah Produk</h2>

  <div class="row justify-content-center">
    <div class="col-lg-8">
      <form method="POST" action="{{ route('products.store') }}" class="mb-5" enctype="multipart/form-data">
        @csrf
        {{-- Nama --}}
        <div class="mb-3">
          <label for="nama_produk" class="form-label">Nama Produk</label>
          <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk"
            name="nama_produk" required autofocus value="{{ old('nama_produk') }}">
          @error('nama_produk')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        {{-- Harga --}}
        <div class="mb-3">
          <label for="harga" class="form-label">Harga</label>
          <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga"
            value="{{ old('harga') }}">
          @error('harga')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        {{-- Stok --}}
        <div class="mb-3">
          <label for="banyak_produk" class="form-label">Stok</label>
          <input type="number" class="form-control @error('banyak_produk') is-invalid @enderror" name="banyak_produk"
            value="{{ old('banyak_produk') }}">
          @error('banyak_produk')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        {{-- Kategori --}}
        <div class="mb-3">
          <label for="kategori" class="form-label">Kategori</label>
          <select class="form-select" name="kategori">
            <option disabled selected>Pilih Kategori</option>
            <option value="casual">Casual</option>
            <option value="sport">Sport</option>
          </select>
        </div>
        {{-- Gambar --}}
        <div class="mb-3">
          <label for="gambar" class="form-label">Gambar Produk</label>
          <img class="img-preview img-fluid mb-3 col-sm-5">
          <input class="form-control  @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar"
            onchange="previewImage()">
          @error('gambar')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        {{-- Deskripsi --}}
        <div class="mb-3">
          <label for="deskripsi" class="form-label">Deskripsi Produk</label>
          <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" required
            autofocus value="{{ old('deskripsi') }}"></textarea>
          @error('deskripsi')
            <p>{{ $message }}</p>
          @enderror
        </div>

        <button type="submit" class="btn btn-main">Tambah Produk</button>
        <a href="/dashboard/products" class="btn btn-sec">Kembali</a>

      </form>
    </div>
  </div>

  <script>
    function previewImage() {
      const gambar = document.querySelector('#gambar');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(gambar.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }
  </script>
@endsection
