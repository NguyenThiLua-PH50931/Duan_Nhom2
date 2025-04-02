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
                    <div class="col-lg-12" >
                        <div class="cr-breadcrumb-title" >
                            <h2>Shop</h2>
                            <span> <a href="index.html">Home</a> - Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop -->
    <section class="section-shop padding-tb-100">
        <div class="container">
            <div class="row d-none">
                <div class="col-lg-12">
                    <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="cr-banner">
                            <h2>Categories</h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore lacus vel facilisis. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                    <div class="row">
                        <div class="col-12">
                            <div class="cr-shop-bredekamp">
                                <div class="cr-toggle">
                                    <a href="javascript:void(0)" class="gridCol active-grid">
                                        <i class="ri-grid-line"></i>
                                    </a>
                                </div>
                                <div class="center-content">
                                    <span>
                                        Chúng tôi có
                                        <?php
                                        echo count($products);
                                        ?>
                                        sản phẩm!</span>
                                </div>
                                <!-- Lọc sản phẩm theo giá -->

                                <div class="cr-select">
                                    <!-- Form lọc sản phẩm -->
                                    <form action="" method="get">
                                        <input type="hidden" name="user" value="shop">
                                        <select name="sort" id="sort" onchange="this.form.submit()">
                                            <option value="gia_moi" <?= (isset($_GET['sort']) && $_GET['sort'] == 'gia_moi') ? 'selected' : ''; ?>>
                                                Sản phẩm mới
                                            </option>
                                            <option value="gia_cu" <?= (isset($_GET['sort']) && $_GET['sort'] == 'gia_cu') ? 'selected' : ''; ?>>
                                                Sản phẩm cũ
                                            </option>
                                            <option value="gia_tang" <?= (isset($_GET['sort']) && $_GET['sort'] == 'gia_tang') ? 'selected' : ''; ?>>
                                                Giá tăng dần
                                            </option>
                                            <option value="gia_giam" <?= (isset($_GET['sort']) && $_GET['sort'] == 'gia_giam') ? 'selected' : ''; ?>>
                                                Giá giảm dần
                                            </option>
                                        </select>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Hiển thị sản phẩm đã lọc -->
                    <div class="row col-50 mb-minus-24">
                        <?php if (!empty($products)): ?>
                            <?php foreach ($products as $product): ?>
                                <div class="col-lg-3 col-6 cr-product-box mb-24">
                                    <div class="cr-product-card">
                                        <div class="cr-product-image">
                                            <div class="cr-image-inner zoom-image-hover">
                                                <img src="<?= $product['anh_sp'] ?>" alt="<?= $product['ten_sp'] ?>">
                                            </div>
                                            <a class="cr-shopping-bag" href="javascript:void(0)">
                                                <i class="ri-shopping-bag-line"></i>
                                            </a>
                                        </div>
                                        <div class="cr-product-details">
                                            <div class="cr-brand">
                                                <div class="cr-brand">
                                                    <a href="shop-left-sidebar.html"><?= $product['ten_dm'] ?></a>
                                                
                                                </div>
                                            </div>
                                            <a href="index.php?user=detail-product&id_sp=<?= $product['id_sp'] ?>" class="title">
                                                <?= $product['ten_sp'] ?>
                                            </a>
                                            <p class="cr-price">
                                                <span class="new-price"><?= number_format($product['gia_tien']) ?> VNĐ</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>Không có sản phẩm nào phù hợp.</p>
                        <?php endif; ?>
                    </div>

                    <nav aria-label="..." class="cr-pagination">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">1</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar-shop -->
    <div class="filter-sidebar-overlay"></div>
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

    <!-- Side-tool -->
    <?php include_once "views/users/layout/side-tool.php" ?>


    <!-- Vendor Custom -->
    <?php include_once "views/users/layout/script.php" ?>

</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:27 GMT -->

</html>