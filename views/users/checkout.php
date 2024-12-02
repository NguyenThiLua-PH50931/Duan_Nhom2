<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:26 GMT -->

<head>
    <?php include_once "views/users/layout/linkCss.php" ?>
    <style>
        .suggestions {
            position: absolute;
            background-color: white;
            width: 1435px;
            max-height: 300px;
            overflow-y: auto;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            z-index: 1000;
            display: none;
            margin-top: 3px;
            border: 1px solid #3f4451;
        }

        .suggestion-item {
            padding: 12px 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            border-bottom: 1px solid #3f4451;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            background-color: #f0f0f0;
        }

        .suggestion-item:last-child {
            border-bottom: none;
        }

        .suggestion-item:before {
            content: "📍";
            margin-right: 10px;
            font-size: 1.1em;
            transition: transform 0.3s ease;
        }

        .suggestion-item:hover {
            background: #3a4150;
            color: white;
            padding-left: 24px;
        }

        .suggestion-item:hover:before {
            transform: scale(1.2);
        }

        .suggestion-item:after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: white;
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }

        .suggestion-item:hover:after {
            transform: scaleY(1);
        }

        .address-container {
            position: relative;
            margin-bottom: 20px;
        }

        /* Tùy chỉnh thanh cuộn */
        .suggestions::-webkit-scrollbar {
            width: 8px;
        }

        .suggestions::-webkit-scrollbar-track {
            background: white;
            border-radius: 8px;
        }

        .suggestions::-webkit-scrollbar-thumb {
            background: white;
            border-radius: 8px;
        }

        .suggestions::-webkit-scrollbar-thumb:hover {
            background: white;
        }

        .grid {
            display: flex;
            gap: 1rem;
        }

        .grid>div {
            flex: 1;
        }
    </style>
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
                            <h2>Checkout</h2>
                            <span> <a href="index.php?user=home">Home</a> >
                                <a href="index.php?user=cart">Cart</a> >
                                <a href="index.php?user=getShipping">shipping</a>
                                > Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Checkout section -->
    <section class="cr-checkout-section padding-tb-100">
        <div class="container">
            <div class="row">
                <!-- Sidebar Area Start -->
                <div class="cr-checkout-rightside col-lg-4 col-md-12">
                    <div class="cr-sidebar-wrap">
                        <!-- Sidebar Summary Block -->
                        <div class="cr-sidebar-block">
                            <div class="cr-sb-title">
                                <h3 class="cr-sidebar-title">Sản phẩm</h3>
                            </div>
                            <div class="cr-sb-block-content">
                                <div class="cr-checkout-pro">
                                    <?php foreach ($cart as $value) : ?>
                                        <div class="col-sm-12 mb-6">
                                            <div class="cr-product-inner">
                                                <div class="cr-pro-image-outer">
                                                    <div class="cr-pro-image">
                                                        <a href="index.php?user=detail-product&id_sp=<?= $value['id_sp'] ?>" class="image">
                                                            <img class="main-image" src="<?= $value['anh_sp'] ?>"
                                                                alt="Product">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cr-pro-content cr-product-details">
                                                    <h5 class="cr-pro-title"><a href="index.php?user=detail-product&id_sp=<?= $value['id_sp'] ?>"><?= $value['ten_sp'] ?></a></h5>
                                                    <div class="cr-pro-rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-line"></i>
                                                    </div>
                                                    <p class="cr-price"><span class="new-price"><?= number_format($value['gia_tien']) ?> VNĐ</span> <span
                                                            class="old-price">$123.25</span>

                                                    </p>
                                                </div>

                                                <span class="text-right"> x<?= $value['so_luong'] ?></span>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <hr>
                                    <div class="cr-checkout-summary">
                                        <div>
                                            <span class="text-left"><input type="hidden" value="1"></span>
                                            <span class="text-left"><input type="hidden" value="1"></span>
                                            <span class="text-right"><?= number_format($totalAll) ?> VNĐ</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Summary Block -->
                    </div>
                    <div class="cr-sidebar-wrap cr-checkout-pay-wrap">
                        <!-- Sidebar Payment Block -->
                        <div class="cr-sidebar-block">
                            <div class="cr-sb-title">
                                <h3 class="cr-sidebar-title">Phương thức thanh toán</h3>
                            </div>
                            <div class="cr-sb-block-content">
                                <div class="cr-checkout-pay">
                                    <form action="index.php?user=thanhToanSP" method="post" class="payment-options">
                                        <span class="cr-pay-option">
                                            <span>
                                                <input type="radio" id="pay1" name="pttt" value="Tiền mặt" checked>
                                                <label for="pay1">Thanh toán khi nhận hàng</label>
                                            </span>
                                        </span>
                                        <span class="cr-pay-option">
                                            <span>
                                                <input type="radio" id="pay2" name="pttt" value="Chuyển khoản">
                                                <label for="pay2">Chuyển khoản</label>
                                            </span>
                                        </span>
                                        <span class="cr-pay-option">
                                            <span>
                                                <input type="radio" id="pay3" name="pttt" value="VN PAY">
                                                <label for="pay3">Thanh toán qua ngân hàng </label>
                                                <img src="assets/users/img/logo/logo-vnpay.jpg" width="50px" alt="payment">
                                            </span>
                                        </span>
                                        <span class="cr-pay-option">
                                            <button class="cr-button btn-danger" name="thanhToan">Thanh toán</button>
                                        </span>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Payment Block -->
                    </div>
                </div>
                <div class="cr-checkout-leftside col-lg-8 col-md-12 m-t-991">
                    <!-- checkout content Start -->
                    <div class="cr-checkout-content">
                        <div class="cr-checkout-inner">
                            <form action="index.php?user=shipping" method="post">
                                <input type="hidden" name="id_vanChuyen" value="<?= $shipping['id_vanChuyen'] ?? '' ?>">
                                <div class="cr-checkout-wrap">
                                    <div class="cr-checkout-block cr-check-bill">
                                        <h2 class="cr-checkout-title text-center mb-4">Thông tin vận chuyển</h2>
                                        <div class="cr-bl-block-content">
                                            <div class="cr-check-bill-form mb-minus-24">
                                                <span class="cr-bill-wrap cr-bill-half">
                                                    <label>Họ tên*</label>
                                                    <input type="text" name="hoTen" value="<?= $shipping['hoTen'] ?? '' ?>" readonly
                                                        placeholder="Nhập tên của bạn..." required>
                                                </span>
                                                <span class="cr-bill-wrap cr-bill-half">
                                                    <label>Số điện thoại*</label>
                                                    <input type="text" name="soDienThoai" value="<?= $shipping['soDienThoai'] ?? '' ?>" readonly
                                                        placeholder="Nhập số điện thoại..." required>
                                                </span>
                                                <span class="cr-bill-wrap">
                                                    <label for="address">Địa chỉ</label>
                                                    <input type="text" id="address" name="diaChi" value="<?= $shipping['diaChi'] ?? '' ?>" readonly placeholder="Nhập địa chỉ...">
                                                    <div id="suggestions" class="suggestions"></div>
                                                </span>
                                                <div class="grid">
                                                    <div>
                                                        <label for="city">Tỉnh/Thành phố</label>
                                                        <input type="text" id="city" name="city" value="<?= $shipping['city'] ?>" readonly required placeholder="Nhập tỉnh/thành phố">
                                                    </div>
                                                    <div>
                                                        <label for="district">Quận/Huyện</label>
                                                        <input type="text" id="district" name="district" value="<?= $shipping['district'] ?>" readonly required placeholder="Nhập quận/huyện">
                                                    </div>
                                                    <div>
                                                        <label for="ward">Phường/Xã</label>
                                                        <input type="text" id="ward" name="ward" value="<?= $shipping['ward'] ?>" readonly required placeholder="Nhập phường/xã">
                                                    </div>
                                                </div>
                                                <span class="cr-bill-wrap mb-4">
                                                    <label>Region State</label>
                                                    <textarea class="form-control" rows="5" name="note" id="" readonly><?= $shipping['note'] ?></textarea>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--cart content End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout section End -->


    <!-- Footer -->
    <?php include_once "views/users/layout/footer.php" ?>


    <!-- Tab to top -->
    <?php include_once "views/users/layout/tap-top.php" ?>

    <!-- Side-tool -->
    <?php include_once "views/users/layout/side-tool.php" ?>


    <!-- Vendor Custom -->
    <?php include_once "views/users/layout/script.php" ?>

</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:27 GMT -->

</html>