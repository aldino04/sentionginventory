<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <a href="javascript:window.history.go(-1);" class="btn btn-success"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;
            <h1>Tabel Barang</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url(); ?>">Dashboard</a></div>
              <div class="breadcrumb-item">Tabel&nbsp;Barang</div>
            </div>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="section-body">

          <!-- Dari Sini -->
            <div class="row">
              <div class="col">
                <div class="card">

                <?php if( in_groups('admin') ) : ?>
                <div class="p-3 ml-3">
                  <button type="button" class="btn btn-success btn-lg mr-1" data-toggle="modal" data-target="#tambahBarang">
                    <i class="fas fa-plus-square mr-1"></i>Tambah Barang
                  </button>
                </div>
                <?php endif; ?>

                <div class="card-body">

                  <?php if (session()->getFlashdata('unique')) : ?>
                      <div class="alert alert-danger alert-has-icon alert-dismissible show fade">
                          <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                          <div class="alert-body">
                            <div class="alert-title">Failed</div>
                            <?= session()->getFlashData('unique'); ?>
                            <?= $validation->listErrors(); ?>
                          </div>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    <?php endif; ?>

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
                      <table class="table table-hover" id="tableNormal">
                        <thead class="bg-primary text-center" style="color: white;">
                          <tr>
                            <th class="text-center">No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Satuan</th>

                            <?php if (in_groups('admin')) : ?>
                            <th>Delete</th>
                            <?php endif; ?>

                            <th>Details</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php $i = 1; foreach($barang as $br) : ?>
                          <tr>
                            <td class="text-center align-middle"><?= $i++; ?></td>
                            <td class="text-center align-middle"><?= $br['kode_barang']; ?></td>
                            <td class=" align-middle"><?= $br['nama_barang']; ?></td>
                            <td class="text-center align-middle"><h6 class="position-sticky d-inline"><?= $br['stok']; ?></h6></td>
                            <td class="text-center align-middle"><?= $br['nama_satuan']; ?></td>

                            <?php if (in_groups('admin')) : ?>
                            <td class="text-center align-middle">
                              <form action="/tblbarang/<?= $br['kode_barang']; ?>" method="POST">
                              <?= csrf_field(); ?>
                              <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?')"><i class="fas fa-trash-alt"></i></button>
                              </form>
                            </td>
                            <?php endif; ?>

                            <td class="text-center align-middle">
                              <a href="/tblbarang/detail/<?= $br['kode_barang']; ?>" class="btn btn-success"><i class="fas fa-bars"></i></a>
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
        <div class="modal fade" tabindex="-1" role="dialog" id="tambahBarang">
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
                            <div class="input-group justify-content-center mt-2">
                              <img src="/template/assets/img/products/product-1.jpg" class="img-thumbnail img-preview" style="height: fit-content; width: 200px;">
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

<?= $this->section('fotoBarang'); ?>
<script>
  function previewImg() {
    const sampul = document.querySelector('#sampul');
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
<?= $this->endSection('fotoBarang'); ?>