<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <h1>Formulir Barang Masuk</h1>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="section-body">

            <div class="row">
              <div class="col">

                <div class="card">
                  <form class="needs-validation" novalidate="">
                    <div class="card-header text-center">
                      <h4 class="text-center">Berita Acara Penerimaan Barang</h4>
                    </div>

                      <div class="card-body mb-0 pb-0">

                        <a href="#" class="btn btn-secondary mb-2"><i class="fas fa-clipboard-list mx-1"></i>Tabel Barang Masuk</a>

                        <div class="row justify-content-center pb-0 mb-0">
                          <div class="col-md-7">

                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">ID Transaksi</label>
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
                              <label class="col-sm-3 col-form-label">Tanggal</label>
                              <div class="col-sm-9">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fas fa-clock"></i>
                                    </div>
                                  </div>
                                  <input type="text" class="form-control datepicker" required placeholder="Masukan Tanggal..">
                                  <div class="invalid-feedback">
                                  Masukan Tanggal!
                                </div>
                                </div>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">BAPB</label>
                              <div class="col-sm-9">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fas fa-window-restore"></i>
                                    </div>
                                  </div>
                                  <input type="text" class="form-control purchase-code" required placeholder="XX-GD-PSP-XX-XX">
                                  <div class="invalid-feedback">
                                  Masukan BAPB!
                                </div>
                                </div>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Kode Barang</label>
                              <div class="col-sm-9">
                                <div class="input-group">
                                  <a href="#"><div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fas fa-qrcode"></i>
                                    </div>
                                  </div></a>
                                  <input type="text" class="form-control" required placeholder="Masukan Kode Barang..">
                                  <div class="invalid-feedback">
                                  Masukan Kode Barang!
                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group row justify-content-center mb-0 pb-0">
                          <div class="col-sm-3 col-md-3 col-lg-3 col-form-label">
                            <div class="form-group">
                              <label>Nama Barang</label>
                              <input type="text" class="form-control" required="" disabled placeholder="BBM Solar">
                            </div>
                          </div>

                          <div class="col-sm-3 col-md-3 col-lg-3 col-form-label">
                            <div class="form-group">
                              <label>Satuan</label>
                              <input type="text" class="form-control" required="" disabled placeholder="Liter">
                            </div>
                          </div>

                          <div class="col-sm-3 col-md-3 col-lg-3 col-form-label">
                            <div class="form-group">
                              <label>Jumlah</label>
                              <input type="text" class="form-control jumlah-si" required="" placeholder="Masukan Jumlah..">
                              <div class="invalid-feedback">
                                Masukan Jumlah!.
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group row justify-content-center mb-0 pb-0">
                          <div class="col-md-9 col-lg-9">
                            <div class="form-group">
                              <label>Keterangan</label>
                              <textarea type="number" class="form-control mb-0" placeholder="Masukan Keterangan.." style="height: 80px;"></textarea>
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

<?= $this->endSection('content'); ?>

<?= $this->section('jsform'); ?>
  <script src="<?= base_url(); ?>/template/assets/js/page/forms-advanced-forms.js"></script>
<?= $this->endSection('jsform'); ?>