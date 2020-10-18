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
    <title>Contact page</title>
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
                </ul>
            </div>
        </nav>
    </div>

    <div class="col-12 col-md-8 offset-md-2 mr-4 pt-5 pb-5">
        <div class="bg-secondary">
            <h1 class="text-light pt-5 pb-5" style="text-align: center;">Item Page</h1>
            <h2 class="pt-5 pb-5 text-light" style="text-align: center;">Phonebook - Item of user: <?php echo $contact['id'] ?> </h2>
        </div>
    </div>

    <div class="col-12 col-md-8 offset-md-2 mr-4 pt-5 pb-5">
        <div class="button_container text-center">
            <a type="button" class="btn btn-danger" href="/edit/<?php echo $contact['id'] ?>">Edit</a>
            <form style='display:inline;' action="/delete/<?php echo $contact['id'] ?>" method="post"> <button type="submit" class="btn btn-danger">Delete</button></form>
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