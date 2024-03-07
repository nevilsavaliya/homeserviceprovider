<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Service Provider</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/be19cf8b62.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
        ?>

        <?php
        include './DatabaseConnection.php';
        include './Sessionwithoutlogin.php';
        if (isset($_POST['Admin_delete'])) {
            $service_id = $_POST["assign"];
            $custid = $_GET["radio"];

            $sql = "update customer_service set status = 1 where Cust_id=$custid";
            $res = mysqli_query($conn, $sql);
//                                        echo "<a href ='Dashboard.php'>send</a>";
            if ($res) {
                $sq = "insert into assign_success value(`id`,'$service_id','$custid')";
                $r = mysqli_query($conn, $sq);
                if ($r) {
                    header("location: Dashboard.php");
                }
            }
        }
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
                    <i class="fas fa-table me-1"></i>Service Provider
                </div>
                <form method="post">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">SerProv Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile No</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">AadharCard No</th>
                                    <th scope="col">Skills</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
$query = "SELECT * FROM `service_provider`";
$result = $conn->query($query);
echo "<form method='POST'>";
while ($row = $result->fetch_assoc()) {
    echo '<tr>' . '<td><input type="radio" name="assign" value="' . $row['SerProv_Id'] . '"></td>';
    echo '<td>' . $row['SerProv_Id'] . '</td>';
    echo '<td>' . $row['SerProv_Name'] . '</td>';
    echo '<td>' . $row['SerProv_Email'] . '</td>';
    echo '<td>' . $row['SerProv_ContactNo'] . '</td>';
    echo '<td>' . $row['SerProv_Address'] . '</td>';
    echo '<td>' . $row['Gender'] . '</td>';
    echo '<td>' . $row['AadharNumber'] . '</td>';
    echo '<td>' . $row['Skills'] . '</td>';
}
?>
                            </tbody>
                        </table>
                        <input type="submit" class="btn btn-primary" name="Admin_delete" id="but_delete" value="Assing Service Provider">
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
