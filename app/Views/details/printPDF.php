<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APG &mdash; <?= $barang['nama_barang']; ?></title>

  <style type="text/css">

/* DOMPDF */
  /* .table{
      width: 100%;
      border-spacing: 0;
      font-size: x-small;
    }

    .table tr:first-child th,
    .table tr:first-child td{
      border: 1px solid #000;
    }

    .table tr th:first-child,
    .table tr td:first-child{
      border: 1px solid #000;
    }

    .table tr th,
    .table tr td{
      border: 1px solid #000;
      padding: 4px;
      white-space: nowrap;
      border: 1px solid #000;
    } */

/* TCPDF */

    table{
      /* border-collapse: collapse; */
      width: 100%;
      border-collapse: collapse;
      font-size: smaller;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    td, th{
      text-align: center;
    }

    .text-center{
      text-align: center;
    }

    .align-middle {
      vertical-align: middle;
    }
  
  </style>
</head>

<body>

<!-- <img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dmlld3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80" alt=""> -->


  <!-- <p><strong>PT. WIKA - JAYA KONTRUKSI KSO</strong>
  <br>
  Proyek : Pembangunan Stasiun Pompa Ancol Sentiong</p> -->

  <p class="text-center"><strong>ADMINISTRASI PERSEDIAAN GUDANG</strong></p>

  <p>
  Material&nbsp;&nbsp;: <?= $barang['nama_barang']; ?> <br>
  Satuan&nbsp;&nbsp;: <?= $barang['nama_satuan']; ?> </p>


  <table border="1px" cellpadding="4">
    <tr style="background: #87cbff;">
      <th rowspan="2">No</th>
      <th rowspan="2">Tanggal</th>
      <th colspan="2">Nomor</th>
      <th rowspan="2">Masuk</th>
      <th rowspan="2">Keluar</th>
      <th rowspan="2">Keterangan</th>
    </tr>
    <tr style="background: #87cbff;">
      <th>BAPB</th>
      <th>BPM</th>
    </tr>

    <?php $i = 1; foreach($result as $apg) : ?>
    <tr>
      <td class="text-center align-middle"><?= $i++; ?></td>
      <td class="text-center align-middle" style="white-space: nowrap;"><?= $apg['tanggal']; ?></td>
      <td class="text-center align-middle" style="white-space: nowrap;"><?= $apg['bapb']; ?></td>
      <td class="text-center align-middle" style="white-space: nowrap;"><?= $apg['bpm']; ?></td>
      <td class="text-center align-middle"><?= $apg['masuk']; ?>
      <?php if($apg['masuk'] != "") : ?>
        <?= $apg['satuan']; ?>
      <?php endif; ?>
      </td>
      <td class="text-center align-middle"><?= $apg['keluar']; ?>
      <?php if($apg['keluar'] != "") : ?>
        <?= $apg['satuan']; ?>
      <?php endif; ?>
      </td>
      <td class=" align-middle"><?= $apg['keterangan']; ?></td>
    </tr>
    <?php endforeach; ?>

    <tr class="text-center"style="background: #fbff7d;">
      <th colspan="4">Total</th>

      <th><?= $totalMasuk->jml_masuk; ?> 
        <?php if($totalMasuk->jml_masuk != ''){
          echo ($barang['nama_satuan']);
        } ?>
      </th>

      <th><?= $totalKeluar->jml_keluar; ?> 
        <?php if($totalKeluar->jml_keluar != ''){
          echo ($barang['nama_satuan']);
        } ?>
      </th>

      <th>Stok : <?= intval($totalMasuk->jml_masuk) - intval($totalKeluar->jml_keluar) ?> <?= $barang['nama_satuan']; ?></th>
    </tr>
  </table>
</body>
</html>