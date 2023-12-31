<?php
// Include configuration file 
session_start();
require_once 'php/google_config.php';


$login_button = '';


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
    }
}



$login_button = '<a href="' . $google_client->createAuthUrl() . '"> <button class="btn btn-g w-100"><i class="fab fa-google"></i>Continue with Google</button></a>';

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
        <form action="index.html" class="search-form">
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
                    <a href="index.html"><img src="assets/img/logominilemon.png" alt="img"></a>
                </div>
                <p class="details">Donsectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. </p>
                <div class="address-inner">
                    <h5>Address</h5>
                    <p>3538 Cambridge Place Laurel, MD 20707</p>
                </div>
                <div class="address-inner">
                    <h5>Phone</h5>
                    <p>410-565-2575</p>
                </div>
                <div class="address-inner mb-0">
                    <h5>Email</h5>
                    <p>JohnPMills@dmarket.com</p>
                </div>
            </div>

        </div>
    </div>
    <!-- dkt-sitebar-menu end-->

    <!-- navbar start -->
    <div class="navbar-area" style="background-color: rgb(255, 255, 255);">
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
                    <a class="btn btn-base" href="#">Login</a>
                </div>
                <div class="collapse navbar-collapse" id="dkt_main_menu">
                    <ul class="navbar-nav menu-open">
                        <li class="menu-item-has-children current-menu-item">
                            <a href="home.php">Home</a>
                            <ul class="sub-menu">
                                <li><a href="home.php">Home</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children current-menu-item">
                            <a href="#">Product</a>
                            <ul class="sub-menu">
                                <li><a href="product.php">Product</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children current-menu-item">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="product.php">Product</a></li>
                                <li><a href="vendor.php">Vendor</a></li>
                                <li><a href="faq.php">Faq</a></li>
                                <li><a href="policy.php">Refund Policy</a></li>
                                <li><a href="sign-in.html">Sign In</a></li>
                                <li><a href="sign-up.html">Sign Up</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children current-menu-item">
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.php">Blog</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">About us</a></li>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <ul>

                        <li class="menu-bar dropdown-menu-btn"><a href="#"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- breadcrumb start -->
    <div class="breadcrumb-area" style="background-image:url('assets/img/home.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <div class="section-title text-center">
                            <h2 class="page-title">Register Your Account</h2>
                            <ul class="page-list">
                                <li><a href="home.php">Sign up</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- policy-page start -->
    <section class="pd-top-100 pd-bottom-100 bg-sky-blue">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10 text-center">
                    <div class="sign-in-area">
                        <h2>Sign up to your account</h2>
                        <form class="contact-form-wrap" action="php/register_seller.php" method="post">
                            <div class="single-input-wrap input-group">
                                <label for="inp-0">User Name</label>
                                <input id="inp-0" type="text" class="form-control" placeholder="Enter your Name" name="nama">
                            </div>
                            <div class="single-input-wrap input-group">
                                <label for="inp-1">Email address</label>
                                <input id="inp-1" type="text" class="form-control" placeholder="Enter your email address" name="email">
                            </div>
                            <div class="single-input-wrap input-group">
                                <label for="inp-2">Password</label>
                                <input id="inp-2" type="password" class="form-control" placeholder="Enter your email password" name="password">
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-12">
                                    <div class="single-category text-left">
                                        <label><input type="checkbox" aria-label="Checkbox for following text input">
                                            <span class="checkmark"></span>
                                            Remember me</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-12 text-sm-right text-left">
                                    <a class="forget-pass" href="#">Forgot your password?</a>
                                </div>
                            </div>
                            <button class="btn btn-base w-100">Sign Up</button>
                        </form>
                        <p>Or continue with</p>
                        <?php echo '<div align="center">' . $login_button . '</div>'; ?>
                        <p>Have you already have account? <a href="sign-in.php">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- policy-page end -->

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
                                <p>2200 Pooz Street</p>
                                <p>Henderson, TN 38340</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="thumb mt-0">
                                <img src="assets/img/footer/2.png" alt="img">
                            </div>
                            <div class="media-body">
                                <p class="m-0">example@mail.com</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="thumb mt-0">
                                <img src="assets/img/footer/3.png" alt="img">
                            </div>
                            <div class="media-body">
                                <p class="m-0">517-383-6673</p>
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
                            <li><a href="#">Graphics (26)</a></li>
                            <li><a href="#">Backgrounds (11)</a></li>
                            <li><a href="#">Fonts (9)</a></li>
                            <li><a href="#">Music (3)</a></li>
                            <li><a href="#">Photography (3)</a></li>
                            <li><a href="#">Themes (3)</a></li>
                            <li><a href="#">Web Templates (3)</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer-widget widget widget_news">
                        <h4 class="widget-title">Latest News</h4>
                        <div class="widget-news-wrap">
                            <div class="date">May 11, 2020</div>
                            <p>The heights by great men </p>
                        </div>
                        <div class="widget-news-wrap">
                            <div class="date">May 11, 2020</div>
                            <p>The heights by great men </p>
                        </div>
                        <div class="widget-news-wrap">
                            <div class="date">May 11, 2020</div>
                            <p>The heights by great men </p>
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
                    <div class="col-lg-6 text-lg-right text-center">
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
    <!-- main js  -->
    <script src="assets/js/main.js"></script>
</body>

</html>