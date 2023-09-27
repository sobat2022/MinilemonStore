<?php

session_start();
include("db2.php");

$db = $conn;
$tableName = "keranjang";
$columns = ['keranjang.id', 'keranjang.nama', 'keranjang.nama_produk', 'keranjang.jumlah_produk', 'keranjang.ukuran', 'keranjang.harga', 'keranjang.owner'];

if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = 'Admin';
}

if (isset($_GET['username'])) {
    $_SESSION['username'] = $_SESSION['username'];
}
$email = $_SESSION['username'];
$fetchDataCart = fetch_data_cart($db, $tableName, $columns, $email);

function fetch_data_cart($db, $tableName, $columns, $email)
{
    $msg = "Database connection ";
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($email)) {
        $msg = "Login terlebih dahulu";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "columns Name must be defined in an indexed array";
    } elseif (empty($tableName)) {
        $msg = "Table Name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName" . " JOIN user ON keranjang.nama = user.nama WHERE user.email =" . "'$email'";
        $result = $db->query($query);
        if ($result == true) {
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $msg = $row;
            } else {
                $msg = "Silahkan Berbelanja";
            }
        } else {
            $msg = mysqli_error($db);
        }
    }
    return $msg;
}
