<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <a href="javascript:window.history.go(-1);" class="btn btn-success"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;
            <h1>Detail Barang &mdash; <?= $barang['nama_barang']; ?></h1>
          </div>
          <!-- End Header -->

<!-- Body -->
<div class="section-body">
  <div class="card mb-3">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?= base_url(); ?>/img/barang/<?= $barang['sampul']; ?>" class="card-img img-thumbnail" alt="..." style="height:350px; width:350px;">
      </div>
      <div class="col-md-8">  
        <div class="card-body">
          <h5 class="card-tittle my-3 ml-4">Sentiong &mdash; Inventory</h5>
          <table class="table table-sm col-md-8">
            <tbody>
              <tr>
                <td>Nama barang</td>
                <td class="font-weight-bold">:</td>
                <td><h5 class="text-uppercase"><?= $barang['nama_barang']; ?></h5></td>
              </tr>
              
              <tr>
                <td>Kode barang</td>
                <td class="font-weight-bold">:</td>
                <td><h5 class="font-weight-light"><?= $barang['kode_barang']; ?></h5></td>
              </tr>
              
              <tr>
                <td>Stok barang</td>
                <td class="font-weight-bold">:</td>
                <td><h4 class="d-inline"><?= $barang['stok']; ?>&nbsp;</h4><?= $barang['nama_satuan']; ?></td>
              </tr>
            </tbody>
          </table>
          <a href="/tblbarang/edit/<?= $barang['kode_barang']; ?>" class="btn btn-success"><i class="fas fa-pen-square"></i> Update</a>
          <a href="<?= base_url(); ?>/tblmasuk/form" class="btn btn-primary"><i class="fas fa-plus-square"></i> Masuk</a>
          <a href="<?= base_url(); ?>/tblkeluar/form" class="btn btn-warning"><i class="fas fa-minus-square"></i> Keluar</a>
          <p class="mt-3"><a href="<?= base_url(); ?>/tblbarang">Kembali ke tabel barang</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h5 class="text-center">Transaksi Terakhir</h5>
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="tableNormal">
              <thead class="bg-primary text-center" style="color: white;">
                <tr>
                  <th class="text-center">No</th>
                  <th>Tanggal</th>
                  <th>BAPB</th>
                  <th>BPM</th>
                  <!-- <th>Kode Barang</th>
                  <th>Nama Barang</th> -->
                  <th>Masuk</th>
                  <th>Keluar</th>
                  <th>Keterangan</th>
                  <th>Details</th>
                </tr>
              </thead>

              <tbody>
                <?php $i = 1; foreach($result as $apg) : ?>
                <tr>
                  <td class="text-center"><?= $i++; ?></td>
                  <td class="text-center"><?= $apg['tanggal']; ?></td>
                  <td class="text-center"><?= $apg['bapb']; ?></td>
                  <td class="text-center"><?= $apg['bpm']; ?></td>
                  <!-- <td class="text-center"><?= $apg['kode_barang']; ?></td>
                  <td><?= $apg['nama_barang']; ?></td> -->
                  <td class="text-center"><?= $apg['masuk']; ?>
                  <?php if($apg['masuk'] != "") : ?>
                    <?= $apg['satuan']; ?>
                  <?php endif; ?>
                  </td>
                  <td class="text-center"><?= $apg['keluar']; ?>
                  <?php if($apg['keluar'] != "") : ?>
                    <?= $apg['satuan']; ?>
                  <?php endif; ?>
                  </td>
                  <td><?= $apg['keterangan']; ?></td>
                  <td class="text-center">
                    <?php if ($apg['keluar'] != "") : ?>
                      <a href="/tblkeluar/detail/<?= $apg['id_keluar']; ?>" class="btn btn-success"><i class="fas fa-clipboard"></i></a>
                    <?php endif; ?>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>

            </table>
          </div>
        </div>
  </div>

</div>
<!-- End Body -->

        </section>
      </div>

<?= $this->endSection(); ?>