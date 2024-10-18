    <!-- Header Start -->
    <header class="main-header">
        <div class="">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo HOST_BASE_URL; ?>assets/images/site-logo/logo.svg" alt="Logo">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="#">home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">about us</a></li>
                                <li class="nav-item submenu"><a class="nav-link" href="#">services</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="#">service
                                                details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">portfolio
                                                details </a></li>

                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#">portfolio</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">blog</a></li>
                                </li>
                            </ul>
                        </div>
                        <!-- Let’s Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="#" class="btn-default">free consultation</a>
                        </div>
                        <!-- Let’s Start Button End -->
                    </div>
                    <!-- Main Menu End -->

                    <div class="navbar-toggle d-lg-none">
                        <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                            aria-controls="offcanvasExample">
                            <i class="fa-solid fa-bars"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header End -->


    <!-- ============Mobile Menu Start============= -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images,
                lists, etc.
            </div>
            <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Dropdown button
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ============Mobile Menu End============= -->