<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
    <a href="index.php"></a>
        <title></title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- bootstrap css -->
    </head>
    <body>
        <?php
        include './DatabaseConnection.php';
        include './header.php';
        ?>

        <!-- services section start -->

        <div class="services_section layout_padding" id="services">
            <div class="container">
                <h1 class="services_taital"><span>Our</span> <img src="images/icon-1.png">
                    <span style="color: #1f1f1f">Services</span>
                </h1>
                <p class="services_text"></p>
                <div id="" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="services_section_2 layout_padding">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="box_section active_1">
                                            <a class="tile_text active_1" href="PlumberCategory.php">
                                                <div class="tiles_img_1"></div>
                                                Plumber Service
                                                <p class="lorem_text active_1">Plumbing problems need no translation our team of expert plumbers provides care that’s tailored to you. </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box_section active_1">
                                            <a class="tile_text active_1" href="ElectricCategory.php">
                                                <div class="tiles_img_1"></div>
                                                Electric Service
                                                <p class="lorem_text active_1">From wiring to lighting, we can handle all your electrical needs!</p>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                    $sql = "SELECT * FROM `service_master`";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<div class="col-md-6">
                                        <div class="box_section active_1">
                                            <a class="tile_text active_1" href="SubService.php?id='.$row['Service_Id'].'">
                                                <div class="tiles_img_1"></div>
                                                '.$row['Service_Name'].'<p class="lorem_text active_1">'.$row['Description'].'</p>
                                            </a>
                                        </div>
                                    </div>';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="carousel-item">
                            <div class="services_section_2 layout_padding">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="box_section active">
                                    <div class="tiles_img"></div>
                                    <h3 class="tile_text active">Tile & Grout</h3>
                                    <p class="lorem_text active">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="box_section">
                                    <div class="tiles_img_1"></div>
                                    <h3 class="tile_text">Carpet Cleaning</h3>
                                    <p class="lorem_text">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="services_section_2 layout_padding">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="box_section active">
                                    <div class="tiles_img"></div>
                                    <h3 class="tile_text active">Tile & Grout</h3>
                                    <p class="lorem_text active">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="box_section">
                                    <div class="tiles_img_1"></div>
                                    <h3 class="tile_text">Carpet Cleaning</h3>
                                    <p class="lorem_text">Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> -->
                    </div>
                    <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- services section start -->
        <!-- about section start -->
        <div class="about_section layout_padding" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div><img src="images/img-2.png" class="image_2"></div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="services_taital"><span>About </span> <img src="images/icon-1.png"> <span
                                style="color: #1f1f1f">Cleaning</span></h1>
                        <p class="ipsum_text">Home service provider outlines its services in a simple and concise manner.
                            A series of tasks can be booked at a fixed price for each. The site points out that those who
                            complete the tasks are vetted and given a background check. Plus, happiness is guaranteed. Visitors are
                            pointed to the company’s app, a streamlined booking option. The website has consistent branding.
                        </p>
                       <!-- <div class="contact_bt_1"><a href="#">READ MORE<span class="contact_padding"><img
                                        src="images/contact-icon1.png"></span></a></div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- about section end -->
        <!-- choose section start -->
        <!--        <div class="choose_section layout_padding">
                    <div class="container">
                        <h1 class="choose_taital"><span>Why </span> <img src="images/icon-1.png"> <span style="color: #1f1f1f">Choose
                                Us</span></h1>
                        <p class="choose_text"></p>
                        <div class="choose_section_2 layout_padding">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="choose_box">
                                        <h1 class="client_taital">12004+</h1>
                                        <h4 class="client_text">Our clients</h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="choose_box">
                                        <h1 class="client_taital">10004+</h1>
                                        <h4 class="client_text">Happy clients</h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="choose_box">
                                        <h1 class="client_taital">804+</h1>
                                        <h4 class="client_text">Complain</h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="choose_box">
                                        <h1 class="client_taital">905+</h1>
                                        <h4 class="client_text">Ratting</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="image_3"><img src="images/img-3.png"></div>
                            <div class="get_bt"><a href="#">Get A quote</a></div>
                        </div>
                    </div>
                </div>-->
        <!-- choose section end -->
        <!-- team section start -->
        <div class="team_section layout_padding">
            <div class="container">
                <h1 class="choose_taital"><span>Our </span> <img src="images/icon-1.png"> <span style="color: #1f1f1f">Team</span>
                </h1>
                <p class="choose_text"></p>
                <div class="team_section_2 layout_padding">
                    <div class="container">
                        <div class="images_main_1">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="image_4"><img src="images/img-4.png"></div>
                                    <h6 class="follow_text"></h6>
                                    <div class="follow_social_icon">
<!--                                        <ul>
                                            <li><a href="#"><img src="images/fb-icon.png"></a></li>
                                            <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                                            <li><a href="#"><img src="images/linkden-icon.png"></a></li>
                                            <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                                        </ul>-->
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <h2 class="consectetur_text">Plumber Service</h2>
                                    <p class="dummy_text">We realize that the only thing more miserable than a day without plumber is a
                                        day with a bad plumber. That’s why we’re on call 24/7 If you need our help, we’re just a
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="images_main">
                            <div class="row">
                                <div class="col-sm-7">
                                    <h2 class="consectetur_text_1">Electric Service </h2>
                                    <p class="dummy_text">We’re the fastest, most qualified electricians for every phase
                                        of your home or business electrical project.
                                    </p>
                                </div>
                                <div class="col-sm-5">
                                    <div class="image_4"><img src="images/img-5.png"></div>
                                    <h6 class="follow_text"></h6>
                                    <div class="follow_social_icon">
<!--                                        <ul>
                                            <li><a href="#"><img src="images/fb-icon.png"></a></li>
                                            <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                                            <li><a href="#"><img src="images/linkden-icon.png"></a></li>
                                            <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                                        </ul>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--    <div class="images_main_1">
                            <div class="row">
                              <div class="col-sm-5">
                                <div class="image_4"><img src="images/img-6.png"></div>
                                <h6 class="follow_text">Follow Us</h6>
                                <div class="follow_social_icon">
                                  <ul>
                                    <li><a href="#"><img src="images/fb-icon.png"></a></li>
                                    <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                                    <li><a href="#"><img src="images/linkden-icon.png"></a></li>
                                    <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="col-sm-7">
                                <h2 class="consectetur_text">Aonsectetur</h2>
                                <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                              </div>
                            </div>
                          </div>
                         <div class="images_main">
                            <div class="row">
                              <div class="col-sm-7">
                                <h2 class="consectetur_text_1">Nonsectetur</h2>
                                <p class="dummy_text_1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                              </div>
                              <div class="col-sm-5">
                                <div class="image_4"><img src="images/img-7.png"></div>
                                <h6 class="follow_text">Follow Us</h6>
                                <div class="follow_social_icon">
                                  <ul>
                                    <li><a href="#"><img src="images/fb-icon.png"></a></li>
                                    <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                                    <li><a href="#"><img src="images/linkden-icon.png"></a></li>
                                    <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                                  </ul>
                                </div>
                              </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team section start -->
<!-- newsletter section start -->
<div class="newsletter_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="newsletter_text">Subscribe</h1>
                <!-- <p class="tempor_text">Tempor incididunt ut labore et dolore magna aliqua</p> -->
            </div>
            <div class="col-md-6">
                <div class="mail_bt_main">
                    <form method="post">
                        <input type="email" class="mail_text" placeholder="ENTER YOUR MAIL" name="email13" required>
                        <div>
                            <input type="submit" class="subscribe_bt" name="Submit13" value="subscribe">
                        </div>
                    </form>
                </div>
            </div>
            <?php
            if (isset($_POST['Submit13'])) {
                $email13 = $_POST['email13'];
                $sql = "INSERT INTO `subscribe`(`email`)"
                        . "VALUES ('$email13')";
                $conn->query($sql);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
            }
            ?>
        </div>
    </div>
</div>
<!-- newsletter section end -->
<?php
include './footer.php';
?>
<script>
    $(document).ready(function () {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function () {

            $(this).addClass('transition');
        }, function () {

            $(this).removeClass('transition');
        });
    });
</script>
<script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }
    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
</script>
</body>

</html>