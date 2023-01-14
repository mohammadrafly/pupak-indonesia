    <!-- Rekomendasi Section -->
    <section id="rekomendasi">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2>Rekomendasi Pupuk dan Obat Untuk Anda</h2>
          </div>
        </div>
        <div class="row">
        <?php foreach($content as $data): ?>
          <div class="col-4 mb-4">
            <div class="card p-2" style="width: 25rem">
              <img
                class="align-self-md-center"
                src="<?= base_url('pupukobat/'. $data['picture']) ?>"
                width="250"
                height="250"
                alt=""
              />
              <div class="card-body">
                <h4><?= $data['nama_pupuk'] ?></h4>
                <a href="<?= base_url('pupuk/'.$data['id_pupuk']) ?>" class="text-info btn-spesifikasi"
                  >Spesifikasi...
                </a>
              </div>

              <div class="card-kualitas d-flex justify-content-between px-4">
                <span>
                  <img src="<?= base_url('assets/images/grade 1.png') ?>" alt="" />
                  <p>Grade</p>
                </span>

                <span>
                  <img src="<?= base_url('assets/images/organic 1.png') ?>" alt="" />
                  <p>Grade</p>
                </span>

                <span>
                  <img src="<?= base_url('assets/images/verified 1.png') ?>" alt="" />
                  <p>Grade</p>
                </span>
              </div>
            </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </section>
    <!--  Rekomendasi Section end -->