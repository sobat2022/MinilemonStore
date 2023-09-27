<?php

include("db2.php");

$db = $conn;
$tableName = "produk";
$columns = ['id', 'nama', 'harga', 'deskripsi', 'gambar', 'owner'];
$ids = $_GET['id'];
$fetchData = fetch_data($db, $tableName, $columns, $ids);

function fetch_data($db, $tableName, $columns, $ids)
{
    $msg = "Database connection ";
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "columns Name must be defined in an indexed array";
    } elseif (empty($tableName)) {
        $msg = "Table Name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName WHERE ID = " . $ids . " ORDER BY id DESC";
        $result = $db->query($query);
        if ($result == true) {
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $msg = $row;
            } else {
                $msg = "No Data Found";
            }
        } else {
            $msg = mysqli_error($db);
        }
    }
    return $msg;
}
