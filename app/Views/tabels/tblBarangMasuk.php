<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <h1>Tabel Barang Masuk</h1>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="section-body">

          <!-- Dari Sini -->
            <div class="row">
              <div class="col">
                <div class="card">

                <div class="p-3 ml-3">
                  <a href="<?= base_url(); ?>/tblmasuk/form" class="btn btn-primary btn-lg"><i class="fas fa-plus-square mr-1"></i>Barang Masuk</a>
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
                      <table class="table table-striped" id="table-1">
                        <thead class="bg-primary" style="color: white;">
                          <tr>
                            <th class="text-center">No</th>
                            <th class="text center">BAPB</th>
                            <th>Tanggal Masuk</th>
                            <th>Nama Barang</th>
                            <th>Masuk</th>
                            <th>Satuan</th>
                            <th>Keterangan</th>
                            <th>Update</th>
                            <th>Delete</th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php $i = 1 ; foreach($barang_masuk as $msk) : ?>
                          <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $msk['bapb']; ?></td>
                            <td><?= $msk['tgl_masuk']; ?></td>
                            <td><?= $msk['nama_barang']; ?></td>
                            <td><?= $msk['jml_masuk']; ?></td>
                            <td><?= $msk['nama_satuan']; ?></td>
                            <td><?= $msk['ket_masuk']; ?></td>
                            <td>
                              <a href="/tblmasuk/edit/<?= $msk['id_masuk']; ?>" class="btn btn-warning"><i class="fas fa-pen-square"></i></a>
                            </td>
                            <td>
                              <form action="/tblmasuk/<?= $msk['id_masuk']; ?>" method="POST">
                              <?= csrf_field(); ?>
                              <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?')"><i class="fas fa-trash-alt"></i></button>
                              </form>
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
      </div>

<?= $this->endSection(); ?>