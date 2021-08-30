<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <h1>Tabel Barang Keluar</h1>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="section-body">

          <!-- Dari Sini -->
            <div class="row">
              <div class="col">
                <div class="card">

                <div class="p-3 ml-3">
                  <a href="#" class="btn btn-danger btn-lg"><i class="fas fa-minus-square mr-1"></i>Barang keluar</a>
                </div>

                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead class="bg-primary" style="color: white;">
                          <tr>
                            <th class="text-center">
                              No
                            </th>
                            <th>ID_Transaksi</th>
                            <th>Tanggal</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Update</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td>1</td>
                            <td>SI-2108250001</td>
                            <td>25-08-2021</td>
                            <td>AA0030</td>
                            <td>BBM Solar</td>
                            <td>100</td>
                            <td>Liter</td>
                            <td>
                              <a href="#" class="btn btn-warning"><i class="fas fa-pen-square"></i></a>
                            </td>
                            <td>
                              <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>SI-2108250002</td>
                            <td>26-08-2021</td>
                            <td>AA0031</td>
                            <td>Semen</td>
                            <td>10</td>
                            <td>Sak</td>
                            <td>
                              <a href="#" class="btn btn-warning"><i class="fas fa-pen-square"></i></a>
                            </td>
                            <td>
                              <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>SI-2108250003</td>
                            <td>26-08-2021</td>
                            <td>AA0023</td>
                            <td>Besi Ulir D 13</td>
                            <td>364</td>
                            <td>Batang</td>
                            <td>
                              <a href="#" class="btn btn-warning"><i class="fas fa-pen-square"></i></a>
                            </td>
                            <td>
                              <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>SI-2108250004</td>
                            <td>25-09-2021</td>
                            <td>AA0012</td>
                            <td>Cat Besi</td>
                            <td>30</td>
                            <td>Kilo Gram</td>
                            <td>
                              <a href="#" class="btn btn-warning"><i class="fas fa-pen-square"></i></a>
                            </td>
                            <td>
                              <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>SI-2108250005</td>
                            <td>21-08-2021</td>
                            <td>AA0040</td>
                            <td>Sika Separol</td>
                            <td>20</td>
                            <td>Kilo Gram</td>
                            <td>
                              <a href="#" class="btn btn-warning"><i class="fas fa-pen-square"></i></a>
                            </td>
                            <td>
                              <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- Sampe Sini -->

          </div>
          <!-- End Body -->

        </section>
      </div>

<?= $this->endSection(); ?>