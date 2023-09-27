<?php
session_start();

$con = mysqli_connect('localhost', 'root', '', 'minilemon_store');

$email = $_POST['email'];
$password = $_POST['password'];

$pass = md5($password);

$data = mysqli_query($con, "select * from user where email='$email' and password='$pass'");

$cek = mysqli_num_rows($data);
$row = mysqli_fetch_row($data);
if ($email == 'admin' && $password == 'admin') {
    header('location: http://' . $_SERVER['HTTP_HOST'] . '/Admin-dashboard/HTML/dashboard/analytics-index.php', true, 303);
} elseif ($row[4] == 'seller') {
    $_SESSION['nama'] = $row[1];
    $_SESSION['username'] = $email;
    $_SESSION['role'] = $row[4];
    header('location: http://' . $_SERVER['HTTP_HOST'] . '/seller-dashboard/HTML/dashboard/analytics-index.php', true, 303);
} else {
    if ($cek > 0) {
        $_SESSION['username'] = $email;
        $_SESSION['nama'] = $row[1];
        $_SESSION['role'] = $row[4];
        // echo $_SESSION['username'];
        header('location: http://' . $_SERVER['HTTP_HOST'] . '/MinilemonStore/home.php', true, 303);
    } else {
        header('location: http://' . $_SERVER['HTTP_HOST'] . '/MinilemonStore/php/error.php?pesan=gagal', true, 303);
    }
}
