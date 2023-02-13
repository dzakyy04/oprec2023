<nav class="navbar navbar-expand-lg navbar-dark" id="navbar" style="background: #58508C;">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">HMIF UNSRI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('daftar*') ? 'active' : '' }}" href="/daftar">Daftar</a>
                </li>
                <li class="nav-item disabled">
                    <a class="nav-link {{ Request::is('pengumuman*') ? 'active' : '' }}" href="/pengumuman">Pengumuman</a>
                </li>
            </ul>
        </div>
    </div>
</nav>