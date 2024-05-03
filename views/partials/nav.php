<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Nora blogi</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class= "<?= urlIs('/') ? "nav-link active" : "nav-link";?>" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="<?= urlIs('/about') ? "nav-link active" : "nav-link";?>" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="<?= urlIs('/admin') ? "nav-link active" : "nav-link";?>" href="/admin">Admin</a>
              </li>
              <li class="nav-item">
                <a class="<?= urlIs('/notes') ? "nav-link active" : "nav-link";?>" href="/notes">Notes</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Log in
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Log in</a></li>
                  <li><a class="dropdown-item" href="#">Create account</a></li>
                  <li><hr class="dropdown-divider"></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>