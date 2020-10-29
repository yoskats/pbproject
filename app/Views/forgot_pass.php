<?= $this->extend('layout') ?>
<?= $this->section('main') ?>


<div class="col-12 col-md-8 offset-md-2 mr-4 pt-5 pb-5">
    <div class="bg-secondary">
        <h1 class="text-light pt-5 pb-5 text-center">Password forgoten - Phonebook</h1>
    </div>
</div>

<div class="col-12 col-md-8 offset-md-2 pt-5 pb-5">
    <form action="<?= route_to('forgot_pass') ?>" method="post">
        <div class="col-md-6 offset-md-3 h5">
            <?= view('Views\message') ?>
        </div>
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center">Forgot you'r password?</h2>
        </div>
        <div class="col-md-6 mt-2 mb-5 offset-md-3">
            <h4 class="text-center">No problem! Enter your email below and we will send instructions to reset your password.</h4>
        </div>

        <div class="form-group col-md-6 offset-md-3 h4">
            <label for="email"><?= lang('Auth.emailAddress') ?></label><br>
            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>">
            <div class="invalid-feedback col-md-6 offset-md-3 h4">
                <?= session('errors.login') ?>
            </div>
        </div>

        <div class="form-group col-md-6 offset-md-3 text-center h4">
            <input type="submit" name="submit" class="btn btn-danger btn-lg btn-block" value="send Instructions">
        </div>


        <div id="register-link" class="text-right col-md-6 offset-md-3 h5">
            <a href="/register" class="text-danger">Register here</a>
        </div>
    </form>
</div>



<?= $this->endSection() ?>