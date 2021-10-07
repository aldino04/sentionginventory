<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <a href="javascript:window.history.go(-1);" class="btn btn-success"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;
            <h1>Keluar &mdash; <?= $barang_keluar['nama_barang']; ?> [Stok : <?= $barang_keluar['stok']; ?>]</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url(); ?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url('tblkeluar'); ?>">Tabel&nbsp;Barang&nbsp;Keluar</a></div>
              <div class="breadcrumb-item">Detail</div>
            </div>
          </div>
          <!-- End Header -->

<!-- Body -->
<div class="section-body">
  <div class="card mb-3">
    <div class="row no-gutters">
      <div class="col-md-4 card-img">
        <img src="<?= base_url(); ?>/img/barangKeluar/<?= $barang_keluar['fotoKeluar']; ?>" class="img-thumbnail" alt="..." style="height: 400px; width:auto;">
      </div>
      <div class="col-md-8 float-left">  
        <div class="card-body">
          <h5 class="card-tittle my-3">Material Keluar</h5>
          <table class="table table-sm col-md-9">
            <tbody>
              <tr>
                <td>Bon Pemakaian material</td>
                <td class="font-weight-bold">:</td>
                <td><h6 class="font-weight-light"><?= $barang_keluar['bpm']; ?></h6></td>
              </tr>

              <tr>
                <td>Nama barang</td>
                <td class="font-weight-bold">:</td>
                <td><h6 class="text-uppercase"><?= $barang_keluar['nama_barang']; ?></h6></td>
              </tr>
              
              <tr>
                <td>Kode barang</td>
                <td class="font-weight-bold">:</td>
                <td><h6 class="font-weight-light"><?= $barang_keluar['kode_barang']; ?></h6></td>
              </tr>
              
              <tr>
                <td>Jumlah Keluar</td>
                <td class="font-weight-bold">:</td>
                <td><h5 class="d-inline"><?= $barang_keluar['jml_keluar']; ?>&nbsp;</h5><?= $barang_keluar['nama_satuan']; ?></td>
              </tr>

              <tr>
                <td>Petugas</td>
                <td class="font-weight-bold">:</td>
                <td><h6 class="font-weight-light mt-1"><?= $barang_keluar['fullname']; ?></h6></td>
              </tr>

              <tr>
                <td>Keterangan Keluar</td>
                <td class="font-weight-bold">:</td>
                <td><h6 class="font-weight-light"><?= $barang_keluar['ket_keluar']; ?></h6></td>
              </tr>
            </tbody>
          </table>
          <?php if(has_permission('transaksi')) : ?>
          <a href="/tblkeluar/edit/<?= $barang_keluar['id_keluar']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i> Update</a>
          <?php endif; ?>
          <!-- <a href="#" class="btn btn-primary"><i class="fas fa-minus-square"></i> Keluar</a> -->
          <a href="#" class="btn btn-success"><i class="fas fa-file"></i> Print</a>
          <p class="mt-3"><a href="<?= base_url(); ?>/tblkeluar">Kembali ke tabel barang keluar</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Body -->

        </section>
      </div>

<?= $this->endSection(); ?>