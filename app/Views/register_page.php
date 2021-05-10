<?= $this->extend('layout') ?>
<?= $this->section('main') ?>

<div class="container register-section d-flex flex-column">
    <div class="d-flex flex-column mx-auto col-sm-12 col-md-12 col-lg-10 col-xl-10 col-12">
        <div class="bg-secondary my-5">
            <h1 class="register-title text-light py-5 text-center">Registretion for Phonebook</h1>
        </div>
    </div>

    <div class="d-flex flex-column justify-content-center mx-auto col-sm-12 col-md-12 col-lg-10 col-xl-10 col-12 py-5">
        <form action=" <?php route_to('register') ?>" method="post">
            <?= view('Views\message') ?>

            <div class="form-group col-12 d-flex justify-content-center h4">
                <label for="username" class="register-lable black-label col-5 text-right"><?= lang('Auth.username') ?></label>
                <div class="input-wrraper justify-content-center col-8 col-xl-5 col-md-5 col-sm-8">
                    <input type="text" id="username" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                </div>
            </div>

            <div class="form-group col-12 d-flex h4 justify-content-center">
                <label for="email" class="register-lable black-label col-5 text-right"><?= lang('Auth.email') ?></label>
                <div class="input-wrraper justify-content-center col-8 col-xl-5 col-md-5 col-sm-8">
                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                </div>
            </div>

            <div class="form-group col-12 d-flex h4 justify-content-center">
                <label for="password" class="register-lable black-label col-5 text-right"><?= lang('Auth.password') ?></label>
                <div class="input-wrraper justify-content-center col-8 col-xl-5 col-md-5 col-sm-8">
                    <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                </div>
            </div>

            <div class="form-group col-12 d-flex h4 justify-content-center">
                <label for="pass_confirm" class="register-lable black-label col-5 text-right"><?= lang('Auth.repeatPassword') ?></label>
                <div class="input-wrraper justify-content-center col-8 col-xl-5 col-md-5 col-sm-8">
                    <input type="password" class="form-control form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                </div>
            </div>

            <div class="col-12 d-flex justify-content-center py-3 h4">
                <button type="submit" class="mx-auto btn btn-md py-3 btn-danger">Register</button>
            </div>

            <div class="col-md-8 text-center h5">
                <a href="/login" class="text-danger">Already Registered?</a>
            </div>

        </form>
    </div>
</div>


<style>
    .register-section {
        margin-top: 105px;
        margin-bottom: 105px;
    }

    .black-label {
        margin: auto 0;
    }


    @media (max-width: 992px) {
        .register-section {
            margin-top: 70px;
            margin-bottom: 70px;
        }
    }

    @media (max-width: 767px) {
        .register-section {
            margin-top: 60px;
            margin-bottom: 60px;
        }

        .register-title {
            font-size: 25px;
        }

        .register-lable {
            display: none;
        }
    }

    @media (max-width: 600px) {
        .register-section {
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .black-label {
            display: none;
        }

        .form-group {
            justify-content: center;
        }

        .input-wrraper {
            flex: 0 0 100%;
            max-width: 80%;
        }


    }
</style>



<?= $this->endSection() ?>