<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <h1>Tabel Satuan</h1>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="section-body">

          <!-- Dari Sini -->
            <div class="row">
              <div class="col">
                <div class="card">

                <div class="p-3 ml-3">
                  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-plus-square mx-1"></i>Tambah Satuan
                  </button>
                </div>

                  <div class="card-body">
                    <?php if (session()->getFlashdata('pesan')) : ?>
                      <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                          <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                          <div class="alert-body">
                            <div class="alert-title">Success</div>
                            <?= session()->getFlashData('pesan'); ?>
                          </div>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-satuan">
                        <thead class="bg-primary" style="color: white;">
                          <tr>
                            <th>
                              No
                            </th>
                            <th>Satuan</th>
                            <th>Update</th>
                            <th>Delete</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php $i=1; foreach($satuan as $st) : ?>
                          <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $st['nama_satuan']; ?></td>
                            <td>
                              <a href="/tblsatuan/edit/<?= $st['id_satuan']; ?>" class="btn btn-warning"><i class="fas fa-pen-square"></i></a>
                            </td>
                            <td>
                              <form action="/tblsatuan/<?= $st['id_satuan']; ?>" method="POST">
                              <?= csrf_field(); ?>
                              <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?')"><i class="fas fa-trash-alt"></i></button>
                              </form>
                            </td>
                          </tr>
                          <?php endforeach; ?>
                        </tbody>

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- Sampe Sini -->

            

          </div>
          <!-- End Body -->

        </section>

        <!-- Modal -->
        <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Formulir Tambah Satuan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <!-- Modal Body -->
                  <form action="tblsatuan/save" method="POST" class="needs-validation" novalidate="">
                  <?= csrf_field(); ?>

                    <div class="row justify-content-center">
                      <div class="col">

                        <div class="form-group row">
                          <label class="col col-form-label text-center tengah pt-3" for="idSatuan">ID Satuan</label>
                          <div class="col-8">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <i class="fas fa-key"></i>
                                </div>
                              </div>
                              <input type="text" class="form-control" name="idSatuan" id="idSatuan" disabled value="<?= $st['id_satuan']+1; ?>">
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col col-form-label text-center tengah pt-3" for="namaSatuan">Satuan</label>
                          <div class="col-8">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <i class="fas fa-thumbtack"></i>
                                </div>
                              </div>
                              <input type="text" class="form-control" required placeholder="Masukan Satuan.." name="namaSatuan" id="namaSatuan">
                              <div class="invalid-feedback">
                              Masukan Satuan!
                            </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <!-- End Modal Body -->
                    
                  </div>
                  <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Satuan</button>
                  </div>
                </form>

            </div>
          </div>
        </div>
        <!-- End Modal -->

      </div>

<?= $this->endSection(); ?>