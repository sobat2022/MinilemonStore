<?php

session_start();
$email = $_POST['email'];
$nama = $_POST['nama'];
$rating = $_POST['rating'];
$review = $_POST['review'];
$produk_id = $_POST['id'];
$tgl = date('Y-m-d');

$session_email = $_SESSION['username'];

$con = mysqli_connect('localhost', 'root', '', 'minilemon_store');
if ($con->connect_error) {
    die('Connection Failed : ' . $con->connect_error);
} else {
    if ($email == $session_email) {
        $stmt = $con->prepare("INSERT INTO review (nama,produk_id,rating,review,email,tanggal) values(?,?,?,?,?,?) ");
        $stmt->bind_param("siisss", $nama, $produk_id, $rating, $review, $email, $tgl);
        $stmt->execute();

        $stmt->close();
        $con->close();

        header('location: http://' . $_SERVER['HTTP_HOST'] . '/MinilemonStore/home.php', true, 303); //pindah halaman
    } else {
        echo $tgl;
    }
}
