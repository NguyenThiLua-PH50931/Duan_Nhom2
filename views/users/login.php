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
                            <h2>Login</h2>
                            <span> <a href="index.html">Home</a> - Login</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Login -->
    <section class="section-login padding-tb-100">
        <div class="container">
            <div class="row d-none">
                <div class="col-lg-12">
                    <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="cr-banner">
                            <h2>Login</h2>
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
                    <div class="cr-login" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="form-logo">
                            <!-- <img src="assets/users/img/logo/logo.png" alt="logo"> -->
                            <h3>Đăng nhập</h3>
                        </div>
                        <form class="cr-content-form" method="POST" enctype="multipart/form-data" action="index.php?admin=login-user">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" placeholder="Enter Your Username" class="cr-form-control" name="ten_tk">
                            </div>
                            <div class="form-group">
                                <label>Password*</label>
                                <input type="password" placeholder="Enter Your password" class="cr-form-control" name="mat_khau" value="" required>
                            </div>
                            <div class="remember">
                                <span class="form-group custom">
                                    <input type="checkbox" id="html">
                                    <label for="html">Remember Me</label>
                                </span>
                                <a class="link" href="forgot.html">Forgot Password?</a>
                            </div><br>
                            <div class="login-buttons">
                                <button class="cr-button">Login</button>
                                <a href="index.php?admin=register-user" class="cr-button btn-info">Singup</a>
                                <!-- <a href="index.php?admin=home" class="link"> -->


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
    <?php include_once "views/users/layout/script.php" ?>

</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:27 GMT -->

</html>