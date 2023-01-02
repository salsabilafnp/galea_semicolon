@extends('layouts.log')

@section('container')
  <div class="row justify-content-evenly py-3 align-items-center">
    {{-- Alert --}}
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    {{-- /Alert --}}

    {{-- Image --}}
    <div class="col-md-4 d-none d-md-block">
      <img src="/img/galea.png" alt="galea-icon" class="img-fluid bg-galea rounded">
    </div>
    {{-- Form Login --}}
    <div class="col-md-4 col-sm-8">
      <h3 class="mb-2 text-center">Masuk</h3>
      <small class="d-block text-center mb-3">Belum punya akun? <a href="/register" class="text-decoration-none">Daftar
          Sekarang</a></small>
      <form action="/login" method="POST">
        @csrf
        {{-- Email --}}
        <div class="form-floating mb-2">
          <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email"
            autofocus>
          <label for="email">Alamat Email</label>
        </div>
        {{-- Password --}}
        <div class="form-floating mb-2">
          <input type="password" class="form-control" id="password" placeholder="kata sandi" name="password">
          <label for="password">Kata Sandi</label>
        </div>
        {{-- Button --}}
        <div class="d-grid gap-2 col-6 mx-auto mt-3">
          <button class="btn btn-main" type="submit">Masuk</button>
        </div>
      </form>
    </div>
  </div>
@endsection
