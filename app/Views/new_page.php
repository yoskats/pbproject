<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/vendors/bootstrap.min-4.1.3.css">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Add New Contact</title>
</head>

<body class="bg-light">
    <div class="header col-12 col-md-8 offset-md-2 bg-dark">
        <nav class="navbar navbar-expand-lg navbar-light text-white">
            <a class="navbar-brand  text-white" href="/">Phone Book</a>
            <button class="navbar-toggler  text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active ml-4">
                        <a class="nav-link  text-white" href="/">Phone book list<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active ml-4">
                        <a class="nav-link  text-white" href="/new">Add new contact</a>
                    </li>
                    <li class="nav-item active ml-4">
                        <a class="nav-link  text-white" href="/show/1">Show a item</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- <div class="button_container col-3" style="padding-top: 30px;margin: auto; padding-right: 140px; pad  -->

    <div class="col-12 col-md-8 offset-md-2 mr-4 pt-5 pb-5">
        <div class="bg-secondary">
            <h1 class="text-light pt-5 pb-5 text-center">Add New Contact</h1>
            <h2 class="text-light pt-5 pb-5 text-center">Phonebook - add new contact: 1</h2>
        </div>
    </div>


    <div class="col-12 col-md-8 offset-md-2 pt-5 pb-5">
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
                            <input type="text" class="form-control h3" name="phone_num" id="phone_num" placeholder="Mobile phone number" value="<?= set_value('phone_num') ?>">
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
                            <input type="calender" class="form-control h3" name="bday" id="bday" placeholder="01.01.2020" value="<?= set_value('bday') ?>">
                        </div>
                    </div>

                    <?php if (isset($validation)) : ?>
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors() ?>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="col-12 pt-5" style="padding-left: 0px; padding-right: 0px;">
                            <div class="alert alert-success" role="alert">
                                <?php echo "new contact created sucssesfully" ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </form>
    </div>


    <div class="col-12 col-md-8 offset-md-2 mr-4 pb-5">
        <div class=" button_container text-center pb-5">
            <button type="save_btn" name="save_btn btn-danger" class="btn btn-danger">Save</button>
            <button type="cancel_btn" name="cancel_btn" class="btn btn-danger">Cancel</button>
        </div>
    </div>


    <!-- Footer -->
    <div class="page-footer col-12 col-md-8 offset-md-2 pt-5 bg-dark">
        <footer>

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3 text-white mb-5">© 2020 Copyright saved to : yosi@123code.co
                <a class="text-danger text-center" href="/"> Yosi's Phonebook</a>
            </div>
            <!-- Copyright -->

        </footer>
    </div>
    <!-- Footer -->




    <script src="/vendors/jquery-3.5.1.min.js"></script>
    <script src="/vendors/popper-1.14.3.min.js"></script>
    <script src="/vendors/bootstrap.min-4.1.3.js"></script>
</body>

</html>