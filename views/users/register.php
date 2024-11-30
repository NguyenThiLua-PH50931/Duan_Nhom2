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
            <div class="row">
                <div class="col-12">
                    <div class="cr-register">
                        <div class="form-logo">
                            <h3>Đăng ký</h3>
                        </div>
                        <form class="cr-content-form" method="post" action="index.php?user=register-user">
                            <div class="row">
                                <!-- Tên tài khoản -->
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Tên tài khoản</label>
                                        <input type="text" class="cr-form-control" name="ten_tk"
                                            value="<?= htmlspecialchars($data['ten_tk'] ?? '') ?>">
                                            <?php if (!empty($err_message['ten_tk'])): ?>
                                                    <small style="color: red;"><?= $err_message['ten_tk'] ?></small>
                                                <?php endif; ?>
                                    </div>
                                </div>

                                <!-- Mật khẩu -->
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input type="password" class="cr-form-control" name="mat_khau"
                                         value="<?= htmlspecialchars($data['mat_khau'] ?? '') ?>">  
                                         <?php if (!empty($err_message['mat_khau'])): ?>
                                                    <small style="color: red;"><?= $err_message['mat_khau'] ?></small>
                                                <?php endif; ?>             
                                    </div>
                                </div>

                                <!-- Họ và tên -->
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Họ và tên</label>
                                        <input type="text" class="cr-form-control" name="ho_ten"
                                            value="<?= htmlspecialchars($data['ho_ten'] ?? '') ?>">
                                            <?php if (!empty($err_message['ho_ten'])): ?>
                                                    <small style="color: red;"><?= $err_message['ho_ten'] ?></small>
                                                <?php endif; ?> 
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="cr-form-control" name="email"
                                            value="<?= htmlspecialchars($data['email'] ?? '') ?>">
                                            <?php if (!empty($err_message['email'])): ?>
                                                    <small style="color: red;"><?= $err_message['email'] ?></small>
                                                <?php endif; ?> 
                                        
                                    </div>
                                </div>

                                <!-- Số điện thoại -->
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input type="text" class="cr-form-control" name="so_dt"
                                            value="<?= htmlspecialchars($data['so_dt'] ?? '') ?>">
                                            <?php if (!empty($err_message['so_dt'])): ?>
                                                    <small style="color: red;"><?= $err_message['so_dt'] ?></small>
                                                <?php endif; ?> 
                                    </div>
                                </div>

                                <!-- Địa chỉ -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" class="cr-form-control" name="dia_chi"
                                            value="<?= htmlspecialchars($data['dia_chi'] ?? '') ?>">
                                            <?php if (!empty($err_message['dia_chi'])): ?>
                                                    <small style="color: red;"><?= $err_message['dia_chi'] ?></small>
                                                <?php endif; ?> 
                                        
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