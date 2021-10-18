<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $tittle; ?></title>

  <style type="text/css">
  /* @page { 
    margin-top: 10px;
    margin-bottom: 10px;
   } */

    body {
    margin: 0;
    padding: 0;
    border: 1px solid black;
    }

    table{
      border-collapse: collapse;
      font-size: 10;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .text-center{
      text-align: center;
    }

    .align-middle {
      vertical-align: middle;
    }
  
    #judul{
      text-decoration: underline;
      font-size: 12;
      text-align: center;
      margin-left: 120px;
    }

    .center {
      margin-left: auto;
      margin-right: auto;
    }

    #ttd{
      position: absolute;
      bottom: 130px;
    }

    #judulProyek {
      margin-top: 5px;
      margin-left: 5px;
      position: absolute;
    }

    #judulProyek2 {
      position: absolute;
      margin-right: 50px;
      margin-top: 5px;
      float: right;
    }

  </style>
</head>

<body>
  <table border="1" cellpadding="4" id="judulProyek">
    <tr>
      <td><strong>PT. WIKA JAYA KONSTRUKSI KSO</strong></td>
    </tr>
    <tr>
      <td>Proyek : Pembangunan Stasiun<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pompa Ancol Sentiong</td>
    </tr>
  </table>

  <table cellpadding="4" id="judulProyek2">
    <tr>
      <td>1. Supplier</td>
    </tr>
    <tr>
      <td>2. KSPP</td>
    </tr>
    <tr>
      <td>3. Gudang</td>
    </tr>
    <tr>
      <td>4. QC</td>
    </tr>
  </table>

  <p class="text-center" id="judul"><strong><u><i>BERITA ACARA PENERIMAAN BARANG</i></u></strong></p>

  <table class="center" border="1px" cellpadding="3" id="judulBAPB">
    <tr>
      <td>Nomor</td>
      <td class="text-center"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $barang_masuk['bapb']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
    </tr>
    <tr>
      <td>Leveransir</td>
      <td></td>
    </tr>
    <tr>
      <td>Surat Jalan&nbsp;&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td>Tanggal</td>
      <td class="text-center"><strong><?= $barang_masuk['tgl_masuk']; ?></strong></td>
    </tr>
  </table>

  <br>

  <table border="1px" cellpadding="2" style="width: 100%; margin: 5px;">
    <tr style="background: #87cbff;">
      <th>No</th>
      <th>Kode&nbsp;Daya</th>
      <th>Jenis&nbsp;Material</th>
      <th>Satuan</th>
      <th>Volume</th>
      <th>H.&nbsp;Satuan</th>
      <th>Jumlah</th>
      <th>Keterangan</th>
    </tr>

    <?php $i = 1; foreach($result as $bapb) : ?>
    <tr>
      <td class="text-center align-middle"><?= $i++; ?></td>
      <td class="text-center align-middle"><?= $bapb['kode_barang']; ?></td>
      <td class="text-center align-middle"><?= $bapb['nama_barang']; ?></td>
      <td class="text-center align-middle"><?= $bapb['nama_satuan']; ?></td>
      <td class="text-center align-middle"><?= $bapb['jml_masuk']; ?></td>
      <td class="text-center align-middle"></td>
      <td class="text-center align-middle"></td>
      <td class=" align-middle" style="font-size: 10;"><?= $bapb['ket_masuk']; ?></td>
    </tr>
    <?php endforeach; ?>

    <?php while($i <= 10) : ?>
      <tr>
        <td class="text-center"><?= $i++; ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    <?php endwhile; ?>

  </table>
  <br>

  <table class="center" id="ttd" style="width: 100%;">
    <tr>
      <td>
        <p class="text-center">KSPP</p>
        <br><br>
        <p class="text-center">(.................................)</p>
      </td>

      <td>
        <p class="text-center">KSAK</p>
        <br><br>
        <p class="text-center">(.................................)</p>
      </td>

      <td>
        <p class="text-center">QC</p>
        <br><br>
        <p class="text-center">(.................................)</p>
      </td>

      <td>
        <p class="text-center">GUDANG</p>
        <br><br>
        <p class="text-center">(.................................)</p>
      </td>
    </tr>
  </table>

</body>
</html>