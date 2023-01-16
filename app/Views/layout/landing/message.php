    <!-- Kontak Section  -->
    <section id="contact">
      <div class="container-fluid overlay h-100">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3>
                Butuh konsultasi mengenai pertanian ? Tim Kami Siap Membantu
                Permasalahan Anda
              </h3>
              <div class="kontak">
                <h6>Kontak</h6>
                <div class="mb-3 d-flex align-items-center">
                  <div>
                    <img src="<?= base_url('assets/images/lokasi.png') ?>" alt="" />
                  </div>
                  <a href="#">
                    Jl. DI Panjaitan No.128, Karangreja, Purwokerto Kidul, Kec.
                    Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53147.</a
                  >
                </div>

                <div class="mb-3 d-flex align-items-center">
                  <div>
                    <img src="<?= base_url('assets/images/nomer.png') ?>" alt="" />
                  </div>
                  <a href="#"> +62-8231-2123-2131</a>
                </div>

                <div class="mb-3 d-flex align-items-center">
                  <div>
                    <img src="<?= base_url('assets/images/email.png') ?>" alt="" />
                  </div>
                  <a href="#"> pupakindonesia@gmail.com</a>
                </div>
              </div>

              <h6>Social Media</h6>
              <a href="#" class="me-3">
                <img src="<?= base_url('assets/images/tele.png') ?>" alt=""
              /></a>
              <a href="#" class="me-3">
                <img src="<?= base_url('assets/images/instagram.png') ?>" alt="" />
              </a>
              <a href="#" class="me-3">
                <img src="<?= base_url('assets/images/twitter.png')?>" alt="" />
              </a>
              <a href="#" class="linkpupak">PUPAK INDONESIA</a>
            </div>

            <div class="col-md-6">
              <div class="card-contact w-100" style="border-radius: 15px">
                <form id="SignIn">
                  <h2>Tulis Pertanyaan dibawah!</h2>
                  <div class="form-floating mb-3">
                    <input
                      type="email"
                      class="form-control"
                      placeholder="name@example.com"
                      id="email_user"
                    />
                    <label for="floatingInput" class="d-flex align-items-center"
                      >Masukan Email...</label
                    >
                  </div>
                  <div class="form-floating mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="name@example.com"
                      id="pertanyaan_user"
                    />
                    <label for="floatingInput" class="d-flex align-items-center"
                      >Tuliskan Pertanyaan...</label
                    >
                  </div>

                  <button class="button-kirim" type="submit">
                    Kirim Pesan
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.15/dist/sweetalert2.all.min.js"></script>
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
                <script>
                  $(document).ready(function() {
                      $("#SignIn").submit( function (e) {
                          e.preventDefault();
                          var email_user = $("#email_user").val();
                          var pertanyaan_user = $("#pertanyaan_user").val();
                            $.ajax({
                              url : "<?= base_url('kirim/pesan')?>",
                              type: 'POST',
                              dataType: "JSON",
                              data: {
                                "email_user": email_user,
                                "pertanyaan_user": pertanyaan_user
                              },
                              success: function(data){
                                  Swal.fire({
                                    position: 'top-end',
                                    icon: 'success',
                                    title: 'Berhasil mengirim pertanyaan',
                                    showConfirmButton: false,
                                    timer: 2000
                                  });
                              },
                              error: function (jqXHR, textStatus, errorThrown) {
                                  alert('Error adding / update data');
                              }
                          });
                      }); 
                  });
                </script>
