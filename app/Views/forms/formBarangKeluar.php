<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <a href="javascript:window.history.go(-1);" class="btn btn-success"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;
            <h1>Formulir Barang Keluar</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url(); ?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url('keluar'); ?>">Tabel&nbsp;Barang&nbsp;Keluar</a></div>
              <div class="breadcrumb-item">Formulir</div>
            </div>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="section-body">

            <div class="row">
              <div class="col">

                <div class="card">
                  <form action="tblkeluar/save" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
                    <div class="card-header text-center">
                      <h4 class="text-center">Bon Pemakaian Material/Suku Cadang [BPM]</h4>
                    </div>

                      <div class="card-body mb-0 pb-0">
                        
                        <?php if (session()->getFlashdata('unique')) : ?>
                          <div class="alert alert-danger alert-has-icon alert-dismissible show fade">
                              <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                              <div class="alert-body">
                                <div class="alert-title">Failed</div>
                                <?= session()->getFlashData('unique'); ?>
                                <?= $validation->listErrors(); ?>
                              </div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        <?php endif; ?>
                      
                        <a href="<?= base_url(); ?>/tblkeluar" class="btn btn-secondary mb-2"><i class="fas fa-clipboard-list mx-1"></i>Tabel Barang Keluar</a>

                        <div class="row justify-content-center pb-0 mb-0">
                          <div class="col-md-7">

                          <?= csrf_field(); ?>
                          <input type="hidden" name="idUser" value="<?= user_id(); ?>">

                            <!-- <div class="form-group row">
                              <label class="col-sm-3 col-form-label">ID Transaksi</label>
                              <div class="col-sm-9">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fas fa-key"></i>
                                    </div>
                                  </div>
                                  <input type="text" class="form-control" disabled value="SI-2108250010">
                                </div>
                              </div>
                            </div> -->

                            <div class="form-group row mb-3">
                              <label for="bpm" class="col-sm-3 col-form-label">BPM</label>
                              <div class="col-sm-9">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fas fa-window-restore"></i>
                                    </div>
                                  </div>
                                  <input type="text" class="form-control purchase-code" required placeholder="XX-GD-PSP-XX-XX" id="bpm" name="bpm">
                                  <div class="invalid-feedback">
                                  Masukan BPM!
                                </div>
                                </div>
                              </div>
                            </div>

                            <div class="form-group row mb-3">
                              <label for="tglKeluar" class="col-sm-3 col-form-label">Tanggal</label>
                              <div class="col-sm-9">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fas fa-clock"></i>
                                    </div>
                                  </div>
                                  <input type="text" class="form-control datepicker" required placeholder="Masukan Tanggal.." id="tglkeluar" name="tglKeluar">
                                  <div class="invalid-feedback">
                                  Masukan Tanggal!
                                </div>
                                </div>
                              </div>
                            </div>

                            <div class="form-group row mb-3">
                              <label for="kodeBarang" class="col-sm-3 col-form-label">Kode Barang</label>
                              <div class="col-sm-9">
                                <div class="input-group">
                                  <a href="#"><div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fas fa-qrcode"></i>
                                    </div>
                                  </div></a>
                                  <input type="text" class="form-control readonly" required placeholder="Masukan Kode Barang.." id="kodeBarang" name="kodeBarang" autocomplete="off" style="background-color: #e3e3e3;">
                                  <div class="invalid-feedback">
                                  Masukan Kode Barang!
                                </div>

                                <!-- Button open scanner -->
                                <a href="javascript:location.reload();" class="btn btn-success btn-flat"><i class="fas fa-qrcode mt-2"></i></a>
                                <!-- End Button open scanner -->

                                </div>
                              </div>
                            </div>

                            <!-- Scan QR 1 -->
                              <div class="row justify-content-center mt-2 mb-3">
                                <div class="col-lg-8 col-md-8">
                                  <div id="reader" class="text-center"></div>
                                </div>
                              </div>
                              <!-- End Scan QR -->

                            <!-- Foto Keluar -->
                            <div class="form-group row">
                              <label for="fotoKeluar" class="col-sm-3 col-form-label">Foto Barang Keluar</label>
                              <div class="col-sm-9">
                                <div class="input-group custom-file">
                                  <input type="file" class="custom-file-input" id="fotoKeluar" required name="fotoKeluar" onchange="previewImg()">
                                  <label class="custom-file-label" for="fotoKeluar">Pilih Gambar..</label>
                                  <div class="invalid-feedback">
                                  Masukan Gambar!
                                  </div>
                                </div>
                              </div>
                                
                              <div class="input-group justify-content-center mt-2">
                                <img src="/template/assets/img/products/product-1.jpg" class="img-thumbnail img-preview" style="height: fit-content; width: 200px;">
                              </div>
                            </div>
                            <!-- End Foto Keluar -->

                            <div class="form-group row justify-content-center mb-0 pb-0 mt-0 pt-0">
                              <div class="col-md-6 col-lg-6 col-sm-9 col-form-label mb-0 pb-0 mt-0 pt-0">
                                <div class="form-group">
                                  <label for="namaBarang">Nama Barang</label>
                                  <input type="text" class="form-control" placeholder="Masukan Nama Barang.." id="namaBarang" name="namaBarang" readonly>
                                </div>
                              </div>

                              <div class="col-md-6 col-lg-6 col-sm-9 col-form-label mb-0 pb-0 mt-0 pt-0">
                                <div class="form-group">
                                  <label for="satuan">Satuan</label>
                                  <input type="text" class="form-control" required="" placeholder="Masukan Satuan.." id="satuan" name="satuan" readonly>
                                </div>
                              </div>
                            </div>

                            <div class="form-group row justify-content-center mb-0 pb-0 mt-0 pt-0">
                              <div class="col-md-6 col-lg-6 col-sm-9 col-form-label mb-0 pb-0 mt-0 pt-0">
                                <div class="form-group">
                                  <label for="jmlKeluar">Jumlah Keluar</label>
                                  <input type="text" class="form-control jumlah-si" required="" placeholder="Masukan Jumlah.." id="jmlKeluar" name="jmlKeluar" autocomplete="off">
                                  <div class="invalid-feedback">
                                    Masukan Jumlah!.
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-6 col-lg-6 col-sm-9 col-form-label mb-0 pb-0 mt-0 pt-0">
                                <div class="form-group">
                                  <label for="ketMasuk">Keterangan</label>
                                  <textarea type="number" class="form-control" placeholder="Masukan Keterangan.." style="height: 80px;" id="ketKeluar" name="ketKeluar"></textarea>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>

                      </div>

                    <div class="card-footer text-center">
                      
                      <a href="javascript:window.history.go(-1);" class="btn btn-success float-left"><i class="fas fa-arrow-circle-left mx-1"></i>Back</a>

                      <button class="btn btn-primary float-right mb-3" type="submit"><i class="fas fa-check-square mx-1"></i>Submit</button>
                      
                      <button class="btn btn-dark float-right mx-1 mb-3" type="reset"><i class="fas fa-eraser mx-1"></i>Reset</button>
                      
                    </div>
                  </form>
                </div>
                
              </div>
            </div>

          </div>
          <!-- End Body -->

        </section>

        <!-- Modal -->
        <div class="modal fade" tabindex="-1" role="dialog" id="modal-item">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Select Product item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <!-- Modal Body -->
                <div class="table-responsive-sm">
                  <table class="table table-striped" id="table-barang2">
                    <thead class="bg-primary" style="color: white;">
                      <tr class="text center">
                        <!-- <th>No</th> -->
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Stok</th>
                        <th>Satuan</th>
                        <th>Select</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php $i = 1; foreach($barang as $br) : ?>
                      <tr>
                        <!-- <td><?= $i++; ?></td> -->
                        <td><?= $br['kode_barang']; ?></td>
                        <td><?= $br['nama_barang']; ?></td>
                        <td><?= $br['stok']; ?></td>
                        <td><?= $br['nama_satuan']; ?></td>
                        <td>
                          <button class="btn btn-success" id="select"
                          data-kode="<?= $br['kode_barang']; ?>" 
                          data-nama="<?= $br['nama_barang']; ?>" 
                          data-satuan="<?= $br['nama_satuan']; ?>"
                          >
                            <i class="fas fa-check-square"></i>
                          </button>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>

                  </table>
                </div>
                <!-- End Modal Body -->
                    
                  </div>
                  <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </form>

            </div>
          </div>
        </div>
        <!-- End Modal -->
      </div>

<!-- script tabel pada modal kode barang -->
<script>

  // Script model search code
  $(document).ready(function () {
  $(document).on('click', '#select', function () {
    var kode_barang = $(this).data('kode');
    var nama_barang = $(this).data('nama');
    var satuan = $(this).data('satuan');
    $('#kodeBarang').val(kode_barang);
    $('#namaBarang').val(nama_barang);
    $('#satuan').val(satuan);
    $('#modal-item').modal('hide');
  })
})
// End model

// Script scanner QR Code
var html5QrcodeScanner = new Html5QrcodeScanner(
	"reader", { fps: 10, qrbox: 250 });
function onScanSuccess(decodedText, decodedResult) {
    $('#kodeBarang').val(decodedText);

    // ...
    html5QrcodeScanner.clear();
    // ^ this will stop the scanner (video feed) and clear the scan area.
}
html5QrcodeScanner.render(onScanSuccess);
// End Scanner QR Code

// script readonly
$(".readonly").on('keydown paste focus mousedown', function(e){
        if(e.keyCode != 9) // ignore tab
            e.preventDefault();
    });
// End script readonly

</script>
<!-- End Script -->

<?= $this->endSection(); ?>

<?= $this->section('fotoBarangKeluar'); ?>
<script>
  function previewImg() {
    const sampul = document.querySelector('#fotoKeluar');
    const sampulLabel = document.querySelector('.custom-file-label');
    const imgPreview = document.querySelector('.img-preview');

    sampulLabel.textContent = sampul.files[0].name;

    const fileSampul = new FileReader();
    fileSampul.readAsDataURL(sampul.files[0]);

    fileSampul.onload = function(e) {
      imgPreview.src = e.target.result;
    }
  }
</script>
<?= $this->endSection('fotoBarangKeluar'); ?>

<?= $this->section('jsform'); ?>
  <script src="<?= base_url(); ?>/template/assets/js/page/forms-advanced-forms.js"></script>
<?= $this->endSection('jsform'); ?>