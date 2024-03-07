<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Customer Services</title>
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
        <script>
        </script>
        <div id="layoutSidenav_content">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Customer service
                </div>
                <form method="post">
                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Cust_Name</th>
                                    <th scope="col">Cust_Email</th>
                                    <th scope="col">Cust_Contact</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Services</th>
                                    <th scope="col">Problem Details</th>
                                    <th scope="col">Problem Image</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM `emergencyservicebooking`";
                                $result = $conn->query($query);
                                $id = 1;
                                while ($row = mysqli_fetch_array($result)) {
//                                    $Cust_serv_Id = $row['Cust_Ser_Id'];
                                    $Cust_Name = $row['name'];
                                    $Cust_Email = $row['email'];
                                    $Cust_Contact = $row['contact'];
                                    $Address = $row['address'];
                                    $Email = $row['cemail'];
                                    $Category = $row['category'];
                                    $Services = $row['services'];
                                    $Problem_Details = $row['problemdetails'];
//                                    $Status = $row['Status'];
                                    $Problem_image = $row['problemsimage'];

                                    $myArray = unserialize($Services);
                                    ?>
                                    <tr id='tr_<?= $id ?>'>
                                        <td><input type='checkbox' name='delete[]' value='<?= $Cust_serv_Id ?>' ></td>
                                        <td><?= $Cust_Name ?></td>
                                        <td><?= $Cust_Email ?></td>
                                        <td><?= $Cust_Contact ?></td>
                                        <td><?= $Address ?></td>
                                        <td><?= $Email ?></td>
                                        <td><?= $Category ?></td>
                                        <td><?php
                                            foreach ($myArray as $value) {
                                                echo $value . "<br>";
                                            }
                                            ?>
                                        </td>
                                        <td><?= $Problem_Details ?></td>
                                        <td><img src=" ../img/<?= $Problem_image ?>" height="200px" alt="alt"/></td>

                                        <td><?= $Status ?></td>
                                    </tr>
                                    <?php
                                    $id++;
                                }
                                ?>
                            </tbody>
                        </table>
                        <input type="submit" class="btn btn-primary" name="Admin_delete" id="but_delete" value="Delete Customer Service ">
                        <?php
                        if (isset($_POST['Admin_delete'])) {
//                            echo "<script>alert('1'); </script>";
                            
                            if (isset($_POST['delete'])) {
//                                print_r($_POST['delete']);
                                
//                                echo "<script>alert('1'); </script>";
                                foreach ($_POST['delete'] as $deleteid) {
//                                    echo "<script>alert('1'); </script>";
                                    
                                    $deleteUser = "DELETE from customer_service WHERE Cust_id ='$deleteid'";
                                    $conn->query($deleteUser);
                                }
                                echo "<script>window.location.href='Service_customer.php'</script>";
                            } else {
                                echo '<script>Checkboxseleted();</script>';
                            }
                        }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>