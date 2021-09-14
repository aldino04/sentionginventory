<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <h1>Formulir Edit Barang</h1>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="section-body">

          <div class="row">
              <div class="col">

                <div class="card">
                  <form action="/tblbarang/update/<?= $barang['id_barang']; ?>" method="POST" class="needs-validation" novalidate="">
                    <div class="card-header text-center">
                      <h4>Formulir Edit Barang</h4>
                    </div>

                      <div class="card-body mb-0 pb-0">

                        <a href="<?= base_url(); ?>/tblbarang" class="btn btn-secondary mb-2"><i class="fas fa-clipboard-list mx-1"></i>Tabel Barang</a>

                        <div class="row justify-content-center pb-0 mb-0">
                          <div class="col-md-7">

                            <div class="form-group row">
                              <label for="kodeBarang" class="col-sm-3 col-form-label">Kode Barang</label>
                              <div class="col-sm-9">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fas fa-key"></i>
                                    </div>
                                  </div>
                                  <input type="text" class="form-control" required placeholder="Masukan Kode Barang.." name="kodeBarang" id="kodeBarang" value="<?= $barang['kode_barang']; ?>">
                                </div>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="namaBarang" class="col-sm-3 col-form-label">Nama Barang</label>
                              <div class="col-sm-9">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fas fa-tag"></i>
                                    </div>
                                  </div>
                                  <input type="text" class="form-control" required placeholder="Masukan Nama Barang.." name="namaBarang" id="namaBarang" value="<?= $barang['nama_barang']; ?>">
                                </div>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="stok" class="col-sm-3 col-form-label">Stok Awal</label>
                              <div class="col-sm-9">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fas fa-cubes"></i>
                                    </div>
                                  </div>
                                  <input type="number" class="form-control" required placeholder="Masukan Stok Barang.." name="stok" id="stok" value="<?= $barang['stok']; ?>">
                                </div>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="satuan" class="col-sm-3 col-form-label">Satuan</label>
                              <div class="col-sm-9">
                                <select class="form-control selectric" name="satuan" id="satuan">
                                <?php foreach($satuan as $st) : ?>
                                  <?php if($st['id_satuan'] == $barang['id_satuan']) : ?>
                                    <option value="<?= $st['id_satuan']; ?>" selected><?= $st['nama_satuan']; ?></option>
                                  <?php else : ?>
                                    <option value="<?= $st['id_satuan']; ?>"><?= $st['nama_satuan']; ?></option>
                                  <?php endif; ?>
                                <?php endforeach; ?>
                              </select>
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