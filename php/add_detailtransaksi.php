<?php
include("display_cart.php");
include("display_produk.php");
//session_start();
//$nama = $_POST['nama'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$promo = $_POST['promo'];
$address = $_POST['address'];
$kodepos = $_POST['kodepos'];
$kota = $_POST['kota'];
$note = $_POST['note'];
$id_transaksi = $_POST['id_transaksi'];
$totalharga = $_POST['id_transaksi'];
$owner = $_POST['owner'];
$tanggal = date('d M Y');
$idtanggal = date('dmyhis');

if (!isset($_SESSION['nama'])) {
    $_SESSION['nama'] = 'Admin';
}
if (!isset($promo)) {
    $promo = "-";
}
if (isset($_GET['nama'])) {
    $_SESSION['nama'] = $_SESSION['nama'];
}
$nama = $_SESSION['nama'];
$id_transaksi = $idtanggal . $nama . $id_transaksi;
$status = 'belum terbayar';
// $jumlah_produk = '4';
// $ukuran = 'L';
// $harga = '200000';

$con = mysqli_connect('localhost', 'root', '', 'minilemon_store');
if ($con->connect_error) {
    die('Connection Failed : ' . $con->connect_error);
} else {
    $stmt = $con->prepare("INSERT INTO detail_transaksi (nama,first_name,last_name,email,phone,address,kodepos,kota,note,id_transaksi,total_harga,promo,owner) values(?,?,?,?,?,?,?,?,?,?,?,?,?) ");
    $stmt->bind_param("ssssssssssiss", $nama, $firstname, $lastname, $email, $phone, $address, $kodepos, $address, $note, $id_transaksi, $totalharga, $promo, $owner);
    $stmt->execute();

    $stmt->close();

    $stmtt = $con->prepare("INSERT INTO transaksi (nama,nama_produk,jumlah_produk,ukuran,harga) SELECT nama,nama_produk,jumlah_produk,ukuran,harga from keranjang where nama = ? ");
    $stmtt->bind_param("s", $nama);
    $stmtt->execute();

    $stmtt->close();

    $stmtt3 = $con->prepare("UPDATE transaksi set status = ? , tanggal = ? , id_transaksi = ? where nama = ? and id_transaksi IS NULL ");
    $stmtt3->bind_param("ssss", $status, $tanggal, $id_transaksi, $nama);
    $stmtt3->execute();

    $stmtt3->close();

    if (is_array($fetchDataCart)) {
        $sn = 1;
        foreach ($fetchDataCart as $data) {
            $namaproduk = $data['nama_produk'];
            $produk = mysqli_query($con, "SELECT stok FROM produk WHERE nama='$namaproduk'");
            $pro    = mysqli_fetch_array($produk);
            $stokproduk    = $pro['stok'];

            $selSto = mysqli_query($con, "SELECT jumlah_produk FROM keranjang WHERE nama_produk='$namaproduk' and nama='$nama'");
            $sto    = mysqli_fetch_array($selSto);
            $stok    = $sto['jumlah_produk'];
            $stok = $stokproduk - $stok;
            if ($stok < 0) {
                header('location: http://' . $_SERVER['HTTP_HOST'] . '/MinilemonStore/error.php', true, 303);
            } else {
                $stmtt4 = $con->prepare("UPDATE produk set stok = ? where nama = ?");
                $stmtt4->bind_param("is", $stok, $namaproduk);
                $stmtt4->execute();
            }
        }
    } else {
        echo $fetchDataCart;
    }

    $stmtt4->close();

    $stmtt2 = $con->prepare("DELETE FROM keranjang where nama = ?");
    $stmtt2->bind_param("s", $nama);
    $stmtt2->execute();

    $stmtt2->close();


    // $stmtt4 = $con->prepare("UPDATE produk set stok = ? where nama = ?");
    // $stmtt4->bind_param("is", $stok, $namaproduk);
    // $stmtt4->execute();

    // $stmtt4->close();
    $con->close();

    header('location: http://' . $_SERVER['HTTP_HOST'] . '/MinilemonStore/home.php', true, 303); //pindah halaman
}
