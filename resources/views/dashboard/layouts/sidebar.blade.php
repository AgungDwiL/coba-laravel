<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="sidebar-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ url('dashboard') }}">
          <span data-feather="home"></span>
          Dashboard <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('dashboard/posts') ? 'active' : '' }}" href="{{ url('dashboard/posts') }}">
          <span data-feather="file-text"></span>
          My Posts
        </a>
      </li>
    </ul>
  </div>
</nav>