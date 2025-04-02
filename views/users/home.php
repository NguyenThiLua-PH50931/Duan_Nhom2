<!-- ========================================================= 
    Item Name: Carrot - Multipurpose eCommerce HTML Template.
    Author: ashishmaraviya
    Version: 2.1
    Copyright 2024
 ============================================================-->
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:29:37 GMT -->

<head>
    <?php include_once "views/users/layout/linkCss.php" ?>
</head>
<?php
    if (isset($_SESSION['error_message'])) {
        echo '<div style="color: red;">' . $_SESSION['error_message'] . '</div>';
        unset($_SESSION['error_message']); // Xóa thông báo sau khi hiển thị
    }
    ?>
<body class="body-bg-6">

    <!-- Loader -->
    <div id="cr-overlay">
        <span class="loader"></span>
    </div>

    <!-- Header -->
    <header style="height: 180px;">
        <?php include_once "views/users/layout/header.php" ?>
    </header>

    <!-- Mobile menu -->
    <?php include_once "views/users/layout/mobile-menu.php" ?>

    <!-- Hero slider -->
    <section class="section-hero padding-b-100 next">
        <div class="cr-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="cr-hero-banner cr-banner-image-two" style="height: 700px; margin-top: 30px;">
                    <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="cr-hero-banner cr-banner-image-one" style="height: 700px; margin-top: 30px;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Popular product -->

    <section class="section-popular-product-shape padding-b-100">
        <div id="app" class="container" data-aos="fade-up" data-aos-duration="2000">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-30">
                        <div class="cr-banner">
                            <h1>Danh sách sản phẩm</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-content row mb-minus-24" id="MixItUpDA2FB7">
                <div class="col-xl-3 col-lg-4 col-12 mb-24">
                    <div class="row mb-minus-24 sticky">
                        <div class="col-lg-12 col-sm-6 col-6 cr-product-box mb-24">
                            <div class="cr-product-tabs">
                                <ul>
                                    <li class="active" data-filter="all" id="all">All</li>
                                    <?php foreach ($category as $cate) : ?>
                                        <li class="category" data-filter=".snack" data-id="<?= $cate['id_dm'] ?>" id="category-<?= $cate['id_dm'] ?>">
                                            <?= $cate['ten_dm'] ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-12 col-sm-6 col-6 cr-product-box banner-480 mb-24">
                            <div class="cr-ice-cubes">
                                <img src="assets/users/img/product/product-banner.jpg" alt="product banner">
                                <div class="cr-ice-cubes-contain">
                                    <h4 class="title"></h4>
                                    <h5 class="sub-title"></h5>
                                    <span></span>
                                    <!-- <a href="shop-left-sidebar.html" class="cr-button"></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-12 mb-24">
                    <div class="filterCategory row mb-minus-24">
                        <?php foreach ($products as $pro) : ?>
                            <div id="content" class="mix vegetable col-xxl-3 col-xl-4 col-6 cr-product-box mb-24">
                                <div class="cr-product-card">
                                    <div class="cr-product-image">
                                        <div class="cr-image-inner zoom-image-hover">
                                            <img src="<?= $pro['anh_sp'] ?>" alt="product-1">
                                        </div>
                                        <form action="" method="post">
                                            <div class="cr-side-view">
                                                <input type="hidden" name="id_sp" value="<?= $pro['id_sp'] ?>">
                                                <button class="rounded-circle border-0" name="addWishlist">
                                                    <!-- <i class="ri-heart-line"></i> -->
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="cr-product-details">
                                        <div class="cr-brand">
                                            <a href="shop-left-sidebar.html"><?= $pro['ten_dm'] ?></a>
                                        </div>
                                        <a href="index.php?user=detail-product&id_sp=<?= $pro['id_sp'] ?>" class="title"><?= $pro['ten_sp'] ?></a>
                                        <p class="cr-price"><span class="new-price"><?= $pro['gia_tien']?> VNĐ</span> 
                                                 
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="section-services padding-b-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-services-border" data-aos="fade-up" data-aos-duration="2000">
                        <div class="cr-service-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="cr-services">
                                        <div class="cr-services-image">
                                            <i class="ri-red-packet-line"></i>
                                        </div>
                                        <div class="cr-services-contain">
                                            <h4>Sản phẩm chất lượng</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cr-services">
                                        <div class="cr-services-image">
                                            <i class="ri-customer-service-2-line"></i>
                                        </div>
                                        <div class="cr-services-contain">
                                            <h4>Hỗ trợ 24X7</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cr-services">
                                        <div class="cr-services-image">
                                            <i class="ri-truck-line"></i>
                                        </div>
                                        <div class="cr-services-contain">
                                            <h4>Giao hàng nhanh</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cr-services">
                                        <div class="cr-services-image">
                                            <i class="ri-money-dollar-box-line"></i>
                                        </div>
                                        <div class="cr-services-contain">
                                            <h4>Thanh toán an toàn</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include_once "views/users/layout/footer.php" ?>

    <?php
    if (isset($_SESSION['thongBao'])) {
        echo $_SESSION['thongBao'];
    } elseif (isset($_SESSION['deleteCart'])) {
        echo $_SESSION['deleteCart'];
    } elseif (isset($_SESSION['successWishlist'])) {
        echo $_SESSION['successWishlist'];
    }
    unset($_SESSION['thongBao']);
    unset($_SESSION['deleteCart']);
    unset($_SESSION['successWishlist']);


    ?>

    <!-- Tab to top -->
    <?php include_once "views/users/layout/tap-top.php" ?>
    <!-- Model -->
    <?php include_once "views/users/layout/model.php" ?>
    <!-- Side-tool -->
    <?php include_once "views/users/layout/side-tool.php" ?>
    <!-- Vendor Custom -->
    <?php include_once "views/users/layout/script.php" ?>
</body>

<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:08 GMT -->

</html>