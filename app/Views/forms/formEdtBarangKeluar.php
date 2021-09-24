<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="main-content">
  <section class="section">

    <!-- Header -->
    <div class="section-header">
      <h1>Formulir Barang Keluar</h1>
    </div>
    <!-- End Header -->

    <!-- Body -->
    <div class="section-body">

      <div class="row">
        <div class="col">

          <div class="card">
            <form action="/tblkeluar/update/<?= $barang_keluar['id_keluar']; ?>" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
              <div class="card-header text-center">
                <h4 class="text-center">Berita Acara Penerimaan Barang [BAPB]</h4>
              </div>

                <div class="card-body mb-0 pb-0">

                  <a href="<?= base_url(); ?>/tblkeluar" class="btn btn-secondary mb-2"><i class="fas fa-clipboard-list mx-1"></i>Tabel Barang Keluar</a>

                  <div class="row justify-content-center pb-0 mb-0">
                    <div class="col-md-7">
                      <?= csrf_field(); ?>

                      <input type="hidden" name="sampulLama" value="<?= $barang_keluar['fotoKeluar']; ?>">

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
                        <label for="bpm" class="col-sm-3 col-form-label">BPM</label>
                        <div class="col-sm-9">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-window-restore"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control purchase-code" required placeholder="XX-GD-PSP-XX-XX" id="bpm" name="bpm" value="<?= $barang_keluar['bpm']; ?>">
                            <div class="invalid-feedback">
                            Masukan BPM!
                          </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="tglKeluar" class="col-sm-3 col-form-label">Tanggal Keluar</label>
                        <div class="col-sm-9">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-clock"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control datepicker" required placeholder="Masukan Tanggal.." id="tglKeluar" name="tglKeluar" value="<?= $barang_keluar['tgl_keluar']; ?>">
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
                            <input type="text" class="form-control" required placeholder="Masukan Kode Barang.." id="kodeBarang" name="kodeBarang" value="<?= $barang_keluar['kode_barang']; ?>" disabled>
                            <div class="invalid-feedback">
                            Masukan Kode Barang!
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="form-group row">
                        <label for="JmlKeluar" class="col-sm-3 col-form-label">Jumlah Keluar</label>
                        <div class="col-sm-9">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-window-restore"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control jumlah-si" required placeholder="XX-GD-PSP-XX-XX" id="jmlKeluar" name="jmlKeluar" value="<?= $barang_keluar['jml_keluar']; ?>">
                            <div class="invalid-feedback">
                            Masukan Jumlah!
                          </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="ketKeluar" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                          <div class="input-group">
                            <textarea type="number" class="form-control mb-0" placeholder="Masukan Keterangan.." style="height: 80px;" name="ketKeluar" id="ketKeluar"><?= $barang_keluar['ket_keluar']; ?></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="fotoKeluar" class="col-sm-3 col-form-label">Foto Barang Keluar</label>
                        <div class="col-sm-9">
                          <div class="input-group custom-file">
                            <input type="file" class="custom-file-input" id="fotoKeluar" name="fotoKeluar" onchange="previewImg()">
                            <label class="custom-file-label" for="fotoKeluar"><?= $barang_keluar['fotoKeluar']; ?></label>
                            <div class="invalid-feedback">
                            Masukan Gambar!
                            </div>
                          </div>
                          <div class="input-group justify-content-center mt-2">
                          <img src="/img/barangKeluar/<?= $barang_keluar['fotoKeluar']; ?>" class="img-thumbnail img-preview" style=" width:fit-content">
                        </div>
                        </div>
                          
                        
                      </div>

                    </div>
                  </div>

                  <!-- <div class="form-group row justify-content-center mb-0 pb-0">
                    <div class="col-sm-3 col-md-3 col-lg-3 col-form-label">
                      <div class="form-group">
                        <label for="namaBarang">Nama Barang</label>
                        <input type="text" class="form-control" required="" placeholder="Masukan Nama Barang.." name="namaBarang" id="namaBarang" disabled>
                      </div>
                    </div> -->

                    <!-- <div class="col-sm-3 col-md-3 col-lg-3 col-form-label">
                      <div class="form-group">
                        <label for="jmlMasuk">Jumlah</label>
                        <input type="text" class="form-control jumlah-si" required="" placeholder="Masukan Jumlah.." name="jmlMasuk" id="jmlMasuk">
                        <div class="invalid-feedback">
                          Masukan Jumlah!.
                        </div>
                      </div>
                    </div> -->

                    <!-- <div class="col-sm-3 col-md-3 col-lg-3 col-form-label">
                      <div class="form-group">
                        <label for="satuan">Satuan</label>

                        <input type="text" class="form-control" required="" placeholder="Masukan Satuan.." name="satuan" id="satuan" disabled>
                      </div>
                    </div> -->
                    
                  <!-- </div> -->

                  <!-- <div class="form-group row justify-content-center mb-0 pb-0">
                    <div class="col-md-9 col-lg-9">
                      <div class="form-group row">
                        <label for="ketMasuk">Keterangan</label>
                        <textarea type="number" class="form-control mb-0" placeholder="Masukan Keterangan.." style="height: 80px;" name="ketMasuk" id="ketMasuk"></textarea>
                      </div>
                    </div>
                  </div> -->

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



<?= $this->section('fotoBarangKeluar'); ?>
<script>
  function previewImg() {
    const sampul = document.querySelector('#fotoKeluar');
    const sampulLabel = document.querySelector('.custom-file-label');
    const imgPreview = document.querySelector('.img-preview');

    sampulLabel.textContent = sampul.files[0].name;

    const fileSampul = new FileReader();
    fileSampul.readAsDataURL(sampul.files[0]);

    fileSampul.onload = function(e) {
      imgPreview.src = e.target.result;
    }
  }
</script>
<?= $this->endSection('fotoBarangKeluar'); ?>



<?= $this->section('jsform'); ?>
  <script src="<?= base_url(); ?>/template/assets/js/page/forms-advanced-forms.js"></script>
<?= $this->endSection('jsform'); ?>