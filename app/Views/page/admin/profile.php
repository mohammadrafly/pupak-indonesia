<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>
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
    <div class="card shadow-lg mx-4 card-profile-bottom">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="<?= base_url('assets/img/team-1.jpg') ?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <?= $content['nama_admin'] ?>
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                Admin
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
        <div class="col-auto">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Edit Profile</p>
              </div>
            </div>
            <div class="card-body">
              <p class="text-uppercase text-sm">User Information</p>
                <form class="row" action="<?= base_url('dashboard/profile/update') ?>" method="POST">
                    <input hidden name="id_admin" value="<?= $content['id_admin'] ?>">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Nama</label>
                            <input class="form-control" name="nama_admin" type="text" value="<?= $content['nama_admin'] ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Username</label>
                            <input disabled class="form-control" name="username" type="text" value="<?= $content['username'] ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">
                        <span>Save</span>
                    </button>
                </form>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Ganti Password</p>
              <form class="row" action="<?= base_url('dashboard/profile/update/password') ?>" method="POST">
                <input hidden name="id_admin" value="<?= $content['id_admin'] ?>">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Password Lama</label>
                    <input name="password_lama" class="form-control" type="password">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Password Baru</label>
                    <input name="password_baru" class="form-control" type="password">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Konfirmasi Password Baru</label>
                    <input name="password_baru_konf" class="form-control" type="password">
                  </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">
                    <span>Save</span>
                </button>
              </form>
            </div>
          </div>
        </div>
    </div>
<?= $this->endSection() ?>