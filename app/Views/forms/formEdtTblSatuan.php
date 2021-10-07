<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <a href="javascript:window.history.go(-1);" class="btn btn-success"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;
            <h1>Formulir Edit Satuan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url(); ?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url('tblsatuan'); ?>">Tabel&nbsp;Satuan</a></div>
              <div class="breadcrumb-item">Update</div>
            </div>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="section-body">

          <div class="row">
              <div class="col">

                <div class="card">
                  <form action="/tblsatuan/update/<?= $satuan['id_satuan']; ?>" method="POST" class="needs-validation" novalidate="">
                    <div class="card-header text-center">
                      <h4>Formulir Edit Satuan</h4>
                    </div>

                      <div class="card-body mb-0 pb-0">

                        <a href="<?= base_url(); ?>/tblsatuan" class="btn btn-secondary mb-2"><i class="fas fa-clipboard-list mx-1"></i>Tabel Satuan</a>

                        <div class="row justify-content-center pb-0 mb-0">
                          <div class="col-md-7">

                            <div class="form-group row">
                              <label for="idSatuan" class="col-sm-3 col-form-label">Id Satuan</label>
                              <div class="col-sm-9">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fas fa-key"></i>
                                    </div>
                                  </div>
                                  <input type="text" class="form-control" required placeholder="Masukan Kode Satuan.." name="idSatuan" id="idSatuan" value="<?= $satuan['id_satuan']; ?>" disabled>
                                </div>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="namaSatuan" class="col-sm-3 col-form-label">Nama Satuan</label>
                              <div class="col-sm-9">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fas fa-tag"></i>
                                    </div>
                                  </div>
                                  <input type="text" class="form-control" required placeholder="Masukan Nama satuan.." name="namaSatuan" id="namaSatuan" value="<?= $satuan['nama_satuan']; ?>">
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                    <div class="card-footer text-center">
                      
                      <a href="javascript:window.history.go(-1);" class="btn btn-success float-left"><i class="fas fa-arrow-circle-left mx-1"></i>Back</a>

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