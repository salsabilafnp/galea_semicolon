<nav class="navbar navbar-expand-lg navbar-dark bg-galea fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">
      {{-- Logo Project --}}
      <img src="/img/galea.png" alt="galea-icon" style="max-width: 2em;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('products') ? 'active' : '' }}" href="/products">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        @auth
          @if (Auth::user()->role == 'admin')
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="/dashboard">
                    <i class="bi bi-grid-fill"></i> Dashboard
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button class="dropdown-item" type="submit">
                      <i class="bi bi-box-arrow-right"></i> Logout
                    </button>
                  </form>
                </li>
              </ul>
            </li>
          @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="/profile">
                    <i class="bi bi-person-circle"></i> My Profile
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="/cart"><i
                      class="bi bi-cart-fill"></i> Keranjang</a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button class="dropdown-item" type="submit">
                      <i class="bi bi-box-arrow-right"></i> Logout
                    </button>
                  </form>
                </li>
              </ul>
            </li>
          @endif
        @else
          <li class="nav-item me-2">
            <a href="/register" class="nav-link {{ Request::is('register') ? 'active' : '' }}">Register</a>
          </li>
          <li class="nav-item">
            <a href="/login"
              class="btn btn-light text-dark nav-link {{ Request::is('login') ? 'active' : '' }}">Login</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
