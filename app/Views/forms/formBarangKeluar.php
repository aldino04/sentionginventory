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
                  <form action="save" method="POST" class="needs-validation" novalidate="">
                    <div class="card-header text-center">
                      <h4 class="text-center">Bon Pemakaian Material/Suku Cadang [BPM]</h4>
                    </div>

                      <div class="card-body mb-0 pb-0">
                      
                        <a href="<?= base_url(); ?>/tblkeluar" class="btn btn-secondary mb-2"><i class="fas fa-clipboard-list mx-1"></i>Tabel Barang Keluar</a>

                        <div class="row justify-content-center pb-0 mb-0">
                          <div class="col-md-7">

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
                                  <input type="text" class="form-control purchase-code" required placeholder="XX-GD-PSP-XX-XX" id="bpm" name="bpm">
                                  <div class="invalid-feedback">
                                  Masukan BPM!
                                </div>
                                </div>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="tglKeluar" class="col-sm-3 col-form-label">Tanggal</label>
                              <div class="col-sm-9">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fas fa-clock"></i>
                                    </div>
                                  </div>
                                  <input type="text" class="form-control datepicker" required placeholder="Masukan Tanggal.." id="tglkeluar" name="tglKeluar">
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
                                  <a href="#"><div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fas fa-qrcode"></i>
                                    </div>
                                  </div></a>
                                  <input type="text" class="form-control" required placeholder="Masukan Kode Barang.." id="kodeBarang" name="kodeBarang">
                                  <div class="invalid-feedback">
                                  Masukan Kode Barang!
                                </div>
                                <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
                                  <i class="fa fa-search"></i>
                                </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group row justify-content-center mb-0 pb-0">
                          <div class="col-sm-3 col-md-3 col-lg-3 col-form-label">
                            <div class="form-group">
                              <label for="namaBarang">Nama Barang</label>
                              <input type="text" class="form-control" required="" disabled placeholder="Masukan Nama Barang.." id="namaBarang" name="namaBarang">
                            </div>
                          </div>

                          <div class="col-sm-3 col-md-3 col-lg-3 col-form-label">
                            <div class="form-group">
                              <label for="jmlKeluar">Jumlah</label>
                              <input type="text" class="form-control jumlah-si" required="" placeholder="Masukan Jumlah.." id="jmlKeluar" name="jmlKeluar">
                              <div class="invalid-feedback">
                                Masukan Jumlah!.
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-3 col-md-3 col-lg-3 col-form-label">
                            <div class="form-group">
                              <label for="satuan">Satuan</label>
                              <input type="text" class="form-control" required="" disabled placeholder="Masukan Satuan.." id="satuan" name="satuan">
                            </div>
                          </div>
                        </div>

                        <div class="form-group row justify-content-center mb-0 pb-0">
                          <div class="col-md-9 col-lg-9">
                            <div class="form-group">
                              <label for="ketMasuk">Keterangan</label>
                              <textarea type="number" class="form-control" placeholder="Masukan Keterangan.." style="height: 80px;" id="ketKeluar" name="ketKeluar"></textarea>
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

        <!-- Modal -->
        <div class="modal fade" tabindex="-1" role="dialog" id="modal-item">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Select Product item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <!-- Modal Body -->
                <div class="table-responsive-sm">
                  <table class="table table-striped" id="table-barang2">
                    <thead class="bg-primary" style="color: white;">
                      <tr class="text center">
                        <!-- <th>No</th> -->
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Stok</th>
                        <th>Satuan</th>
                        <th>Select</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php $i = 1; foreach($barang as $br) : ?>
                      <tr>
                        <!-- <td><?= $i++; ?></td> -->
                        <td><?= $br['kode_barang']; ?></td>
                        <td><?= $br['nama_barang']; ?></td>
                        <td><?= $br['stok']; ?></td>
                        <td><?= $br['nama_satuan']; ?></td>
                        <td>
                          <button class="btn btn-success" id="select"
                          data-kode="<?= $br['kode_barang']; ?>" 
                          data-nama="<?= $br['nama_barang']; ?>" 
                          data-satuan="<?= $br['nama_satuan']; ?>"
                          >
                            <i class="fas fa-check-square"></i>
                          </button>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>

                  </table>
                </div>
                <!-- End Modal Body -->
                    
                  </div>
                  <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </form>

            </div>
          </div>
        </div>
        <!-- End Modal -->
      </div>

<script>
  $(document).ready(function () {
  $(document).on('click', '#select', function () {
    var kode_barang = $(this).data('kode');
    var nama_barang = $(this).data('nama');
    var satuan = $(this).data('satuan');
    $('#kodeBarang').val(kode_barang);
    $('#namaBarang').val(nama_barang);
    $('#satuan').val(satuan);
    $('#modal-item').modal('hide');
  })
})
</script>

<?= $this->endSection(); ?>

<?= $this->section('jsform'); ?>
  <script src="<?= base_url(); ?>/template/assets/js/page/forms-advanced-forms.js"></script>
<?= $this->endSection('jsform'); ?>