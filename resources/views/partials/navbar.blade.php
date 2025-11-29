<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand pl-3" href="{{ url('/') }}">Agung's Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto pr-3">
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
    </div>
</nav>