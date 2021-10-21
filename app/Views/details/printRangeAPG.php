<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APG &mdash; <?= $barang['nama_barang']; ?></title>

  <style type="text/css">

    table{
      border-collapse: collapse;
      font-size: smaller;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .text-center{
      text-align: center;
    }

    .align-middle {
      vertical-align: middle;
    }
  
    #judul{
      font-size: 14;
      font-family: Arial, Helvetica, sans-serif;
    }

    #judul2{
      font-size: 10;
      font-family: Arial, Helvetica, sans-serif;
    }

  </style>
</head>

<body>

<!-- <img src="http://localhost:8080/img/logo.png" alt="logo"> -->

  <p class="text-center" id="judul"><strong>ADMINISTRASI PERSEDIAAN GUDANG</strong></p>
  <?php $tglMin = date("j F, Y", strtotime($min)) ?>
  <?php $tglMax = date("j F, Y", strtotime($max)) ?>
  <p class="text-center" id="judul2">Periode : <strong><?= $tglMin; ?></strong> &mdash; <strong><?= $tglMax; ?></strong></p>
  <table cellpadding="5">
    <tr>
      <td>Material</td>
      <td>:</td>
      <td><strong><?= $barang['nama_barang']; ?></strong></td>
    </tr>
    <tr>
      <td>Satuan</td>
      <td>:</td>
      <td><strong><?= $barang['nama_satuan']; ?></strong></td>
    </tr>
  </table>


  <table border="1px" cellpadding="4" style="width: 100%;">
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
      <td class="text-center align-middle" style="white-space: nowrap;">
        <?php $convertDate = date("j F, Y", strtotime($apg['tanggal'])) ?>
        <?= $convertDate; ?>
      </td>
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

      <th>Saldo : <?= intval($totalMasuk->jml_masuk) - intval($totalKeluar->jml_keluar) ?> <?= $barang['nama_satuan']; ?></th>
    </tr>
  </table>
</body>
</html>