<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Pupuk Table</h6>
                <button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Pupuk
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
                        <h5 class="modal-title" id="exampleModalLabel">Pupuk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?= base_url('dashboard/pupukobat/add')?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nama_pupuk">Nama Pupuk</label>
                                <input type="text" class="form-control" name="nama_pupuk" autocomplete="Nama Pupuk" placeholder="Nama Pupuk">
                            </div>
                            <div class="form-group">
                                <label for="jenis_pupuk">Jenis Pupuk</label>
                                <input type="jenis_pupuk" class="form-control" name="jenis_pupuk" placeholder="Jenis Pupuk">
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label">Foto Pupuk</label>
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
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pupuk</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Pupuk</th>
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
                        <span class="text-secondary text-xs font-weight-bold"><?= $data['nama_pupuk'] ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $data['jenis_pupuk'] ?></span>
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
                        <button type="button" class="btn btn-default" onclick="editPupuk(<?= $data['id_pupuk']?>)">
                          <span>Edit</span>
                        </button>
                        <button type="button" class="btn btn-danger" onclick="deletePupuk(<?= $data['id_pupuk']?>)">
                          <span>Delete</span>
                        </button>
                      </td>
                    </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
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
                                        <label class="control-label col-md-3">Nama Pupuk</label>
                                        <div class="col-md">
                                            <input name="nama_pupuk" placeholder="Nama Pupuk" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Jenis Pupuk</label>
                                        <div class="col-md">
                                            <input name="jenis_pupuk" placeholder="Jenis Pupuk" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                            </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-secondary btn-lg w-100 mt-4 mb-0" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0" onclick="savePupuk()">Save</button>
                    </div>
                    </div>
                </div>
                </div>
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
                <script>
                    function editPupuk(id) {
                        save_method = 'update';
                        $('#form')[0].reset(); 
                        <?php header('Content-type: application/json'); ?>
                        $.ajax({
                            url : "<?= base_url('dashboard/pupukobat/edit')?>/" + id,
                            type: "GET",
                            dataType: "JSON",
                            success: function(respond)
                            {
                                console.log(respond.data);

                                $('[name="id"]').val(respond.data.id_pupuk);
                                $('[name="nama_pupuk"]').val(respond.data.nama_pupuk);
                                $('[name="jenis_pupuk"]').val(respond.data.jenis_pupuk);

                                $('#modalEdit').modal('show');
                                $('.modal-title').text('Edit Pupuk'); 

                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                console.log(jqXHR);
                                alert('Error get data from ajax');
                            }
                        });
                    }

                    function savePupuk() {
                        var url;
                        if(save_method == 'add') {
                            url = "<?= base_url('dashboard/pupukobat/add')?>";
                        } else {
                            url = "<?= base_url('dashboard/pupukobat/update')?>";
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

                    function deletePupuk(id) {
                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, delete it!'
                        }).then(function (result) {
                            if (result.value) {
                                $.ajax({
                                    url: "<?= base_url('dashboard/pupukobat/delete')?>/"+id,
                                    type: "GET",
                                    dataType: 'JSON',
                                    success: function (data) {
                                        swal.fire({
                                            position: 'top-end',
                                            icon: 'success',
                                            title: 'Pupuk  deleted successfully',
                                            showConfirmButton: false,
                                            timer: 2000
                                        });
                                    },
                                    error: function (xhr, ajaxOptions, thrownError) {
                                        swal.fire("!Opps ", "Something went wrong, try again later", "error");
                                    }
                                });
                            };
                        });
                    }
                </script>
<?= $this->endSection() ?>