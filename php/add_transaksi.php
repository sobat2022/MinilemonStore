<?php
session_start();
//$nama = $_POST['nama'];
$nama_produk = $_POST['nama_produk'];
$jumlah_produk = $_POST['jumlah_produk'];
$ukuran = $_POST['ukuran'];
$harga = $_POST['harga'];
$status = $_POST['status'];
$tanggal = $_POST['tanggal'];
$id_transaksi = $_POST['id_transaksi'];

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
    $stmt = $con->prepare("INSERT INTO transaksi (nama,nama_produk,jumlah_produk,ukuran,harga,status,tanggal,id_transaksi) values(?,?,?,?,?,?,?,?) ");
    $stmt->bind_param("ssisisss", $nama, $nama_produk, $jumlah_produk, $ukuran, $harga, $status, $tanggal, $id_transaksi);
    $stmt->execute();

    $stmt->close();
    $con->close();

    header('location: http://' . $_SERVER['HTTP_HOST'] . '/MinilemonStore/home.php', true, 303); //pindah halaman
}
