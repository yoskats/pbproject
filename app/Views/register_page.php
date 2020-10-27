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

            <div class="collapse navbar-collapse col-6" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active ml-4">
                        <a class="nav-link  text-white" href="/">Phone book list<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active ml-4">
                        <a class="nav-link  text-white" href="/new">Add new contact</a>
                    </li>
                </ul>
            </div>
            <div class=" navbar-collapse  col-6">
                <ul class=" navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="/register">Register</a>
                    </li>
                    <li class="nav-item active ml-4">
                        <a class="nav-link text-white" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- <div class="button_container col-3" style="padding-top: 30px;margin: auto; padding-right: 140px; pad  -->

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

            <div class="col-md-6 offset-md-4 text-center h4">
                <button type="submit" class="btn btn-lg btn-danger">Register</button>
            </div>

            <div class="col-md-6 offset-md-4 text-right h5">
                <a href="/login" class="text-danger">Already Registered?</a>
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






<!-- <div class="col-12 pt-5" style="padding-left: 0px; padding-right: 0px;">
        <div class="alert alert-success" role="alert">
             echo "new contact created sucssesfully" ?>
        </div>
    </div>
 endif; ?> -->