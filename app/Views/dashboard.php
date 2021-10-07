<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <a href="javascript:window.history.go(-1);" class="btn btn-success"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;
            <h1>Dashboard</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url(); ?>">Dashboard</a></div>
            </div>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="section-body">

          <!-- Card admin, dll -->
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-primary">
                    <i class="fas fa-boxes"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Total Material</h4>
                    </div>
                    <div class="card-body">
                      <?= $jmlMaterial->totalm; ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Item Masuk</h4>
                    </div>
                    <div class="card-body">
                      <?= $jmlMasuk->jml_masuk; ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Item Keluar</h4>
                    </div>
                    <div class="card-body">
                      <?= $jmlKeluar->jml_keluar; ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                  <div class="card-icon bg-success">
                    <i class="fas fa-circle"></i>
                  </div>
                  <div class="card-wrap">
                    <div class="card-header">
                      <h4>Petugas</h4>
                    </div>
                    <div class="card-body">
                      <?= $jmlUser->totaluser; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Card Admin, dll -->

            <!-- button barang masuk & keluar -->
            <?php if(has_permission('transaksi')) : ?>
              <div class="row mb-4">
                <div class="col-lg-6 col-12 mb-2">
                  <a href="<?= base_url('tblmasuk/form2'); ?>" class="btn btn-block btn-lg btn-primary align-middle" style="height: 50px;"><i class="fas fa-plus-square pt-2"></i><h6 class="d-inline"> Tambah Material Masuk</h6></a>
                </div>
                <div class="col-lg-6 col-12 mb-2">
                  <a href="<?= base_url('keluar'); ?>" class="btn btn-block btn-lg btn-warning align-middle" style="height: 50px;"><i class="fas fa-minus-square pt-2"></i><h6 class="d-inline"> Tambah Material Keluar</h6></a>
                </div>
              </div>
              <?php endif; ?>

            <?php if(in_groups('user')) : ?>
              <div class="row mb-4">
                <div class="col-lg-6 col-12 mb-2">
                  <a href="<?= base_url('tblmasuk'); ?>" class="btn btn-block btn-lg btn-primary align-middle" style="height: 50px;"><i class="fas fa-plus-square pt-2"></i><h6 class="d-inline"> Tabel Material Masuk</h6></a>
                </div>
                <div class="col-lg-6 col-12 mb-2">
                  <a href="<?= base_url('tblkeluar'); ?>" class="btn btn-block btn-lg btn-warning align-middle" style="height: 50px;"><i class="fas fa-minus-square pt-2"></i><h6 class="d-inline"> Tabel Material Keluar</h6></a>
                </div>
              </div>
              <?php endif; ?>
            <!-- end -->

          <div class="row">
            <div class="col-lg-8">
              <div class="card">
                <div class="card-header">
                  <h4>Material Masuk  vs  Material keluar</h4>
                </div>
                <div class="card-body">
                  <canvas id="myChart" height="158"></canvas>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Material Keluar</h4>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled list-unstyled-border">

                  <?php foreach($transAkh as $akh) : ?>
                    <li class="media mb-0">
                      <div class="avatar-item">
                      <img alt="image" src="<?= base_url('/img/users/'. $akh['gambar']); ?>" class="img-fluid mr-3 rounded-circle" width="50" data-toggle="tooltip" title="<?= $akh['petugas']; ?>">
                      </div>
                      <div class="media-body">
                        <div class="float-right text-primary"><?= $akh['tanggal']; ?></div>
                        <div class="media-title"><?= $akh['nama']; ?></div>
                        <span>Keluar : <?= $akh['keluar'] ?> <?= $akh['satuan']; ?></span>
                        <a href="/tblkeluar/detail/<?= $akh['id_keluar']; ?>" class="badge badge-success float-right">Details</a>
                        <br>
                        <span class="text-small text-muted"><?= $akh['keterangan']; ?></span>
                      </div>
                    </li>
                  <?php endforeach; ?>

                  </ul>
                  <div class="text-center pt-1 pb-1">
                    <a href="<?= base_url('tblkeluar'); ?>" class="btn btn-primary btn-lg btn-round">
                      View All
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
              <div class="card ">
                <div class="card-header">
                  <h4>Material Masuk</h4>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled list-unstyled-border">

                  <?php foreach($transMasuk as $msk) : ?>
                    <li class="media mb-0">
                      <div class="avatar-item">
                      <img alt="image" src="<?= base_url('/img/users/'. $msk['gambar']); ?>" class="img-fluid mr-3 rounded-circle" width="50" data-toggle="tooltip" title="<?= $msk['petugas']; ?>">
                      </div>
                      <div class="media-body">
                        <div class="float-right text-primary"><?= $msk['tanggal']; ?></div>
                        <div class="media-title"><?= $msk['nama']; ?></div>
                        <span>Masuk : <?= $msk['masuk'] ?> <?= $msk['satuan']; ?></span>
                        <a href="/tblmasuk/detail/<?= $msk['id_masuk']; ?>/<?= $msk['bapb']; ?>" class="badge badge-success float-right">Details</a>
                        <br>
                        <span class="text-small text-muted"><?= $msk['keterangan']; ?></span>
                      </div>
                    </li>
                  <?php endforeach; ?>

                  </ul>
                  <div class="text-center pt-1 pb-1">
                    <a href="<?= base_url('tblmasuk'); ?>" class="btn btn-primary btn-lg btn-round">
                      View All
                    </a>
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

<?= $this->section('dashboard'); ?>
<script src="<?= base_url(); ?>/template/assets/js/page/index.js"></script>
<?= $this->endSection(); ?>

