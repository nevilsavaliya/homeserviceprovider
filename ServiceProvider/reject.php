<?php
include 'connection.php';
$id = $_GET["id"];

$sql = "update customer_service set status='0' where Cust_id='$id'";
$result = mysqli_query($conn, $sql);
if($result)
{
    header("location:service-list.php");
}

?>