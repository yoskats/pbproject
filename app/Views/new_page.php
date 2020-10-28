<?= $this->extend('layout') ?>
<?= $this->section('main') ?>

<div class="col-12 col-md-8 offset-md-2 mr-4 pt-5 pb-5">
    <div class="bg-secondary">
        <h1 class="text-light pt-5 pb-5 text-center">Add New Contact</h1>
        <h2 class="text-light pt-5 pb-5 text-center">add new contact to you'r Phonebook</h2>
    </div>
</div>


<div class="col-12 col-md-8 offset-md-2 pt-5 pb-5">
    <?php if (!empty($errors)) : ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $field => $error) : ?>
                <p><?= $error ?></p>
            <?php endforeach ?>
        </div>
    <?php endif ?>
    <form class="users_num" action="/new" method="post" style="padding-left: 200px; padding-right: 200px;">
        <div class="row pt-5">
            <div class="col">

                <div class="row">
                    <div class="col" style="padding-bottom: 30px; padding-top: 8px;">
                        <label class="h3">Full name</label>
                    </div>
                    <div class="col" style="padding-bottom: 30px;">
                        <input type="text" class="form-control h3" name="name" id="name" placeholder="Full name" value="<?= set_value('name') ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col" style="padding-bottom: 30px; padding-top: 8px;">
                        <label class="h3">Phone number</label>
                    </div>
                    <div class="col" style="padding-bottom: 30px;">
                        <input type="tel" class="form-control h3" name="phone" id="phone_num" placeholder="Mobile phone number" value="<?= set_value('phone_num') ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col" style="padding-bottom: 30px; padding-top: 8px;">
                        <label class="h3">Email</label>
                    </div>
                    <div class="col" style="padding-bottom: 30px;">
                        <input type="text" class="form-control h3" name="email" id="email" placeholder="Email" value="<?= set_value('email') ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col" style="padding-bottom: 30px; padding-top: 8px;">
                        <label class="h3">Birthday Date</label>
                    </div>
                    <div class="col" style="padding-bottom: 30px;">
                        <input type="date" class="form-control h3" name="bday" id="bday" placeholder="01.01.2020" value="<?= set_value('bday') ?>">
                    </div>
                </div>

            </div>
        </div>

        <div class="col-12 col-md-8 offset-md-2 mr-4 pb-5">
            <div class="button_container text-center pb-5">
                <button type="submit" class="btn btn-danger">Save</button>
                <a type="button" href="/" class="btn btn-danger">Cancel</a>
            </div>
        </div>

    </form>
</div>

<?= $this->endSection() ?>