<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container">
    <a class="navbar-brand  text-light" href="#">{{ env('APP_NAME') }}</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active  text-light" aria-current="page" href="{{ route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active  text-light" href="{{ route('albums.index')}}">Lista</a>
        </li>
      </ul>
    </div>
  </div>
</nav>