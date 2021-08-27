<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <h1>Formulir Satuan</h1>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="section-body">

          <div class="row">
              <div class="col">

                <div class="card">
                  <form class="needs-validation" novalidate="">
                    <div class="card-header text-center">
                      <h4>Berita Acara Penerimaan Barang</h4>
                    </div>

                      <div class="card-body mb-0 pb-0">

                        <a href="#" class="btn btn-secondary mb-2"><i class="fas fa-clipboard-list mx-1"></i>Tabel Satuan</a>

                        <div class="row justify-content-center pb-0 mb-0">
                          <div class="col-md-7">

                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">ID Satuan</label>
                              <div class="col-sm-9">
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
                              <label class="col-sm-3 col-form-label">Satuan</label>
                              <div class="col-sm-9">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fas fa-thumbtack"></i>
                                    </div>
                                  </div>
                                  <input type="text" class="form-control" required placeholder="Masukan Satuan..">
                                  <div class="invalid-feedback">
                                  Masukan Satuan!
                                </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>

                    <div class="card-footer text-center">
                      
                      <a href="#" class="btn btn-success float-left"><i class="fas fa-arrow-circle-left mx-1"></i>Back</a>

                      <button class="btn btn-primary float-right mb-3" type="submit"><i class="fas fa-check-square mx-1"></i>Submit</button>
                      
                      <button class="btn btn-dark float-right mx-1 mb-3" type="reset"><i class="fas fa-eraser mx-1"></i>Reset</button>
                      
                    </div>
                  </form>
                </div>

              </div>
            </div>

          </div>
          <!-- End Body -->

        </section>
      </div>

<?= $this->endSection(); ?>