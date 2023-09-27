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
    <?php
    include("php/display_selectedproduk.php");
    $produk_id = $_GET['id'];
    include("php/display_review.php");
    include("php/db2.php");
    ?>
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

    <?php
    if ($_SESSION['role'] == 'seller') {
    ?>
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
                        <a class="main-logo-h1" href="http://localhost/seller-dashboard/HTML/dashboard/file-upload.php"><img src="assets/img/logominilemon.png" alt="img"></a>

                    </div>
                </div>
            </nav>
        </div>
    <?php
    } else {
    ?>
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
    <?php
    }
    ?>

    <!-- navbar start -->

    <!-- navbar end -->

    <!-- breadcrumb start -->
    <div class="breadcrumb-area" style="background-image:url('assets/img/home.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <div class="section-title text-center">
                            <h2 class="page-title">Products Details</h2>
                            <ul class="page-list">
                                <li><a href="index.html">Home</a></li>
                                <li>Product details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- product-details area start -->
    <section class="product-details pd-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="single-product-wrap">
                        <div class="thumb">
                            <img src="assets/img/item/produk1.jpg" alt="image">
                            <a class="btn btn-white" href="#">Live Preview</a>
                            <a class="btn btn-white btn-buy" href="#">Buy Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7">
                    <div class="sidebar-area">
                        <div class="widget widget-cart">
                            <form action="php/update_cart.php" method="post">
                                <?php
                                if (is_array($fetchData)) {
                                    $sn = 1;
                                    foreach ($fetchData as $data) {
                                ?>
                                        <div class="single-product-details">
                                            <h4 for="namaproduk"><?php echo $data['nama'] ?? ''; ?></h4>
                                            <input type="hidden" name="owner" value=" <?php echo $data['owner'] ?>" />
                                            <input type="hidden" name="nama_produk" value="<?php echo $data['nama'] ?? '';
                                                                                            $produk_nama = $data['nama'];
                                                                                            $deskripsi = $data['deskripsi']; ?>" />
                                        </div>
                                        <div class="widget-cart-inner">
                                            <h3 class="price">Rp.<?php echo number_format($data['harga'], 0, ",", ".") ?? ''; ?></h3>
                                            <input type="hidden" name="harga" value=" <?php echo $data['harga'] ?>" />
                                            <ul>
                                                <?php echo $deskripsi; ?>
                                            </ul>
                                            <div class="relative option-product-2 clearfix ">
                                                <div class="option-product-son float-left right-margin-default">
                                                    <p class="float-left">Qty:</p>
                                                    <input type="number" class="left-margin-15-default" min="01" step="1" max="10" value="1" name="jumlah_produk">
                                                </div>
                                                <div class="option-product-son ">
                                                    <p class="float-left">Size:</p>
                                                    <select name="ukuran" class="">
                                                        <option value="M">M</option>
                                                        <option value="L">L</option>
                                                        <option value="XL">XL</option>
                                                        <option value="XXL">XXL</option>
                                                    </select>
                                                    <input type="hidden" />
                                                </div>
                                            </div>
                                            <?php
                                            if ($_SESSION['role'] == 'seller') {
                                            ?>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="text-center">
                                                    <button class="btn btn-base">Add to cart</button>
                                                </div>
                                            <?php
                                            }
                                            ?>

                                        </div>

                                    <?php
                                        $sn++;
                                    }
                                } else { ?>

                                    <?php echo $fetchData; ?>
                                <?php
                                } ?>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-lg-5">
                    <!-- <div class=" relative col-sm-12 col-xs-12">
                        <div id="owl-big-slide" class="relative sync-owl-big-image">
                            <div class="item center-vertical-image">
                                <img src="assets/img/item/produk1.jpg" alt="Image Big Slide">
                            </div>
                            <div class="item center-vertical-image">
                                <img src="assets/img/item/produk2.jpg" alt="Image Big Slide">
                            </div>
                            <div class="item center-vertical-image">
                                <img src="assets/img/item/produk3.jpg" alt="Image Big Slide">
                            </div>
                            <div class="item center-vertical-image">
                                <img src="assets/img/item/produk4.jpg" alt="Image Big Slide">
                            </div>
                        </div>
                        <div class="relative thumbnail-slide-detail">
                            <div id="owl-thumbnail-slide" class="sync-owl-thumbnail-image" data-items="3,4,3,2">
                                <div class="item center-vertical-image">
                                    <img src="assets/img/item/produk1.jpg" alt="Image Thumbnail Slide">
                                </div>
                                <div class="item center-vertical-image">
                                    <img src="assets/img/item/produk2.jpg" alt="Image Thumbnail Slide">
                                </div>
                                <div class="item center-vertical-image">
                                    <img src="assets/img/item/produk3.jpg" alt="Image Thumbnail Slide">
                                </div>
                                <div class="item center-vertical-image">
                                    <img src="assets/img/item/produk4.jpg" alt="Image Thumbnail Slide">
                                </div>
                            </div>
                            <div class="relative nav-prev-detail btn-slide-detail"></div>
                            <div class="relative nav-next-detail btn-slide-detail"></div>
                        </div>
                    </div> -->
                    <div class=" relative col-sm-12 col-xs-12">
                        <div id="owl-big-slide" class="relative sync-owl-big-image">
                            <?php

                            // Get images from the database

                            $query = $conn->query("SELECT * FROM images where nama_produk = " . "'$produk_nama'" . "ORDER BY id DESC");

                            if ($query->num_rows > 0) {
                                while ($row = $query->fetch_assoc()) {
                                    $imageURL = 'http://localhost/admin-dashboard/HTML/dashboard/php/uploads/p_' . $row["nama"];
                            ?>
                                    <div class="item center-vertical-image">
                                        <img src="<?php echo $imageURL; ?>" alt="Image Big Slide" />
                                    </div>
                                <?php }
                            } else { ?>
                                <p>No image(s) found...</p>
                            <?php } ?>

                        </div>
                        <div class="relative thumbnail-slide-detail">
                            <div id="owl-thumbnail-slide" class="sync-owl-thumbnail-image" data-items="3,4,3,2">
                                <?php

                                // Get images from the database
                                $query = $conn->query("SELECT * FROM images where nama_produk = " . "'$produk_nama'" . "ORDER BY id DESC");

                                if ($query->num_rows > 0) {
                                    while ($row = $query->fetch_assoc()) {
                                        $imageURL = 'http://localhost/admin-dashboard/HTML/dashboard/php/uploads/p_' . $row["nama"];
                                ?>
                                        <div class="item center-vertical-image">
                                            <img src="<?php echo $imageURL; ?>" alt="Image Thumbnail Slide" />
                                        </div>
                                    <?php }
                                } else { ?>
                                    <p>No image(s) found...</p>
                                <?php } ?>

                            </div>
                            <div class="relative nav-prev-detail btn-slide-detail"></div>
                            <div class="relative nav-next-detail btn-slide-detail"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="product-tab">
                        <ul class="nav nav-pills">
                            <!-- <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#pills-home">Description</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#pills-profile">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <!-- <div class="tab-pane fade show" id="pills-home">
                                <p><?php echo $deskripsi; ?>
                                </p>
                                <h5 class="title">Features Overview</h5>
                                <ul>
                                    <li>
                                        <p class="font-medium">Bootstrap 4 Framework:</p>
                                        <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
                                            responsive, mobile first projects on the web.</p>
                                    </li>
                                    <li>
                                        <p class="font-medium">Slick Carousel:</p>
                                        <p>Create stunning slides with different animation effects easily with Slick
                                            Slider.</p>
                                    </li>
                                    <li>
                                        <p class="font-medium">Responsive Layout Design:</p>
                                        <p>What ever you are using the device your site will run as it should be. Kettle
                                            template is fully responsive layout for all type of devices.</p>
                                    </li>
                                    <li>
                                        <p class="font-medium">13+ Valid HTML Files :</p>
                                        <p>Kettle template coded with beautiful and clean codes! Some powerful HTML
                                            files 100% valid W3 web standards.</p>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="tab-pane fade show active" id="pills-profile">
                                <h5 class="title">Reviews</h5>
                                <?php
                                if (is_array($fetchData1)) {
                                    $sn = 1;
                                    foreach ($fetchData1 as $data) {
                                ?>
                                        <div class="single-review">
                                            <h6 class="name"> <?php echo $data['nama'] ?? ''; ?></h6>
                                            <span class="date"> <?php echo $data['tanggal'] ?? ''; ?></span>
                                            <div class="star-rating">
                                                <span><i class="la la-star"></i></span>
                                                <span><i class="la la-star"></i></span>
                                                <span><i class="la la-star"></i></span>
                                                <span><i class="la la-star"></i></span>
                                                <span><i class="la la-star star-o"></i></span>
                                            </div>
                                            <p> <?php echo $data['review'] ?? ''; ?></p>
                                        </div>
                                    <?php
                                        $sn++;
                                    }
                                } else { ?>

                                    <?php echo $fetchData1; ?>
                                <?php
                                } ?>
                                <?php
                                if ($_SESSION['role'] == 'seller') {
                                ?>

                                <?php
                                } else {
                                ?>
                                    <div class="add-review">
                                        <h5 class="title">Add Review</h5>
                                        <div class="star-rating">
                                            <p>Your Rating : </p>
                                        </div>
                                        <form class="contact-form" action="php/add_review.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo $produk_id; ?>" />
                                            <div class="row">
                                                <fieldset class="rating">
                                                    <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                    <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                    <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                    <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                    <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                                                    <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                    <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                    <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                    <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                    <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                </fieldset>
                                                <div class="col-12">
                                                    <div class="single-input-wrap">
                                                        <input type="text" class="single-input" placeholder="Your Name" name="nama">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="single-input-wrap">
                                                        <input type="text" class="single-input" placeholder="Your Email" name="email">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="single-input-wrap">
                                                        <textarea class="single-input textarea" placeholder="Your Review" name="review"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-base">Submit</button>
                                        </form>
                                    </div>
                                <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-details area end -->

    <!-- product-slider area start -->
    <!-- <section class="product-slider-area pd-bottom-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Related products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-slider owl-carousel owl-theme">
                        <div class="item">
                            <div class="all-isotope-item">
                                <div class="thumb">
                                    <a class="gallery-fancybox" href="#">
                                        <img src="assets/img/item/1.png" alt="image">
                                    </a>
                                    <a class="btn btn-white" href="#">Live Preview</a>
                                </div>
                                <div class="item-details">
                                    <span class="price">$30.00</span>
                                    <span class="ratting float-right">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star star-o" aria-hidden="true"></i>
                                        <span>(12)</span>
                                    </span>
                                    <h4><a href="#">Kiamu</a></h4>
                                    <p>Photography Word Press Theme</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="all-isotope-item">
                                <div class="thumb">
                                    <a class="gallery-fancybox" href="#">
                                        <img src="assets/img/item/2.png" alt="image">
                                    </a>
                                    <a class="btn btn-white" href="#">Live Preview</a>
                                </div>
                                <div class="item-details">
                                    <span class="price">$30.00</span>
                                    <span class="ratting float-right">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star star-o" aria-hidden="true"></i>
                                        <span>(12)</span>
                                    </span>
                                    <h4><a href="#">Russell brown</a></h4>
                                    <p>Photography Word Press Theme</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="all-isotope-item">
                                <div class="thumb">
                                    <a class="gallery-fancybox" href="#">
                                        <img src="assets/img/item/3.png" alt="image">
                                    </a>
                                    <a class="btn btn-white" href="#">Live Preview</a>
                                </div>
                                <div class="item-details">
                                    <span class="price">$30.00</span>
                                    <span class="ratting float-right">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star star-o" aria-hidden="true"></i>
                                        <span>(12)</span>
                                    </span>
                                    <h4><a href="#">Mobile application - LonKat</a></h4>
                                    <p>Photography Word Press Theme</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- product-slider area end -->

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
    <script src="assets/js/sync_owl_carousel.js" defer=""></script>
    <script src="assets/js/scripts.js" defer=""></script>
    <script src="assets/js/bootstrap.min.js" defer=""></script>
    <script src="assets/js/slick.min.js" defer=""></script>
    <script src="assets/js/jquery-3.3.1.min.js" defer=""></script>
    <script src="assets/js/multirange.js" defer=""></script>
</body>

</html>