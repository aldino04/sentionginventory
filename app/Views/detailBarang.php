<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <h1>Detail Barang &mdash; <?= $barang['nama_barang']; ?></h1>
          </div>
          <!-- End Header -->

<!-- Body -->
<div class="section-body">
  <div class="card mb-3">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?= base_url(); ?>/template/assets/img/products/product-1.jpg" class="card-img" alt="..." style="max-height: 350px; max-width: 350px;">
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
</div>
<!-- End Body -->

        </section>
      </div>

<?= $this->endSection(); ?>