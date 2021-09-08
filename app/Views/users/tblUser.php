<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <h1>Tabel User</h1>
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
                    <i class="fas fa-plus-square mx-1"></i>Tambah User
                  </button>
                </div>

                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-user">
                        <thead class="bg-primary" style="color: white;">
                          <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Role User</th>
                            <th>Update</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td>1</td>
                            <td>Sentiong Project</td>
                            <td>Administrator</td>
                            <td>
                              <a href="#" class="btn btn-warning"><i class="fas fa-pen-square"></i></a>
                            </td>
                            <td>
                              <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Satria Aldino</td>
                            <td>Administrator</td>
                            <td>
                              <a href="#" class="btn btn-warning"><i class="fas fa-pen-square"></i></a>
                            </td>
                            <td>
                              <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Orang Keuangan</td>
                            <td>User Biasa</td>
                            <td>
                              <a href="#" class="btn btn-warning"><i class="fas fa-pen-square"></i></a>
                            </td>
                            <td>
                              <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Orang Gudang</td>
                          <td>User Biasa</td>
                            <td>
                              <a href="#" class="btn btn-warning"><i class="fas fa-pen-square"></i></a>
                            </td>
                            <td>
                              <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                          </tr>
                          
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
                  <form class="needs-validation" novalidate="">

                    <div class="row text-left">
                      <div class="col">

                        <div class="form-group row">
                          <label class="col col-form-label pt-3">ID User</label>
                          <div class="col-8">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <i class="fas fa-key"></i>
                                </div>
                              </div>
                              <input type="text" class="form-control" disabled placeholder="SI-2108250010">
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col col-form-label pt-3">Username</label>
                          <div class="col-8">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <i class="fas fa-thumbtack"></i>
                                </div>
                              </div>
                              <input type="text" class="form-control" required placeholder="Masukan Username..">
                              <div class="invalid-feedback">
                              Masukan User!
                            </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col col-form-label pt-3">Password</label>
                          <div class="col-8">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <i class="fas fa-lock"></i>
                                </div>
                              </div>
                              <input type="password" class="form-control" required placeholder="Masukan Password..">
                              <div class="invalid-feedback">
                              Masukan Password!
                            </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col col-form-label pt-3">Konfirmasi Password</label>
                          <div class="col-8">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <i class="fas fa-lock"></i>
                                </div>
                              </div>
                              <input type="password" class="form-control" required placeholder="Konfirmasi Password..">
                              <div class="invalid-feedback">
                              Masukan Password!
                            </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col col-form-label pt-3">Role User</label>
                          <div class="col-8">
                            <select class="form-control selectric">
                            <option>Administrator</option>
                            <option>User Biasa</option>
                          </select>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- End Modal Body -->
                  
                  <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah User</button>
                  </div>
                </form>
                
            </div>
          </div>
        </div>
        <!-- End Modal -->

      </div>

<?= $this->endSection(); ?>