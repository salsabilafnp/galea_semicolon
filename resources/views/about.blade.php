@extends('layouts.main')

@section('container')
  {{-- About The Name of Brand --}}
  <div class="row justify-content-around">
    <div class="col-md-5 align-self-center">
      <h2 class="mb-4">Welcome to <br><span class="display-3">Galea's Website</span></h2>
      <p>Galea adalah toko online yang menyediakan beragam helm berkualitas tinggi dengan harga yang terjangkau. Kami
        menyediakan berbagai helm terbaru dan unik yang tidak mudah ditemukan di toko lain.</p>
      <p>Kata “Galea” berasal dari Bahasa Latin berarti “Helmet”. Pemilihan kata “Galea” ini sesuai dengan produk yang
        ditawarkan yaitu berbagai macam dan pilihan helmet.</p>
    </div>
    <div class="col-md-5">
      <img src="/img/galea.png" class="img-fluid rounded-circle d-sm-none d-md-block bg-galea">
    </div>
  </div>

  {{-- About The Brand and Creator --}}
  <div class="row justify-content-around">
    <div class="col-md-5">
      <img src="/img/semicolon.png" class="img-fluid rounded-circle d-sm-none d-md-block bg-galea">
    </div>
    <div class="col-md-5 detail-about align-self-center">
      <h2 class="mb-4"><span class="display-3">Galea's Website</span> Creator</h2>
      <p>Website ini merupakan hasil kerja dari <b>Semicolon's Team</b> untuk memenuhi tugas akhir mata kuliah
        <i>Praktikum Web</i>.
      </p>
    </div>
  </div>

  {{-- Developer --}}
  <div class="row mt-5">
    <h3 class="display-5 text-center mb-4">Semicolon's Team</h3>
    <!-- Team Member 1 -->
    <div class="col-md-3 col-sm-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://picsum.photos/250/250?random" class="card-img-top rounded-circle px-5 mt-3" alt="Sabil">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Salsabila FNP</h5>
          <div class="card-text text-black-50">Front End Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 2 -->
    <div class="col-md-3 col-sm-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://picsum.photos/250/250?random" class="card-img-top rounded-circle px-5 mt-3" alt="Nizaar">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Nizaar El-Hufazh</h5>
          <div class="card-text text-black-50">Front End Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 3 -->
    <div class="col-md-3 col-sm-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://picsum.photos/250/250?random" class="card-img-top rounded-circle px-5 mt-3" alt="Agil">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">R.S. Ahmad Agil A</h5>
          <div class="card-text text-black-50">Back End Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 4 -->
    <div class="col-md-3 col-sm-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://picsum.photos/250/250?random" class="card-img-top rounded-circle px-5 mt-3" alt="Yoga">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Yoga Bagja R.</h5>
          <div class="card-text text-black-50">Back End Developer</div>
        </div>
      </div>
    </div>
  </div>

  {{-- Other Social Media --}}
  <div class="row justify-content-evenly text-center py-2">
    <h1 class="pt-5">Our Store</h1>
    <div class="col-md-3 col-sm-6 my-4">
      <a href="/" class="btn btn-main my-2 col-9">
        <i class="bi bi-whatsapp"></i> Call Center</a>
      <a href="/" class="btn btn-main my-2 col-9">
        <i class="bi bi-instagram"></i> Instagram Official</a>
      <a href="/" class="btn btn-main my-2 col-9">
        <i class="bi bi-instagram"></i> Shopee Official</a>
      </a>
    </div>
    <div class="card col-md-8 col-sm-6 my-4">
      {{-- Google Maps --}}
      {{-- <img src="/img/" class="card-img-top"> --}}
      <div class="card-body">
        <i class="bi bi-geo-alt-fill"></i>
        <p class="card-text">Jl. Dr. Setiabudi No.193, Gegerkalong 40153, Bandung</p>
      </div>
    </div>
  </div>
@endsection
