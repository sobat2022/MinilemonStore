<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "minilemon_store";
$conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    //echo "koneksi sukses";
}
