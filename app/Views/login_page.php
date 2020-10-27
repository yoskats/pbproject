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
            <h1 class="text-light pt-5 pb-5 text-center">Login To Phonebook</h1>
        </div>
    </div>

    <div class="col-12 col-md-8 offset-md-2 pt-5 pb-5">
        <form id="login-form" class="form" action="" method="post">
            <h3 class="text-center h2">Login</h3>
            <div class="form-group col-md-6 offset-md-3 h4">
                <label for="username" class="text">Username:</label><br>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group col-md-6 offset-md-3 h4">
                <label for="password" class="text">Password:</label><br>
                <input type="text" name="password" id="password" class="form-control">
            </div>
            <div class="form-group col-md-6 offset-md-3 text-center h4">
                <input type="submit" name="submit" class="btn btn-danger btn-lg" value="login">
            </div>
            <div id="register-link" class="text-right col-md-6 offset-md-3 h5">
                <a href="/register" class="text-danger">Register here</a>
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