<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Subscribe</title>
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
                    Subscribe
                </div>
                <form method="post">
                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                   
                                    <th scope="col">Cust_Email</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM subscribe";
                                $result = $conn->query($query);
                                $id = 1;
                                while ($row = mysqli_fetch_array($result)) {
                                   // $Comp_id = $row['Comp_Id'];
                                    $email = $row['email'];
                                    // $Serv_Prov_Id = $row['SerProv_Id'];
                                   // $Cust_Serv_Id = $row['Cust_Ser_Id'];
                                   // $Details = $row['Details'];
                                    ?>
                                    <tr id='tr_<?= $id ?>'>
                                        <td><input type='checkbox' name='delete[]' value='<?= $Comp_Id ?>' ></td>
                                       
                                        <td><?= $email ?></td>
                                      
                                    </tr>
                                    <?php
                                    $id++;
                                }
                                ?>
                            </tbody>
                        </table>
                        <input type="submit" class="btn btn-primary" name="Offers_delete" id="but_delete" value="Delete Offers">
                        <?php
                        if (isset($_POST['Offers_delete'])) {

                            if (isset($_POST['delete'])) {
                                foreach ($_POST['delete'] as $deleteid) {
                                    $deleteUser = "DELETE from complain WHERE Comp_Id ='$deleteid'";
                                    $conn->query($deleteUser);
                                }
                                echo "<script>window.location.href='complain.php'</script>";
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