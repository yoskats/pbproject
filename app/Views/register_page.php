<?= $this->extend('layout') ?>
<?= $this->section('main') ?>

<div class="col-12 col-md-8 offset-md-2 mr-4 pt-5 pb-5">
    <div class="bg-secondary">
        <h1 class="text-light pt-5 pb-5 text-center">Register To Phonebook</h1>
    </div>
</div>

<div class="col-12 col-md-8 offset-md-2 pt-5 pb-5">
    <form action="/register" method="post">

        <div class="form-group row h4">
            <label for="username" class="col-md-5 text-md-right">Username</label>
            <div class="col-md-4">
                <input type="text" id="username" class="form-control" name="username" required autofocus>
            </div>
        </div>

        <div class="form-group row h4">
            <label for="email_address" class="col-md-5 text-md-right">E-Mail Address</label>
            <div class="col-md-4">
                <input type="text" id="email_address" class="form-control" name="email-address" required autofocus>
            </div>
        </div>

        <div class="form-group row h4">
            <label for="password" class="col-md-5 text-md-right">Password</label>
            <div class="col-md-4">
                <input type="password" id="password" class="form-control" name="password" required>
            </div>
        </div>

        <div class="form-group row h4">
            <label for="password" class="col-md-5 text-md-right">Confirm Password</label>
            <div class="col-md-4">
                <input type="password" id="password" class="form-control" name="password" required>
            </div>
        </div>

        <div class="col-md-4 offset-md-4 text-center h4">
            <button type="submit" class="btn btn-lg btn-danger">Register</button>
        </div>

        <div class="col-md-6 offset-md-4 text-right h5">
            <a href="/login" class="text-danger">Already Registered?</a>
        </div>

    </form>
</div>

<?= $this->endSection() ?>