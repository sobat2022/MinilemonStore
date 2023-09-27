<?php

include("db2.php");

$db = $conn;
$tableName = "promo";
$columns = ['id', 'nama', 'jenis', 'deskripsi', 'diskon', 'tanggal_awal', 'tanggal_akhir'];
$diskon = $_GET['btndiskon'];
$fetchData21 = fetch_data21($db, $tableName, $columns, $diskon);

function fetch_data21($db, $tableName, $columns, $diskon)
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
        $query = "SELECT " . $columnName . " FROM $tableName WHERE diskon = " . $diskon . " ORDER BY tanggal_akhir ";
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
