<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <h1>Profile</h1>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="section-body">

            <div class="row">
              <div class="col-12">
                <div class="card profile-widget">
                  <div class="profile-widget-header">
                    <img alt="image" src="<?= base_url(); ?>/template/assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Sentiong Project</div>
                        <div class="profile-widget-item-value">Administrator</div>
                      </div>
                    </div>
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name">Sentiong Project <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Sentiong Inventory</div></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <form method="post" class="needs-validation" novalidate="">
                    <div class="card-header">
                      <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="form-group col-md-6 col-12">
                          <label>Username</label>
                          <input type="text" class="form-control" value="Sentiong Project" required="">
                          <div class="invalid-feedback">
                            Masukan Username
                          </div>
                        </div>
                        <div class="form-group col-md-6 col-12">
                          <label>Role User</label>
                          <select class="form-control selectric">
                            <option>Administrator</option>
                            <option>User Biasa</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" type="submit">Save Changes</button>
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