<?php
session_start();
include './DatabaseConnection.php';
if ($_SESSION['loggedin'] != true) {
    header("Location: Customerlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Service Book</title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="file:///C:/Users/01/OneDrive/Desktop/98/html/images/icons/favicon.ico">
        <link rel="stylesheet" type="text/css" href="./register_files/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./register_files/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="./register_files/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="./register_files/animate.css">
        <link rel="stylesheet" type="text/css" href="./register_files/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="./register_files/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="./register_files/select2.min.css">
        <link rel="stylesheet" type="text/css" href="./register_files/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="./register_files/util.css">
        <link rel="stylesheet" type="text/css" href="./register_files/main.css">

        <meta name="robots" content="noindex, follow">
        <script type="text/javascript" async="" src="./register_files/analytics.js.download" nonce="cd588f1d-6268-45ea-8f69-82be8bb23d7d"></script><script defer="" referrerpolicy="origin" src="file:///C:/Users/01/OneDrive/cdn-cgi/zaraz/sd0d9.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyUmVnaXN0ZXIlMjIlMkMlMjJ4JTIyJTNBMC4xMzQ3ODY3MjcxNTI0NzA5OCUyQyUyMnclMjIlM0ExNTM2JTJDJTIyaCUyMiUzQTg2NCUyQyUyMmolMjIlM0E3NTQlMkMlMjJlJTIyJTNBMTQ5MCUyQyUyMmwlMjIlM0ElMjJmaWxlJTNBJTJGJTJGJTJGQyUzQSUyRlVzZXJzJTJGMDElMkZPbmVEcml2ZSUyRkRlc2t0b3AlMkY5OCUyRmh0bWwlMkZyZWdpc3Rlci5odG1sJTIyJTJDJTIyciUyMiUzQSUyMiUyMiUyQyUyMmslMjIlM0EyNCUyQyUyMm4lMjIlM0ElMjJVVEYtOCUyMiUyQyUyMm8lMjIlM0EtMzMwJTJDJTIycSUyMiUzQSU1QiU3QiUyMm0lMjIlM0ElMjJzZXQlMjIlMkMlMjJhJTIyJTNBJTVCJTIyMCUyMiUyQyUyMlUlMjIlMkMlN0IlMjJzY29wZSUyMiUzQSUyMnBhZ2UlMjIlN0QlNUQlN0QlMkMlN0IlMjJtJTIyJTNBJTIyc2V0JTIyJTJDJTIyYSUyMiUzQSU1QiUyMjElMjIlMkMlMjJBJTIyJTJDJTdCJTIyc2NvcGUlMjIlM0ElMjJwYWdlJTIyJTdEJTVEJTdEJTJDJTdCJTIybSUyMiUzQSUyMnNldCUyMiUyQyUyMmElMjIlM0ElNUIlMjIyJTIyJTJDJTIyLSUyMiUyQyU3QiUyMnNjb3BlJTIyJTNBJTIycGFnZSUyMiU3RCU1RCU3RCUyQyU3QiUyMm0lMjIlM0ElMjJzZXQlMjIlMkMlMjJhJTIyJTNBJTVCJTIyMyUyMiUyQyUyMjIlMjIlMkMlN0IlMjJzY29wZSUyMiUzQSUyMnBhZ2UlMjIlN0QlNUQlN0QlMkMlN0IlMjJtJTIyJTNBJTIyc2V0JTIyJTJDJTIyYSUyMiUzQSU1QiUyMjQlMjIlMkMlMjIzJTIyJTJDJTdCJTIyc2NvcGUlMjIlM0ElMjJwYWdlJTIyJTdEJTVEJTdEJTJDJTdCJTIybSUyMiUzQSUyMnNldCUyMiUyQyUyMmElMjIlM0ElNUIlMjI1JTIyJTJDJTIyNSUyMiUyQyU3QiUyMnNjb3BlJTIyJTNBJTIycGFnZSUyMiU3RCU1RCU3RCUyQyU3QiUyMm0lMjIlM0ElMjJzZXQlMjIlMkMlMjJhJTIyJTNBJTVCJTIyNiUyMiUyQyUyMjglMjIlMkMlN0IlMjJzY29wZSUyMiUzQSUyMnBhZ2UlMjIlN0QlNUQlN0QlMkMlN0IlMjJtJTIyJTNBJTIyc2V0JTIyJTJDJTIyYSUyMiUzQSU1QiUyMjclMjIlMkMlMjIxJTIyJTJDJTdCJTIyc2NvcGUlMjIlM0ElMjJwYWdlJTIyJTdEJTVEJTdEJTJDJTdCJTIybSUyMiUzQSUyMnNldCUyMiUyQyUyMmElMjIlM0ElNUIlMjI4JTIyJTJDJTIyNSUyMiUyQyU3QiUyMnNjb3BlJTIyJTNBJTIycGFnZSUyMiU3RCU1RCU3RCUyQyU3QiUyMm0lMjIlM0ElMjJzZXQlMjIlMkMlMjJhJTIyJTNBJTVCJTIyOSUyMiUyQyUyMjYlMjIlMkMlN0IlMjJzY29wZSUyMiUzQSUyMnBhZ2UlMjIlN0QlNUQlN0QlMkMlN0IlMjJtJTIyJTNBJTIyc2V0JTIyJTJDJTIyYSUyMiUzQSU1QiUyMjEwJTIyJTJDJTIyOCUyMiUyQyU3QiUyMnNjb3BlJTIyJTNBJTIycGFnZSUyMiU3RCU1RCU3RCUyQyU3QiUyMm0lMjIlM0ElMjJzZXQlMjIlMkMlMjJhJTIyJTNBJTVCJTIyMTElMjIlMkMlMjItJTIyJTJDJTdCJTIyc2NvcGUlMjIlM0ElMjJwYWdlJTIyJTdEJTVEJTdEJTJDJTdCJTIybSUyMiUzQSUyMnNldCUyMiUyQyUyMmElMjIlM0ElNUIlMjIxMiUyMiUyQyUyMjElMjIlMkMlN0IlMjJzY29wZSUyMiUzQSUyMnBhZ2UlMjIlN0QlNUQlN0QlMkMlN0IlMjJtJTIyJTNBJTIyc2V0JTIyJTJDJTIyYSUyMiUzQSU1QiUyMjEzJTIyJTJDJTIyMyUyMiUyQyU3QiUyMnNjb3BlJTIyJTNBJTIycGFnZSUyMiU3RCU1RCU3RCU1RCU3RA=="></script><script nonce="cd588f1d-6268-45ea-8f69-82be8bb23d7d">(function (w, d) { !function (f, g, h, i) { f[h] = f[h] || {}; f[h].executed = []; f.zaraz = { deferred: [], listeners: [] }; f.zaraz.q = []; f.zaraz._f = function (j) { return function () { var k = Array.prototype.slice.call(arguments); f.zaraz.q.push({ m: j, a: k }) } }; for (const l of ["track", "set", "debug"]) f.zaraz[l] = f.zaraz._f(l); f.zaraz.init = () => { var m = g.getElementsByTagName(i)[0], n = g.createElement(i), o = g.getElementsByTagName("title")[0]; o && (f[h].t = g.getElementsByTagName("title")[0].text); f[h].x = Math.random(); f[h].w = f.screen.width; f[h].h = f.screen.height; f[h].j = f.innerHeight; f[h].e = f.innerWidth; f[h].l = f.location.href; f[h].r = g.referrer; f[h].k = f.screen.colorDepth; f[h].n = g.characterSet; f[h].o = (new Date).getTimezoneOffset(); if (f.dataLayer) for (const s of Object.entries(Object.entries(dataLayer).reduce(((t, u) => ({ ...t[1], ...u[1] }))))) zaraz.set(s[0], s[1], { scope: "page" }); f[h].q = []; for (; f.zaraz.q.length; ) { const v = f.zaraz.q.shift(); f[h].q.push(v) } n.defer = !0; for (const w of [localStorage, sessionStorage]) Object.keys(w || {}).filter((y => y.startsWith("_zaraz_"))).forEach((x => { try { f[h]["z_" + x.slice(7)] = JSON.parse(w.getItem(x)) } catch { f[h]["z_" + x.slice(7)] = w.getItem(x) } })); n.referrerPolicy = "origin"; n.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(f[h]))); m.parentNode.insertBefore(n, m) }; ["complete", "interactive"].includes(g.readyState) ? zaraz.init() : f.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);</script>

        <style>
            .demo-wrap {
                overflow: hidden;
                position: relative;
            }

            .demo-bg {
                /* opacity: 0.6; */
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: auto;
            }

            .demo-content {
                position: relative;
            }
        </style>
    </head>

    <body>
        <div class="demo-wrap">
            <img class="demo-bg" src="./register_files/homeservices.jpg" height="100%" width="100%" alt="">
            <div class="demo-content">
                <div class="limiter">
                    <div class="container-login100" style="background: none;">
                        <div class="wrap-register100">
                            <form class="login100-form validate-form" method="post">
                                <span class="login100-form-title p-b-26">
                                    Book Service Information
                                </span>
                                <div class="row">
                                    <div class="col-6" style="margin-top:30px">
                                        <span style="font-size: 16px;font-weight: bold;">
                                            Customer Information
                                        </span>
                                        <div class="wrap-input100 validate-input" style="margin-top: 30px;" data-validate="Valid name is: a@b.c">
                                            <input class="input100" type="text" name="name" required>
                                            <span class="focus-input100" data-placeholder="Name"></span>
                                        </div>
                                        <div class="wrap-input100 validate-input" data-validate="Valid contact is: a@b.c">
                                            <input class="input100" type="text" name="contact" maxlength="10" required>
                                            <span class="focus-input100" data-placeholder="Contact"></span>
                                        </div>
                                    </div>
                                    <div class="col-6" style="margin-top:30px">
                                        <span style="font-size: 16px;font-weight: bold;">

                                        </span>
                                        <!--                                        <div class="wrap-input100 validate-input" style="margin-top: 55px;" data-validate="Valid email is: a@b.c">
                                                                                    <input class="input100" type="text" name="email" required>
                                                                                    <span class="focus-input100" data-placeholder="Email"></span>
                                                                                </div>-->
                                        <div class="wrap-input100 validate-input" style="margin-top: 55px;" data-validate="Valid address is: a@b.c">
                                            <input class="input100" type="text" name="address" required>
                                            <span class="focus-input100" data-placeholder="Address"></span>
                                        </div>
                                        <!--                                        <div  data-validate="Enter password">
                                                                                    Profession:<br><br><select name="skill" style="width:200px;">
                                                                                        <option selected="" disabled="" hidden="">-- Select --</option>
                                                                                        <option value="plumber">Plumber</option>
                                                                                        <option value="electric">Electric   </option>
                                                                                    </select>
                                                                                </div>-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6" style="margin-top:5px">
                                        <span style="font-size: 16px;font-weight: bold;">
                                            <?php
                                            $categoryname = $_SESSION['categoryname'];
                                            echo $categoryname . " Services :";
                                            ?>
                                        </span>
                                    </div>
                                    <div class="col-6" style="margin-top:5px">
                                        <span style="font-size: 16px;font-weight: bold;">
                                            <?php
                                            $myArray = $_SESSION['category'];
                                            foreach ($myArray as $value) {
                                                echo $value . "<br>";
                                            }
                                            ?>
                                        </span>
                                    </div>
                                    <div class="col-6" style="margin-top:5px">
                                        <span style="font-size: 16px;font-weight: bold;">
                                            <?php
                                            echo "Price :";
                                            ?>
                                        </span>
                                    </div>
                                    <div class="col-6" style="margin-top:5px">
                                        <span style="font-size: 16px;font-weight: bold;">
                                            <?php
                                            $price = $_SESSION['price'];
                                            echo $price;
                                            ?>
                                        </span>
                                    </div>
                                </div><br/>
                                <div class="row">
                                    <div class="col-6" style="margin-top:5px">
                                        <span style="font-size: 16px;font-weight: bold;">
                                            Problem Image :<br/><br/>
                                            Looking something else :
                                        </span>
                                    </div>
                                    <div class="col-6" style="margin-top:5px">
                                        <span style="font-size: 16px;font-weight: bold;">
                                            <?php
                                            $cname = $_SESSION['cname'];
                                            $photo1 = $_SESSION['photo'];
                                            echo $photo1 . '<br/><br/>' . $cname;
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="container-login100-form-btn">
                                    <div class="wrap-login100-form-btn">
                                        <div class="login100-form-bgbtn"></div>
                                        <button class="login100-form-btn" name="submit" id="rzp-button1" onclick="payAndInsert()">Book</button>
                                    </div>
                                </div><br>
                                <div>
                                    <div class="wrap-login100-form-btn">
                                        <div class="login100-form-bgbtn"></div>
                                        <button class="login100-form-btn" name="esubmit" onclick="payAndInsert()">Emergency Book</button>
                                    </div>
                                </div>
                                <br>
                                <div>
                                   
                                </div>
                            </form>
                            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

                            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                            <!--  <script>
                                                                var options = {
                                                                "key": "rzp_test_3ojateMTvaTmF8", // Enter the Key ID generated from the Dashboard
                                                                        "amount": "100", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                                                                        "currency": "INR",
                                                                        "name": "Home Service Provider", //your business name
                                                                        "description": "Test Transaction",
                                                                        "image": "https://example.com/your_logo",
                    //                "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the id obtained in the response of Step 1
                                                                        "handler": function (response) {
                                                                        console.log(response);
                                                                        }
                                                                };
                                                                var rzp1 = new Razorpay(options);
                                                                rzp1.on('payment.failed', function (response) {
                                                                alert(response.error.code);
                                                                alert(response.error.description);
                                                                alert(response.error.source);
                                                                alert(response.error.step);
                                                                alert(response.error.reason);
                                                                alert(response.error.metadata.order_id);
                                                                alert(response.error.metadata.payment_id);
                                                                });
                                                                document.getElementById('rzp-button1').onclick = function (e) {
                                                                rzp1.open();
                                                                e.preventDefault();
                                                                }
                            </script> -->
                            <?php
                                            function okay(){
                                            echo "<script>window.location.href='serviceproviderdetail.php'</script>";   
                            }
                            if (isset($_POST['submit'])) {
                                $custname = $_POST['name'];
                                $custemail = $_POST['email'];
                                $custphone = $_POST['contact'];
                                $custaddress = $_POST['address'];

                                $cname = $_SESSION['cname'];
                                $photo1 = $_SESSION['photo'];
                                $myArray = $_SESSION['category'];
                                $categoryname = $_SESSION['categoryname'];
                                $cemail = $_SESSION['Email'];

                                $serializedArray = serialize($myArray);

                                $insert = "INSERT INTO `customer_service`(`Cust_Name`, `Cust_Email`, `Cust_Contact`,`TotalPrice`, `Address`, `Email`, `Category`, `Services`, `Problem_Details`, `Problems_image`) "
                                        . "VALUES ('$custname','$custemail','$custphone', '$price' ,'$custaddress','$cemail','$categoryname','$serializedArray','$cname','$photo1')";
                                $conn->query($insert);
                                echo "<script>window.location.href='serviceproviderdetail.php'</script>";

                                session_unset($_SESSION['categoryname']);   // unset all session variables
                                session_unset($_SESSION['category']);   // unset all session variables
                                session_unset($_SESSION['cname']);   // unset all session variables
                                session_unset($_SESSION['photo']);   // unset all session variables
//                                session_destroy(); // destroy the session
                            } elseif (isset($_POST['esubmit'])) {
                                $custname = $_POST['name'];
                                $custemail = $_POST['email'];
                                $custphone = $_POST['contact'];
                                $custaddress = $_POST['address'];

                                $cname = $_SESSION['cname'];
                                $photo1 = $_SESSION['photo'];
                                $myArray = $_SESSION['category'];
                                $categoryname = $_SESSION['categoryname'];
                                $cemail = $_SESSION['Email'];
                                $serializedArray = serialize($myArray);
                                $insert = "INSERT INTO `emergencyservicebooking`(`name`, `email`, `contact`, `address`, `cemail`, `category`, `services`, `problemdetails`, `problemimage`) "
                                        . "VALUES ('$custname','$custemail','$custphone','$custaddress','$cemail','$categoryname','$serializedArray','$cname','$photo1')";
                                echo $insert;
                                $conn->query($insert);
                                echo "<script>window.location.href='serviceproviderdetail.php'</script>";

                                session_unset($_SESSION['categoryname']);   // unset all session variables
                                session_unset($_SESSION['category']);   // unset all session variables
                                session_unset($_SESSION['cname']);   // unset all session variables
                                session_unset($_SESSION['photo']);
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="dropDownSelect1"></div>
        <script src="./register_files/jquery-3.2.1.min.js.download"></script>
        <script src="./register_files/animsition.min.js.download"></script>
        <script src="./register_files/popper.js.download"></script>
        <script src="./register_files/bootstrap.min.js.download"></script>
        <script src="./register_files/select2.min.js.download"></script>
        <script src="./register_files/moment.min.js.download"></script>
        <script src="./register_files/daterangepicker.js.download"></script>
        <script src="./register_files/countdowntime.js.download"></script>
        <script src="./register_files/main.js.download"></script>
        <script async="" src="./register_files/js"></script>
        <script>
                                            window.dataLayer = window.dataLayer || [];
                                            function gtag() { dataLayer.push(arguments); }
                                            gtag('js', new Date());
                                            gtag('config', 'UA-23581568-13');
        </script>
        <script defer="" src="./register_files/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon="{&quot;rayId&quot;:&quot;78c9ebc718682e83&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2022.11.3&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>
    </body>
</html>