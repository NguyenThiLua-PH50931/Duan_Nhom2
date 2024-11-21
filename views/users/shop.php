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
                                    <a href="javascript:void(0)" class="shop_side_view">
                                        <i class="ri-filter-line"></i>
                                    </a>
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
                                <div class="cr-select">
                                    <label>Sort By :</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Sản phẩm mới</option>
                                        <option value="1">Sản phẩm cũ</option>
                                        <option value="2">Giá tăng dần</option>
                                        <option value="2">Giá giảm dần</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row col-50 mb-minus-24">
                        <?php foreach ($products as $value) : ?>
                            <div class="col-lg-3 col-6 cr-product-box mb-24">
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
                                            <a href="shop-left-sidebar.html"><?= $value['ten_dm'] ?></a>
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
                                        <p class="cr-price"><span class="new-price">$<?= $value['gia_tien'] ?></span> <span
                                                class="old-price">$<?= $value['gia_km'] ?></span></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
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
    <div class="cr-shop-leftside">
        <div class="cr-shop-leftside-inner">
            <div class="cr-title">
                <h6>Filters</h6>
                <a href="javascript:void(0)" class="close-shop-leftside">
                    <i class="ri-close-line"></i>
                </a>
            </div>
            <div class="cr-shop-sideview">
                <div class="cr-shop-categories">
                    <h4 class="cr-shop-sub-title">Category</h4>
                    <div class="cr-checkbox">
                        <div class="checkbox-group">
                            <input type="checkbox" id="drinks">
                            <label for="drinks">Juice & Drinks</label>
                            <span>[20]</span>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="drinks1">
                            <label for="drinks1">Dairy & Milk</label>
                            <span>[54]</span>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="drinks2">
                            <label for="drinks2">Snack & Spice</label>
                            <span>[64]</span>
                        </div>
                    </div>
                </div>
                <div class="cr-shop-price">
                    <h4 class="cr-shop-sub-title">Price</h4>
                    <div class="price-range-slider">
                        <div id="slider-range" class="range-bar"></div>
                        <p class="range-value">
                            <label>Price :</label>
                            <input type="text" id="amount" placeholder="'" readonly>
                        </p>
                        <button type="button" class="cr-button">Filter</button>
                    </div>
                </div>
                <div class="cr-shop-color">
                    <h4 class="cr-shop-sub-title">Colors</h4>
                    <div class="cr-checkbox">
                        <div class="checkbox-group">
                            <input type="checkbox" id="blue">
                            <label for="blue">Blue</label>
                            <span class="blue"></span>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="yellow">
                            <label for="yellow">Yellow</label>
                            <span class="yellow"></span>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="red">
                            <label for="red">Red</label>
                            <span class="red"></span>
                        </div>
                    </div>
                </div>
                <div class="cr-shop-weight">
                    <h4 class="cr-shop-sub-title">Weight</h4>
                    <div class="cr-checkbox">
                        <div class="checkbox-group">
                            <input type="checkbox" id="2kg">
                            <label for="2kg">2kg Pack</label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="20kg">
                            <label for="20kg">20kg Pack</label>
                        </div>
                        <div class="checkbox-group">
                            <input type="checkbox" id="30kg">
                            <label for="30kg">30kg pack</label>
                        </div>
                    </div>
                </div>
                <div class="cr-shop-tags">
                    <h4 class="cr-shop-sub-title">Tages</h4>
                    <div class="cr-shop-tags-inner">
                        <ul class="cr-tags">
                            <li><a href="javascript:void(0)">Vegetables</a></li>
                            <li><a href="javascript:void(0)">juice</a></li>
                            <li><a href="javascript:void(0)">Food</a></li>
                            <li><a href="javascript:void(0)">Dry Fruits</a></li>
                            <li><a href="javascript:void(0)">Vegetables</a></li>
                            <li><a href="javascript:void(0)">juice</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

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