<?php
session_start();
include './DatabaseConnection.php';

    $Email = $_POST['Email'];
    $password = $_POST['password'];

    $sql = $conn->prepare("SELECT * FROM customer WHERE Cust_Email = ? ");
    $sql->bind_param("s", $Email);
    $sql->execute();
    $result = $sql->get_result()->fetch_all(MYSQLI_ASSOC);

    if (count($result) == 1) {
        $sql = $conn->prepare("SELECT * FROM customer WHERE Cust_Email =? && password = ? ");
        $sql->bind_param("ss", $Email, $password);
        $sql->execute();
        $resultPassword = $sql->get_result()->fetch_all(MYSQLI_ASSOC);

        if (count($resultPassword) > 0) {
                $_SESSION['loggedin'] = true;
                $_SESSION['Email'] = $Email;
                echo "<script>window.location.href='index.php'</script>";
        } else {
            echo '<div class="alert alert-danger" role="alert">username is not valid</div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">username is not valid</div>';
}
?>