<?php


$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$customer = 'customer';

$con = mysqli_connect('localhost', 'root', '', 'minilemon_store');

$conn = $con->prepare("SELECT id FROM user WHERE nama=? and email =?");
$conn->bind_param("ss", $nama, $email);
$conn->execute();
$result = $conn->get_result();
$row = $result->fetch_assoc();
$emailExists = (bool)$row;
//results
if ($emailExists) {
    echo "Nama tersebut sudah digunakan";
    header('location: http://' . $_SERVER['HTTP_HOST'] . '/MinilemonStore/sign-up.php', true, 303); //pindah halaman
} else {

    echo "Nama tersebut belum digunakan";
    $con2 = mysqli_connect('localhost', 'root', '', 'minilemon_store');
    $stmt = $con2->prepare("INSERT INTO user (nama,email,password,role) values(?,?,?,?) ");
    $pass = md5($password);
    $stmt->bind_param("ssss", $nama, $email, $pass, $customer);
    $stmt->execute();

    $stmt->close();
    $con2->close();

    header('location: http://' . $_SERVER['HTTP_HOST'] . '/MinilemonStore/sign-in.php', true, 303); //pindah halaman

}
