<?php

session_start();
//$nama = $_POST['nama'];
$nama_produk = $_POST['nama_produk'];
$jumlah_produk = $_POST['jumlah_produk'];
$ukuran = $_POST['ukuran'];
$harga = $_POST['harga'];
$owner = $_POST['owner'];
if (!isset($_SESSION['nama'])) {
    $_SESSION['nama'] = 'Admin';
}

if (isset($_GET['nama'])) {
    $_SESSION['nama'] = $_SESSION['nama'];
}
$nama = $_SESSION['nama'];
// $nama_produk = 'baju dewasa';
// $jumlah_produk = '4';
// $ukuran = 'L';
// $harga = '200000';

$con = mysqli_connect('localhost', 'root', '', 'minilemon_store');
if ($con->connect_error) {
    die('Connection Failed : ' . $con->connect_error);
} else {
    $stmt = $con->prepare("INSERT INTO keranjang (nama,nama_produk,jumlah_produk,ukuran,harga,owner) values(?,?,?,?,?,?) ");
    $stmt->bind_param("ssisis", $nama, $nama_produk, $jumlah_produk, $ukuran, $harga, $owner);
    $stmt->execute();

    $stmt->close();
    $con->close();

    header('location: http://' . $_SERVER['HTTP_HOST'] . '/MinilemonStore/home.php', true, 303); //pindah halaman
}
