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
                    <i class="fas fa-table me-1"></i>Add Admin
                </div>
                <div class="card-body" style="padding-left: 150px;padding-right: 150px;">
                    <form method="post">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="Admin_id" name="Admin_id" type="text" placeholder="Admin id"  required>
                            <label for="Admin_id">Admin ID</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="Admin_Name" name="Admin_Name" type="text" placeholder="Admin Name" required>
                            <label for="Admin_Name">Admin Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="Admin_Email" name="Admin_Email" type="email" placeholder="Admin Email" required>
                            <label for="Admin_Email">Admin Email ID</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="Admin_Password" name="Admin_password" type="password" placeholder="Admin password" required>
                            <label for="Admin_Password">Admin Password</label>
                        </div>
                        <div class="d-grid gap-2">
                            <input type="submit"  name="Adminsubmit" id="Adminsubmit" class="btn btn-primary btn-lg"  value="Add Admin">
                        </div>
                    </form>
                </div>
                <?php
                if (isset($_POST['Adminsubmit'])) {
                    $Admin_id = $_POST['Admin_id'];
                    $Admin_Name = $_POST['Admin_Name'];
                    $Admin_Email = $_POST['Admin_Email'];
                    $Admin_Password = $_POST['Admin_password'];

                    $CheckP = "SELECT * FROM admin WHERE Admin_id = '$Admin_id'";
                    $result = mysqli_query($conn, $CheckP);
                    $check = mysqli_fetch_array($result);
                    if (!isset($check)) {
                        $admin = "INSERT INTO admin VALUES ('$Admin_id', '$Admin_Name', '$Admin_Email', '$Admin_Password')";
                        if ($conn->query($admin) === TRUE) {
                            echo "<script>window.location.href='Admin.php'</script>";
                        } else {
                            echo "<script> alert('$conn->error');</script>";
                        }
                    } else {
                        echo "<script>alert('This Admin Email Id is already exist!');</script>";
                    }
                }
                ?>
            </div>
        </div>
    </body>
</html>
