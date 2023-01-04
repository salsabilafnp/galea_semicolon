<nav class="navbar navbar-expand-lg navbar-dark bg-galea fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">
      {{-- Logo Brand --}}
      <img src="/img/galea.png" alt="galea-icon" style="max-width: 2em;">
      Galea Helmet Gallery
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard"><i
              class="bi bi-grid-fill"></i> Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/products') ? 'active' : '' }}" href="/dashboard/products"><i
              class="bi bi-box-fill"></i> Our Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/orders') ? 'active' : '' }}" href="/dashboard/orders"><i
              class="bi bi-clipboard-data-fill"></i> Orders</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
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
