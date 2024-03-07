<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>All Service</title>
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
                    <i class="fas fa-table me-1"></i>All Services
                </div>
                <form method="post">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM `service_master`";
                                $result = $conn->query($query);
                                while ($row = $result->fetch_assoc()) {
                                    echo '<tr>'
                                    . '<td><input type="checkbox" name="delete[]" value="' . $row['Service_Id'] . '"></td>';
                                    echo '<td>' . $row['Service_Name'] . '</td>';
                                    echo '<td>' . $row['Description'] . '</td>';
                                    echo '<td>' . $row['Status'] . '</td>';
                                    
                                }
                                ?>
                            </tbody>
                        </table>
                        <input type="submit" class="btn btn-primary" name="Admin_delete" id="but_delete" value="Delete Services">
                        <?php
                        if (isset($_POST['Admin_delete'])) {
                            if (isset($_POST['delete'])) {
                                foreach ($_POST['delete'] as $deleteid) {
                                    $deleteUser = "DELETE from service_master WHERE Service_Id ='$deleteid'";
                                    $conn->query($deleteUser);
                                }
                                echo "<script>window.location.href='ServiceProvider.php'</script>";
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
