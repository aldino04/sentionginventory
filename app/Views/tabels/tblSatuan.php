<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <h1>Tabel Satuan</h1>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="section-body">

          <!-- Dari Sini -->
            <div class="row">
              <div class="col">
                <div class="card">

                <div class="p-3 ml-3">
                  <a href="#" class="btn btn-success btn-lg"><i class="fas fa-plus-square mr-1"></i>Satuan</a>
                </div>

                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-2">
                        <thead class="bg-primary" style="color: white;">
                          <tr>
                            <th>
                              No
                            </th>
                            <th>Satuan</th>
                            <th class="text-center">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>

                          <tr>
                            <td>1</td>
                            <td>Liter</td>
                            <td class="text-center"><a href="#" class="btn btn-warning ml-2">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Kilo Gram</td>
                            <td class="text-center"><a href="#" class="btn btn-warning ml-2">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>Batang</td>
                            <td class="text-center"><a href="#" class="btn btn-warning ml-2">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>Sak</td>
                            <td class="text-center"><a href="#" class="btn btn-warning ml-2">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
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