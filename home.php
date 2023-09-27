<?php
include("php/display_cart.php");
require_once 'php/google_config.php';
$jumlahharga = 0;
$href;

if (isset($_GET["code"])) {

    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


    if (!isset($token['error'])) {

        $google_client->setAccessToken($token['access_token']);


        $_SESSION['access_token'] = $token['access_token'];


        $google_service =
            new Google\Service\Oauth2($google_client);


        $data = $google_service->userinfo->get();


        if (!empty($data['given_name'])) {
            $_SESSION['nama'] = $data['given_name'];
        }

        if (!empty($data['family_name'])) {
            $_SESSION['user_last_name'] = $data['family_name'];
        }

        if (!empty($data['email'])) {
            $_SESSION['username'] = $data['email'];
        }

        if (!empty($data['gender'])) {
            $_SESSION['user_gender'] = $data['gender'];
        }

        if (!empty($data['picture'])) {
            $_SESSION['user_image'] = $data['picture'];
        }
        $con = mysqli_connect('localhost', 'root', '', 'minilemon_store');

        $conn = $con->prepare("SELECT id FROM user WHERE nama=? and email =?");
        $conn->bind_param("ss", $_SESSION['nama'], $_SESSION['username']);
        $conn->execute();
        $result = $conn->get_result();
        $rows = $result->fetch_row();
        $row = $result->fetch_assoc();

        $emailExists = (bool)$row;
        if ($emailExists) {
            $_SESSION['role'] = $rows[4];
        } else {
            $role = 'customer';
            $con2 = mysqli_connect('localhost', 'root', '', 'minilemon_store');
            $stmt = $con2->prepare("INSERT INTO user (nama,email,password,role) values(?,?,?,?) ");
            $pass = md5($password);
            $stmt->bind_param("ssss", $_SESSION['nama'], $_SESSION['username'], $pass, $role);
            $stmt->execute();

            $_SESSION['role'] = $role;
            $stmt->close();
            $con2->close();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minilemon Store by Mei - Mei</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/dataaos.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/fancybox.min.css">
    <link rel="stylesheet" href="assets/css/style4.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <link rel="stylesheet" href="assets/css/megastyles.css">
    <link rel="stylesheet" href="assets/css/effect.css">
    <link rel="stylesheet" href="assets/css/product.css">


</head>


<body>
    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->
    <!-- search popup start-->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="td-search-popup" id="td-search-popup">
        <form action="home.php" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search" style="color: black;"></i></button>
        </form>
    </div>
    <!-- dkt-sitebar-menu end-->

    <!-- dkt-sitebar-menu start-->
    <div class="dkt-sitebar-menu">
        <div class="dkt-sitebar-menu">
            <a class="dkt-sitebar-close" href="#"><i class="fa fa-times"></i></a>
            <div class="dkt-details-inner">
                <div class="logo">
                    <a href="home.php"><img src="assets/img/logominilemon.png" alt="img"></a>
                </div>
                <p class="details"> Marketplace yang menjual berbagai merchandise kepada pelanggan minilemon</p>
                <div class="address-inner">
                    <h5>Address</h5>
                    <p>Sutorejo prima utara pdd no 14</p>
                </div>
                <div class="address-inner">
                    <h5>Phone</h5>
                    <p>+62842341234</p>
                </div>
                <div class="address-inner mb-0">
                    <h5>Email</h5>
                    <p>minilemonstore@gmail.com</p>
                </div>
            </div>
            <!-- 
            <div class="dkt-market-earn">
                <div class="address-inner">
                    <h5>Market Earning</h5>
                    <p>Marketplace yang menjual berbagai merchandise kepada pelanggan minilemon</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="earn-inner">
                            <p>Item Sold</p>
                            <h5>12</h5>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="earn-inner">
                            <p>Total Earning</p>
                            <h5>Rp.100.000</h5>
                        </div>
                    </div>
                </div> -->
        </div>
    </div>
    </div>
    <!-- dkt-sitebar-menu end-->

    <!-- navbar start -->
    <div class="navbar-area">
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#dkt_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="logo">
                    <a class="main-logo-h1" href="home.php"><img src="assets/img/logominilemon.png" alt="img"></a>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="btn btn-base" href="#">Sign Up</a>
                </div>
                <div class="collapse navbar-collapse" id="dkt_main_menu">
                    <ul class="navbar-nav menu-open">
                        <li class="menu-item-has-children current-menu-item myDiv dropdown-submenu">
                            <a class="test" href="home.php">Home</a>
                            <ul class="sub-menu myDiv2 dropdown-menu">
                                <li><a href="home.php">Home</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children current-menu-item myDiv dropdown-submenu">
                            <a class="test" href="product.php">Product</a>
                            <ul class="sub-menu myDiv2 dropdown-menu">
                                <li><a href="product.php">Product</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children current-menu-item myDiv dropdown-submenu">
                            <a class="test" href="vendor.php">Pages</a>
                            <ul class="sub-menu myDiv2 dropdown-menu">
                                <li><a href="product.php">Product</a></li>
                                <li><a href="vendor.php">Vendor</a></li>
                                <li><a href="faq.php">Faq</a></li>
                                <li><a href="policy.php">Refund Policy</a></li>
                                <li><a href="sign-in.html">Sign In</a></li>
                                <li><a href="sign-up.html">Sign Up</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children current-menu-item myDiv dropdown-submenu">
                            <a class="test" href="blog.php">Blog</a>
                            <ul class="sub-menu myDiv2 dropdown-menu">
                                <li><a href="blog.php">Blog</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">About us</a></li>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <ul>
                        <li><a href="#"><img src="assets/img/icon/icon_cart.png" onclick="showCartBoxDetail()" alt="icon">View Cart</a>
                        </li>
                        <div class="cart-detail-header border">
                            <div class="relative">
                                <?php
                                if (is_array($fetchDataCart)) {
                                    $sn = 1;
                                    foreach ($fetchDataCart as $data) {
                                ?>
                                        <div class="product-cart-son ">
                                            <div class="image-product-cart float-left center-vertical-image ">
                                                <a href="#"><img src="assets/img/item/produk1.jpg" alt="" /></a>
                                            </div>
                                            <div class="info-product-cart float-left">
                                                <p class="title-product title-hover-black"><a class="animate-default" href="#"><?php echo $data['nama_produk'] ?? ''; ?></a></p>
                                                <p class="clearfix price-product"><?php echo $data['harga'] ?? ''; ?> <span class="total-product-cart-son">(<?php echo $data['jumlah_produk'] ?? ''; ?>)</span></p>
                                                <?php $tempharga = $data['harga'] * $data['jumlah_produk'] ?>

                                            </div>
                                        </div>
                                    <?php
                                        $jumlahharga = $jumlahharga + $tempharga;
                                        $sn++;
                                    }
                                } else { ?>
                                    <?php echo $fetchDataCart; ?>
                                <?php
                                } ?>
                            </div>

                            <div class="relative border no-border-l no-border-r total-cart-header">
                                <p class="bold clear-margin">Total:</p>
                                <p class=" clear-margin bold">Rp.<?php echo $jumlahharga; ?></p>
                            </div>
                            <div class="relative btn-cart-header">
                                <?php
                                if ($_SESSION['username'] == 'Admin') {
                                    $href = "sign-in.php";
                                } else {
                                    $href = "shoppingcart.php";
                                } ?>
                                <a href="<?php echo $href ?>" class="uppercase bold animate-default ">view cart</a>
                                <a href="checkout.php" class="uppercase bold button-hover-red animate-default">checkout</a>
                            </div>
                        </div>
                        <li><a href="php/logout.php"><img src="assets/img/icon/1b.png" alt="icon"></a></li>
                        <!-- gambar icon -->
                        <li class=" dropdown-menu-btn"><a href=" #"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->

    <!-- banner start -->
    <section id=" home" class="s-home">
        <video id=" video1" autoplay loop muted plays-inline class="back-video">
            <source src="assets/img/company.mp4" type="video/mp4">
        </video>
        <div class="banner-areas">
            <div class="container">
                <div class="banner-area-inner">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="banner-inner text-center" data-aos="zoom-out" data-aos-duration="2000">
                                <!-- <h2>ragu dengan kualitas produk olshop? <br> <span>belanja di minilemon store
                                        aja!</span>
                                </h2>
                                <p>semua barang yang dijual di lemon store sudah lulus uji kualitas, sehingga
                                    kamu bisa berbelanja dengan tenang tanpa takut kualitas produk kamu bakal tidak
                                    sesuai
                                    dengan gambar.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- featured-area start -->
    <section id="home" class="s-home">
        <div class="banner-areas" style="background: url(assets/img/bgmeimei2.jpg);">
            <div class="container">
                <div class="banner-area-inner">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="banner-inner text-center" data-aos="fade-down-right" data-aos-duration="2000">
                                <h2>Dibeli, Dibeli, Dibeli!<br> <span>Memey semangat banget jualin kalian loh!</span>
                                </h2>
                                <p></p><a class="btn2 btn2-white" style="margin-top: 70px;" href="product.php">Masuk Toko Memey</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- featured-area end -->
    <div class="banner-areas" style="background: url(assets/img/overlaytop.jpg);">
        <div class="background">
            <h style="text-align: center;">NOW OPEN!</h>
        </div>
    </div>

    <!-- fun-fact-area start -->
    <section id="home" class="s-home">
        <div class="banner-areas" style="background: url(assets/img/bawahmeimei.jpg);">
            <div class="container">
                <div class="banner-area-inner">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="banner-inner text-center" data-aos="fade-up-left" data-aos-duration="2000">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fun-fact-area end -->

    <!-- all-item area start -->
    <section id="home" class="s-home">
        <div class="banner-areas" style="background: url(assets/img/bgmeimei.jpg);">
            <div class="container">
                <div class="col-lg-12">
                    <div class="cards" style="left: 80px;top: 280px;" data-aos="zoom-in" data-aos-duration="1500">
                        <a href="#"></a>
                        <img src='assets/img/konten1.jpg' alt=''>
                        <div class="cards-overlay">
                            <div class="title">
                                <h3>Barongsai</h3>
                            </div>
                            <div class="cards-body">
                                <p>tarian tradisional Tiongkok dengan menggunakan sarung yang menyerupai singa.
                                    Barongsai memiliki sejarah ribuan tahun.
                                    Catatan pertama tentang tarian ini dengan tujuan untuk mendatangkan keberuntungan,
                                    hal ini bisa ditelusuri pada masa
                                    Dinasti Chin sekitar abad ketiga sebelum masehi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="cards" style="right: 80px;" data-aos="zoom-in" data-aos-duration="1500">
                        <a href="#"></a>
                        <img src='assets/img/konten2.jpg' alt=''>
                        <div class="cards-overlay">
                            <div class="title">
                                <h3>Pia</h3>
                            </div>
                            <div class="cards-body">
                                <p>istilah kuliner yang diserap ke dalam bahasa Indonesia dari bahasa Hokkien. Istilah
                                    ini digunakan untuk berbagai macam
                                    penganan yang mempunyai asal atau dipengaruhi kuliner Tionghoa, misalnya kue,
                                    biskuit, atau pastri.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- all-item area end -->

    <!-- footer area start -->
    <footer class="footer-area pd-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget widget widget_contact">
                        <h4 class="widget-title">Contact Us</h4>
                        <div class="media">
                            <div class="thumb">
                                <img src="assets/img/footer/1.png" alt="img">
                            </div>
                            <div class="media-body">
                                <p>Sutorejo prima utara pdd no 14</p>
                                <p>Minilemon store , 68432</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="thumb mt-0">
                                <img src="assets/img/footer/2.png" alt="img">
                            </div>
                            <div class="media-body">
                                <p class="m-0">minilemonstore@gmail.com</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="thumb mt-0">
                                <img src="assets/img/footer/3.png" alt="img">
                            </div>
                            <div class="media-body">
                                <p class="m-0">+62823405213</p>
                            </div>
                        </div>
                        <ul class="social-area">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget widget widget_nav_menu">
                        <h4 class="widget-title">Useful link</h4>
                        <ul>
                            <li><a href="#">All properties</a></li>
                            <li><a href="#">FAQ’S</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Sign up</a></li>
                            <li><a href="#">Articles</a></li>
                            <li><a href="#">Popular tags</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget widget widget widget_products">
                        <h4 class="widget-title">Products</h4>
                        <ul>
                            <li><a href="#">Clothes (26)</a></li>
                            <li><a href="#">Jackets (11)</a></li>
                            <li><a href="#">Merch (9)</a></li>
                            <li><a href="#">Custom tee (3)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer-widget widget widget_news">
                        <h4 class="widget-title">Latest News</h4>
                        <div class="widget-news-wrap">
                            <div class="date">May 11, 2022</div>
                            <p>Promo diskon akhir bulan may</p>
                        </div>
                        <div class="widget-news-wrap">
                            <div class="date">February 14, 2022</div>
                            <p>Promo bulan valentine</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer bottom-->
        <div class="container">
            <div class="copyright-area">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <p>©2022 CopyRight Example. All rights reserved. </p>
                    </div>
                    <div class="col-lg-6 text-lg-right">
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">About</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->




    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->


    <!-- all plugins here -->
    <script src="assets/js/vendor.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- main js  -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/sync_owl_carousel.js" defer=""></script>
    <script src="assets/js/scripts.js" defer=""></script>
    <script src="assets/js/bootstrap.min.js" defer=""></script>
    <script src="assets/js/slick.min.js" defer=""></script>
    <script src="assets/js/jquery-3.3.1.min.js" defer=""></script>
    <script src="assets/js/multirange.js" defer=""></script>
</body>

</html>