<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
    <img src="{{ asset('img/logo.png') }}" class="rounded-circle mr-2" width="35" height="35" alt="Logo">
    <span class="agung">Agung's</span>
    <span class="blog ms-1">Blog</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item {{ request()->is('/') ? "active" : ''}}" >
        <a class="nav-link" href="{{ url('/') }}">Home</a>
      </li>
      <li class="nav-item {{ request()->is('about') ? "active" : ''}}" >
        <a class="nav-link" href="{{ url('about') }}">About</a>
      </li>
      <li class="nav-item {{ request()->is('posts') || request()->is('post/*') || request()->is('author/*') ? "active" : ''}}" >
        <a class="nav-link" href="{{ url('posts') }}">Blogs</a>
      </li>
      <li class="nav-item {{ request()->is('categories') || request()->is('category/*') ? "active" : ''}}" >
        <a class="nav-link" href="{{ url('categories') }}">Categories</a>
      </li>
    </ul>
    @auth
      <ul class="navbar-nav ml-auto pr-3">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }} !
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ url('dashboard') }}"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a>
            <div class="dropdown-divider"></div>
            <form action="{{ url('logout') }}" method="POST">
              @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </form>
          </div>
        </li>
      </ul>
    @else
      <ul class="navbar-nav ml-auto pr-3">
        <li class="nav-item">
          <a href="{{ url('login') }}" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
      </ul>
    @endauth
  </div>
</nav>