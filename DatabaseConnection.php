<?php

error_reporting(0);
session_start();
$servername = "0.tcp.in.ngrok.io";
$port = 16247;
$username = "root";
$password = "";
$dbname = "homeserviceprovider1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,$port);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
