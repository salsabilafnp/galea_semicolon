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
          <h5 class="card-title mb-0">R.S. Ahmad Agil Alatas</h5>
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
    <div class="col-md-8 col-sm-6 my-4">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.200537714376!2d107.59153091455858!3d-6.866556395037899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6be237133af%3A0x1637c744e3cdaab3!2sJl.%20Dr.%20Setiabudi%20No.193%2C%20Gegerkalong%2C%20Kec.%20Sukasari%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040153!5e0!3m2!1sid!2sid!4v1672573884626!5m2!1sid!2sid" width="750" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
@endsection
