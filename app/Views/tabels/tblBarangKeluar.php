<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <h1>Tabel Barang Keluar</h1>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="section-body">

          <!-- Dari Sini -->
            <div class="row">
              <div class="col">
                <div class="card">

                <div class="p-3 ml-3">
                  <a href="<?= base_url(); ?>/tblkeluar/form" class="btn btn-danger btn-lg"><i class="fas fa-minus-square mr-1"></i>Barang keluar</a>
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
                            <th class="text-center">BPM</th>
                            <th>Tanggal Keluar</th>
                            <th>Nama Barang</th>
                            <th>Keluar</th>
                            <th>Satuan</th>
                            <th>Keterangan</th>
                            <th>Update</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php $i = 1; foreach($barang_keluar as $klr) : ?>
                          <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $klr['bpm']; ?></td>
                            <td><?= $klr['tgl_keluar']; ?></td>
                            <td><?= $klr['nama_barang']; ?></td>
                            <td><?= $klr['jml_keluar']; ?></td>
                            <td><?= $klr['nama_satuan']; ?></td>
                            <td><?= $klr['ket_keluar']; ?></td>
                            <td>
                              <a href="/tblkeluar/edit/<?= $klr['id_keluar']; ?>" class="btn btn-warning"><i class="fas fa-pen-square"></i></a>
                            </td>
                            <td>
                              <form action="/tblkeluar/<?= $klr['id_keluar']; ?>" method="POST">
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