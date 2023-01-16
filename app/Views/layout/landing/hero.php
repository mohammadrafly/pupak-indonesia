<!-- Hero Section -->
    <section id="hero">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-md-6 hero-tagline">
            <br>
            <br>
            <br>
            <br>
            <br>
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo session()->getFlashdata('success'); ?>
                        </div>
                    <?php endif; ?>
            <p><span class="fw-bold"></span></p>
            <h1>Temukan Beragam Pupuk Tanaman Berkualitas Disini</h1>
            <h4>
              <span class="fw-bold">Solusi Pertanian</span> Dengan Kebutuhan
              Konsumen
            </h4>
            <p>
              <a href="#rekomendasi" class="button-lg-primary">Temukan Pupuk</a>
            </p>
          </div>
        </div>

        <img
          src="<?= base_url('assets/images/foto1.png') ?>"
          alt=""
          class="position-absolute end-0 bottom-0 img-hero"
        />
      </div>
    </section>
    <!-- Hero Section End-->