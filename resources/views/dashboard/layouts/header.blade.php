  <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
          <i class="bi bi-list toggle-sidebar-btn"></i>
          <a href="/dashboard" class="logo d-flex align-items-center ms-3">
              <img src="/img/logo.png" alt="">
              <span class="d-none d-lg-block">OPREC HMIF</span>
          </a>
      </div><!-- End Logo -->

      <div class="search-bar">
          <form class="search-form d-flex align-items-center" method="get" action="/dashboard/registrar">
              <input type="text" name="search" placeholder="Cari" value="{{ Request('search') }}">
              <button type="submit" title="Search"><i class="bi bi-search"></i></button>
          </form>
      </div><!-- End Search Bar -->

      <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">

              <li class="nav-item d-block d-lg-none">
                  <a class="nav-link nav-icon search-bar-toggle " href="#">
                      <i class="bi bi-search"></i>
                  </a>
              </li>
          </ul>
      </nav>

  </header><!-- End Header -->
