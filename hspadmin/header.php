<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
    </head>
    <body>
        <?php
        include './DatabaseConnection.php';
        ?>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand ps-3" href="index.html">Home Service Provider</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <!--                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                                </div>-->
            </form>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="AdminProfile.php">Profile</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="Dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="Admin.php">
                                <div class="sb-nav-link-icon"><i class="fa-regular fa-user"></i></div>
                                Admin
                            </a>
                            <a class="nav-link" href="Customer.php">
                                <div class="sb-nav-link-icon"><i class="fa-regular fa-user"></i></div>
                                Customer
                            </a>
                            <a class="nav-link" href="ServiceProvider.php">
                                <div class="sb-nav-link-icon"><i class="fa-regular fa-user"></i></div>
                                Service Provider
                            </a>
                            <a class="nav-link" href="All_Service.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                                All service
                            </a>
                            <a class="nav-link" href="Service_customer.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                                service
                            </a>
                            <a class="nav-link" href="complain.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                                Subscribe
                            </a>
                             <a class="nav-link" href="feedback.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                                Feedback
                            </a>
                            <a class="nav-link" href="AddService.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                                Add Service
                            </a>
                            <a class="nav-link" href="emergencyservice.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                                Emergency Service
                            </a>
                            <!--                            <a class="nav-link" href="Offers.php">
                                                            <div class="sb-nav-link-icon"><i class="fa-solid fa-car"></i></div>
                                                            feedback
                                                        </a>
                                                        <a class="nav-link" href="Offers.php">
                                                            <div class="sb-nav-link-icon"><i class="fa-solid fa-car"></i></div>
                                                            assign service
                                                        </a>
                                                        <a class="nav-link" href="Offers.php">
                                                            <div class="sb-nav-link-icon"><i class="fa-solid fa-car"></i></div>
                                                            payment
                                                        </a>
                                                        <a class="nav-link" href="Offers.php">
                                                            <div class="sb-nav-link-icon"><i class="fa-solid fa-car"></i></div>
                                                            service master
                                                        </a>
                                                        <a class="nav-link" href="Offers.php">
                                                            <div class="sb-nav-link-icon"><i class="fa-solid fa-car"></i></div>
                                                            sub service
                                                        </a>-->
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php
                        echo $_SESSION['AdminID'];
                        ?>
                    </div>
                </nav>
            </div>
    </body>
</html>
