<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $tittle; ?></title>

  <style type="text/css">

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

    .center {
      margin-left: auto;
      margin-right: auto;
    }

    .judul{
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      text-align: center;
      font-size: 10;
      margin: 0px;
    }

    #noSPK{
      margin-top: 2px;
    }

    #noBPM{
      margin-top: 4px;
    }

    hr.solid {
      border-top: 1px solid black;
    }

    #tgl{
      text-align: right;
    }

    #ttd{
      position: absolute;
      bottom: 120px;
    }

  </style>
</head>

<body>

<!-- Judul -->
  <p class="judul"><strong>PT. WIKA JAYA KONSTRUKSI KSO</strong></p>
  <p class="judul">Proyek : Pembangunan Stasiun Pompa Ancol Sentiong</p>

  <table id="noSPK" class="center">
    <tr>
      <td>No. SPK&nbsp;</td>
      <td>
        <table border="1" cellpadding="1" id="noSPK">
    <tr>
      <td>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </td>
    </tr>
  </table>
      </td>
    </tr>
  </table>

  <p class="text-center judul" style="margin-top: 5px;"><strong><u>BON PEMAKAIAN MATERIAL/SUKU CADANG</u></strong></p>

  <table id="noBPM" class="center">
    <tr>
      <td>No.&nbsp;</td>
      <td>
        <table border="1" cellpadding="1" id="noSPK">
    <tr>
      <td class="text-center">
        &nbsp;&nbsp;<strong><?= $barang_keluar['bpm']; ?></strong>&nbsp;&nbsp;
      </td>
    </tr>
  </table>
      </td>
    </tr>
  </table>
<!-- End Judul -->

  <hr class="solid">
  
<!-- Judul2 -->
  <table>
    <tr>
      <td>Kode Tahap&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td>
        <table border="1" cellpadding="1" id="noSPK">
          <td>
            &nbsp;&nbsp;&nbsp;
          </td>
          <td>
            &nbsp;&nbsp;&nbsp;
          </td>
          <td>
            &nbsp;&nbsp;&nbsp;
          </td>
          <td>
            &nbsp;&nbsp;&nbsp;
          </td>
          <td>
            &nbsp;&nbsp;&nbsp;
          </td>
          <td>
            &nbsp;&nbsp;&nbsp;
          </td>
        </table>
      </td>
    </tr>

    <tr>
      <td>Kode Alat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td>
        <table border="1" cellpadding="1" id="noSPK">
          <td>
            &nbsp;&nbsp;&nbsp;
          </td>
          <td>
            &nbsp;&nbsp;&nbsp;
          </td>
          <td>
            &nbsp;&nbsp;&nbsp;
          </td>
          <td>
            &nbsp;&nbsp;&nbsp;
          </td>
          <td>
            &nbsp;&nbsp;&nbsp;
          </td>
          <td>
            &nbsp;&nbsp;&nbsp;
          </td>
          <td>
            &nbsp;&nbsp;&nbsp;
          </td>
          <td>
            &nbsp;&nbsp;&nbsp;
          </td>
          <td>
            &nbsp;&nbsp;&nbsp;
          </td>
          <td>
            &nbsp;&nbsp;&nbsp;
          </td>
          <td>
            &nbsp;&nbsp;&nbsp;
          </td>
        </table>
      </td>
    </tr>

    <tr>
      <td>Nama Tahap&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td>
        <table border="1" cellpadding="1" id="noSPK">
          <td>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </td>
        </table>
      </td>
    </tr>
  </table>
<!-- End Judul2 -->

    <hr class="solid">

<!-- Isi -->
    <table style="width: 100%;">
      <tr class="text-center">
        <td><u>NO.</u></td>
        <td><u>KODE</u></td>
        <td><u>NAMA MATERIAL</u></td>
        <td><u>SAT</u></td>
        <td><u>JUMLAH</u></td>
      </tr>

      <?php $i = 1; foreach($result as $r) : ?>
      <tr class="text-center">
        <td><?= $i++; ?></td>
        <td>
          <table border="1" cellpadding="2" style="margin-top: 3px;" class="center">
            <tr>
              <td class="text-center">
                &nbsp;&nbsp;&nbsp;<?= $r['kode_barang']; ?>&nbsp;&nbsp;&nbsp;
              </td>
            </tr>
          </table>
        </td>
        <td>
          <?= $r['nama_barang']; ?>
        </td>
        <td>
          <?= $r['nama_satuan']; ?>
        </td>
        <td>
          <?= $r['jml_keluar']; ?>
        </td>
      </tr>
      <?php endforeach; ?>

      <?php while($i <= 8) : ?>
        <tr class="text-center">
          <td><?= $i++; ?></td>
          <td>
            <table border="1" cellpadding="2" style="margin-top: 3px;" class="center">
              <tr>
                <td class="text-center">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
              </tr>
            </table>
          </td>
          <td>.....</td>
          <td>.....</td>
          <td>.....</td>
        </tr>
      <?php endwhile; ?>

    </table>

  <table id="tgl" style="margin-left: 10px; margin-top: 15px;">
    <tr>
      <td>...........................................................................................&nbsp;&nbsp;</td>
      <td>
        <table border="1" cellpadding="1" id="noSPK">
          <tr>
            <td class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;<?= $barang_keluar['tgl_keluar']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

  <table class="center" id="ttd" style="width: 100%;">
    <tr>
      <td>
        <p class="text-center">Yang Mengesahkan</p>
        <br><br>
        <p class="text-center">( <u><?= $barang_keluar['fullname']; ?></u> )</p>
      </td>

      <td>
        <p class="text-center">&nbsp;</p>
        <br><br>
        <p class="text-center">(.................................)</p>
      </td>
    </tr>
  </table>
<!-- End Isi -->

</body>
</html>