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
                            <h2>Cart</h2>
                            <span> <a href="index.html">Home</a> / Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cart -->
    <section class="section-cart padding-t-100">
        <div class="container">
            <div class="row d-none">
                <div class="col-lg-12">
                    <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="cr-banner">
                            <h2>Cart</h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore lacus vel facilisis. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="cr-cart-content" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="row">
                            <form action="index.php?user=updateCart" method="POST">
                                <div class="cr-table-content">
                                    <?php if (!empty($_SESSION['id_tk'])): ?>
                                        <!-- <form > -->
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th class="text-center">Quantity</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($cart as $value): ?>
                                                    <input type="hidden" name="id_giohang_chitiet[]" value="<?= $value['id_giohang_chitiet'] ?>">
                                                    <tr>
                                                        <td class="cr-cart-name">
                                                            <a href="javascript:void(0)">
                                                                <img src="<?= $value['anh_sp'] ?>" width="150px" alt="product-1" class="cr-cart-img">
                                                                <?= $value['ten_sp'] ?>
                                                            </a>
                                                        </td>
                                                        <td class="cr-cart-price">
                                                            <span class="amount"><?= number_format($value['gia_tien'], 0, ',', '.') ?> VNĐ</span>
                                                        </td>
                                                        <td class="cr-cart-qty">
                                                            <div class="cart-qty-plus-minus">
                                                                <!-- Input number để thay đổi số lượng -->
                                                                <input type="number" name="so_luong[]" value="<?= $value['so_luong'] ?>" min="1" class="quantity">
                                                            </div>
                                                        </td>
                                                        <td class="cr-cart-subtotal">
                                                            <?= number_format($value['so_luong'] * $value['gia_tien'], 0, ',', '.') ?> VNĐ
                                                        </td>
                                                        <td class="cr-cart-remove">
                                                            <a onclick="return confirm('Bạn có chắc muốn xóa ?')" href="index.php?user=deleteCart&id_giohang_chitiet=<?= $value['id_giohang_chitiet'] ?>">
                                                                <i class="ri-delete-bin-line"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        <?php if (count($cart) > 0) : ?>
                                            <div class="cr-cart-update-bottom">
                                                <button type="submit" name="update_cart" class="cr-button">Update Cart</button>
                                            </div>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <p>Bạn cần <a href="index.php?user=login-user" class="text-success">đăng nhập</a> !!!</p>
                                    <?php endif; ?>
                                </div>


                                <div class="row mb-5">
                                    <div class="col-lg-12">
                                        <div class="cr-cart-update-bottom">
                                            <a href="index.php?user=shop" class="cr-links">Continue Shopping</a>
                                            <a href="index.php?user=getShipping" class="cr-button">
                                                Check Out
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include_once "views/users/layout/footer.php" ?>


    <!-- Tab to top -->
    <?php include_once "views/users/layout/tap-top.php" ?>

    <?php
    if (isset($_SESSION['addCart'])) {
        echo $_SESSION['addCart'];
    } elseif (isset($_SESSION['deleteCart'])) {
        echo $_SESSION['deleteCart'];
    }
    $_SESSION['addCart'] = null;
    $_SESSION['deleteCart'] = null;

    ?>

    <!-- Side-tool -->
    <?php include_once "views/users/layout/side-tool.php" ?>


    <!-- Vendor Custom -->
    <?php include_once "views/users/layout/script.php" ?>

</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:27 GMT -->

</html>