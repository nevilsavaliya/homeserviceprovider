<!DOCTYPE html>
<html><style>
            *{
                margin: 0;
                padding: 0;
            }
            .rate {
                float: left;
                height: 46px;
                padding: 0 10px;
            }
            .rate:not(:checked) > input {
                position:absolute;
                top:-9999px;
            }
            .rate:not(:checked) > label {
                float:right;
                width:1em;
                overflow:hidden;
                white-space:nowrap;
                cursor:pointer;
                font-size:30px;
                color:#ccc;
            }
            .rate:not(:checked) > label:before {
                content: '★ ';
            }
            .rate > input:checked ~ label {
                color: #ffc700;
            }
            .rate:not(:checked) > label:hover,
            .rate:not(:checked) > label:hover ~ label {
                color: #deb217;
            }
            .rate > input:checked + label:hover,
            .rate > input:checked + label:hover ~ label,
            .rate > input:checked ~ label:hover,
            .rate > input:checked ~ label:hover ~ label,
            .rate > label:hover ~ input:checked ~ label {
                color: #c59b08;
            }

            /* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
        </style>
    <body>
        <!-- footer section start -->
        <div class="footer_section layout_padding" id="contactus">
            <div class="container">
                <div class="footer_main">
                    <div class="footer_left">
                        <h1 class="contact_taital"><span>Contact </span> <img src="images/icon-2.png"> <span>Us</span></h1>
                    </div>
<!--                    <div class="footer_left">
                        <div class="location_text"><a href="#"><img src="images/map-icon.png"><span
                                    class="padding_left_15">Locations</span></a></div>
                    </div>-->
                    <div class="footer_left">
                        <div class="location_text">
                            <a href="#"><img src="images/call-icon.png">
                                <span class="padding_left_15">+91 8128253214</span>
                            </a>
                        </div>
                    </div>
                    <div class="footer_left">
                        <div class="location_text">
                            <a href="#">
                                <img src="images/map-icon.png">
                                <span class="padding_left_15">hsp98@gmail.com</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="contact_section">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mail_section">
                                <form method="post">
                                    <input type="text" class="email_text" placeholder="Name" name="Name" required>
                                    <input type="text" class="email_text" placeholder="Email" name="Email" required>
                                    <input type="text" class="email_text" placeholder="Phone Number" name="Phone" required>
                                    <textarea class="massage_text" placeholder="Message" rows="5" id="comment" required name="Message"></textarea>
                                    <br><div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                    <!--<div>-->
                                    <div class="send_bt">
                                        <input type="Submit" name="Submit" value="Send" class="send_bt">
                                    </div>

                                    <!--</div>-->
                                </form>
                            </div>
                        </div>
                        <?php
                        if (isset($_POST['Submit'])) {
                            $name = $_POST['Name'];
                            $email = $_POST['Email'];
                            $phone = $_POST['Phone'];
                            $Message = $_POST['Message'];
                            $rating = $_POST["rate"];
                            $sql = "INSERT INTO `contact`(`name`, `email`, `phone`, `message`, `rating`)"
                                    . "VALUES ('$name','$email','$phone','$Message',$rating)";
                            $conn->query($sql);
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                        }
                        ?>
                        <div class="col-md-6">
                            <div class="map_main">
                                <div class="map-responsive">
                                    <iframe
                                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                                        width="600" height="280" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                                </div>
                            </div>
<!--                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"><img src="images/fb-icon1.png"></a></li>
                                    <li><a href="#"><img src="images/twitter-icon1.png"></a></li>
                                    <li><a href="#"><img src="images/linkden-icon1.png"></a></li>
                                    <li><a href="#"><img src="images/instagram-icon1.png"></a></li>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer section end -->
        <!-- Javascript files-->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/plugin.js"></script>
        <!-- sidebar -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/custom.js"></script>
        <!-- javascript -->
        <script src="js/owl.carousel.js"></script>
        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    </body>
</html>
