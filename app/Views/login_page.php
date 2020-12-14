<?= $this->extend('layout') ?>
<?= $this->section('main') ?>


<div class="col-12 col-md-8 offset-md-2 mr-4 pt-5 pb-5">
    <div class="bg-secondary">
        <h1 class="text-light pt-5 pb-5 text-center">Login To Phonebook</h1>
    </div>
</div>

<div class="col-12 col-md-8 offset-md-2 pt-5 pb-5">
    <form id="login-form" class="form" action="<?= route_to('login_page') ?>" method="post">
        <div class="col-md-6 offset-md-3 h5">
            <?= view('Views\message') ?>
        </div>
        <div class="col-md-6 offset-md-3">
            <h3 class="text-center h2">Login</h3>
        </div>
        <?php if ($config->validFields === ['email']) : ?>
            <div class="form-group col-md-6 offset-md-3 h4">
                <label for="login" class="text"><?= lang('Auth.email') ?></label><br>
                <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                <div class="invalid-feedback col-md-6 offset-md-3 h4">
                    <?= session('errors.login') ?>
                </div>
            </div>
        <?php else : ?>
            <div class="form-group col-md-6 offset-md-3 h4">
                <label for="login"><?= lang('Auth.emailOrUsername') ?></label>
                <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                <div class="invalid-feedback col-md-6 offset-md-3 h4">
                    <?= session('errors.login') ?>
                </div>
            </div>
        <?php endif ?>

        <div class="form-group col-md-6 offset-md-3 h4">
            <label for="password" class="text"><?= lang('Auth.password') ?></label><br>
            <input type="password" name="password" id="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
            <div class="invalid-feedback">
                <?= session('errors.password') ?>
            </div>
        </div>


        <div class="form-group col-md-6 offset-md-3 text-center h4">
            <input type="submit" name="submit" class="btn btn-danger btn-lg" value="login">
        </div>


        <div id="register-link" class="text-left col-md-8 offset-md-3 h5">
            <a href="/register" class="text-danger">Register here</a>
        </div>
        <?php if ($config->activeResetter) : ?>
            <div class="text-left col-md-6 offset-md-3 h5">
                <p><a class="text-danger" href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
            </div>
        <?php endif; ?>

    </form>
</div>



<?= $this->endSection() ?>