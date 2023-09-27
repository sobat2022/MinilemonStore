<?php
include("php/display_cart.php");
$jumlahharga = 0;
$jumlahharga1 = 0;
$href;
$shipping = "sicepat";
$final = 0;
$namapromo = "-";
$namaproduk = "";
$jumlahproduk = 0;
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minilemon Store by Mei - Mei</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:100,300,400,500,700,900%7CRoboto+Condensed:100,300,400,500,700" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/fancybox.min.css">
    <link rel="stylesheet" href="assets/css/style4.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">

    <link rel="stylesheet" href="assets/css/megastyles.css">
    <link rel="stylesheet" href="assets/css/cartpages.css">
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
                                        $final = $jumlahharga;
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

    <!-- breadcrumb start -->

    <!-- breadcrumb end -->

    <!-- product-details area start -->
    <div class="relative full-width">
        <!-- Breadcrumb -->
        <div class="breadcrumb-area" style="background-image:url('assets/img/home.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-inner">
                            <div class="section-title text-center">
                                <h2 class="page-title">Checkout</h2>
                                <ul class="page-list">
                                    <li><a href="home.php">Home</a></li>
                                    <li>Checkout</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->
        <div class="relative container-web">
            <div class="container">
                <form class="contact-form-wrap" action="php/add_detailtransaksi.php" method="post">
                    <div class="row relative">
                        <div class="col-md-8 col-sm-12 col-xs-12 relative left-content-shoping clear-padding-left">
                            <p class="title-shoping-cart">Billing Details</p>
                            <div class="relative clearfix full-width">
                                <div class="col-md-5 col-sm-6 col-xs-12 clearfix clear-padding-left clear-padding-480 relative form-input">
                                    <label>First Name *</label>
                                    <input class="full-width" type="text" name="firstname">
                                </div>
                                <div class="col-md-5 col-sm-6 col-xs-12 clearfix clear-padding-right clear-padding-480 relative form-input">
                                    <label>Last Name *</label>
                                    <input class="full-width" type="text" name="lastname">
                                </div>
                            </div>
                            <div class="relative clearfix full-width">
                                <div class="col-md-5 col-sm-6 col-xs-12 clearfix clear-padding-left clear-padding-480 relative form-input">
                                    <label>Email Address *</label>
                                    <input class="full-width" type="text" name="email">
                                </div>
                                <div class="col-md-5 col-sm-6 col-xs-12 clearfix clear-padding-right clear-padding-480 relative form-input">
                                    <label>Phone *</label>
                                    <input class="full-width" type="text" name="phone">
                                </div>
                            </div>

                            <div class="form-input full-width clearfix relative">
                                <label>Address *</label>
                                <input class="full-width" type="text" name="address">
                            </div>
                            <div class="relative full-width clearfix">
                                <div class="col-md-5 col-sm-6 col-xs-12 clearfix clear-padding-left clear-padding-480 relative form-input">
                                    <label>Postcode / ZIP *</label>
                                    <input class="full-width" type="text" name="kodepos">
                                </div>
                                <div class="col-md-5 col-sm-6 col-xs-12 clearfix clear-padding-right clear-padding-480 relative form-input">
                                    <label>Town / City *</label>
                                    <input class="full-width" type="text" name="kota">
                                </div>
                            </div>

                            <p class="title-shoping-cart">Shipping Details</p>

                            <div class="form-input clearfix full-width relative">
                                <label>Order Note</label>
                                <textarea placeholder="Notes about your order, e.g. special notes for delivery." class="full-width" name="note" rows="4"></textarea>
                            </div>

                </form>
            </div>
            <!-- End Content Shoping Cart -->
            <!-- Content Right -->
            <div class="col-md-4 col-sm-12 col-xs-12 right-content-shoping relative clear-padding-right">
                <p class="title-shoping-cart">Your Order</p>
                <div class="full-width relative overfollow-hidden">
                    <?php
                    if (is_array($fetchDataCart)) {
                        $sn = 1;
                        foreach ($fetchDataCart as $data) {
                    ?>
                            <div class="relative clearfix full-width product-order-sidebar border no-border-t no-border-r no-border-l">
                                <div class="image-product-order-sidebar center-vertical-image">
                                    <img src="assets/img/icon/product_home_5-min.png" alt="" />
                                </div>
                                <div class="relative info-product-order-sidebar">
                                    <p class="title-product top-margin-15-default animate-default title-hover-black"><a href="#"><?php echo $data['nama_produk'] ?? ''; ?><br>Jumlah : <?php echo $data['jumlah_produk'] ?? ''; ?></a></p>
                                    <?php $tempharga = $data['harga'] * $data['jumlah_produk'] ?>
                                    <p class="price-product">Rp.<?php echo number_format($tempharga, 0, ",", "."); ?></p>
                                </div>
                            </div>
                        <?php
                            $owner = $data['owner'];
                            $jumlahharga1 = $jumlahharga1 + $tempharga;
                            $sn++;
                        }
                    } else { ?>

                        <?php echo $fetchDataCart; ?>
                    <?php
                    } ?>


                </div>
                <p class="title-shoping-cart">Cart Total</p>
                <div class="full-width relative cart-total bg-gray  clearfix">
                    <div class="relative justify-content bottom-padding-15-default border no-border-t no-border-r no-border-l">
                        <p>Subtotal</p>
                        <p class="text-red price-shoping-cart">Rp.<?php echo number_format($jumlahharga1, 0, ",", "."); ?></p>
                    </div>
                    <div class="relative border top-margin-15-default bottom-padding-15-default no-border-t no-border-r no-border-l">
                        <p class="bottom-margin-15-default">Shipping</p>
                        <div class="relative justify-content">
                            <ul class="check-box-custom title-check-box-black clear-margin clear-margin">
                                <form>
                                    <li>
                                        <label>JNE , J&T dan SiCepat
                                            <input type="radio" name="shipping" id="radio1" value="regular" checked="">
                                            <span class="checkmark"></span>

                                        </label>
                                    </li>
                                    <li>
                                        <label>JNE YES
                                            <input type="radio" value="yes" id="radio2" name="shipping">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>COD
                                            <input type="radio" value="cod" id="radio3" name="shipping">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </form>
                            </ul>
                        </div>
                        <!-- <div onclick="optionShiping(this)" class="relative full-width select-ship-option justify-content top-margin-15-default">
                                    <p class="border no-border-r no-border-l no-border-t">Calculate Shipping</p>
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    <ul class="clear-margin absolute full-width">
                                        <li onclick="selectOptionShoping(this)">Calculate Shipping 1</li>
                                        <li onclick="selectOptionShoping(this)">Calculate Shipping 2</li>
                                        <li onclick="selectOptionShoping(this)">Calculate Shipping 3</li>
                                    </ul>
                                </div> -->
                    </div>
                    <?php
                    include("php/display_promo.php");
                    ?>
                    <p class="title-shoping-cart">Coupon</p>
                    <div class="css-modal-checkbox-container">
                        <label for="css-modal-checkbox" class="css-modal-checkbox">Coupon Code</label>
                    </div>
                    <input type="checkbox" id="css-modal-checkbox" />

                    <!-- <button class="full-width top-margin-15-default">APPLY COUPON</button> -->
                    <div class="cmc">
                        <div class="cmt">
                            <form>
                                <?php
                                if (is_array($fetchData2)) {
                                    $sn = 1;
                                    $now =
                                        strtotime(date('Y-m-d'));
                                    foreach ($fetchData2 as $data) {
                                ?>
                                        <button id="<?php echo $data['nama'] ?? ''; ?>" onclick="GFG_click(this.id)" type="submit" style="<?php if (strtotime($data['tanggal_awal'] ?? '') > $now) : ?>display:none;<?php endif; ?> <?php if (strtotime($data['tanggal_akhir'] ?? '') < $now) : ?>display:none;<?php endif; ?>" name="btndiskon" value="<?php echo $data['diskon']; ?>" class="full-width button-hover-red top-margin-15-default">
                                            <?php echo $data['nama'] ?? ''; ?><br> <?php echo $data['deskripsi'] ?? '';  ?>

                                        </button>
                                    <?php
                                    }
                                } else { ?>
                                    <?php echo $fetchData2; ?>
                                <?php
                                } ?>
                            </form>
                        </div>
                        <label for="css-modal-checkbox" class="css-modal-close"></label>
                    </div>
                    <div class="relative justify-content top-margin-15-default">
                        <p class="bold">Total</p> <?php
                                                    $diskon = isset($_REQUEST['btndiskon']) ? $_REQUEST['btndiskon'] : 0;
                                                    if ($diskon > 100) {
                                                        if ($diskon == 0) {
                                                            //$final = 0;
                                                        } else {
                                                            include("php/display_promo2.php");
                                                            //$namapromos = $_POST['namapromo'];
                                                            if (is_array($fetchData21)) {

                                                                foreach ($fetchData21 as $data) {
                                                                    $namapromo = $data['nama'];
                                                                }
                                                            } else {
                                                                echo $fetchData21;
                                                            }
                                                            $final = $jumlahharga1 - $diskon;
                                                        }
                                                    } else {
                                                        // $diskon = isset($_REQUEST['btndiskon']) ? $_REQUEST['btndiskon'] : 0;
                                                        if ($diskon == 0) {
                                                            // $final = 0;
                                                        } else {
                                                            include("php/display_promo2.php");
                                                            //$namapromos = $_POST['namapromo'];
                                                            if (is_array($fetchData21)) {

                                                                foreach ($fetchData21 as $data) {
                                                                    $namapromo = $data['nama'];
                                                                }
                                                            } else {
                                                                echo $fetchData21;
                                                            }
                                                            $final = $jumlahharga1 - ($jumlahharga1 * $diskon) / 100;
                                                        }
                                                    }

                                                    ?>
                        <p class="text-red price-shoping-cart">Rp.<?php echo number_format($final, 0, ",", "."); ?></p>
                    </div>
                </div>
                <div class="full-width relative payment-box bg-gray top-margin-15-default clearfix">
                    <ul class="check-box-custom list-radius title-check-box-black clear-margin clear-margin">
                        <li>
                            <label class="">Check Payment
                                <input type="radio" name="payment" checked="">
                                <span class="checkmark"></span>
                            </label>
                            <br>
                            <p class="info-payment">Please send a check to Store Name, Store Street, Store Town,
                                Store State
                                /
                                County, Store Postcode. </p>
                        </li>
                        <li>
                            <label class="">Paypal <img class="left-margin-15-default" src="assets/img/icon/logo_payment-min.png" alt="Logo Paypal" />
                                <input type="radio" name="payment">
                                <span class="checkmark"></span>
                            </label>
                        </li>
                    </ul>
                </div>

                <input type="hidden" name="id_transaksi" value="<?php echo $final ?>" />
                <input type="hidden" name="promo" value="<?php echo $namapromo  ?>" />
                <input type="hidden" name="owner" value=" <?php echo $owner ?>" />
                <button class="btn-proceed-checkout full-width top-margin-15-default">Proceed to
                    Checkout</button>
            </div>
            <!-- End Content Right -->
        </div>
    </div>
    </div>
    <!-- End Content Checkout -->
    <!-- Support -->

    </div>
    <!-- End Content Box -->


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

    <script>
        let radio1 = document.getElementById('radio1');
        let radio2 = document.getElementById('radio2');
        let radio3 = document.getElementById('radio3');
        // checking if any radio button is selected
        if (radio1.checked) {
            <?php $shipping = "SICEPAT"; ?>
        }
        if (radio2.checked) {
            <?php $shipping = "JNE YES"; ?>
        }
        if (radio3.checked) {
            <?php $shipping = "COD"; ?>
        }

        function GFG_click(clicked) {
            $namapromo = clicked;
        }
    </script>
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