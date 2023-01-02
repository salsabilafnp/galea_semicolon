@extends('layouts.log')

@section('container')
  <div class="row justify-content-evenly align-items-center py-2">
    <div class="col-md-4 d-none d-md-block">
      <img src="/img/galea.png" alt="galea-icon" class="img-fluid bg-galea rounded">
    </div>
    <div class="col-md-4 col-sm-8">
      <h3 class="mb-2 text-center">Daftar Sekarang</h3>
      <small class="d-block text-center mb-3">Sudah punya akun? <a href="/login"
          class="text-decoration-none">Masuk</a></small>
      <form action="/register" method="POST">
        @csrf
        {{-- Name --}}
        <div class="form-floating mb-1">
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name"
            name="name" value="{{ old('name') }}" autofocus>
          <label for="name">Nama Lengkap</label>
          @error('name')
            <div class="invalid-feedbackk">
              {{ $message }}
            </div>
          @enderror
        </div>
        {{-- Email --}}
        <div class="form-floating mb-1">
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
            placeholder="name@example.com" name="email" value="{{ old('email') }}">
          <label for="email">Alamat Email</label>
          @error('email')
            <div class="invalid-feedbackk">
              {{ $message }}
            </div>
          @enderror
        </div>
        {{-- Password --}}
        <div class="form-floating mb-1">
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
            placeholder="kata sandi" name="password">
          <label for="password">Kata Sandi</label>
          @error('password')
            <div class="invalid-feedbackk">
              {{ $message }}
            </div>
          @enderror
        </div>
        {{-- Password Confirmation --}}
        <div class="form-floating mb-1">
          <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
            id="password_confirmation" placeholder="kata sandi" name="password_confirmation">
          <label for="password_confirmation">Ulang Kata Sandi</label>
          @error('password_confirmation')
            <div class="invalid-feedbackk">
              {{ $message }}
            </div>
          @enderror
        </div>
        {{-- Button --}}
        <div class="d-grid gap-2 col-6 mx-auto mt-3">
          <button class="btn btn-main" type="submit">Daftar</button>
        </div>
      </form>
    </div>
  </div>
@endsection
