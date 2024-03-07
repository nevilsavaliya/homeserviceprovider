    <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- fevicon -->
        <link rel="icon" href="images/fevicon.png" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <!-- owl stylesheets -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
              media="screen">
        <style>
            .dropbtn {
                background-color: transparent;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                z-index: 1;
            }

            .dropdown-content a {
                font-size: 15px;
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {
                background-color: #ddd;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }

            .dropdown:hover .dropbtn {
                background-color: transparent;
            }
        </style>
    </head>
    <body>
        <?php
        include './DatabaseConnection.php';
        ?>
        <div class="header_section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <div></div>
                    </div>
                    <div class="col-md-5">
                        <div>
                            <div class="togle_3">
                                <div class="menu_main">
                                    <span><a href="index.php">Home</a></span>&nbsp;&nbsp;&nbsp;
                                    <span><a href="#services">Services</a></span>&nbsp;&nbsp;&nbsp;
                                    <span><a href="#about">About us</a></span>&nbsp;&nbsp;&nbsp;
                                    <span><a href="#contactus">Contact us</a></span>&nbsp;&nbsp;&nbsp;
                                    <span class="" style="margin-left: 0px;">
                                        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
                                            <div class="dropdown">
                                                <button class="dropbtn" style="font-size: 20px;padding: 0px;padding-top: 3px;">
                                                    <a href="CustomerProfile.php">profile</a>
                                                </button>
                                            </div>
                                            <?php
                                        } else {
                                            ?>
                                            <div class="dropdown">
                                                <button class="dropbtn" style="font-size: 20px;padding: 0px;padding-top: 3px;">
                                                    <!--<a href="Customerlogin.php">-->
                                                    Login
                                                <!--</a>-->
                                                        <svg fill="#ffffff" height="15px" width="15px" version="1.1" id="Layer_1"
                                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         viewBox="0 0 330 330" xml:space="preserve">
                                                    <path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393
                                                          c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393
                                                          s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                                    </svg>
                                                </button>
                                                <div class="dropdown-content">
                                                        <a href="Customerlogin.php">Customer</a>
                                                        <a href="Servicelogin.php">Service Provider</a>
                                                    </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </span>
                                </div>
                                <!--<div class="shoping_bag"><img src="images/search-icon.png"></div>-->
                            </div>

                            <!--                            <div id="myNav" class="overlay">
                                                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                                            <div class="overlay-content">
                                                                <a href="index.php">Home</a>
                                                                <a href="services.php">Services</a>
                                                                <a href="about.php">About</a>
                                                                <a href="choose.php">Choose</a>
                                                                <a href="team.php">Team</a>
                                                                <a href="contact.php">Contact Us</a>
                                                            </div>
                                                        </div>
                                                        <span class="navbar-toggler-icon"></span>
                                                        <span onclick="openNav()"><img src="images/toggle-icon.png" class="toggle_menu"></span>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner section start -->

            <div class="banner_section layout_padding">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <h1 class="banner_taital">Best YOUR</h1>
                            <h1 class="banner_taital_1">Home Service Provider</h1>
                            <p class="banner_text">Have faith, and we will resolve all your problems in a few minutes.</p>
                            <div class="contact_bt">
                                <a href="#contactus">CONTACT US
                                    <span class="contact_padding">
                                        <img src="images/contact-icon.png">
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div><img src="images/img-1.png" class="image_1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner section end -->
        </div>
    </body>
</html>
