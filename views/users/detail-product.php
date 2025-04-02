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
        <div class="cr-breadcrumb-image" style="margin-top: 40px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cr-breadcrumb-title">
                            <h2>Chi tiết sản phẩm</h2>
                            <span> <a href="index.php?user=home">Home</a> - Chi tiết sản phẩm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Product -->
    <section class="section-product padding-t-100">
        <div class="container">
            <div class="row mb-minus-24" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
                <div class="col-xxl-4 col-xl-5 col-md-6 col-12 mb-24">
                    <div class="vehicle-detail-banner banner-content clearfix">
                        <div class="banner-slider">
                            <div class="slider slider-for">
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="<?= $product['anh_sp'] ?>" alt="product-tab-1"
                                            class="product-image">
                                    </div>
                                </div>
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="" alt="product-tab-2"
                                            class="product-image">
                                    </div>
                                </div>
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="" alt="product-tab-3"
                                            class="product-image">
                                    </div>
                                </div>
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="" alt="product-tab-1"
                                            class="product-image">
                                    </div>
                                </div>
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="" alt="product-tab-2"
                                            class="product-image">
                                    </div>
                                </div>
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="" alt="product-tab-3"
                                            class="product-image">
                                    </div>
                                </div>
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="" alt="product-tab-1"
                                            class="product-image">
                                    </div>
                                </div>
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="" alt="product-tab-2"
                                            class="product-image">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-7 col-md-6 col-12 mb-24">

                    <div class="cr-size-and-weight-contain">
                        <h2 class="heading"><?= $product['ten_sp'] ?></h2>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="cr-size-and-weight">
                            <div class="list">
                                <ul>
                                    <li><label>Thương hiệu <span>:</span></label><?= $cateName['ten_dm'] ?></li>

                                    <li><label>Lượt xem <span>:</span></label><?= $product['luot_xem'] ?></li>
                                    <li>
                                        <label>Số lượng tồn <span>:</span></label><?= $product['soluong_ton'] ?>
                                    </li>
                                </ul>
                            </div>
                            <!-- Biến thể -->


                            <div class="cr-product-price">
                                <span class="new-price">
                                    <?php echo number_format($product['gia_tien']) ?> VND</span>
                                <?php if ($product['gia_km']) : ?>
                                    <span class="old-price"><?= $product['gia_km'] ?> VND</span>
                                <?php endif; ?>
                            </div>

                            <!-- Xử lý khi người dùng nhấn nút chọn size -->
                            <script></script>

                            <div class="cr-add-card">
                                <div class="cr-qty-main">
                                    <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                        class="quantity" name="so_luong">
                                    <button type="button" class="plus">+</button>
                                    <button type="button" class="minus">-</button>
                                </div>

                                <input type="hidden" name="id_sp" value="<?= $product['id_sp'] ?>">

                                <div class="cr-add-button">
                                    <button name="addCart" class="cr-button btn-outline-success">Thêm vào giỏ hàng</button>
                                </div>
                                <div class="cr-add-button">
                                    <button name="addCart" class="cr-button cr-shopping-bag">Mua ngay</button>
                                </div>

                    </form>
                    <form action="" method="post">
                        <input type="hidden" name="id_sp" value="<?= $product['id_sp'] ?>">
                        <div class="cr-card-icon">
                            <button name="addWishlist" class="cr-button btn-outline-success">
                                <i class="ri-heart-line"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="cr-qty-main">
                    <p class="text-danger mt-3"><?= $_SESSION['soLuong'] ?? '' ?></p>
                </div>



            </div>
        </div>
        </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="600">
            <div class="col-12">
                <div class="cr-paking-delivery">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                data-bs-target="#description" type="button" role="tab" aria-controls="description"
                                aria-selected="true">Mô tả</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                                type="button" role="tab" aria-controls="review"
                                aria-selected="false">Bình luận</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            <div class="cr-tab-content">
                                <div class="cr-description">
                                    <p><?= $product['mo_ta'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                            <div class="cr-tab-content-from">
                                <div class="post">
                                    <?php if (!empty($comments)): ?>
                                        <?php foreach ($comments as $comment): ?>


                                            <div class="content">
                                                <img src="./assets/users/img/review/anh.jpg" alt="">
                                                <div class="details">
                                                    <span class="date"><?= htmlspecialchars($comment['ngay_bl']) ?></span>
                                                    <span class="name"><?= htmlspecialchars($comment['ho_ten']) ?></span>
                                                </div>

                                                <div class="justify-content-center">

                                                    <button type="button" style="margin-left: 10px;   border-radius: 5px; "
                                                        class="btn btn-outline-success dropdown-toggle"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only"><i
                                                                class="ri-settings-4-line"></i></span>
                                                    </button>

                                                    <div class="dropdown-menu">

                                                        <!-- Chỉnh sửa bình luận -->
                                                        <form action="index.php?user=detail-product&id_sp=<?= htmlspecialchars($_GET['id_sp']) ?>&action=update&id_bl=<?= $comment['id_bl'] ?>" method="post">
                                                            <textarea name="noi_dung_bl" class="form-control" required><?= htmlspecialchars($comment['noi_dung_bl']) ?></textarea>

                                                            <button type="submit" style="color: green;" class="dropdown-item">Cập nhật</button>
                                                        </form>

                                                        <!-- // Hiển thị nút "Xóa" nếu người dùng là admin hoặc chủ sở hữu bình luận -->

                                                        <a class="dropdown-item" style="color: red;" href="index.php?user=detail-product&id_sp=<?= $_GET['id_sp'] ?>&action=delete&id_bl=<?= $comment['id_bl'] ?>"
                                                            onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này không?');">
                                                            Xóa
                                                        </a>

                                                    </div>
                                                </div>

                                            </div>
                                            <p><?= htmlspecialchars($comment['noi_dung_bl']) ?></p>
                                            <hr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <p>Chưa có bình luận nào. Hãy là người đầu tiên bình luận!</p>
                                    <?php endif; ?>


                                    <hr>

                                    <h4 class="heading">Thêm bình luận về sản phẩm</h4>
                                    <form action="" method="post">
                                        <div class="cr-ratting-input form-submit">
                                            <textarea name="noi_dung_bl" placeholder="Bình luận tại đây" required></textarea>
                                            <button class="cr-button" type="submit" name="addComment">Gửi bình luận</button>
                                        </div>
                                    </form>

                                    <!-- Thông báo -->
                                    <?php if (isset($_SESSION['successComment'])): ?>
                                        <p style="color:green;"><?php echo $_SESSION['successComment'];
                                                                unset($_SESSION['successComment']); ?></p>
                                    <?php elseif (isset($_SESSION['errorComment'])): ?>
                                        <p style="color:red;"><?php echo $_SESSION['errorComment'];
                                                                unset($_SESSION['errorComment']); ?></p>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular products -->
    <section class="section-popular-products padding-tb-100" data-aos="fade-up" data-aos-duration="2000"
        data-aos-delay="400">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-30">
                        <div class="cr-banner">
                            <h2>Các sản phẩm liên quan</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-popular-product">
                        <?php if (!empty($sameProduct) && is_array($sameProduct)): ?>
                            <?php foreach ($sameProduct as $value): ?>
                                <div class="slick-slide">

                                    <div class="cr-product-card">
                                        <div class="cr-product-image">
                                            <div class="cr-image-inner zoom-image-hover">
                                                <img src="<?= $value['anh_sp'] ?>" alt="product-1">
                                            </div>
                                            <form action="" method="post">
                                                <div class="cr-side-view">
                                                    <input type="hidden" name="id_sp" value="<?= $value['id_sp'] ?>">
                                                    <button class="rounded-circle border-0" name="addWishlist">
                                                        <i class="ri-heart-line"></i>
                                                    </button>
                                                    <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview"
                                                        role="button">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </div>
                                            </form>
                                            <a class="cr-shopping-bag" href="javascript:void(0)">
                                                <i class="ri-shopping-bag-line"></i>
                                            </a>
                                        </div>
                                        <div class="cr-product-details">
                                            <div class="cr-brand">
                                                <a href=""><?= $cateName['ten_dm'] ?></a>
                                            </div>
                                            <a href="index.php?user=detail-product&id_sp=<?= $value['id_sp'] ?>" class="title"><?= $value['ten_sp'] ?></a>
                                            <p class="cr-price"><span class="new-price">
                                                    <?php
                                                    echo number_format($value['gia_tien']);
                                                    ?>
                                                </span>


                                        </div>
                                    </div>

                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>Không có sản phẩm liên quan nào.</p>
                        <?php endif; ?>
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
    } elseif (isset($_SESSION['addCart'])) {
        echo $_SESSION['addCart'];
    } elseif (isset($_SESSION['soLuong'])) {
        echo $_SESSION['soLuong'];
    }
    unset($_SESSION['soLuong']);
    unset($_SESSION['addCart']);
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