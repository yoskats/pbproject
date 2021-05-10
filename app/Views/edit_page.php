<?= $this->extend('layout') ?>
<?= $this->section('main') ?>



<div class="container list-section d-flex flex-column">
    <div class="d-flex flex-column mx-auto col-sm-12 col-md-12 col-lg-10 col-xl-10 col-12 py-5">
        <div class="bg-secondary">
            <h1 class="edit-title text-light pt-5" style="text-align: center;">edit Page</h1>
            <h2 class="edit-sub-title text-light py-5" style="text-align: center;">Phonebook - edit Items of users: <?php echo $contact['id'] ?> </h2>
        </div>
    </div>


    <div class="d-flex flex-column mx-auto col-sm-12 col-md-12 col-lg-10 col-xl-10 col-12 py-5">
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
                            <label class="edit-lable h3">Full name</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control h3" name="name" id="exampleInputEmail1" value="<?php echo $contact['name'] ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label class="edit-lable h3">Phone number</label>
                        </div>
                        <div class="col">
                            <input type="tel" class="form-control h3" name="phone" id="exampleInputEmail1" value="<?php echo $contact['phone'] ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label class="edit-lable h3">Email</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control h3" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $contact['email'] ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label class="edit-lable h3">Birthday</label>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control h3" name="bday" id="exampleInputEmail1" value="<?php echo $contact['bday'] ?>">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>




<style>
    @media (max-width: 768px) {
        .edit-title {
            font-size: 28px;
        }

        .edit-sub-title {
            font-size: 22px;
        }

        .edit-lable {
            font-size: 22px;
        }

    }

    @media (max-width: 600px) {
        .edit-title {
            font-size: 25px;
        }

        .edit-sub-title {
            font-size: 18px;
        }


        .edit-lable {
            font-size: 18px;
        }


    }
</style>


<?= $this->endSection() ?>