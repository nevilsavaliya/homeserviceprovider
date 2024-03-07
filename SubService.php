<?php
session_start();

include './DatabaseConnection.php';
$id = $_GET['id'];
$sql = "SELECT * FROM `service_master` WHERE Service_id=" . $id;
$sevicearr = $conn->query($sql);
$service = $sevicearr->fetch_assoc();
$sql = "SELECT * FROM `sub_service` WHERE Service_id=" . $id;
$subservicearr = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>  
        <title>Plumber Category</title>

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

        <script>
            function Checkboxseleted() {
            alert('please Select any one category!');
            }
        </script>

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
                            <form class="login100-form validate-form" method="post" enctype="multipart/form-data">
                                <span class="login100-form-title p-b-10"><?php echo $service['Service_Name']; ?> category</span>
                                <div class="row">
                                    <div class="col-6" style="margin-top:10px;">
                                        <center>
                                            <span style="font-size: 16px;font-weight: bold;">
                                                <?php
                                                $sub = $subservicearr->fetch_assoc();
                                                echo '<img src="data:image/jpg;charset=utf8;base64,';
                                                echo base64_encode($sub['img']) . '"';
                                                echo 'alt="avatar"width="100" height="100">';
                                                echo '<br><br>';
                                                echo 'Price: ' . $sub['price'] . '<br>';
                                                ?>
                                                <input type="checkbox" name="category[]" value="<?php echo $sub['SubSer_Name'] . ':' . $sub['price'] ?>">&nbsp;&nbsp;<?php echo $sub['SubSer_Name'] ?>
                                            </span>

                                            <div class="validate-input" style="margin-top: 30px;" data-validate="Valid name is: a@b.c">
                                                <span style="font-size: 16px;font-weight: bold;">
                                                    <?php
                                                    $sub = $subservicearr->fetch_assoc();
                                                    echo '<img src="data:image/jpg;charset=utf8;base64,';
                                                    echo base64_encode($sub['img']) . '"';
                                                    echo 'alt="avatar"width="100" height="100">';
                                                    echo '<br><br>';
                                                    echo 'Price: ' . $sub['price'] . '<br>';
                                                    ?>
                                                    <input type="checkbox" name="category[]" value="<?php echo $sub['SubSer_Name'] . ':' . $sub['price'] ?>">&nbsp;&nbsp;<?php echo $sub['SubSer_Name'] ?>
                                                </span>
                                            </div>
                                        </center>
                                    </div>
                                    <div class="col-6" style="margin-top:10px;">
                                        <center>
                                            <span style="font-size: 16px;font-weight: bold;">
                                                <?php
                                                $sub = $subservicearr->fetch_assoc();
                                                echo '<img src="data:image/jpg;charset=utf8;base64,';
                                                echo base64_encode($sub['img']) . '"';
                                                echo 'alt="avatar"width="100" height="100">';
                                                echo '<br><br>';
                                                echo 'Price: ' . $sub['price'] . '<br>';
                                                ?>
                                                <input type="checkbox" name="category[]" value="<?php echo $sub['SubSer_Name'] . ':' . $sub['price'] ?>">&nbsp;&nbsp;<?php echo $sub['SubSer_Name'] ?>
                                            </span>
                                            <div class="validate-input" style="margin-top: 30px;" data-validate="Valid name is: a@b.c">
                                                <span style="font-size: 16px;font-weight: bold;">
                                                    <?php
                                                    $sub = $subservicearr->fetch_assoc();
                                                    echo '<img src="data:image/jpg;charset=utf8;base64,';
                                                    echo base64_encode($sub['img']) . '"';
                                                    echo 'alt="avatar"width="100" height="100">';
                                                    echo '<br><br>';
                                                    echo 'Price: ' . $sub['price'] . '<br>';
                                                    ?>
                                                    <input type="checkbox" name="category[]" value="<?php echo $sub['SubSer_Name'] . ':' . $sub['price'] ?>">&nbsp;&nbsp;<?php echo $sub['SubSer_Name'] ?>
                                                </span>
                                            </div>
                                        </center>
                                    </div>

                                    <span style="font-size: 16px;font-weight: bold;"><br/><br/>
                                        Looking something else:
                                    </span>
                                    <div class="wrap-input100">
                                        <input class="input100" type="text" name="cname" autocomplete="off">
                                    </div>
                                    <div>
                                        <label style="font-weight: bold;">Your problem image :</label>
                                        <input type="file" name="serviceproviderphoto">
                                    </div>
                                </div>
                                <br/>
                                <div class="wrap-login100-form-btn">
                                    <div class="login100-form-bgbtn"></div>
                                    <button class="login100-form-btn" name="submit">Submit</button>
                                </div>
                            </form>
                            <?php
                            if (isset($_POST['submit'])) {
                                if (!empty($_POST['category'])) {
                                    $selected_categories = $_POST['category'];
                                    $total_price = 0;
                                    foreach ($selected_categories as $category_with_price) {
                                        list($category_name, $category_price) = explode(':', $category_with_price);
                                        $total_price += $category_price;
                                        $categoryarray[] = $category_name;
                                    }
                                    $_SESSION['price'] = $total_price;
                                    $_SESSION['category'] = $categoryarray;
                                    $_SESSION['categoryname'] = "Plumber";

                                    $cname = $_POST['cname'];
                                    $_SESSION['cname'] = $cname;

                                    $cfile = $_FILES['serviceproviderphoto']['name'];
                                    $_SESSION['photo'] = $cfile;
                                    move_uploaded_file($_FILES['serviceproviderphoto']['tmp_name'], 'img/' . $cfile);

                                    echo "<script>window.location.href='ServiceBook.php'</script>";
                                } else {
                                    echo '<script>Checkboxseleted();</script>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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