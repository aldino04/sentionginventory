<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <a href="javascript:window.history.go(-1);" class="btn btn-success"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;
            <h1>Keluar &mdash; <?= $barang_keluar['nama_barang']; ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url(); ?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url('tblkeluar'); ?>">Tabel&nbsp;Barang&nbsp;Keluar</a></div>
              <div class="breadcrumb-item">Detail</div>
            </div>
          </div>
          <!-- End Header -->

<!-- Body -->
<div class="section-body">

<div class="row">
  <div class="col-12 col-md-12 col-lg-4">
    <div class="card card-primary">
      <img class="img-thumbnail" src="<?= base_url('img/barangKeluar/4.png'); ?>" class="card-img-top" alt="image">
      <div class="card-body">
        <h5 class="card-title">Material Keluar</h5>
        
        <table class="table table-sm col-12">
          <tbody>
            <tr>
              <td>BPM</td>
              <td class="font-weight-bold">:</td>
              <td><h7 class="font-weight-light"><?= $barang_keluar['bpm']; ?></h7></td>
            </tr>

            <tr>
              <td>Nama&nbsp;barang</td>
              <td class="font-weight-bold">:</td>
              <td><h7 class="text-uppercase"><a class="font-weight-bold" href="<?= base_url(); ?>/tblbarang/detail/<?= $barang_keluar['kode_barang']; ?>"><?= $barang_keluar['nama_barang']; ?></a></h7></td>
            </tr>
            
            <tr>
              <td>Kode barang</td>
              <td class="font-weight-bold">:</td>
              <td><h7 class="font-weight-light"><?= $barang_keluar['kode_barang']; ?></h7></td>
            </tr>
            
            <tr>
              <td>Jumlah Keluar</td>
              <td class="font-weight-bold">:</td>
              <td><h6 class="d-inline"><?= $barang_keluar['jml_keluar']; ?>&nbsp;</h6><?= $barang_keluar['nama_satuan']; ?></td>
            </tr>

            <tr>
              <td>Petugas</td>
              <td class="font-weight-bold">:</td>
              <td><h7 class="font-weight-light mt-1"><?= $barang_keluar['fullname']; ?></h7></td>
            </tr>

            <tr>
              <td>Keterangan Keluar</td>
              <td class="font-weight-bold">:</td>
              <td><h7 class="font-weight-light"><?= $barang_keluar['ket_keluar']; ?></h6></td>
            </tr>
          </tbody>
        </table>
        <?php if(has_permission('transaksi')) : ?>
        <a href="/tblkeluar/edit/<?= $barang_keluar['id_keluar']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i> Update</a>
        <?php endif; ?>
        <!-- <a href="#" class="btn btn-primary"><i class="fas fa-minus-square"></i> Keluar</a> -->
        <a href="<?= base_url(); ?>/tblkeluar/dompdf/<?= $barang_keluar['id_keluar']; ?>/<?= $barang_keluar['bpm']; ?>" target="_blank" class="btn btn-success"><i class="fas fa-file"></i> Print</a>
        <p class="mt-3"><a href="<?= base_url(); ?>/tblkeluar">Kembali ke tabel barang keluar</a></p>

      </div>
    </div>
  </div>

  <div class="col-12 col-md-12 col-lg-8">
      <div class="card card-primary mb-3">
        <div class="row no-gutters">
          <div class="col float-left">  
            <div class="card-body">
              
              <ul class="list-group list-group-flush mb-3 text-center">
                <li class="list-group-item py-0">No. BPM &mdash; <p class="font-weight-bold d-inline"><?= $barang_keluar['bpm']; ?></p></li>
                <li class="list-group-item py-0">Tanggal &mdash; <p class="font-weight-bold d-inline"><?= $barang_keluar['tgl_keluar']; ?></p></li>
              </ul>

              <div class="table-responsive">
                <table class="table table-hover" id="tableNormal">
                  <thead class="bg-primary text-center" style="color: white;">
                    <th>Kode&nbsp;barang</th>
                    <th>Nama&nbsp;Barang</th>
                    <th>keluar</th>
                    <th>Satuan</th>
                    <th>Keterangan</th>
                    <th>Detail</th>
                  </thead>

                  <tbody class="text-center">
                    <?php foreach($result as $r) : ?>
                    <tr>
                      <td><?= $r['kode_barang']; ?></td>
                      <td><a class="font-weight-bold" href="<?= base_url(); ?>/tblbarang/detail/<?= $r['kode_barang']; ?>"><?= $r['nama_barang']; ?></a></td>
                      <td><?= $r['jml_keluar']; ?></td>
                      <td><?= $r['nama_satuan']; ?></td>
                      <td><?= $r['ket_keluar']; ?></td>
                      <td><a href="<?= base_url(); ?>/tblkeluar/detail/<?= $r['id_keluar']; ?>/<?= $r['bpm']; ?>" class="btn btn-success"><i class="fas fa-clipboard"></i></a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="card-footer text-center">
              <a href="<?= base_url('tblbarang'); ?>" class="btn btn-success">Tabel Barang</a>
              <a href="<?= base_url('tblmasuk'); ?>" class="btn btn-primary">Tabel Barang Masuk</a>
              <a href="<?= base_url('tblkeluar'); ?>" class="btn btn-warning">Tabel Barang Keluar</a>
            </div>

          </div>
        </div>
      </div>
    </div>
</div>

</div>
<!-- End Body -->

        </section>
      </div>

<?= $this->endSection(); ?>