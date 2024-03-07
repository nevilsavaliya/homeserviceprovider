<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admin Profile</title>

        <link rel="shortcut icon" href="../assets/images/fav.jpg">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/fontawsom-all.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    </head>

    <body>
        <?php
        session_start();
        include './DatabaseConnection.php';
        $email = $_SESSION['AdminID'];  
        $sql = "SELECT * FROM `admin` WHERE Admin_Email = '" . $email . "'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        ?>
        <form method="post">
            <div class="container-fluid overcover">
                <div class="container profile-box">
                    <div id="about" class="home row">
                        <div class="image-box">
                            <img src="../assets/images/profile.jpg" alt="">
                        </div>
                    </div>
                    <div class="basic-detail row">
                        <div class="col-md-8 detail-col">
                            <h2><?php echo $row['Admin_Name']; ?></h2>
                            <div class="btn-cover">
                                <a href="Dashboard.php"class="btn btn-success">Go to Dashboard</a>
                            </div>
                        </div>

                    </div>


                    <section id="profile" class="home-dat">
                        <div class="row no-margin home-det">

                            <div class="col-md-12 home-dat">

                                <!--                        <div class="links">
                                                            <div class="row ">
                                                                <div class="col-xl-6 col-md-12">
                                                                    <ul class="btn-link">
                                                                        <li>
                                                                            <a href="logout.php"><i class="fas fa-cloud-download-alt"></i>LogOut</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-xl-6 col-md-12">
                                                                    <ul class="social-link">
                                                                        <li><i class="fab fa-facebook-f"></i></li>
                                                                        <li><i class="fab fa-twitter"></i></li>
                                                                        <li><i class="fab fa-pinterest-p"></i></li>
                                                                        <li><i class="fab fa-linkedin-in"></i></li>
                                                                        <li><i class="fab fa-linkedin-in"></i></li>
                                                                        <li><i class="fab fa-youtube"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>-->
                                <div class="jumbo-address">
                                    <div class="row no-margin">
                                        <div class="col-lg-6 no-padding">

                                            <table class="addrss-list">
                                                <tbody>
                                                    <tr>
                                                        <th>Admin Id</th>
                                                        <td><?php echo $row['Admin_id']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="col-lg-6 no-padding">
                                            <table class="addrss-list">
                                                <tbody>
                                                    <tr>
                                                        <th>Email Address</th>
                                                        <td><?php echo $row['Admin_Email']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>

<!--            <section id="resume" class="education-detail">
                <div class="sec-title">
                    <h2>Education Details</h2>
                </div>
                <div class="service no-margin row">
                    <div class="col-sm-3 resume-dat serv-logo">
                        <h6>2013-2015</h6>
                        <p>Master Degree</p>
                    </div>
                    <div class="col-sm-9 rgbf">
                        <h5>Cambridg University</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="service no-margin row">
                    <div class="col-sm-3 resume-dat serv-logo">
                        <h6>2013-2015</h6>
                        <p>Bacholers Degree</p>
                    </div>
                    <div class="col-sm-9 rgbf">
                        <h5>Anna University</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="service no-margin row">
                    <div class="col-sm-3 resume-dat serv-logo">
                        <h6>2013-2015</h6>
                        <p>High School</p>
                    </div>
                    <div class="col-sm-9 rgbf">
                        <h5>A.M.H.S.S</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="service no-margin row">
                    <div class="col-sm-3 resume-dat serv-logo">
                        <h6>2013-2015</h6>
                        <p>School</p>
                    </div>
                    <div class="col-sm-9 rgbf">
                        <h5>Anna University</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </section>

            <section id="services" class="profile-tab">
                <div class="sec-title">
                    <h2>Services</h2>
                </div>
                <div class="row service-ro no-margin">
                    <div class="col-lg-4 col-md-6 singe-servic">
                        <i class="fab fa-delicious"></i>
                        <h4>Graphic Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 singe-servic">
                        <i class="fas fa-code"></i>
                        <h4>Website Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 singe-servic">
                        <i class="fab fa-chrome"></i>
                        <h4>Web Development</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 singe-servic">
                        <i class="fab fa-android"></i>
                        <h4>Android Development</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 singe-servic">
                        <i class="fab fa-app-store-ios"></i>
                        <h4>IOS Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 singe-servic">
                        <i class="fas fa-mobile-alt"></i>
                        <h4>Ionic Development</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </section>

            <div id="portfolio" class="portfolio-detail">
                <div class="row no-margin gallery">
                    <div class="col-sm-4">
                        <img src="assets/images/gallery/gallery_01.jpg" alt="">
                    </div>
                    <div class="col-sm-4">
                        <img src="assets/images/gallery/gallery_02.jpg" alt="">
                    </div>
                    <div class="col-sm-4">
                        <img src="assets/images/gallery/gallery_03.jpg" alt="">
                    </div>
                    <div class="col-sm-4">
                        <img src="assets/images/gallery/gallery_04.jpg" alt="">
                    </div>
                    <div class="col-sm-4">
                        <img src="assets/images/gallery/gallery_05.jpg" alt="">
                    </div>
                    <div class="col-sm-4">
                        <img src="assets/images/gallery/gallery_06.jpg" alt="">
                    </div>
                    <div class="col-sm-4">
                        <img src="assets/images/gallery/gallery_10.jpg" alt="">
                    </div>
                    <div class="col-sm-4">
                        <img src="assets/images/gallery/gallery_08.jpg" alt="">
                    </div>
                    <div class="col-sm-4">
                        <img src="assets/images/gallery/gallery_09.jpg" alt="">
                    </div>

                </div>
            </div>

            <section id="contact" class="contact-tab">
                <div class="row no-margin">
                    <div class="col-md-6 no-padding">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3176144.0450019627!2d-107.79423426090409!3d38.97644533805396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x874014749b1856b7%3A0xc75483314990a7ff!2sColorado%2C+USA!5e0!3m2!1sen!2sin!4v1547222354537" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="row cont-row no-margin">
                            <div class="col-sm-6">
                                <input placeholder="Enter Full Name" type="text" class="form-control form-control-sm">
                            </div>
                            <div class="col-sm-6">
                                <input placeholder="Enter Email Address" type="text" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="row cont-row no-margin">
                            <div class="col-sm-6">
                                <input placeholder="Enter Mobile Number" type="text" class="form-control form-control-sm">
                            </div>

                        </div>
                        <div class="row cont-row no-margin">
                            <div class="col-sm-12">
                                <textarea placeholder="Enter your Message" class="form-control form-control-sm" rows="10"></textarea>
                            </div>

                        </div>
                        <div class="row cont-row no-margin">
                            <div class="col-sm-6">
                                <button class="btn btn-sm btn-success">Send Message</button>
                            </div>

                        </div>
                    </div>
                </div>
            </section>-->
                </div>
            </div>
        </form>
    </body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>


</html>