<?php

include("db2.php");

$db = $conn;
$tableName = "review";
$columns = ['id', 'nama', 'rating', 'review', 'tanggal'];
$id = $_GET['id'];
$fetchData1 = fetch_data1($db, $tableName, $columns, $id);

function fetch_data1($db, $tableName, $columns, $id)
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
        $query = "SELECT " . $columnName . " FROM $tableName WHERE produk_id = " . $id . " ORDER BY tanggal DESC";
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
