    <div class="header col-12 col-md-8 offset-md-2 bg-dark">
        <nav class="navbar navbar-expand-lg navbar-light text-white">
            <a class="navbar-brand  text-white" href="/">Phone Book</a>
            <button class="navbar-toggler  text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-6">
                <?php if (logged_in()) : ?>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active ml-4">
                                <a class="nav-link  text-white" href="/list">Phone book list<span class="sr-only"></span></a>
                            </li>
                            <li class="nav-item active ml-4">
                                <a class="nav-link  text-white" href="/new">Add new contact</a>
                            </li>
                        </ul>
                    </div>
                <?php else : ?>
                    <div class="collapse navbar-collapse col-6" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active ml-4">
                                <a class="nav-link  text-white" href="/about">About us<span class="sr-only"></span></a>
                            </li>
                        </ul>
                    </div>
                <?php endif ?>
            </div>


            <div class="col-6">
                <?php if (logged_in()) : ?>
                    <div class=" navbar-collapse  col-6">
                        <ul class=" navbar-nav mr-auto">
                            <li class="nav-item active ml-4">
                                <a class="nav-link text-white" href=""><i>Hello  <b><?php echo(user()->username) ?></b> </i></a>
                            </li>
                            <li class="nav-item active ml-4">
                                <a class="nav-link text-white" href="/logout">Logout</a>
                            </li>
                        </ul>
                    </div>

                <?php else : ?>
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
                <?php endif ?>
            </div>

        </nav>
    </div>