<header>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand d-flex align-items-md-center gap-3" href="#">
            <img class="ms_img" src="https://upload.wikimedia.org/wikipedia/commons/3/3d/DC_Comics_logo.svg" alt="logo">
            <h3>DC Comics</h3>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('welcome')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('comics.index')}}">Pannello amministratore</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
</header>