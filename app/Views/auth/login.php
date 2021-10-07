<?= $this->extend('auth/authTemplate'); ?>

<?= $this->section('auth'); ?>

  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="my-3 login-brand">
              <img src="<?= base_url(); ?>/img/si.png" alt="logo" width="540" class="img-thumbnail">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4><?=lang('Auth.loginTitle')?></h4></div>

              <div class="row">
                <div class="col mx-4">
                  <?= view('Myth\Auth\Views\_message_block') ?>
                </div>
              </div>

              <div class="card-body">
                <!-- <form method="POST" action="#" class="needs-validation" novalidate=""> -->
                  <form action="<?= route_to('login') ?>" method="post">
						      <?= csrf_field() ?>

<?php if ($config->validFields === ['email']): ?>
                  <div class="form-group">
                    <label for="login"><?=lang('Auth.email')?></label>
                    <input type="email" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?=lang('Auth.email')?>" autofocus>
                    <div class="invalid-feedback">
                      <?= session('errors.login') ?>
                    </div>
                  </div>
<?php else: ?>
                    <div class="form-group">
                      <label for="login"><?=lang('Auth.emailOrUsername')?></label>
                      <input type="text" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?=lang('Auth.emailOrUsername')?>" autofocus>
                      <div class="invalid-feedback">
                        <?= session('errors.login') ?>
                      </div>
                    </div>
<?php endif; ?>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label"><?=lang('Auth.password')?></label>
                      <div class="float-right">
                        <a href="<?= route_to('forgot') ?>" class="text-small">
                          <?=lang('Auth.forgotYourPassword')?>
                        </a>
                      </div>
                    </div>
                    <div class="input-group">
                      <input id="password" type="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" tabindex="2" placeholder="<?=lang('Auth.password')?>" data-toggle="password">
                        <div class="input-group-append">
                          <div class="input-group-text"><i class="fa fa-eye"></i></div>
                        </div>
                      <div class="invalid-feedback">
                        <?= session('errors.password') ?>
                      </div>
                    </div>
                  </div>

<?php if ($config->allowRemembering): ?>
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me" <?php if(old('remember')) : ?> checked <?php endif ?> >
                <label class="custom-control-label" for="remember-me"><?=lang('Auth.rememberMe')?></label>
              </div>
            </div>
<?php endif; ?>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      <?=lang('Auth.loginAction')?>
                    </button>
                  </div>
                </form>

                  <!-- <div class=" text-muted text-center">
                    <a href="<?= route_to('register') ?>"><?=lang('Auth.needAnAccount')?></a>
                  </div> -->

                </div>

              </div>
              <div class="footer text-center pb-3" style="color: white;" >
                Copyright &copy; <?= date('Y'); ?> <div class="bullet"></div> Developed by Sentiong Project</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?= $this->endSection(); ?>
  