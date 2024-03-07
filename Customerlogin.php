<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <meta name="robots" content="noindex, follow">
        <script nonce="cd588f1d-6268-45ea-8f69-82be8bb23d7d">(function (w, d) { !function (f, g, h, i) { f[h] = f[h] || {}; f[h].executed = []; f.zaraz = { deferred: [], listeners: [] }; f.zaraz.q = []; f.zaraz._f = function (j) { return function () { var k = Array.prototype.slice.call(arguments); f.zaraz.q.push({ m: j, a: k }) } }; for (const l of ["track", "set", "debug"]) f.zaraz[l] = f.zaraz._f(l); f.zaraz.init = () => { var m = g.getElementsByTagName(i)[0], n = g.createElement(i), o = g.getElementsByTagName("title")[0]; o && (f[h].t = g.getElementsByTagName("title")[0].text); f[h].x = Math.random(); f[h].w = f.screen.width; f[h].h = f.screen.height; f[h].j = f.innerHeight; f[h].e = f.innerWidth; f[h].l = f.location.href; f[h].r = g.referrer; f[h].k = f.screen.colorDepth; f[h].n = g.characterSet; f[h].o = (new Date).getTimezoneOffset(); if (f.dataLayer) for (const s of Object.entries(Object.entries(dataLayer).reduce(((t, u) => ({ ...t[1], ...u[1] }))))) zaraz.set(s[0], s[1], { scope: "page" }); f[h].q = []; for (; f.zaraz.q.length; ) { const v = f.zaraz.q.shift(); f[h].q.push(v) } n.defer = !0; for (const w of [localStorage, sessionStorage]) Object.keys(w || {}).filter((y => y.startsWith("_zaraz_"))).forEach((x => { try { f[h]["z_" + x.slice(7)] = JSON.parse(w.getItem(x)) } catch { f[h]["z_" + x.slice(7)] = w.getItem(x) } })); n.referrerPolicy = "origin"; n.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(f[h]))); m.parentNode.insertBefore(n, m) }; ["complete", "interactive"].includes(g.readyState) ? zaraz.init() : f.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);</script>
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
            .alert {
                padding: 15px;
                border: 1px solid transparent;
                border-radius: 4px;
            }

            .alert-danger {
                color: #721c24;
                background-color: #f8d7da;
                border-color: #f5c6cb;
            }
        </style>
    </head>

    <body>
        <div class="demo-wrap">
            <img class="demo-bg" src="./images/homeservices.jpg" height="100%" width="100%" alt="">
            <div class="demo-content">
                <div class="limiter">
                    <div class="container-login100" style="background: none;">
                        <div class="wrap-login100">
                            <form class="login100-form validate-form" id="login-form" method="post">
                                <span class="login100-form-title p-b-26">
                                    Welcome Back
                                </span>
                                <span class="login100-form-title p-b-48">
                                    <img src="images/img-1.png" height="80px" width="80px">
                                </span>
                                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                                    <input class="input100" type="text" name="email" id="email">
                                    <span class="focus-input100" data-placeholder="Email"></span>
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <span class="btn-show-pass">
                                        <i class="zmdi zmdi-eye"></i>
                                    </span>
                                    <input class="input100" type="password" name="pass" id="pass">
                                    <span class="focus-input100" data-placeholder="Password"></span>
                                </div>
                                <div class="container-login100-form-btn">
                                    <div class="wrap-login100-form-btn">
                                        <div class="login100-form-bgbtn"></div>
                                        <button class="login100-form-btn">
                                            Login
                                        </button>
                                    </div>
                                    <div id="login-result"></div>
                                </div>
                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                <script>
            $(function () {
            $('#login-form').submit(function (event) {
            event.preventDefault();
            var Email = $('#email').val();
            var password = $('#pass').val();
            $.ajax({
            url: 'Customerloginpross.php',
                    type: 'POST',
                    data: {Email: Email, password: password},
                    success: function (response) {
                    $('#login-result').html(response);
                   
                    }
            });
            });
            });
                                </script>
                                <div class="text-center p-t-115">
                                    <span class="txt1">
                                        Don’t have an account?
                                    </span>
                                    <a class="txt2" href="CustomerRegister.php">
                                        Sign Up
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="dropDownSelect1"></div>

        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <script src="js/main.js"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());
            gtag('config', 'UA-23581568-13');
        </script>
        <script defer
                src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
                integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
                data-cf-beacon='{"rayId":"78c9ebc718682e83","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}'
        crossorigin="anonymous"></script>
    </body>
</html>