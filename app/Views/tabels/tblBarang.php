<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <h1>Tabel Barang</h1>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="section-body">

          <!-- Dari Sini -->
            <div class="row">
              <div class="col">
                <div class="card">

                <div class="p-3 ml-3">
                  <button type="button" class="btn btn-success btn-lg mr-1" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-plus-square mr-1"></i>Tambah Barang
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
                      <table class="table table-hover" id="table-barang">
                        <thead class="bg-primary" style="color: white;">
                          <tr>
                            <th class="text-center">No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <!-- <th>Satuan</th> -->
                            <th>Update</th>
                            <th>Delete</th>
                            <th>Details</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php $i = 1; foreach($barang as $br) : ?>
                          <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $br['kode_barang']; ?></td>
                            <td><?= $br['nama_barang']; ?></td>
                            <td><h6 class="position-sticky d-inline"><?= $br['stok']; ?></h6>&nbsp;&nbsp;<?= $br['nama_satuan']; ?></td>
                            <!-- <td></td> -->
                            <td>
                              <a href="/tblbarang/edit/<?= $br['kode_barang']; ?>" class="btn btn-warning"><i class="fas fa-pen-square"></i></a>
                            </td>
                            <td>
                              <form action="/tblbarang/<?= $br['kode_barang']; ?>" method="POST">
                              <?= csrf_field(); ?>
                              <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?')"><i class="fas fa-trash-alt"></i></button>
                              </form>
                            </td>
                            <td>
                              <a href="/tblbarang/detail/<?= $br['kode_barang']; ?>" class="btn btn-success"><i class="fas fa-clipboard"></i></a>
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
                  <form action="tblbarang/save" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
                  <?= csrf_field(); ?>

                    <div class="row justify-content-center">
                      <div class="col">

                        <div class="form-group row">
                          <label for="kodeBarang" class="col col-form-label ml-2 pt-3">Kode Barang</label>
                          <div class="col-8">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <i class="fas fa-key"></i>
                                </div>
                              </div>
                              <input type="text" class="form-control" required placeholder="Masukan Kode Barang.." name="kodeBarang" id="kodeBarang">
                              <div class="invalid-feedback">
                                Masukan Kode Barang!.
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="namaBarang" class="col col-form-label ml-2 pt-3">Nama Barang</label>
                          <div class="col-8">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <i class="fas fa-tag"></i>
                                </div>
                              </div>
                              <input type="text" class="form-control" required placeholder="Masukan Nama Barang.." name="namaBarang" id="namaBarang">
                              <div class="invalid-feedback">
                                Masukan Nama Barang!.
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="stok" class="col col-form-label ml-2 pt-3">Stok Awal</label>
                          <div class="col-8">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <i class="fas fa-cubes"></i>
                                </div>
                              </div>
                              <input type="number" class="form-control" required placeholder="Masukan Stok.." name="stok" id="stok">
                              <div class="invalid-feedback">
                                Masukan Stok!.
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="satuan" class="col col-form-label ml-2 pt-3">Satuan</label>
                          <div class="col-8">
                            <select class="form-control selectric"  name="satuan" id="satuan">
                              <?php foreach($satuan as $st) : ?>
                              <option value="<?= $st['id_satuan']; ?>"><?= $st['nama_satuan']; ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="sampul" class="col col-form-label ml-2 pt-3">Sampul</label>
                          <div class="col-8">
                            <div class="input-group custom-file">
                              <input type="file" class="custom-file-input" id="sampul" required name="sampul" onchange="previewImg()">
                              <label class="custom-file-label" for="sampul">Pilih Gambar..</label>
                              <div class="invalid-feedback mt-2">
                                Pilih Gambar!.
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- End Modal Body -->
                    
                  <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-primary">Tambah Barang</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
        <!-- End Modal -->

      </div>

<?= $this->endSection(); ?>