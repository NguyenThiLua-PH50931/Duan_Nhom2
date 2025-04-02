<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:26 GMT -->

<head>
    <?php include_once "views/users/layout/linkCss.php" ?>
</head>

<body class="body-bg-6">

    <!-- Loader -->
    <div id="cr-overlay">
        <span class="loader"></span>
    </div>

    <!-- Header -->
    <header style="height: 180px; margin-bottom: 10px;">
        <?php include_once "views/users/layout/header.php" ?>
    </header>

    <!-- Mobile menu -->
    <?php include_once "views/users/layout/mobile-menu.php" ?>


    <!-- Breadcrumb -->
    <section class="section-breadcrumb">
        <div class="cr-breadcrumb-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cr-breadcrumb-title">
                            <h2>Wishlist</h2>
                            <span> <a href="index.html">Home</a> - Wishlist</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wishlist -->
    <section class="section-wishlist padding-tb-100">
        <div class="container">
            <div class="row d-none">
                <div class="col-lg-12">
                    <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="cr-banner">
                            <h2>Wishlist</h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore lacus vel facilisis. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-minus-24" data-aos="fade-up" data-aos-duration="2000"
                data-aos-delay="400">
                <?php if (!empty($wishlist)): ?>
                    <?php foreach ($wishlist as $value): ?>
                        <div class="col-lg-3 col-6 cr-product-box mb-24">
                            <div class="cr-product-card">
                                <div class="cr-product-image">
                                    <div class="cr-image-inner zoom-image-hover">
                                        <img src="<?= $value['anh_sp'] ?>" alt="product-1">
                                    </div>
                                    <div class="cr-side-view">
                                        <a class="cr-remove-product" href="index.php?user=deleteWishlist&id_yeuthich=<?= $value['id_yeuthich'] ?>">
                                            <i class="ri-close-line"></i>
                                        </a>
                                        <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview"
                                            role="button">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                    </div>
                                    <a class="cr-shopping-bag" href="javascript:void(0)">
                                        <i class="ri-shopping-bag-line"></i>
                                    </a>
                                </div>
                                <div class="cr-product-details">
                                    <div class="cr-brand">
                                        <a href="shop-left-sidebar.html"><?= $nameCategory['ten_dm'] ?></a>
                                     
                                    </div>
                                    <a href="index.php?user=detail-product&id_sp=<?= $value['id_sp'] ?>" class="title"><?= $value['ten_sp'] ?></a>
                                    <p class="cr-price"><span class="new-price"><?= $value['gia_tien'] ?> VNĐ</span> </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php elseif ($wishlist == null): ?>
                    <p class="cr-wishlist-msg">Bạn chưa thêm sản phẩm yêu thích nào!</p>
                <?php else: ?>
                    <p>Bạn cần <a href="index.php?user=login-user" class="text-success">đăng nhập</a> !!!</p>
                <?php endif; ?>
            </div>
    </section>

    <!-- Footer -->
    <?php include_once "views/users/layout/footer.php" ?>

    <?php
    if (isset($_SESSION['deleteCart'])) {
        echo $_SESSION['deleteCart'];
    }
    unset($_SESSION['deleteCart']);
    ?>

    <!-- Tab to top -->
    <?php include_once "views/users/layout/tap-top.php" ?>

    <!-- Side-tool -->
    <?php include_once "views/users/layout/side-tool.php" ?>


    <!-- Vendor Custom -->
    <?php include_once "views/users/layout/script.php" ?>

</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:27 GMT -->

</html>