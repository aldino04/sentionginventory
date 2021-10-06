<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <a href="javascript:window.history.go(-1);" class="btn btn-success"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;
            <h1>Tabel Barang Masuk</h1>
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
                  <a href="<?= base_url(); ?>/masuk" class="btn btn-primary btn-lg"><i class="fas fa-plus-square mr-1"></i>Barang Masuk</a>
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
                            <th>BAPB</th>
                            <th>Tanggal Masuk</th>
                            <th>Nama Barang</th>
                            <th>Masuk</th>
                            <th>Satuan</th>
                            <!-- <th>Keterangan</th> -->
                            <th>Update</th>
                            <?php if(in_groups('admin')) : ?>
                            <th>Delete</th>
                            <?php endif; ?>
                          </tr>
                        </thead>

                        <tbody class="text-center">
                          <?php $i = 1 ; foreach($barang_masuk as $msk) : ?>
                          <tr>
                            <td class="align-middle"><?= $i++; ?></td>
                            <td class="align-middle"><?= $msk['bapb']; ?></td>
                            <td class="align-middle"><?= $msk['tgl_masuk']; ?></td>
                            <td class="align-middle"><?= $msk['nama_barang']; ?></td>
                            <td class="align-middle"><?= $msk['jml_masuk']; ?></td>
                            <td class="align-middle"><?= $msk['nama_satuan']; ?></td>
                            <!-- <td><?= $msk['ket_masuk']; ?></td> -->
                            <td class="align-middle">
                              <a href="/tblmasuk/edit/<?= $msk['id_masuk']; ?>" class="btn btn-warning"><i class="fas fa-pen-square"></i></a>
                            </td>
                            <?php if (in_groups('admin')) : ?>
                            <td class="align-middle">
                              <form action="/tblmasuk/<?= $msk['id_masuk']; ?>" method="POST">
                              <?= csrf_field(); ?>
                              <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?')"><i class="fas fa-trash-alt"></i></button>
                              </form>
                            </td>
                            <?php endif; ?>
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