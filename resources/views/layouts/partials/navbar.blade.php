<nav class="navbar navbar-dark navbar-expand-lg bg-primary">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/">Alivan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ $active == 'home' ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $active == 'about' ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $active == 'posts' ? 'active' : '' }}" href="/posts">Blog</a>
        </li>
      </ul>
      <ul class="navbar-nav mb-2 mb-lg-0">
        @auth
          <li class="nav-item dropdown">
            <button class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ auth()->user()->name }}
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button class="dropdown-item" type="submit">
                    Logout
                  </button>
                </form>
              </li>
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link {{ $active == 'login' ? 'active' : '' }}" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active == 'register' ? 'active' : '' }}" href="/register">Register</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
