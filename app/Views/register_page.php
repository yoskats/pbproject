<?= $this->extend('layout') ?>
<?= $this->section('main') ?>

    <div class="col-12 col-md-8 offset-md-2 mr-4 pt-5 pb-5">
        <div class="bg-secondary">
            <h1 class="text-light pt-5 pb-5 text-center">Register To Phonebook</h1>
        </div>
    </div>

    <div class="col-12 col-md-8 offset-md-2 pt-5 pb-5">
        <form action=" <?php route_to('register') ?>" method="post">
            <?= view('Views\message') ?>

            <div class="form-group row h4">
                <label for="username" class="col-md-5 text-right"><?= lang('Auth.username') ?></label>
                <div class="col-md-4">
                    <input type="text" id="username" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                </div>
            </div>

            <div class="form-group row h4 ">
                <label for="email" class="col-md-5 text-right justify-content-center"><?= lang('Auth.email') ?></label>
                <div class="col-md-4">
                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                </div>
            </div>

            <div class="form-group row h4">
                <label for="password" class="col-md-5 text-right"><?= lang('Auth.password') ?></label>
                <div class="col-md-4">
                    <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                </div>
            </div>

            <div class="form-group row h4">
                <label for="pass_confirm" class="col-md-5 text-right"><?= lang('Auth.repeatPassword') ?></label>
                <div class="col-md-4">
                    <input type="password" class="form-control form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                </div>
            </div>

            <div class="col-md-4 offset-md-4 text-center h4">
                <button type="submit" class="btn btn-lg btn-danger">Register</button>
            </div>

            <div class="col-md-8 text-center h5">
                <a href="/login" class="text-danger">Already Registered?</a>
            </div>

        </form>
    </div>

<?= $this->endSection() ?>