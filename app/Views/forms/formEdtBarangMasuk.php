<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="main-content">
  <section class="section">

    <!-- Header -->
    <div class="section-header">
      <a href="javascript:window.history.go(-1);" class="btn btn-success"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;
      <h1>Formulir Barang Masuk</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?= base_url(); ?>">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="<?= base_url('tblmasuk'); ?>">Tabel&nbsp;Barang&nbsp;Masuk</a></div>
        <div class="breadcrumb-item">Update</div>
      </div>
    </div>
    <!-- End Header -->

    <!-- Body -->
    <div class="section-body">

      <div class="row">
        <div class="col">

          <div class="card">
            <form action="/tblmasuk/update/<?= $barang_masuk['id_masuk']; ?>" method="POST" class="needs-validation" novalidate="">
              <div class="card-header text-center">
                <h4 class="text-center">Berita Acara Penerimaan Barang [BAPB]</h4>
              </div>

                <div class="card-body mb-0 pb-0">

                  <a href="#" class="btn btn-secondary mb-2"><i class="fas fa-clipboard-list mx-1"></i>Tabel Barang Masuk</a>

                  <div class="row justify-content-center pb-0 mb-0">
                    <div class="col-md-7">
                      <?= csrf_field(); ?>

                      <!-- <div class="form-group row">
                        <label class="col-sm-3 col-form-label">ID Transaksi</label>
                        <div class="col-sm-9">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-key"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control" disabled value="SI-2108250010">
                          </div>
                        </div>
                      </div> -->

                      <div class="form-group row">
                        <label for="bapb" class="col-sm-3 col-form-label">BAPB</label>
                        <div class="col-sm-9">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-window-restore"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control purchase-code" required placeholder="XX-GD-PSP-XX-XX" id="bapb" name="bapb" value="<?= $barang_masuk['bapb']; ?>">
                            <div class="invalid-feedback">
                            Masukan BAPB!
                          </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="tglMasuk" class="col-sm-3 col-form-label">Tanggal Masuk</label>
                        <div class="col-sm-9">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-clock"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control datepicker" required placeholder="Masukan Tanggal.." id="tglMasuk" name="tglMasuk" value="<?= $barang_masuk['tgl_masuk']; ?>">
                            <div class="invalid-feedback">
                            Masukan Tanggal!
                          </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="kodeBarang" class="col-sm-3 col-form-label">Kode Barang</label>
                        <div class="col-sm-9">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-qrcode"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control" required placeholder="Masukan Kode Barang.." id="kodeBarang" name="kodeBarang" value="<?= $barang_masuk['kode_barang']; ?>" disabled>
                            <div class="invalid-feedback">
                            Masukan Kode Barang!
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="jmlMasuk" class="col-sm-3 col-form-label">Jumlah Masuk</label>
                        <div class="col-sm-9">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-window-restore"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control jumlah-si" required placeholder="XX-GD-PSP-XX-XX" id="jmlMasuk" name="jmlMasuk" value="<?= $barang_masuk['jml_masuk']; ?>">
                            <div class="invalid-feedback">
                            Masukan Jumlah!
                          </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="ketMasuk" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                          <div class="input-group">
                            <textarea type="number" class="form-control mb-0" placeholder="Masukan Keterangan.." style="height: 80px;" name="ketMasuk" id="ketMasuk"><?= $barang_masuk['ket_masuk']; ?></textarea>
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

<?= $this->endSection('content'); ?>


<?= $this->section('jsform'); ?>
  <script src="<?= base_url(); ?>/template/assets/js/page/forms-advanced-forms.js"></script>
<?= $this->endSection('jsform'); ?>