    <?php

//    if (isset($_POST["assign"])) {
//        $radio = $_POST["service"]; // Use "radio" as the name attribute
//        echo $radio;
//    //    header("Location: assign_service_provider.php?radio=$radio");
//    }

    ?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Admin Dashboard</title>
            <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
            <link href="css/styles.css" rel="stylesheet" />
            <script src="https://kit.fontawesome.com/be19cf8b62.js" crossorigin="anonymous"></script>
        </head>
        <body class="sb-nav-fixed">
            <?php
            include './DatabaseConnection.php';
            include './Sessionwithoutlogin.php';
            include './header.php';
            ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <!--                    <ol class="breadcrumb mb-4">
                                                <li class="breadcrumb-item active">Dashboard</li>
                                            </ol>-->
                        <div class="row">
                            <?php
                            $sql = "SELECT * FROM customer";
                            $customerresult = mysqli_query($conn, $sql);
                            $customer = mysqli_num_rows($customerresult);
                            ?>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Customer Available <div><h2 style="margin-left: 60%"><?php echo $customer; ?></h2></div></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Customer.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $sql = "SELECT * FROM customer_service";
                            $service_result = mysqli_query($conn, $sql);
                            $service = mysqli_num_rows($service_result);
                            ?>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Service Customer<div><h2 style="margin-left: 60%"><?php echo $service; ?></h2></div></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Service_customer.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $sql = "SELECT * FROM subscribe";
                            $complain = mysqli_query($conn, $sql);
                            $complain1 = mysqli_num_rows($complain);
                            ?>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total subscriber<div><h2 style="margin-left: 60%"><?php echo $complain1; ?></h2></div></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="complain.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $sql = "SELECT * FROM contact";
                            $contact = mysqli_query($conn, $sql);
                            $contact = mysqli_num_rows($contact);
                            ?>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total feedback<div><h2 style="margin-left: 60%"><?php echo $contact; ?></h2></div></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div> 
                            </div>
                            <table style="border: 1px solid black">
                                <tr border="1p">
                                    <th>Cust_id</th> 
                                    <th>Cust_Name</th> 
                                    <th>Cust_Contact</th> 
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Category</th>
                                    <th>Services</th>
                                    <th>Problem_Details</th>
                                    <th>Assign Provider</th>
                                </tr>
                                <?php
                                $host = "localhost";
                                $username = "root";
                                $password = "";
                                $database = "homeserviceprovider1";
                                $conn = new mysqli($host, $username, $password, $database);
                                $sql = "SELECT * FROM `customer_service` where status='0'";
                                $result = $conn->query($sql);
                                $count = 0;
    //                            while ($row = $result->fetch_assoc()) {
    //                                $path = $row['img'];
    //                                $count++;
    //                                echo '<tr border="1">
    //                                    <td>' . $row['Cust_id'] . '</td>
    //                                    <td>' . $row['Cust_Name'] . '</td>
    //                                    <td>' . $row['Cust_Email'] . '</td>
    //                                    <td>' . $row['Cust_Contact'] . '</td>
    //                                    <td>' . $row['Address'] . '</td>
    //                                    <td>' . $row['Email'] . '</td>
    //                                    <td>' . $row['Category'] . '</td>
    //                                    <td>' . $row['Services'] . '</td>
    //                                    <td>' . $row['Problem_Details'] . '</td>
    //                                    <form method=post>
    //                                    <td><center><input type="radio" value="' . $row['Cust_id'] . '" name="radio"></td>
    //                                    <td><center><input type="submit" name=assign></td>
    //                                    </form>
    //                                  </tr>';
    //                            }

                                echo '<form method="post">'; // Opening form tag before the table

                                while ($row = $result->fetch_assoc()) {
                                $path = $row['img'];
                                $myArray = unserialize($row['Services']);
                                $count++;
                                echo '<tr border="1">
                                    <td>' . $row['CustSer_id'] . '</td>
                                    <td>' . $row['Cust_Name'] . '</td>
                                    <td>' . $row['Cust_Contact'] . '</td>
                                    <td>' . $row['Address'] . '</td>
                                    <td>' . $row['Email'] . '</td>
                                    <td>' . $row['Category'] . '</td>
                                    <td>';
                                foreach($myArray as $value){
                                    echo $value."<br>";
                                }
                                echo '</td>
                                    <td>' . $row['Problem_Details'] . '</td>
                                    <td><a href="ServiceProvider.php?radio=' . $row['Cust_id'] . '">Assign</a></td>
                                  </tr>';
                            }


    echo '</form>'; // Closing form tag after the table

                                ?>
                            </table>
                        </div>
                    </div>
                </main>

                <!--            <footer class="py-4 bg-light mt-auto">
                                <div class="container-fluid px-4">
                                    <div class="d-flex align-items-center justify-content-between small">
                                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                                        <div>
                                            <a href="#">Privacy Policy</a>
                                            &middot;
                                            <a href="#">Terms &amp; Conditions</a>
                                        </div>
                                    </div>
                                </div>
                            </footer>-->
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
    
   
    </html>