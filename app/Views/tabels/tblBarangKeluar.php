<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <a href="javascript:window.history.go(-1);" class="btn btn-success"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;
            <h1>Tabel Barang Keluar</h1>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="section-body">

          <!-- Dari Sini -->
            <div class="row">
              <div class="col">
                <div class="card">

                <?php if (has_permission('transaksi')) : ?>
                <div class="p-3 ml-3">
                  <a href="<?= base_url(); ?>/keluar" class="btn btn-warning btn-lg"><i class="fas fa-minus-square mr-1"></i>Barang keluar</a>
                </div>
                <?php endif; ?>

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
                      <table class="table table-hover" id="tableNormal">
                        <thead class="bg-primary text-center" style="color: white;">
                          <tr>
                            <th>No</th>
                            <th>BPM</th>
                            <th>Tanggal Keluar</th>
                            <th>Nama Barang</th>
                            <th>Keluar</th>
                            <?php if (in_groups('admin')) : ?>
                            <th>Delete</th>
                            <?php endif; ?>
                            <th>Details</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">

                        <?php $i = 1; foreach($barang_keluar as $klr) : ?>
                          <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $klr['bpm']; ?></td>
                            <td><?= $klr['tgl_keluar']; ?></td>
                            <td><?= $klr['nama_barang']; ?></td>
                            <td><?= $klr['jml_keluar']; ?> <?= $klr['nama_satuan']; ?></td>
                            <?php if (in_groups('admin')) : ?>
                            <td>
                              <form action="/tblkeluar/<?= $klr['id_keluar']; ?>" method="POST">
                              <?= csrf_field(); ?>
                              <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?')"><i class="fas fa-trash-alt"></i></button>
                              </form>
                            </td>
                            <?php endif; ?>
                            <td>
                              <a href="/tblkeluar/detail/<?= $klr['id_keluar']; ?>" class="btn btn-success"><i class="fas fa-clipboard"></i></a>
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