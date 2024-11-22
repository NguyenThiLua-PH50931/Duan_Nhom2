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
    <header>
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
                                        <img src="/assets/users/img/product/10.jpg" alt="product-tab-2"
                                            class="product-image">
                                    </div>
                                </div>
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="/assets/users/img/product/11.jpg" alt="product-tab-3"
                                            class="product-image">
                                    </div>
                                </div>
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="/assets/users/img/product/12.jpg" alt="product-tab-1"
                                            class="product-image">
                                    </div>
                                </div>
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="/assets/users/img/product/13.jpg" alt="product-tab-2"
                                            class="product-image">
                                    </div>
                                </div>
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="/assets/users/img/product/14.jpg" alt="product-tab-3"
                                            class="product-image">
                                    </div>
                                </div>
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="/assets/users/img/product/15.jpg" alt="product-tab-1"
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
                            <div class="slider slider-nav thumb-image">
                                <?php foreach ($relatedImages as $images):  ?>
                                    <div class="thumbnail-image">
                                        <div class="thumbImg">
                                        <img src="<?= htmlspecialchars($images['anh_sp'], ENT_QUOTES, 'UTF-8') ?>" alt="related product">
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-7 col-md-6 col-12 mb-24">
                    <div class="cr-size-and-weight-contain">
                        <h2 class="heading"><?= $product['ten_sp'] ?></h2>
                    </div>
                    <div class="cr-size-and-weight">
                        <div class="list">
                            <ul>
                                <li><label>Thương hiệu <span>:</span></label><?= $cateName['ten_dm'] ?></li>
                                <li><label>Giá tiền <span>:</span></label><?= $product['gia_tien'] ?></li>
                                <li><label>Lượt xem <span>:</span></label><?= $product['luot_xem'] ?></li>
                                <li><label>Số lượng tồn <span>:</span></label><?= $product['soluong_ton'] ?></li>
                            </ul>
                        </div>
                        <div class="cr-product-price">
                            <span class="new-price"><?= $product['gia_tien'] ?>VND</span>
                            <span class="old-price"><?= $product['gia_km'] ?>VND</span>
                        </div>
                        <!-- <div class="cr-size-weight">
                            <h5><span>Size</span>/<span>Weight</span> :</h5>
                            <div class="cr-kg">
                                <ul>
                                    <li class="active-color">50kg</li>
                                    <li>80kg</li>
                                    <li>120kg</li>
                                    <li>200kg</li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="cr-add-card">
                            <div class="cr-qty-main">
                                <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                    class="quantity">
                                <button type="button" class="plus">+</button>
                                <button type="button" class="minus">-</button>
                            </div>
                            <div class="cr-add-button">
                                <button type="button" class="cr-button cr-shopping-bag">Mua ngay</button>
                            </div>
                            <div class="cr-card-icon">
                                <a href="javascript:void(0)" class="wishlist">
                                    <i class="ri-heart-line"></i>
                                </a>
                                <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview" role="button">
                                    <i class="ri-eye-line"></i>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="tab-pane fade show active" id="description" role="tabpanel"
                    aria-labelledby="description-tab">
                    <h5 class="heading">Mô tả sản phẩm</h5>
                    <div class="cr-tab-content">
                        <div class="cr-description">
                            <p><?= $product['mo_ta'] ?></p>
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
                                            <div class="cr-side-view">
                                                <a href="javascript:void(0)" class="wishlist">
                                                    <i class="ri-heart-line"></i>
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
                                                <a href=""><?= $cateName['ten_dm'] ?></a>

                                                <div class="cr-star">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-line"></i>
                                                    <p>(4.5)</p>
                                                </div>
                                            </div>
                                            <a href="product-left-sidebar.html" class="title"><?= $value['ten_sp'] ?></a>
                                            <p class="cr-price"><span class="new-price"></span> <?= $value['gia_tien'] ?><span
                                                    class="old-price"><?= $value['gia_km'] ?></span></p>

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


    <!-- Tab to top -->
    <?php include_once "views/users/layout/tap-top.php" ?>


    <!-- Cart -->
    <?php include_once "views/users/layout/cart.php" ?>


    <!-- Side-tool -->
    <?php include_once "views/users/layout/side-tool.php" ?>


    <!-- Vendor Custom -->
    <?php include_once "views/users/layout/script.php" ?>

</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:27 GMT -->

</html>