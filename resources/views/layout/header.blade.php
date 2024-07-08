<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Front-End</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('sepakbola') ? 'active' : '' }}" href="/sepakbola">Sepak Bola</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('basket') ? 'active' : '' }}" href="/basket">Basket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('badminton') ? 'active' : '' }}" href="/badminton">Badminton</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('gitar') ? 'active' : '' }}" href="/gitar">Gitar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('drum') ? 'active' : '' }}" href="/drum">Drum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('piano') ? 'active' : '' }}" href="/piano">Piano</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('kategori') ? 'active' : '' }}" href="/kategori">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('pelanggan') ? 'active' : '' }}" href="/pelanggan">Pelanggan</a>
          </li>
        </ul>
        @auth
        <ul class="navbar-nav d-flex">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/logout">Sign Out</a>
            </li>
        </ul>
        @else
        <ul class="navbar-nav d-flex">
          <form>
           <li class="nav-item form-control me-2 btn btn-outline-success">
             <a class="nav-link" aria-current="page" href="/login">Login</a>
           </li>
          </form>
        </ul>
        @endauth



      </div>
    </div>
  </nav>
</header>
