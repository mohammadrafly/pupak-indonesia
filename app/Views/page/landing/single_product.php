<?= $this->extend('layout/landing') ?>

<?= $this->section('content') ?>
    <!-- Hero Section -->
    <section id="hero">
      <div class="container h-100">
        <div class="row">
          <div class="col-md-6 hero-tagline">
            <br />
            <br />
            <p><span class="fw-bold"></span></p>
            <h1><?= $content['nama_pupuk'] ?></h1>
            <h4>
              <span class="fw-bold">Jenis: </span> <?= $content['jenis_pupuk'] ?> |
              <span class="fw-bold">Harga: </span> <?= number_to_currency($content['harga'], 'IDR')?>/<?= $content['berat'] ?>
            </h4>
            <p>
            <?= $content['deskripsi'] ?>
            </p>
            <p>
              <span class="fw-bold">Tanaman yang cocok: </span>
              <?php foreach($tanaman as $data): ?>
                <?= $data->nama_tanaman ?>,
              <?php endforeach ?>
            </p>
          </div>
          <div class="col-md-6" style="margin-top: 100px;">
            <img
                src="<?= base_url('pupukobat/'. $content['picture']) ?>"
                style="border-radius: 15px;"
                alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End-->
<?= $this->endSection() ?>