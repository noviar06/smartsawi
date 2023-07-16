<nav class="navbar shadow navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="{{ asset('dist/img/icon.png') }}" alt="" width="30" class="d-inline-block align-text-top">
      Sistem Pakar
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item mx-2">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#about">About Us</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
      <div>
        <a class="button-primary" href="{{ route('login') }}">LOGIN</a>
      </div>
    </div>
  </div>
</nav>