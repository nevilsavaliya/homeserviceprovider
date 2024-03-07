<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Total Feedback</title>
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
            function Checkboxseleted() {
                alert('please Select any one check box!');
            }
        </script>
        <div id="layoutSidenav_content">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Total Feedback
                </div>
                <form method="post">
                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Cust_Email</th>
                                    <th scope="col">Cust_Name</th>
                                    <th scope="col">Cust_Contact</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM `contact`";
                                $result = $conn->query($query);
                                $id = 1;
                                while ($row = mysqli_fetch_array($result)) {
//                                    $Cust_serv_Id = $row['Cust_Ser_Id'];
                                    $Cust_Email = $row['email'];
                                    $Cust_Name = $row['name'];
                                    $Cust_Contact = $row['phone'];
                                    $Message = $row['message'];
                                    $Rating = $row['rating'];
                                 

                                    $myArray = unserialize($Services);
                                    ?>
                                    <tr id='tr_<?= $id ?>'>
                                        <td><input type='checkbox' name='delete[]' value='<?= $Cust_serv_Id ?>' ></td>
                                        <td><?= $Cust_Email ?></td>
                                        <td><?= $Cust_Name ?></td>
                                        <td><?= $Cust_Contact ?></td>
                                        <td><?= $Message ?></td>
                                        <td><?= $Rating ?></td>
                                        </td>
                                      
                                    </tr>
                                    <?php
                                    $id++;
                                }
                                ?>
                            </tbody>
                        </table>
<!--                       <input type="submit" class="btn btn-primary" name="Admin_delete" id="but_delete" value="Delete Feedback">-->
                        <?php
//                        if (isset($_POST['Admin_delete'])) {
//                            if (isset($_POST['delete'])) {
//                                foreach ($_POST['delete'] as $deleteid) {
//                                    $deleteUser = "DELETE from contact WHERE Cust_Email ='$deleteid'";
//                                    $conn->query($deleteUser);
//                                }
//                                echo "<script>window.location.href='feedback.php'</script>";
//                            } else {
//                                echo '<script>Checkboxseleted();</script>';
//                            }
//                        }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>