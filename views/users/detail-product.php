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
                                        <img src="assets/users/img/product/1732546425_Nike-Air-Jordan-1-Low-Shattered-Backboard5-1.jpg" alt="product-tab-1"
                                            class="product-image">
                                    </div>
                                </div>
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="assets/users/img/product/1732546554_resize.jpg" alt="product-tab-2"
                                            class="product-image">
                                    </div>
                                </div>
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="assets/users/img/product/images (1).jpg" alt="product-tab-3"
                                            class="product-image">
                                    </div>
                                </div>
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="assets/users/img/product/vn-11134207-7r98o-lx2mwrh6eyu323.jpg" alt="product-tab-1"
                                            class="product-image">
                                    </div>
                                </div>
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="assets/users/img/product/giay-mlb-chunky-a-new-york-yankees-ivoryyy-1.jpg" alt="product-tab-2"
                                            class="product-image">
                                    </div>
                                </div>
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="assets/users/img/product/1732543568_z3550698796715-8daca0c2d6cf2abcb81494973beb6a06-1127-750x750.jpg" alt="product-tab-3"
                                            class="product-image">
                                    </div>
                                </div>
                                <div class="slider-banner-image">
                                    <div class="zoom-image-hover">
                                        <img src="assets/users/img/product/1732183706_nike-af1-low-white-brown-1-800x800.jpg" alt="product-tab-1"
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
                                <div class="thumbnail-image">
                                    <div class="thumbImg">
                                        <img src="assets/users/img/product/1732546425_Nike-Air-Jordan-1-Low-Shattered-Backboard5-1.jpg" alt="product-tab-1">
                                    </div>
                                </div>
                                <div class="thumbnail-image">
                                    <div class="thumbImg">
                                        <img src="assets/users/img/product/1732546554_resize.jpg" alt="product-tab-2">
                                    </div>
                                </div>
                                <div class="thumbnail-image">
                                    <div class="thumbImg">
                                        <img src="assets/users/img/product/images (1).jpg" alt="product-tab-3">
                                    </div>
                                </div>
                                <div class="thumbnail-image">
                                    <div class="thumbImg">
                                        <img src="assets/users/img/product/vn-11134207-7r98o-lx2mwrh6eyu323.jpg" alt="product-tab-1">
                                    </div>
                                </div>
                                <div class="thumbnail-image">
                                    <div class="thumbImg">
                                        <img src="assets/users/img/product/giay-mlb-chunky-a-new-york-yankees-ivoryyy-1.jpg" alt="product-tab-2">
                                    </div>
                                </div>
                                <div class="thumbnail-image">
                                    <div class="thumbImg">
                                        <img src="assets/users/img/product/1732543568_z3550698796715-8daca0c2d6cf2abcb81494973beb6a06-1127-750x750.jpg" alt="product-tab-3">
                                    </div>
                                </div>
                                <div class="thumbnail-image">
                                    <div class="thumbImg">
                                        <img src="assets/users/img/product/1732183706_nike-af1-low-white-brown-1-800x800.jpg" alt="product-tab-1">
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
                    <form action="index.php?user=addCart" method="post" enctype="multipart/form-data">
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
                                        class="quantity" name="so_luong">
                                    <button type="button" class="plus">+</button>
                                    <button type="button" class="minus">-</button>
                                </div>
                                <input type="hidden" name="id_sp" value="<?= $product['id_sp'] ?>">
                                <div class="cr-add-button">
                                    <button name="addCart" class="cr-button btn-outline-success">Thêm vào giỏ hàng</button>
                                </div>
                                <div class="cr-add-button">
                                    <button type="button" class="cr-button cr-shopping-bag">Mua ngay</button>
                                </div>
                    </form>
                    <form action="" method="post">
                        <input type="hidden" name="id_sp" value="<?= $product['id_sp'] ?>">
                        <div class="cr-card-icon">
                            <button name="addWishlist" class="wishlist border-0">
                                <i class="ri-heart-line"></i>
                            </button>
                        </div>
                    </form>
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
                                aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="additional-tab" data-bs-toggle="tab"
                                data-bs-target="#additional" type="button" role="tab" aria-controls="additional"
                                aria-selected="false">Information</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                                type="button" role="tab" aria-controls="review"
                                aria-selected="false">Review</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            <div class="cr-tab-content">
                                <div class="cr-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                        sapiente odio, error dolore vero temporibus consequatur, nobis veniam odit
                                        dignissimos consectetur quae in perferendis
                                        doloribusdebitis corporis, eaque dicta, repellat amet, illum adipisci vel
                                        perferendis dolor! Quis vel consequuntur repellat distinctio rem. Corrupti
                                        ratione alias odio, error dolore temporibus consequatur, nobis veniam odit
                                        laborum dignissimos consectetur quae vero in perferendis provident quis.</p>
                                </div>
                                <h4 class="heading">Packaging & Delivery</h4>
                                <div class="cr-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                        perferendis dolor! Quis vel consequuntur repellat distinctio rem. Corrupti
                                        ratione alias odio, error dolore temporibus consequatur, nobis veniam odit
                                        laborum dignissimos consectetur quae vero in perferendis provident quis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                            <div class="cr-tab-content">
                                <div class="cr-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                        sapiente
                                        doloribus debitis corporis, eaque dicta, repellat amet, illum adipisci vel
                                        perferendis dolor! Quis vel consequuntur repellat distinctio rem. Corrupti
                                        ratione alias odio, error dolore temporibus consequatur, nobis veniam odit
                                        laborum dignissimos consectetur quae vero in perferendis provident quis.</p>
                                </div>
                                <div class="list">
                                    <ul>
                                        <li><label>Brand <span>:</span></label>ESTA BETTERU CO</li>
                                        <li><label>Flavour <span>:</span></label>Super Saver Pack</li>
                                        <li><label>Diet Type <span>:</span></label>Vegetarian</li>
                                        <li><label>Weight <span>:</span></label>200 Grams</li>
                                        <li><label>Speciality <span>:</span></label>Gluten Free, Sugar Free</li>
                                        <li><label>Info <span>:</span></label>Egg Free, Allergen-Free</li>
                                        <li><label>Items <span>:</span></label>1</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                            <div class="cr-tab-content-from">
                                <div class="post">
                                    <div class="content">
                                        <img src="/assets/users/img/review/1.jpg" alt="review">
                                        <div class="details">
                                            <span class="date">Jan 08, 2024</span>
                                            <span class="name">Oreo Noman</span>
                                        </div>
                                        <div class="cr-t-review-rating">
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                        sapiente doloribus debitis corporis, eaque dicta, repellat amet, illum
                                        adipisci vel
                                        perferendis dolor! quae vero in perferendis provident quis.</p>
                                    <div class="content mt-30">
                                        <img src="/assets/users/img/review/2.jpg" alt="review">
                                        <div class="details">
                                            <span class="date">Mar 22, 2024</span>
                                            <span class="name">Lina Wilson</span>
                                        </div>
                                        <div class="cr-t-review-rating">
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-line"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                        sapiente doloribus debitis corporis, eaque dicta, repellat amet, illum
                                        adipisci vel
                                        perferendis dolor! quae vero in perferendis provident quis.</p>
                                </div>

                                <h4 class="heading">Add a Review</h4>
                                <form action="javascript:void(0)">
                                    <div class="cr-ratting-star">
                                        <span>Your rating :</span>
                                        <div class="cr-t-review-rating">
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-line"></i>
                                            <i class="ri-star-s-line"></i>
                                            <i class="ri-star-s-line"></i>
                                        </div>
                                    </div>
                                    <div class="cr-ratting-input">
                                        <input name="your-name" placeholder="Name" type="text">
                                    </div>
                                    <div class="cr-ratting-input">
                                        <input name="your-email" placeholder="Email*" type="email" required="">
                                    </div>
                                    <div class="cr-ratting-input form-submit">
                                        <textarea name="your-commemt" placeholder="Enter Your Comment"></textarea>
                                        <button class="cr-button" type="submit" value="Submit">Submit</button>
                                    </div>
                                </form>
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


    <!-- Cart -->
    <?php include_once "views/users/layout/cart.php" ?>


    <!-- Side-tool -->
    <?php include_once "views/users/layout/side-tool.php" ?>


    <!-- Vendor Custom -->
    <?php include_once "views/users/layout/script.php" ?>

</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:27 GMT -->

</html>