<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $tittle; ?></title>
    
    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/selectric/public/selectric.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/summernote/dist/summernote-bs4.css">
    
    <!-- dashboard -->
    <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/weathericons/css/weather-icons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/weathericons/css/weather-icons-wind.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">


    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/template/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/template/assets/css/components.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/dataTables.dateTime.min.css">
  </head>
  <body>

  <!-- load jquery untuk form barang masuk & keluar -->
    <script src="<?= base_url(); ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/template/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/template/node_modules/moment/min/moment.min.js"></script>
    <script src="<?= base_url(); ?>/js/dataTables.dateTime.min.js"></script>
    
<div id="app">
    <div class="main-wrapper">

    <!-- Navbar -->
    <?= $this->include('layout/navbar'); ?>

    <!-- Sidebar -->
    <?= $this->include('layout/sidebar'); ?>

    <!-- Content -->
    <?= $this->renderSection('content'); ?>
    <!-- End Content -->

    <!-- Footer -->
    <?= $this->include('layout/footer'); ?>

  </div>
</div>

  <!-- General JS Scripts -->
  <script src="<?= base_url(); ?>/template/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?= base_url(); ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
  
  <script src="<?= base_url(); ?>/template/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="<?= base_url(); ?>/template/node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="<?= base_url(); ?>/template/node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
  <script src="<?= base_url(); ?>/template/node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="<?= base_url(); ?>/template/node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="<?= base_url(); ?>/template/node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?= base_url(); ?>/template/node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="<?= base_url(); ?>/template/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
  <script src="<?= base_url(); ?>/template/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="<?= base_url(); ?>/template/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>

    <!-- Data Table -->
  
  <script src="<?= base_url(); ?>/template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>/template/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>

    <!-- Form -->
  <script src="<?= base_url(); ?>/template/node_modules/cleave.js/dist/cleave.min.js"></script>
  <script src="<?= base_url(); ?>/template/node_modules/cleave.js/dist/addons/cleave-phone.us.js"></script>
  <script src="<?= base_url(); ?>/template/node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?= base_url(); ?>/template/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="<?= base_url(); ?>/template/node_modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <script src="<?= base_url(); ?>/template/node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="<?= base_url(); ?>/template/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="<?= base_url(); ?>/template/node_modules/select2/dist/js/select2.full.min.js"></script>
  <script src="<?= base_url(); ?>/template/node_modules/selectric/public/jquery.selectric.min.js"></script>
    <!-- End Form -->

  <!-- Template JS File -->
  <script src="<?= base_url(); ?>/template/assets/js/scripts.js"></script>
  <script src="<?= base_url(); ?>/template/assets/js/custom.js"></script>
  <script src="<?= base_url('/js/bootstrap-show-password.min.js'); ?>"></script>
  

  <!-- Page Specific JS File -->
  <script src="<?= base_url(); ?>/template/assets/js/page/modules-datatables.js"></script>
  <script src="<?= base_url(); ?>/template/assets/js/page/bootstrap-modal.js"></script>

  <?php $this->renderSection('dashboard') ?>

    <!-- Kalau Mau Pakai Advance form {Currency, password strength} js ini aktifin -->
    <?= $this->renderSection('jsform'); ?>
    <!-- end -->
    
    <?= $this->renderSection('fotoBarang'); ?>
    <?= $this->renderSection('fotoEdtBarang'); ?>
    <?= $this->renderSection('fotoBarangKeluar'); ?>
    <?= $this->renderSection('fotoProfile'); ?>

</body>
</html>