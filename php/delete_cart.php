<?php

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];

$con = mysqli_connect('localhost', 'root', '', 'minilemon_store');
if ($con->connect_error) {
    die('Connection Failed : ' . $con->connect_error);
} else {
    $stmt = $con->prepare("DELETE FROM keranjang where id = ? ");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    //echo $id;

    $stmt->close();
    $con->close();

    header('location: http://' . $_SERVER['HTTP_HOST'] . '/MinilemonStore/shoppingcart.php', true, 303); //pindah halaman
}
