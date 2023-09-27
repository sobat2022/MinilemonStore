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
                    <a href="home.php"><img src="assets/img/logominilemon.png" alt="img"></a>
                </div>
                <p class="details">Marketplace yang menjual berbagai merchandise kepada pelanggan minilemon</p>
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
    <!-- navbar end -->

    <!-- banner start -->
    <div class="banner-area">
        <div class="banner-area-inner" style="background: url(assets/img/home.jpg);">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="banner-inner text-center">
                        <h2>ragu dengan kualitas produk olshop? <br> <span>belanja di minilemon store aja!</span>
                        </h2>
                        <p>semua barang yang dijual di lemon store sudah lulus uji kualitas, sehingga
                            kamu bisa berbelanja dengan tenang tanpa takut kualitas produk kamu bakal tidak sesuai
                            dengan gambar.</p>
                    </div>
                    <!-- </div>
                    <div class="col-md-10">
                        <form>
                            <select>
                                <option>All resources</option>
                                <option value="1">1 resource</option>
                                <option value="2">2 resource</option>
                                <option value="3">3 resource</option>
                            </select>
                            <input type="text" class="form-control">
                            <button type="submit" class="btn"><img src="assets/img/icon/1b.png" alt="img"></button>
                        </form>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- banner end -->

        <!-- featured-area start -->
        <section class="featured-area bg-sky-blue pd-top-90 pd-bottom-100">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2>EXPRESS YOURSELF , WITH COLORFUL ESSENTIALS FROM <h2 style="color: #dbc500;">MINILEMON
                            </h2>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="featured-product">
                        <li class="thumb">
                            <a href="#">
                                <img src="assets/img/featured/1.png" alt="img">
                            </a>
                        </li>
                        <li class="thumb">
                            <a href="#">
                                <img src="assets/img/featured/2.png" alt="img">
                            </a>
                        </li>
                        <li class="thumb">
                            <a href="#">
                                <img src="assets/img/featured/3.png" alt="img">
                            </a>
                        </li>
                        <li class="thumb">
                            <a href="#">
                                <img src="assets/img/featured/4.png" alt="img">
                            </a>
                        </li>
                        <li class="thumb">
                            <a href="#">
                                <img src="assets/img/featured/5.png" alt="img">
                            </a>
                        </li>


                    </ul>
                </div>
                <!-- <div class="col-lg-12 text-center">
                    <a class="btn btn-base" href="#">Top New Files</a>
                    <a class="btn btn-white" href="#">All Items</a>
                </div> -->
            </div>
        </section>
        <!-- featured-area end -->

        <!-- fun-fact-area start -->
        <section class="fun-fact-area text-center pd-top-100" style="background-color: rgb(189, 8, 47);">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-fact-wrap">
                        <div class="thumb">
                            <img src="assets/img/fact/icon1.png" alt="img">
                        </div>
                        <h2><span class="counter">100</span></h2>
                        <p class="fact-title">Happy Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-fact-wrap style-2">
                        <div class="thumb">
                            <img src="assets/img/fact/icon2.png" alt="img">
                        </div>
                        <h2><span class="counter">100</span></h2>
                        <p class="fact-title">Premium products</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-fact-wrap style-3">
                        <div class="thumb">
                            <img src="assets/img/fact/icon3.png" alt="img">
                        </div>
                        <h2><span class="counter">100</span></h2>
                        <p class="fact-title">Total seller</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-fact-wrap style-4">
                        <div class="thumb">
                            <img src="assets/img/fact/icon4.png" alt="img">
                        </div>
                        <h2><span class="counter">100</span></h2>
                        <p class="fact-title">Item Sold</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- fun-fact-area end -->

        <!-- all-item area start -->
        <section class="all-item-area pd-top-90 pd-bottom-100">
            <div class="container pd-top-90 pd-bottom-100" style="background-color: white;">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title">
                            <h2>Contoh Produk</h2>
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
                                <a class="btn btn-white" href="http://localhost/MinilemonStore/product.php">Live
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
                                <a class="btn btn-white" href="http://localhost/MinilemonStore/product.php">Live
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
                                <a class="btn btn-white" href="http://localhost/MinilemonStore/product.php">Live
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a class="btn btn-base" href="http://localhost/MinilemonStore/product.php">More Products</a>
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
    <!-- main js  -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/sync_owl_carousel.js" defer=""></script>
    <script src="assets/js/scripts.js" defer=""></script>
    <script src="assets/js/bootstrap.min.js" defer=""></script>
    <script src="assets/js/slick.min.js" defer=""></script>
    <script src="assets/js/jquery-3.3.1.min.js" defer=""></script>
    <script src="assets/js/multirange.js" defer=""></script>
</body>

</html>