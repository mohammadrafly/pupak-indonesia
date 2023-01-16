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
            <div class="card p-2" style="width: 25rem; border-radius: 15px;">
              <div style="height: 50%; width: 100%;">
                <img
                  class="align-self-md-center"
                  src="<?= base_url('pupukobat/'. $data['picture']) ?>"
                  width="384px"
                  height="384px"
                  alt=""
                  style="border-radius: 15px;"
                />
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
              <div class="card-body">
                <div class="shadow p-3 mb-5 bg-body-tertiary" style="background-color: white; border-radius: 15px; padding: 15px; border: 5px">
                  <h4 style="color: #61876E;"><?= $data['nama_pupuk'] ?></h4>
                  <p style="color: #61876E;"><?= $data['jenis_pupuk'] ?> | <?= number_to_currency($data['harga'], 'IDR')?>/<?= $data['berat'] ?></p>
                  <a style="color: #61876E;" href="<?= base_url('pupuk/'.$data['id_pupuk']) ?>" class="btn-spesifikasi"
                    >Spesifikasi...
                  </a>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </section>
    <!--  Rekomendasi Section end -->