<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <a href="javascript:window.history.go(-1);" class="btn btn-success"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;
            <h1>Detail &mdash; <?= $barang['nama_barang']; ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= base_url(); ?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?= base_url('tblbarang'); ?>">Tabel&nbsp;Barang</a></div>
              <div class="breadcrumb-item">Detail</div>
            </div>
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

          <?php if(has_permission('transaksi')) : ?>
          <a href="/tblbarang/edit/<?= $barang['kode_barang']; ?>" class="btn btn-success"><i class="fas fa-pen-square"></i> Update</a>
          <a href="<?= base_url('masuk'); ?>" class="btn btn-primary"><i class="fas fa-plus-square"></i> Masuk</a>
          <a href="<?= base_url('keluar'); ?>" class="btn btn-warning"><i class="fas fa-minus-square"></i> Keluar</a>
          <?php endif; ?>
          
          <?php if(in_groups('user')) : ?>
            <a href="<?= base_url('tblmasuk'); ?>" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tabel Masuk</a>
            <a href="<?= base_url('tblkeluar'); ?>" class="btn btn-warning"><i class="fas fa-minus-square"></i> Tabel Keluar</a>
          <?php endif; ?>

          <p class="mt-3"><a href="<?= base_url(); ?>/tblbarang">Kembali ke tabel barang</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h5 class="text-center">Transaksi Terakhir</h5>
        <ul class="list-group list-group-flush mb-3 text-center">
          <li class="list-group-item py-0">Kode Material &mdash; <p class="font-weight-bold d-inline"><?= $barang['kode_barang']; ?></p></li>
          <li class="list-group-item py-0">Nama Material &mdash; <p class="font-weight-bold d-inline"><?= $barang['nama_barang']; ?></p></li>
          <li class="list-group-item py-0">Satuan &mdash; <p class="font-weight-bold d-inline"><?= $barang['nama_satuan']; ?></p></li>
        </ul>

        <!-- Sorting By Date Range -->
        <h6 class="text-center">Sort By Date Range</h6>
        <form>
          <div class="row justify-content-center mb-3">
            <div class="col-md-4 col-12">
              <!-- <label for="min" class="col-form-label">Tanggal Awal</label> -->
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-clock"></i>
                  </div>
                </div>
                <input type="text" class="form-control" id="min" name="min" placeholder="Tanggal Awal..">
              </div>
            </div>

            <div class="col-md-4 col-12">
              <!-- <label for="max" class="col-form-label">Tanggal Akhir</label> -->
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-clock"></i>
                  </div>
                </div>
                <input type="text" class="form-control" id="max" name="max"  placeholder="Tanggal Akhir..">
              </div>
            </div>
          
            <div class="col-form-label">
              <a href="<?= base_url(); ?>/tblbarang/detail/<?= $barang['kode_barang']; ?>" class="btn btn-dark"><i class="fas fa-redo-alt"></i></a>
            </div>

          </div>
        </form>
        <!-- End Sorting By Date Range -->

          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="example">
              <thead class="bg-primary text-center" style="color: white;">
                <tr>
                  <th class="text-center">No</th>
                  <th>Tanggal</th>
                  <th>BAPB</th>
                  <th>BPM</th>
                  <th>Masuk</th>
                  <th>Keluar</th>
                  <th>Keterangan</th>
                  <th>Details</th>
                </tr>
              </thead>

              <tbody>
                <?php $i = 1; foreach($result as $apg) : ?>
                <tr>
                  <td class="text-center align-middle"><?= $i++; ?></td>
                  <td class="text-center align-middle"><?= $apg['tanggal']; ?></td>
                  <td class="text-center align-middle"><?= $apg['bapb']; ?></td>
                  <td class="text-center align-middle"><?= $apg['bpm']; ?></td>
                  <td class="text-center align-middle"><?= $apg['masuk']; ?>
                  <?php if($apg['masuk'] != "") : ?>
                    
                    <?php endif; ?>
                  </td>
                  <td class="text-center align-middle"><?= $apg['keluar']; ?>
                  <?php if($apg['keluar'] != "") : ?>
                    
                    <?php endif; ?>
                  </td>
                  <td class=" align-middle"><?= $apg['keterangan']; ?></td>
                  <td class="text-center align-middle">
                    <?php if ($apg['keluar'] != "") : ?>
                      <a href="/tblkeluar/detail/<?= $apg['id_keluar']; ?>" class="btn btn-success"><i class="fas fa-clipboard"></i></a>
                      <?php else : ?>
                        <a href="/tblmasuk/detail/<?= $apg['id_masuk']; ?>/<?= $apg['bapb']; ?>" class="btn btn-success"><i class="fas fa-clipboard"></i></a>
                    <?php endif; ?>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>

              <tfoot>
                <tr class="table-primary text-center font-weight-bold">
                  <th colspan="4">Total</th>
                  <th></th>
                  <th></th>
                  <th colspan="2"></th>
                </tr>
                <tr class="table-warning text-center font-weight-bold">
                  <th colspan="4">Total Keseluruhan</th>
                  <th><?= $totalMasuk->jml_masuk; ?> <?= $barang['nama_satuan']; ?></th>
                  <th><?= $totalKeluar->jml_keluar; ?> <?= $barang['nama_satuan']; ?></th>
                  <th colspan="2">Stok : <?= intval($totalMasuk->jml_masuk) - intval($totalKeluar->jml_keluar) ?> <?= $barang['nama_satuan']; ?></th>
                </tr>
              </tfoot>

            </table>
          </div>
        </div>
  </div>

</div>
<!-- End Body -->

        </section>
      </div>

<script>
 var minDate, maxDate;
 
// Custom filtering function which will search data in column four between two values
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = minDate.val();
        var max = maxDate.val();
        var date = new Date( data[1] );
 
        if (
            ( min === null && max === null ) ||
            ( min === null && date <= max ) ||
            ( min <= date   && max === null ) ||
            ( min <= date   && date <= max )
        ) {
            return true;
        }
        return false;
    }
);
 
$(document).ready(function() {
    // Create date inputs
    minDate = new DateTime($('#min'), {
        format: 'MMMM Do YYYY'
    });
    maxDate = new DateTime($('#max'), {
        format: 'MMMM Do YYYY'
    });
 
    // DataTables initialisation
    var table = $('#example').DataTable({
      "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // Total over all pages
            masuk = api
                .column( 4 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            keluar = api
                .column( 5 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
            // Total over this page
            pageMasuk = api
                .column( 4, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );

            pageKeluar = api
                .column( 5, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
 
              totalStok = masuk - keluar
              pageStok = pageMasuk - pageKeluar
            
            // Update footer
            $( api.column( 4 ).footer() ).html(
                pageMasuk + ' <?= $barang['nama_satuan']; ?>'
            );

            $( api.column( 5 ).footer() ).html(
                pageKeluar + ' <?= $barang['nama_satuan']; ?>'
            );

            $( api.column( 6 ).footer() ).html(
                'Stok : ' + pageStok + ' <?= $barang['nama_satuan']; ?>' 
            );
        }
    });
 
    // Refilter the table
    $('#min, #max').on('change', function () {
        table.draw();
    });
});
</script>

<?= $this->endSection(); ?>