<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Tanaman Table</h6>
                <button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Tanaman
                </button>
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
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tanaman</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?= base_url('dashboard/tanaman/add')?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nama_tanaman">Nama Tanaman</label>
                                <input type="text" class="form-control" name="nama_tanaman" autocomplete="Nama Tanaman" placeholder="Nama Tanaman">
                            </div>
                            <div class="form-group">
                                <label for="jenis_tanaman">Jenis Tanaman</label>
                                <input type="jenis_tanaman" class="form-control" name="jenis_tanaman" placeholder="Jenis Tanaman">
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label">Foto Tanaman</label>
                                <input class="form-control form-control-sm" name="picture" id="formFile" type="file">
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-secondary btn-lg w-100 mt-4 mb-0" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Tanaman</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Tanaman</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Picture</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated At</th>
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($content as $data): ?>
                    <tr>
                      <td class="align-middle text-center"> 
                        <span class="text-secondary text-xs font-weight-bold"><?= $data['nama_tanaman'] ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data['jenis_tanaman'] ?></span>
                      </td>
                      <td class="align-middle text-center"> 
                        <span class="text-secondary text-xs font-weight-bold"><?= $data['picture'] ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data['created_at'] ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data['updated_at'] ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <button type="button" class="btn btn-default" onclick="editTanaman(<?= $data['id_tanaman']?>)">
                          <span>Edit</span>
                        </button>
                        <button type="button" class="btn btn-danger" onclick="deleteTanaman(<?= $data['id_tanaman']?>)">
                          <span>Delete</span>
                        </button>
                      </td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
                <?= $pager->links('tanaman', 'pagination'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
                <!-- Modal -->
                <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <form action="#" id="form" class="form-horizontal">
                                <input type="hidden" name="id"/>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Nama User</label>
                                        <div class="col-md">
                                            <input name="nama_tanaman" placeholder="Nama User" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Jenis Tanaman</label>
                                        <div class="col-md">
                                            <input name="jenis_tanaman" placeholder="Jenis Tanaman" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-secondary btn-lg w-100 mt-4 mb-0" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0" onclick="saveTanaman()">Save</button>
                    </div>
                    </div>
                </div>
                </div>
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
                <script>
                    function editTanaman(id) {
                        save_method = 'update';
                        $('#form')[0].reset(); 
                        <?php header('Content-type: application/json'); ?>
                        $.ajax({
                            url : "<?= base_url('dashboard/tanaman/edit')?>/" + id,
                            type: "GET",
                            dataType: "JSON",
                            success: function(respond)
                            {
                                console.log(respond.data);

                                $('[name="id"]').val(respond.data.id_tanaman);
                                $('[name="nama_tanaman"]').val(respond.data.nama_tanaman);
                                $('[name="jenis_tanaman"]').val(respond.data.jenis_tanaman);

                                $('#modalEdit').modal('show');
                                $('.modal-title').text('Edit Tanaman'); 

                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                console.log(jqXHR);
                                alert('Error get data from ajax');
                            }
                        });
                    }

                    function saveTanaman() {
                        var url;
                        if(save_method == 'add') {
                            url = "<?= base_url('dashboard/tanaman/add')?>";
                        } else {
                            url = "<?= base_url('dashboard/tanaman/update')?>";
                        }

                        $.ajax({
                            url : url,
                            type: 'POST',
                            data: $('#form').serialize(),
                            dataType: "JSON",
                            success: function(data){
                                location.reload();
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                alert('Error adding / update data');
                            }
                        });
                    }

                    function deleteTanaman(id) {
                        Swal.fire({
                            title: 'Anda yakin?',
                            text: "Aksi ini tidak dapat dipulihkan!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ya, Hapus!'
                        }).then(function (result) {
                            if (result.value) {
                                $.ajax({
                                    url: "<?= base_url('dashboard/tanaman/delete')?>/"+id,
                                    type: "GET",
                                    dataType: 'JSON',
                                    success: function (data) {
                                        swal.fire({
                                            position: 'top-end',
                                            icon: 'success',
                                            title: 'Tanaman berhasil dihapus!',
                                            showConfirmButton: false,
                                            timer: 2000
                                        });
                                    },
                                    error: function (xhr, ajaxOptions, thrownError) {
                                        swal.fire("!Opps ", "Ada yang salah! coba lagi beberapa saat.", "error");
                                    }
                                });
                            };
                        });
                    }
                </script>
<?= $this->endSection() ?>