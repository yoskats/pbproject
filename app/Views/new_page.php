<?= $this->extend('layout') ?>
<?= $this->section('main') ?>
<div class="container new-section d-flex flex-column justify-content-center">
    <div class="d-flex flex-column mx-auto col-sm-12 col-md-12 col-lg-10 col-xl-10 col-12 my-5 bg-secondary">

        <h1 class="new-title text-light pt-5 text-center">Add New Contact</h1>
        <h2 class="new-sub-title text-light pt-5 pb-5 text-center">add new contact to you'r Phonebook</h2>

    </div>


    <div class="d-flex flex-column mx-auto col-sm-12 col-md-12 col-lg-10 col-xl-10 col-12 py-5">
        <?php if (!empty($errors)) : ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $field => $error) : ?>
                    <p><?= $error ?></p>
                <?php endforeach ?>
            </div>
        <?php endif ?>
        <form class="users_num d-flex flex-column justify-content-center" action="/new" method="post">
            <div class="row">
                <div class="col-12">

                    <div class="row justify-content-center">
                        <div class="col" style="padding-bottom: 30px;">
                            <input type="hidden" class="form-control h3" name="user_id" id="user_id" value="<?php echo user_id(); ?>">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="new-lable col-4 col-xl-4 col-sm-6" style="padding-bottom: 30px; padding-top: 8px;">
                            <label class=" h3">Full name</label>
                        </div>
                        <div class="col-8 col-xl-4 col-md-4 col-sm-8" style="padding-bottom: 30px;">
                            <input type="text" class="form-control h3" name="name" id="name" placeholder="Full name" value="<?= set_value('name') ?>">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="new-lable col-4 col-xl-4 col-sm-6" style="padding-bottom: 30px; padding-top: 8px;">
                            <label class=" h3">Phone number</label>
                        </div>
                        <div class="col-8 col-xl-4 col-md-4 col-sm-8" style="padding-bottom: 30px;">
                            <input type="tel" class="form-control h3" name="phone" id="phone_num" placeholder="Mobile phone number" value="<?= set_value('phone_num') ?>">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="new-lable col-4 col-xl-4 col-sm-6" style="padding-bottom: 30px; padding-top: 8px;">
                            <label class=" h3">Email</label>
                        </div>
                        <div class="col-8 col-xl-4 col-md-4 col-sm-8" style="padding-bottom: 30px;">
                            <input type="text" class="form-control h3" name="email" id="email" placeholder="Email" value="<?= set_value('email') ?>">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="new-lable col-4  col-xl-4 col-sm-6" style="padding-bottom: 30px; padding-top: 8px;">
                            <label class=" h3">Birthday Date</label>
                        </div>
                        <div class="col-8 col-xl-4 col-md-4 col-sm-8" style="padding-bottom: 30px;">
                            <input type="date" class="form-control h3" name="bday" id="bday" placeholder="01.01.2020" value="<?= set_value('bday') ?>">
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 col-md-8 offset-md-2 mr-4 pb-5">
                <div class="button_container text-center pb-5">
                    <button type="submit" class="btn btn-danger">Add</button>
                    <a type="button" href="/" class="btn btn-danger">Cancel</a>
                </div>
            </div>

        </form>
    </div>
</div>



<style>
    @media (max-width: 768px) {
        .new-title {
            font-size: 28px;
        }

        .new-sub-title {
            font-size: 22px;
        }

        .new-lable {
            display: none;
        }

    }

    @media (max-width: 600px) {
        .new-title {
            font-size: 25px;
        }

        .new-sub-title {
            font-size: 18px;
        }

    }
</style>


<?= $this->endSection() ?>