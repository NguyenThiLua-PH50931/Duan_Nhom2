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
                            <h2>Checkout</h2>
                            <span> <a href="index.html">Home</a> - Checkout</span>
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
                <div class="cr-checkout-leftside  m-t-991">
                    <!-- checkout content Start -->
                    <div class="cr-checkout-content">
                        <div class="cr-checkout-inner">

                            <form action="index.php?user=shipping" method="post">
                                <input type="hidden" name="id_vanChuyen" value="<?= $shipping['id_vanChuyen'] ?? ''?>">
                                <div class="cr-checkout-wrap">
                                    <div class="cr-checkout-block cr-check-bill">
                                        <h2 class="cr-checkout-title text-center mb-4">Thông tin vận chuyển</h2>
                                        <div class="cr-bl-block-content">
                                            <div class="cr-check-bill-form mb-minus-24">
                                                <span class="cr-bill-wrap cr-bill-half">
                                                    <label>Họ tên*</label>
                                                    <input type="text" name="hoTen" value="<?= $shipping['hoTen'] ?? ''?>"
                                                        placeholder="Nhập tên của bạn..." required>
                                                </span>
                                                <span class="cr-bill-wrap cr-bill-half">
                                                    <label>Số điện thoại*</label>
                                                    <input type="text" name="soDienThoai" value="<?= $shipping['soDienThoai'] ?? ''?>"
                                                        placeholder="Nhập số điện thoại..." required>
                                                </span>
                                                <span class="cr-bill-wrap">
                                                    <label>Address</label>
                                                    <input type="text" name="diaChi" value="<?= $shipping['diaChi'] ?? ''?>" placeholder="Nhập địa chỉ...">
                                                </span>
                                                <span class="cr-bill-wrap mb-4">
                                                    <label>Region State</label>
                                                    <textarea class="form-control" rows="5" name="note" id=""> <?= $shipping['note'] ?? ''?></textarea>
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php if ($shipping == ''): ?>
                                    <span class="cr-check-order-btn">
                                        <button class="cr-button mt-30" name="addShipping">Thêm địa chỉ</button>
                                    </span>
                                <?php elseif (isset($shipping['hoTen'])): ?>
                                    <span class="cr-check-order-btn">
                                        <button class="cr-button btn-danger mt-30" name="updateShipping">Cập nhật địa chỉ</button>
                                    </span>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                    <!--cart content End -->
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