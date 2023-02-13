  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard') ? '' : 'collapsed' }}" href="/dashboard">
                  <i class="bi bi-grid-fill"></i>
                  <span>Dashboard</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/registrar*') ? '' : 'collapsed'}}"
                  href="/dashboard/registrar">
                  <i class="bi bi-people-fill"></i>
                  <span>Pendaftar</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/passregistrars') ? '' : 'collapsed' }}"
                  href="/dashboard/passregistrars">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>Diterima</span>
              </a>
          </li>

          <hr>
          
          <li class="nav-item">
              <a class="nav-link collapsed" href="/logout">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Logout</span>
              </a>
          </li>
      </ul>

  </aside><!-- End Sidebar-->
