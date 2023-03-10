<header>
<div class="bg-primary text-white">
  <div class="container">
    <div class="row ">
      <div class="col d-flex justify-content-end align-items-center">
        <p class="pt-3 me-5">DC POWER VISA</p>
        <!-- BTN -->
        <div class="dropdown ">
        <button class="btn dropdown-toggle text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          ADDITIONAL DC SITES
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Sito uno</a></li>
          <li><a class="dropdown-item" href="#">Sito due</a></li>
          <li><a class="dropdown-item" href="#">Sito tre</a></li>
        </ul>
      </div>
      </div>
        </div>
  </div>
</div>
  <!-- nav -->
<div class="container p-4">
  <nav class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid">
      <a class="navbar-brand me-5" href="{{ route('home') }}"><img src="{{ Vite::asset('resources/img/DC-logo.png') }}" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item fw-bold">
            <a class="nav-link active" aria-current="page" href="#">CHARACTERS</a>
          </li>
          <li class="nav-item fw-bold">
            <a class="nav-link" href="#">COMICS</a>
          </li>
          <li class="nav-item fw-bold">
            <a class="nav-link" href="#">MOVIES</a>
          </li>
          <li class="nav-item fw-bold">
            <a class="nav-link" href="#">TV</a>
          </li>
          <li class="nav-item fw-bold">
            <a class="nav-link" href="#">GAMES</a>
          </li>
          <li class="nav-item fw-bold">
            <a class="nav-link" href="#">COLLECTIBLES</a>
          </li>
          <li class="nav-item fw-bold">
            <a class="nav-link" href="#">VIDEOS</a>
          </li>
          <li class="nav-item fw-bold">
            <a class="nav-link" href="#">FANS</a>
          </li>
          <li class="nav-item fw-bold">
            <a class="nav-link" href="#">NEWS</a>
          </li>
          <li class="nav-item fw-bold dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              SHOP
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">lorem</a></li>
              <li><a class="dropdown-item" href="#">lorem</a></li>
              <li><a class="dropdown-item" href="#">lorem</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</div>  
<!-- immagine -->
<div class="img-jumbotron">

</div>
</header>

