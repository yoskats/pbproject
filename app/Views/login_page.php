<?= $this->extend('layout') ?>
<?= $this->section('main') ?>
<div class="container login-section d-flex flex-column">
    <div class="d-flex flex-column mx-auto col-sm-12 col-md-12 col-lg-10 col-xl-10 col-12 mr-4 py-5">
        <div class="bg-secondary">
            <h1 class="login-title text-light pt-5 pb-5 text-center">Login to Phonebook</h1>
        </div>
    </div>

    <div class="d-flex flex-column mx-auto col-sm-12 col-md-12 col-lg-10 col-xl-10 col-12 py-5">
        <form id="login-form" class="form" action="<?= route_to('login_page') ?>" method="post">
            <div class="col-md-6 offset-md-3 h5">
                <?= view('Views\message') ?>
            </div>
            <?php if ($config->validFields === ['email']) : ?>
                <div class="form-group col-md-6 offset-md-3 h4">
                    <label for="login" class="log-label"><?= lang('Auth.email') ?></label><br>
                    <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                    <div class="invalid-feedback col-md-6 offset-md-3 h4">
                        <?= session('errors.login') ?>
                    </div>
                </div>
            <?php else : ?>
                <div class="form-group col-md-6 offset-md-3 h4">
                    <label for="login" class="log-label"><?= lang('Auth.emailOrUsername') ?></label>
                    <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                    <div class="invalid-feedback col-md-6 offset-md-3 h4">
                        <?= session('errors.login') ?>
                    </div>
                </div>
            <?php endif ?>

            <div class="form-group col-md-6 offset-md-3 h4">
                <label for="password" class="log-label"><?= lang('Auth.password') ?></label><br>
                <input type="password" name="password" id="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                <div class="invalid-feedback">
                    <?= session('errors.password') ?>
                </div>
            </div>


            <div class="form-group col-12 d-flex justify-content-center h4">
                <input type="submit" name="submit" class="mx-auto btn btn-lg py-3 btn-danger" value="login">
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
</div>


<style>
    .login-section {
        margin-top: 95px;
        margin-bottom: 95px;
    }


    @media (max-width: 992px) {
        .login-section {
            margin-top: 60px;
            margin-bottom: 60px;
        }
    }

    @media (max-width: 767px) {
        .login-section {
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .log-label {
            visibility: hidden;
        }

        .login-title {
            font-size: 25px;
        }
    }

    @media (max-width: 600px) {}
</style>



<?= $this->endSection() ?>