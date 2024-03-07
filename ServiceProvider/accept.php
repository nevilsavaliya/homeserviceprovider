<?php
include 'connection.php';
session_start();
$id = $_GET["id"];
$email = $_SESSION['ProviderEmail'];
//
$sql = "update customer_service set accept_status='1' where Cust_id='$id'";
$result = mysqli_query($conn, $sql);
if($result)
{
    $sx ="select SerProv_Id from service_provider where SerProv_Email = '$email'";
    $r = mysqli_query($conn, $sx);
    $row = mysqli_fetch_assoc($r);
    $sid = $row["SerProv_Id"];
    
    $sq = "insert into service_booking_details  values(`id`,'$id','$sid')";
    $rx = mysqli_query($conn, $sq);
    header("location:service-list.php");
}
?>
