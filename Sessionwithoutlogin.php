<?php

if ($_SESSION['loggedin'] != true) {
    header("Location: Customerlogin.php");
}