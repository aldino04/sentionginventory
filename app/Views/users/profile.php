<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <a href="javascript:window.history.go(-1);" class="btn btn-success"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;
            <h1>Profile</h1>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="section-body">

            <?php if (session()->getFlashdata('pesan')) : ?>
              <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                  <div class="alert-body">
                    <div class="alert-title">Success</div>
                    <?= session()->getFlashData('pesan'); ?>
                  </div>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            <?php endif; ?>
            
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-6">
                <div class="card author-box card-primary">
                  <div class="card-body">

                    <div class="author-box-left">
                      <img alt="image" src="<?= base_url('img/users/' . $user->user_image); ?>" class="rounded-circle author-box-picture">
                      <div class="clearfix"></div>
                      <a href="#" class="btn btn-primary mt-3 follow-btn">Follow</a>
                    </div>
                    <div class="author-box-details">
                      <div class="author-box-name">
                        <a href="#">@<?= $user->username; ?></a>
                      </div>
                      <div class="author-box-job font-weight-bold"><?= $user->description; ?></div>
                      <div class="author-box-description">
                        <table class="table table-sm col-sm-12">
                          <tbody>

                            <tr>
                              <td>Nama</td>
                              <td class="font-weight-bold">:</td>
                              <td><h7 class="font-weight-light"><?= $user->fullname; ?></h7></td>
                            </tr>

                            <tr>
                              <td>Email</td>
                              <td class="font-weight-bold">:</td>
                              <td><h7 class="font-weight-light"><?= $user->email; ?></h7></td>
                            </tr>

                            <tr>
                              <td>Phone</td>
                              <td class="font-weight-bold">:</td>
                              <td><h7 class="font-weight-light"><?= $user->phone_number; ?></h7></td>
                            </tr>

                            <tr>
                              <td>Status</td>
                              <td class="font-weight-bold">:</td>
                              <td><h7 class="font-weight-light">
                                <?php if (logged_in() == 1) : ?>
                                  <span class="badge badge-pill badge-success"><?= 'Online'; ?></span>
                                <?php else : ?>
                                  <span class="badge badge-pill badge-danger"><?= 'Offline'; ?></span>
                                <?php endif; ?>
                              </h7></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="mb-2 mt-3"><div class="text-small font-weight-bold">Follow <?= $user->username; ?> On</div></div>
                      <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                        <i class="fab fa-twitter"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-github">
                        <i class="fab fa-github"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                        <i class="fab fa-instagram"></i>
                      </a>
                      <div class="w-100 d-sm-none"></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-12 col-lg-6">
                <div class="card card-primary">
                  <form action="/user/update/<?= $user->userid; ?>" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">

                    <div class="card-header">
                      <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">

                      <?= csrf_field(); ?>
                      <input type="hidden" name="sampulLama" value="<?= $user->user_image; ?>">

                        <div class="row">
                          <div class="form-group col-md-12 col-12">
                            <label for="fullname">Full Name</label>
                            <input type="text" class="form-control" value="<?= $user->fullname; ?>" required placeholder="Your Full Name.." id="fullname" name="fullname">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" value="<?= $user->email; ?>" required id="email" name="email">
                            <div class="invalid-feedback">
                              Please fill in the email
                            </div>
                          </div>
                          
                          <div class="form-group col-md-6 col-12">
                            <label for="phone_number">Phone</label>
                            <input type="text" class="form-control" value="<?= $user->phone_number; ?>" required placeholder="08-- ---- ----" id="phone_number" name="phone_number">
                            <div class="invalid-feedback">
                              Please fill in the Phone
                            </div>
                          </div>
                        </div>

                        <div class="row justify-content-center">
                          <div class="form-group col-md-12 col-12">

                            <div class="input-group justify-content-center">
                              <img src="/img/users/<?= $user->user_image; ?>" class="img-thumbnail img-preview" style="height: fit-content; width: 100px;">
                            </div>

                            <div class="row justify-content-center">
                            <div class="col-sm-9">
                              <label for="sampul">Sampul</label>
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="sampul" name="sampul" onchange="previewImg()">
                                <label class="custom-file-label" for="sampul"><?= $user->user_image; ?></label>
                                <div class="invalid-feedback mt-2">
                                  Pilih Gambar!.
                                </div>
                              </div>
                            </div>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="card-footer text-right">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
          <!-- End Body -->

        </section>
      </div>

<?= $this->endSection(); ?>

<?= $this->section('fotoProfile'); ?>
<script>
  function previewImg() {
    const sampul = document.querySelector('#sampul');
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
<?= $this->endSection('fotoProfile'); ?>