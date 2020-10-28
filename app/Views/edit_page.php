<?= $this->extend('layout') ?>
<?= $this->section('main') ?>

<div class="col-12 col-md-8 offset-md-2 mr-4 pt-5">
    <div class="bg-secondary">
        <h1 class="text-light pt-5 pb-5" style="text-align: center;">edit Page</h1>
        <h2 class="text-light pt-5 pb-5" style="text-align: center;">Phonebook - edit Items of users: <?php echo $contact['id'] ?> </h2>
    </div>
</div>


<div class="col-12 pb-5 col-md-8 offset-md-2 mr-4">
    <form class="col-12 col-md-8 offset-md-2 pb-5" action="/edit/<?php echo $contact['id'] ?>" method="post">
        <?php if (!empty($errors)) : ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $field => $error) : ?>
                    <p><?= $error ?></p>
                <?php endforeach ?>
            </div>
        <?php endif ?>
        <div class="pb-5">
            <div class="button_container text-center" style="padding-top: 30px;">
                <button type="submit" class="btn btn-danger">Save</button>
                <a type="button" href="/" class="btn btn-danger ">Cancel</a>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col pb-5">

                <div class="row">
                    <div class="col">
                        <label class="h3">Full name</label>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control h3" name="name" id="exampleInputEmail1" value="<?php echo $contact['name'] ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label class="h3">Phone number</label>
                    </div>
                    <div class="col">
                        <input type="tel" class="form-control h3" name="phone" id="exampleInputEmail1" value="<?php echo $contact['phone'] ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label class="h3">Email</label>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control h3" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $contact['email'] ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label class="h3">Birthday</label>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control h3" name="bday" id="exampleInputEmail1" value="<?php echo $contact['bday'] ?>">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection() ?>