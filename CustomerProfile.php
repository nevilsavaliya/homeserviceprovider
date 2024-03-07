<?php
session_start();
include './DatabaseConnection.php';
$email = $_SESSION['Email'];
$sql = "SELECT * FROM `customer` WHERE Cust_Email = '" . $email . "'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Customer Profile</title>

        <link rel="shortcut icon" href="assets/images/fav.jpg">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

        <style>
            body {
                background-image: url("images/homeservices.jpg");
            }

            .form-control:focus {
                box-shadow: none;
                border-color: #BA68C8
            }

            .profile-button {
                background: rgb(99, 39, 120);
                box-shadow: none;
                border: none
            }

            .profile-button:hover {
                background: #682773
            }

            .profile-button:focus {
                background: #682773;
                box-shadow: none
            }

            .profile-button:active {
                background: #682773;
                box-shadow: none
            }

            .back:hover {
                color: #682773;
                cursor: pointer
            }

            .labels {
                font-size: 11px
            }

            .add-experience:hover {
                background: #BA68C8;
                color: #fff;
                cursor: pointer;
                border: solid 1px #BA68C8
            }
        </style>

    </head>

    <body>
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-6 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                        <span class="font-weight-bold"><?php echo $row['Cust_Name']; ?></span>
                        <span class="text-black-50"><?php echo $row['Cust_Email']; ?></span>
<!--                        <span class="text-black-50"> echo $row['Cust_Address']; </span>-->
                        <span class="text-black-50"><?php echo $row['Cust_ContactNo']; ?></span>
                        <span class="text-black-50"><?php echo $row['Gender']; ?></span>
                        <div class="mt-5 text-center">
                            <a href="logout.php">
                                <input class="btn btn-primary profile-button" type="submit" name="submit" value="Logout">
                            </a>
                        </div>
                        <div class="mt-5 text-center">
                            <a href="index.php">
                                <input class="btn btn-primary profile-button" type="submit" name="submit" value="Home">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <form method="post">
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Full Name</label><input type="text" name="fname" class="form-control" placeholder="Enter Full Name" value=""></div>
                                <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" value=""></div>
                                <div class="col-md-12"><label class="labels">Address</label><input type="text" name="add" class="form-control" placeholder="Enter Address" value=""></div>
                                <div class="col-md-12"><label class="labels">Gender</label><input type="text" name="gender" class="form-control" placeholder="Enter Gender" value=""></div>
                                <div class="col-md-12"><label class="labels">Email ID</label><input type="text" name="email" class="form-control" placeholder="Enter Email" value=""></div>
                                <div class="col-md-12"><label class="labels">Password</label><input type="text" name="pass" class="form-control" placeholder="Enter Password" value=""></div>
                            </div>
                            <div class="mt-5 text-center">
                                <input class="btn btn-primary profile-button" type="submit" name="submit" value="Save Profile">
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['submit'])) {
                            $name = $_POST['fname'];
                            $mobile = $_POST['phone'];
                            $address = $_POST['add'];
                            $gender = $_POST['gender'];
                            $eemail = $_POST['email'];
                            $sql = "UPDATE `customer` SET `Cust_Name`='$name',`Cust_Email`='$eemail',`Cust_ContactNo`='$mobile',`Cust_Address`='$address',`Gender`='$gender' WHERE `Cust_Email`='$email'";
                            $conn->query($sql);
                            $_SESSION['Email'] = $eemail;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>


</html>