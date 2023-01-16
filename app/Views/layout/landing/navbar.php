    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100"
    >
      <div class="container" id="navigation">
        <a class="navbar-brand logo-text" href="<?= base_url('/') ?>">
          <img
            src="<?= base_url('assets/images/Pupak Indonesia.png') ?>"
            alt=""
            width="70"
            class="d-inline-block align-text-top me-2"
          />
          PUPAK INDONESIA</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-2">
              <a
                class="nav-link active"
                aria-current="page"
                href="<?= base_url('/') ?>"
                class="nav-link"
                >Beranda</a
              >
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#layanan" class="nav-link"
                >Produk dan Layanan</a
              >
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#contact" class="nav-link">Kontak</a>
            </li>
            <li class="nav-item mx-2 mt-2">
              <a href="<?= base_url('signin') ?>" class="button-primary-login">Sign In</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>