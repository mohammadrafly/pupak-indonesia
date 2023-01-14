    <section id="search" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2>Pupak Indonesia</h2>

            <p>Temukan beragam pupuk unggulan kebutuhan pertanian disini!</p>
          </div>

          <div class="col-10 mx-auto mt-5">
            <form action="<?= base_url('pupuk/cari') ?>" method="GET" style="flex-direction: row; align-items:center">
              <div class="input-group input-cari mb-3">
                <input 
                    type="search" 
                    name="keyword" 
                    class="form-control"
                    placeholder="cari berdasarkan nama atau jenis" 
                    required maxlength="32" 
                />
                <input type="submit" class="button-primary" value="Temukan">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>