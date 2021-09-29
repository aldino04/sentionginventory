<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">

          <!-- Header -->
          <div class="section-header">
            <a href="javascript:window.history.go(-1);" class="btn btn-success"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;
            <h1>Tabel User</h1>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="section-body">

          <!-- Dari Sini -->
            <div class="row">
              <div class="col">
                <div class="card">

                <div class="p-3 ml-3">
                  <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalUser">
                    <i class="fas fa-plus-square mx-1"></i>Tambah User
                  </button>
                </div>

                <div class="row">
                  <div class="col mx-4">
                    <?= view('Myth\Auth\Views\_message_block') ?>
                  </div>
                </div>

                  <div class="card-body">

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

                    <div class="table-responsive">
                      <table class="table table-striped" id="tableNormal">
                        <thead class="bg-primary" style="color: white;">
                          <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role User</th>
                            <th>Delete</th>
                            <th>Details</th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php $i = 1; foreach($users as $user) : ?>
                          <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $user->username; ?></td>
                            <td><?= $user->email; ?></td>
                            <td><?= $user->description; ?></td>
                            
                            <?php if (in_groups('admin')) : ?>
                            <td>
                              <form action="/user/<?= $user->userid; ?>" method="POST">
                              <?= csrf_field(); ?>
                              <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?')"><i class="fas fa-trash-alt"></i></button>
                              </form>
                            </td>
                            <?php endif; ?>

                            <td>
                              <a href="<?= base_url('profile/' . $user->userid); ?>" class="btn btn-success"><i class="fas fa-pen-square"></i></a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                          
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

        <!-- Modal -->
        <div class="modal fade" tabindex="-1" role="dialog" id="modalUser">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title"><?=lang('Auth.register')?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <!-- Modal Body -->
                  <form action="<?= route_to('register') ?>" method="POST">
                <?= csrf_field() ?>

                  <div class="form-group">
                    <label for="username"><?=lang('Auth.username')?></label>
                    <input id="username" type="text" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>" autocomplete="off">
                  </div>

                  <div class="form-group">
                    <label for="email"><?=lang('Auth.email')?></label>
                    <input id="email" type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>" autocomplete="off">
                    <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="password" class="d-block"><?=lang('Auth.password')?></label>
                      <div class="input-group">
                      <input id="password" type="password" class="form-control pwstrength <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?=lang('Auth.password')?>" autocomplete="off" data-toggle="password">
                        <div class="input-group-append">
                          <div class="input-group-text"><i class="fa fa-eye"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="pass_confirm" class="d-block"><?=lang('Auth.repeatPassword')?></label>
                      <div class="input-group">
                      <input id="pass_confirm" type="password" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off" data-toggle="password">
                        <div class="input-group-append">
                          <div class="input-group-text"><i class="fa fa-eye"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree" required>
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      <?=lang('Auth.register')?>
                    </button>
                  </div>
                </form>
                
            </div>
          </div>
        </div>
        <!-- End Modal -->

      </div>

<?= $this->endSection(); ?>