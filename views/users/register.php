<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:26 GMT -->

<head>
    <?php include_once "views/users/layout/linkCss.php" ?>

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
        <?php include_once "views/users/layout/header.php" ?><?php include_once "views/users/layout/header.php" ?>
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
                            <h2>Register</h2>
                            <span> <a href="index.html">Home</a> - Register</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Register -->
    <section class="section-register padding-tb-100">
        <div class="container">
            <div class="row d-none">
                <div class="col-lg-12">
                    <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="cr-banner">
                            <h2>Register</h2>
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
                    <div class="cr-register" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="form-logo">
                            <!-- <img src="assets/users/img/logo/logo.png" alt="logo"> -->
                            <h3>Đăng ký</h3>
                        </div>
                        <form class="cr-content-form" method="post">
                            <div class="row">
                                <!-- Tên tài khoản -->
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Tên tài khoản</label>
                                        <input type="text" placeholder="Nhập họ" class="cr-form-control" name="ten_tk"
                                            required pattern="[A-Za-z0-9_]{3,20}"
                                            title="Tên tài khoản chỉ chứa chữ cái, số, hoặc dấu gạch dưới, từ 3 đến 20 ký tự.">
                                    </div>
                                </div>

                                <!-- Mật khẩu -->
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input type="password" placeholder="Nhập mật khẩu" class="cr-form-control" name="mat_khau"
                                            required minlength="6"
                                            title="Mật khẩu phải có ít nhất 6 ký tự.">
                                    </div>
                                </div>

                                <!-- Họ và tên -->
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Họ và tên</label>
                                        <input type="text" placeholder="Nhập tên" class="cr-form-control" name="ho_ten"
                                            required pattern="[A-Za-zÀ-ỹ\s]{3,50}"
                                            title="Họ và tên chỉ chứa chữ cái và khoảng trắng, từ 3 đến 50 ký tự.">
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" placeholder="Nhập email" class="cr-form-control" name="email" required>
                                    </div>
                                </div>

                                <!-- Số điện thoại -->
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input type="text" placeholder="Số điện thoại" class="cr-form-control" name="so_dt"
                                            required pattern="\d{10,11}"
                                            title="Số điện thoại chỉ chứa số và có độ dài 10-11 ký tự.">
                                    </div>
                                </div>

                                <!-- Địa chỉ -->
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" placeholder="Nhập địa chỉ" class="cr-form-control" name="dia_chi" required>
                                    </div>
                                </div>

                                <!-- Nút đăng ký -->
                                <div class="col-12">
                                    <div class="cr-register-buttons">
                                        <button type="submit" class="cr-button" name="dangky">Đăng ký</button>
                                        <a href="index.php?user=login-user" class="link">Bạn đã có tài khoản.</a>
                                    </div>
                                </div>
                            </div>
                        </form>

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
    <script src="assets/users/js/vendor/jquery-3.6.4.min.js"></script>
    <?php include_once "views/users/layout/script.php" ?>

</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:26 GMT -->

</html>