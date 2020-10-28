<?= $this->extend('layout') ?>
<?= $this->section('main') ?>

<div class="col-12 col-md-8 offset-md-2 mr-4 pt-5 pb-5">
    <div class="bg-secondary">
        <h1 class="text-light pt-5 pb-5" style="text-align: center;">Item Page</h1>
        <h2 class="pt-5 pb-5 text-light" style="text-align: center;">Phonebook - Item of user: <?php echo $contact['id'] ?> </h2>
    </div>
</div>

<div class="col-12 col-md-8 offset-md-2 mr-4 pt-5 pb-5">
    <div class="button_container text-center">
        <a type="button" class="btn btn-danger" href="/edit/<?php echo $contact['id'] ?>">Edit</a>
        <form style='display:inline;' action="/delete/<?php echo $contact['id'] ?>" method="post">
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>

<div class="col-12 pt-5 pb-5 col-md-8 offset-md-2 mr-4">
    <form class="col-12 col-md-8 offset-md-2 pb-5">
        <div class="row1 pb-5">
            <div class="col1 pb-5">

                <div class="row">
                    <div class="col pl-5 border-left border-right border-danger">
                        <label class="h3">Full name</label>
                    </div>
                    <div class="col p-0 ml-5 border-right border-danger">
                        <p class="h3 text-muted"><?php echo $contact['name'] ?></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col pl-5 border-left border-right border-danger">
                        <label class="h3">Phone number</label>
                    </div>
                    <div class="col p-0 ml-5 border-right border-danger">
                        <p class="h3 text-muted"><?php echo $contact['phone'] ?></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col pl-5 border-left border-right border-danger">
                        <label class="h3"><?php echo $contact['email'] ?></label>
                    </div>
                    <div class="col p-0 ml-5 border-right border-danger">
                        <p class="h3 text-muted"><?php echo $contact['email'] ?></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col pl-5 border-left border-right border-danger">
                        <label class="h3">Birthday</label>
                    </div>
                    <div class="col p-0 ml-5 border-right border-danger">
                        <p class="h3 text-muted"><?php echo $contact['bday'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection() ?>