<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">My Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/') ? "active" : "" }}" href="/">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('about') ? "active" : "" }}" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('contact') ? "active" : "" }}" href="/contact">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        My Account
      </button>
      <li class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="/posts">My posts</button>
        <a class="dropdown-item">Another action</button>
        <a class="dropdown-item">Something else here</button>
        <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
      </li>
    </ul>
  </div>
</nav>
