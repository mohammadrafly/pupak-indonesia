<?= $this->extend('layout/auth') ?>

<?= $this->section('content') ?>
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Sign In</h4>
                  <p class="mb-0">Enter your username and password to sign in</p>
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?php echo session()->getFlashdata('error'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                  <form role="form" id="SignIn">
                    <div class="mb-3">
                      <input type="text" id="username" class="form-control form-control-lg" placeholder="Username" aria-label="Username">
                    </div>
                    <div class="mb-3">
                      <input type="password" id="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-success btn-lg w-100 mt-4 mb-0">Sign in</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-success h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden");
          background-size: cover;">
                <span class="mask bg-gradient-success opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
                <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                $("#SignIn").submit( function (e) {
                    e.preventDefault();
                    var username = $("#username").val();
                    var password = $("#password").val();
                    if (username.length == "") {
                        Swal.fire({
                        title: 'Oops...',
                        text: 'Username must be filled dumbass!'
                        });
                    } else if(password.length == "") {
                        Swal.fire({
                        title: 'Oops...',
                        text: 'Password must be filled dumbass!'
                        });
                    } else {
                        $.ajax({
                            url: "<?= base_url('signin') ?>",
                            type: "post",
                            dataType: "json",
                            data: {
                                "username": username,
                                "password": password
                            },
                            success:function(respond){
                                if (respond.status == true) {
                                    Swal.fire({
                                        icon: respond.icon,
                                        title: respond.title,
                                        text: respond.text,
                                        timer: 3000,
                                        showCancelButton: false,
                                        showConfirmButton: false
                                    })
                                    .then (function() {
                                        window.location.href = "<?= base_url('dashboard') ?>";
                                    });
                                } else if (respond.status == false) {
                                    Swal.fire({
                                        icon: respond.icon,
                                        title: respond.title,
                                        text: respond.text,
                                    });
                                }
                            },
                            error:function(respond){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Server Error!',
                                });
                            }
                        })
                    }
                }); 
            });
        </script>
<?= $this->endSection() ?>