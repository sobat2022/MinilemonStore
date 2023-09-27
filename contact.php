<?php
include("php/display_cart.php");
$jumlahharga = 0;
$href;
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
                        <li class="menu-item-has-children current-menu-item dropdown-submenu">
                            <a class="test" href="home.php">Home</a>
                            <ul class="sub-menu dropdown-menu">
                                <li><a href="home.php">Home</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children current-menu-item dropdown-submenu">
                            <a class="test" href="#">Product</a>
                            <ul class="sub-menu dropdown-menu">
                                <li><a href="product.php">Product</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children current-menu-item dropdown-submenu">
                            <a class="test" href="#">Pages</a>
                            <ul class="sub-menu dropdown-menu">
                                <li><a href="product.php">Product</a></li>
                                <li><a href="vendor.php">Vendor</a></li>
                                <li><a href="faq.php">Faq</a></li>
                                <li><a href="policy.php">Refund Policy</a></li>
                                <li><a href="sign-in.html">Sign In</a></li>
                                <li><a href="sign-up.html">Sign Up</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children current-menu-item dropdown-submenu">
                            <a class="test" href="#">Blog</a>
                            <ul class="sub-menu dropdown-menu">
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
                                    $href = "sign-in.html";
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
    <!-- breadcrumb start -->
    <div class="breadcrumb-area" style="background-image:url('assets/img/home.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <div class="section-title text-center">
                            <h2 class="page-title">About Us</h2>
                            <ul class="page-list">
                                <li><a href="index.html">Home</a></li>
                                <li>About us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <section class="policy-page-area pd-top-10 pd-bottom-10">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center">
                        <h4>About Minilemon Store</h4>
                    </div>
                    <p>Since we are offering non-tangible irrevocable, digital goods we issue refunds case by case basis
                        only. Refund has to be processed within 15 days of purchase order. Our sales and support will
                        try to solve your issues and if you are not satisfied then we will refund issue.</p>
                    <p>We make our plugins, extensions, and themes with extreme care and launch them only after
                        thorough-repeated testing, so we strongly believe that our products will work without any issue.
                        If you find any issue, we are available to help you solve the issue resulting from any number of
                        reasons.</p>
                    <p>In the case the plugin(s) or theme(s) you purchased didn’t work properly as advertised and we
                        couldn’t resolve the issue, we, ThemePlace, will offer a full refund within 15 days of the
                        purchase. However, since the plugins and themes are digitally delivered and are non-tangible
                        goods, we can offer refund full or partial only if the item(s) you purchased is broken, not
                        working properly, or truly missing features as advertised on the sales page of the item(s) you
                        purchased.</p>
                    <p>Issues caused by third-party plugins, themes, or other software will not provide grounds for a
                        refund.</p>
                    <p>Refunds will be offered at our sole discretion.If the refund is for plugin or theme renewal and
                        you are within first 30 days of the renewal, then please get in touch with our support team and
                        our support team will issue the refund.</p>
                    <h4>Conditions for a refund for new purchase (not renewal)</h4>
                    <p>You must meet ALL of the following conditions:</p>
                    <ul>
                        <li>You are within the first 15 days of the purchase of the item.</li>
                        <li>Your issue(s) comes from not being able to install the plugin or theme properly or get the
                            plugin or theme to perform its basic functions.</li>
                        <li>You have attempted to resolve your issue(s) with our support team.</li>
                        <li>No refunds will be granted after the first 15 days of the original purchase whatsoever.</li>
                        <li>Issues caused by third-party plugins, themes or other software will not provide grounds for
                            a refund.</li>
                        <li>Issues related to Demo Import will not provide grounds for a refund because Demo Import
                            depends on the hosting service.</li>
                    </ul>
                    <p>If you are using a shared hosting plan, then there is a high chance that demo import might not
                        work on your server because your server might have some limitation. For the demo import to work
                        properly, the PHP configuration on your server should be:</p>
                    <ul>
                        <li>max_execution_time 360</li>
                        <li>memory_limit 256M</li>
                        <li>post_max_size 32M</li>
                        <li>upload_max_filesize 32M</li>
                    </ul>
                    <p>Note that there is a difference between a broken item and simply receiving an error message or
                        having trouble configuring the product to your desired result.</p>
                    <p>Before you request a refund from ThemePlace, you must do the following:</p>
                    <ul>
                        <li>Read the extensive documentation related to the item you purchased.</li>
                        <li>Confirm that your server meets the specifications laid out requirements for the product and
                            WordPress in general [https://wordpress.org/about/requirements/].</li>
                        <li>Open a new support ticket with our support team if you are facing issue even after going
                            through the above two points.</li>
                    </ul>
                    <p>If you’re not sure whether a product is right for you, please contact us with your questions
                        before making a purchase. We will be happy to assist you.</p>
                    <p class="m-0">Due to the nature of digital goods, we recognize that this policy can be abused, and
                        reserve the right to refuse refunds if we determine the refund policy is being taken advantage
                        of.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- policy-page end -->

    <!-- contact-area start -->
    <section class="contact-page-area pd-top-100 pd-bottom-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-wrap text-center">
                        <div class="thumb">
                            <img src="assets/img/icon/map-marker.png" alt="img">
                        </div>
                        <h4>Our Address</h4>
                        <p>PSD Building, 2 AlBahr St, Loskia</p>
                        <p>sripur, jamukara.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-wrap text-center">
                        <div class="thumb">
                            <img src="assets/img/icon/phone-pad.png" alt="img">
                        </div>
                        <h4>Our Phone</h4>
                        <p>Office Telephone : 0029129102320</p>
                        <p>Mobile : 000 2324 39493</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-wrap text-center">
                        <div class="thumb">
                            <img src="assets/img/icon/envelope.png" alt="img">
                        </div>
                        <h4>Our Email</h4>
                        <p>Main Email : Dmarket@website.com</p>
                        <p>Inquiries : Info@market.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area start -->



    <!-- blog-page area start -->
    <section class="contact-form-area bg-sky-blue pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="comment-form">
                        <div class="section-title text-center">
                            <h6>Contact</h6>
                            <h3>Get in Touch</h3>
                        </div>
                        <form class="contact-form-wrap">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="single-input-wrap input-group">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="far fa-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="single-input-wrap input-group">
                                        <input type="text" class="form-control" placeholder="Your Email">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single-input-wrap input-group">
                                        <textarea class="form-control" rows="4" name="note" placeholder="Message"></textarea>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><img src="assets/img/icon/comment.png" alt="img"></div>
                                        </div>
                                    </div>
                                    <div class="submit-area text-center">
                                        <button type="submit" class="btn btn-base">SEND MESSAGE </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-page area end -->

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
    <script src="assets/js/scripts.js" defer=""></script>
    <!-- main js  -->
    <script src="assets/js/main.js"></script>
</body>

</html>