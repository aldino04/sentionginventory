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
              <div class="card-header"><h4><?=lang('Auth.register')?></h4></div>
              
              <div class="row">
                <div class="col mx-4">
                  <?= view('Myth\Auth\Views\_message_block') ?>
                </div>
              </div>

              <div class="card-body">
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
                    <div class="form-group col-6">
                      <label for="password" class="d-block"><?=lang('Auth.password')?></label>
                      <input id="password" type="password" class="form-control pwstrength <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" data-indicator="pwindicator" name="password" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="pass_confirm" class="d-block"><?=lang('Auth.repeatPassword')?></label>
                      <input id="pass_confirm" type="password" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
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

                  <p><?=lang('Auth.alreadyRegistered')?> <a href="<?= route_to('login') ?>"><?=lang('Auth.signIn')?></a></p>
                </form>
              </div>
            </div>
            <div class="footer text-center mb-3" style="color: white;">
              Copyright &copy; <?= date('Y'); ?> <div class="bullet"></div> Developed by Sentiong Project</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?= $this->endSection(); ?>