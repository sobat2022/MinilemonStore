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
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="media v-bc-inner">
                                    <div class="media-left">
                                        <img src="assets/img/v-logo.png" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h3>MinilemonStore</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 align-self-center">
                                <ul class="v-bc-list-inner text-lg-right">
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="assets/img/icon/4.png" alt="img">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <h4>80</h4>
                                                <p>Products</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="assets/img/icon/5.png" alt="img">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <h4>8</h4>
                                                <p>Style</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a class="btn btn-white" href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- all-item area start -->
    <section class="all-item-area pd-top-90 pd-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title">
                        <h2>All Items</h2>
                    </div>
                </div>
                <div class="col-lg-8 mt-2">
                    <div class="isotope-filters item-isotope-btn text-lg-right">
                        <button class="button active ml-0" data-filter="*">All Items</button>
                        <button class="button" data-filter=".cat-1">Merch</button>
                        <button class="button" data-filter=".cat-2">Fashion</button>
                        <button class="button" data-filter=".cat-3">Hoodies</button>
                    </div>
                </div>
            </div>
            <div class="all-item-section">
                <div class="item-isotope row">
                    <div class="item-sizer col-1"></div>
                    <!-- gallery item start here -->
                    <div class="all-isotope-item col-lg-4 col-sm-6 cat-1 cat-3">
                        <div class="thumb">
                            <a class="gallery-fancybox" href="#">
                                <img src="assets/img/item/produk1.jpg" alt="image">
                            </a>
                            <a class="btn btn-white" href="http://localhost/MinilemonStore/product-details.html">Live
                                Preview</a>
                        </div>
                        <div class="item-details">
                            <h4><a href="#">product 1</a></h4>
                            <p>description about the product</p>
                            <span class="price">Rp.200.000</span>
                            <span class="ratting float-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star star-o"></i>
                                <span>(12)</span>
                            </span>

                        </div>
                    </div>
                    <div class="all-isotope-item col-lg-4 col-sm-6 cat-2">
                        <div class="thumb">
                            <a class="gallery-fancybox" href="#">
                                <img src="assets/img/item/produk2.jpg" alt="image">
                            </a>
                            <a class="btn btn-white" href="http://localhost/MinilemonStore/product-details.html">Live
                                Preview</a>
                        </div>
                        <div class="item-details">
                            <h4><a href="#">product 2</a></h4>
                            <p>description about the product</p>
                            <span class="price">Rp.80.000</span>
                            <span class="ratting float-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star star-o"></i>
                                <span>(12)</span>
                            </span>
                        </div>
                    </div>
                    <div class="all-isotope-item col-lg-4 col-sm-6 cat-3 cat-2">
                        <div class="thumb">
                            <a class="gallery-fancybox" href="#">
                                <img src="assets/img/item/produk3.jpg" alt="image">
                            </a>
                            <a class="btn btn-white" href="http://localhost/MinilemonStore/product-details.html">Live
                                Preview</a>
                        </div>
                        <div class="item-details">
                            <h4><a href="#">product 3</a></h4>
                            <p>description about the product</p>
                            <span class="price">Rp.100.000</span>
                            <span class="ratting float-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star star-o"></i>
                                <span>(12)</span>
                            </span>
                        </div>
                    </div>
                    <div class="all-isotope-item col-lg-4 col-sm-6 cat-3 cat-1">
                        <div class="thumb">
                            <a class="gallery-fancybox" href="#">
                                <img src="assets/img/item/produk4.jpg" alt="image">
                            </a>
                            <a class="btn btn-white" href="http://localhost/MinilemonStore/product-details.html">Live
                                Preview</a>
                        </div>
                        <div class="item-details">
                            <h4><a href="#">product 4</a></h4>
                            <p>description about the product</p>
                            <span class="price">Rp.250.000</span>
                            <span class="ratting float-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star star-o"></i>
                                <span>(12)</span>
                            </span>
                        </div>
                    </div>
                    <div class="all-isotope-item col-lg-4 col-sm-6 cat-2 cat-1">
                        <div class="thumb">
                            <a class="gallery-fancybox" href="#">
                                <img src="assets/img/item/produk5.jpg" alt="image">
                            </a>
                            <a class="btn btn-white" href="http://localhost/MinilemonStore/product-details.html">Live
                                Preview</a>
                        </div>
                        <div class="item-details">
                            <h4><a href="#">product 5</a></h4>
                            <p>description about the product</p>
                            <span class="price">Rp.300.000</span>
                            <span class="ratting float-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star star-o"></i>
                                <span>(12)</span>
                            </span>
                        </div>
                    </div>
                    <div class="all-isotope-item col-lg-4 col-sm-6 cat-1 cat-2">
                        <div class="thumb">
                            <a class="gallery-fancybox" href="#">
                                <img src="assets/img/item/produk6.jpg" alt="image">
                            </a>
                            <a class="btn btn-white" href="http://localhost/MinilemonStore/product-details.html">Live
                                Preview</a>
                        </div>
                        <div class="item-details">
                            <h4><a href="#">product 6</a></h4>
                            <p>description about the product</p>
                            <span class="price">Rp.130.000</span>
                            <span class="ratting float-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star star-o"></i>
                                <span>(12)</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a class="btn btn-base" href="#">More Products</a>
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
    <script src="assets/js/scripts.js" defer=""></script>
    <!-- main js  -->
    <script src="assets/js/main.js"></script>
</body>

</html>