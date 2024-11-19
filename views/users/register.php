<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:26 GMT -->
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
                                <div class="col-12 col-sm-6">
                                    <div class="form-group" >
                                        <label>Tên tài khoản</label>
                                        <input type="text" placeholder="Nhập họ" class="cr-form-control" name="ten_tk">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group" >
                                        <label>Mật khẩu</label>
                                        <input type="password" placeholder="Nhập mật khẩu" class="cr-form-control" name="mat_khau">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Họ và tên</label>
                                        <input type="text" placeholder="Nhập tên" class="cr-form-control" name="ho_ten">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" placeholder="Nhập email" class="cr-form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input type="text" placeholder="Số điện thoại"
                                            class="cr-form-control" name="so_dt">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" placeholder="Nhập địa chỉ" class="cr-form-control" name="dia_chi">
                                    </div>
                                </div>
                              
                                <div class="cr-register-buttons">
                                    <button type="submit" class="cr-button" name="dangky">Đăng ký</button>
                                    <a href="index.php?admin=login-user" class="link">
                                       Bạn đã có tài khoản chưa?
                                    </a>
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