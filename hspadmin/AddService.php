<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin | Add</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/be19cf8b62.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
        include './DatabaseConnection.php';
        include './Sessionwithoutlogin.php';
        include './header.php';
        ?>
        <div id="layoutSidenav_content">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>Add Service
                </div>
                <div class="card-body" style="padding-left: 150px;padding-right: 150px;">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="name" type="text" placeholder="Service Name"  required>
                            <label for="Admin_id">Service Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="Admin_Name" name="desc" type="text" placeholder="Discription" required>
                            <label for="Admin_Name">Description</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="Admin_Email" name="subimg1" type="file" placeholder="Enter Subservice:" required>
                            <label for="Admin_Email">Enter Subservice</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="sname1" type="text" placeholder="Service Name"  required>
                            <label for="Admin_id">Service Name</label>
                        </div>                       
                        <div class="form-floating mb-3">
                            <input class="form-control" id="price" name="sprice1" type="text" placeholder="Service Price"  required>
                            <label for="Admin_id">Price</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" id="Admin_Email" name="subimg2" type="file" placeholder="Enter Subservice:" required>
                            <label for="Admin_Email">Enter Subservice</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="sname2" type="text" placeholder="Service Name"  required>
                            <label for="Admin_id">Service Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="price" name="sprice2" type="text" placeholder="Service Price"  required>
                            <label for="Admin_id">Price</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" id="Admin_Email" name="subimg3" type="file" placeholder="Enter Subservice:" required>
                            <label for="Admin_Email">Enter Subservice</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="sname3" type="text" placeholder="Service Name"  required>
                            <label for="Admin_id">Service Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="price" name="sprice3" type="text" placeholder="Service Price"  required>
                            <label for="Admin_id">Price</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="Admin_Email" name="subimg4" type="file" placeholder="Enter Subservice:" required>
                            <label for="Admin_Email">Enter Subservice</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="sname4" type="text" placeholder="Service Name"  required>
                            <label for="Admin_id">Service Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="price" name="sprice4" type="text" placeholder="Service Price"  required>
                            <label for="Admin_id">Price</label>
                        </div>

                        <div class="d-grid gap-2">
                            <input type="submit"  name="submit" id="Adminsubmit" class="btn btn-primary btn-lg"  value="Add Service">
                        </div>
                    </form>
                </div>
                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $description = $_POST['desc'];
                    $subservice1 = $_POST['sname1'];
                    $subservice2 = $_POST['sname2'];
                    $subservice3 = $_POST['sname3'];
                    $subservice4 = $_POST['sname4'];
                    $sql = "INSERT INTO `service_master`(`Service_Name`, `Description`) VALUES ('" . $name . "','" . $description . "')";
                    $conn->query($sql);
                    $sql = "SELECT `Service_Id` FROM `service_master` WHERE Service_Name = '" . $name . "'";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    $image = $_FILES['subimg1']['tmp_name'];
                    $subimg1 = addslashes(file_get_contents($image));
                    $image2 = $_FILES['subimg2']['tmp_name'];
                    $subimg2 = addslashes(file_get_contents($image2));
                    $image3 = $_FILES['subimg3']['tmp_name'];
                    $subimg3 = addslashes(file_get_contents($image3));
                    $image4 = $_FILES['subimg4']['tmp_name'];
                    $subimg4 = addslashes(file_get_contents($image4));
                    $price1 = $_POST['sprice1'];
                    $price2 = $_POST['sprice2'];
                    $price3 = $_POST['sprice3'];
                    $price4 = $_POST['sprice4'];

                    $sql = "INSERT INTO `sub_service`(`Service_Id`, `SubSer_Name`, `img`, `Price`) VALUES ('" . $row['Service_Id'] . "','" . $subservice1 . "','" . $subimg1 . "','" . $price1 . "')";
                    $conn->query($sql);

                    $sql = "INSERT INTO `sub_service`(`Service_Id`, `SubSer_Name`, `img`, `Price`) VALUES ('" . $row['Service_Id'] . "','" . $subservice2 . "','" . $subimg2 . "','" . $price2 . "')";
                    $conn->query($sql);

                    $sql = "INSERT INTO `sub_service`(`Service_Id`, `SubSer_Name`, `img`, `Price`) VALUES ('" . $row['Service_Id'] . "','" . $subservice3 . "','" . $subimg3 . "','" . $price3 . "')";
                    $conn->query($sql);

                    $sql = "INSERT INTO `sub_service`(`Service_Id`, `SubSer_Name`, `img`, `Price`) VALUES ('" . $row['Service_Id'] . "','" . $subservice4 . "','" . $subimg4 . "','" . $price4 . "')";
                    $conn->query($sql);
                }
                ?>
            </div>
        </div>
    </body>
</html>

<!--<!DOCTYPE html>
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
//        include './DatabaseConnection.php';
//        include './Sessionwithoutlogin.php';
//        include './header.php';
?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <form method="post" enctype="multipart/form-data">
                        Service Name:<br>
                        <input name='name'><br>
                        Decription:<br>
                        <input name='desc'><br>
                        Enter Subservice:<br>
                        <input name='sub1'><input type="file" name="subimg1"><br>
                        <input name='sub2'><input type="file" name="subimg2"><br>
                        <input name='sub3'><input type="file" name="subimg3"><br>
                        <input name='sub4'><input type="file" name="subimg4">
                        <br><input type="submit" name="submit" value="submit">
                    </form>
<?php
//                    if (isset($_POST['submit'])) {
//                        $name = $_POST['name'];
//                        $description = $_POST['desc'];
//                        $subservice1 = $_POST['sub1'];
//                        $subservice2 = $_POST['sub2'];
//                        $subservice3 = $_POST['sub3'];
//                        $subservice4 = $_POST['sub4'];
//                        $sql = "INSERT INTO `service_master`(`Service_Name`, `Description`) VALUES ('" . $name . "','" . $description . "')";
//                        $conn->query($sql);
//                        $sql = "SELECT `Service_Id` FROM `service_master` WHERE Service_Name = '".$name."'";
//                        $result = $conn->query($sql);
//                        $row = $result->fetch_assoc();
//                        $image = $_FILES['subimg1']['tmp_name'];
//                        $subimg1 = addslashes(file_get_contents($image));
//                        $image2 = $_FILES['subimg2']['tmp_name'];
//                        $subimg2 = addslashes(file_get_contents($image2));
//                        $image3 = $_FILES['subimg3']['tmp_name'];
//                        $subimg3 = addslashes(file_get_contents($image3));
//                        $image4 = $_FILES['subimg4']['tmp_name'];
//                        $subimg4 = addslashes(file_get_contents($image4));
//                        $sql = "INSERT INTO `sub_service`(`Service_Id`, `SubSer_Name`, `img`) VALUES ('".$row['Service_Id']."','".$subservice1."','".$subimg1."')";
//                        $conn->query($sql);
//                        $sql = "INSERT INTO `sub_service`(`Service_Id`, `SubSer_Name`, `img`) VALUES ('".$row['Service_Id']."','".$subservice2."','".$subimg2."')";
//                        $conn->query($sql);
//                        $sql = "INSERT INTO `sub_service`(`Service_Id`, `SubSer_Name`, `img`) VALUES ('".$row['Service_Id']."','".$subservice3."','".$subimg3."')";
//                        $conn->query($sql);
//                        $sql = "INSERT INTO `sub_service`(`Service_Id`, `SubSer_Name`, `img`) VALUES ('".$row['Service_Id']."','".$subservice4."','".$subimg4."')";
//                        $conn->query($sql);
//                    }
?>
                </div>
            </main>
                        <footer class="py-4 bg-light mt-auto">
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
                        </footer>
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
</html>-->

