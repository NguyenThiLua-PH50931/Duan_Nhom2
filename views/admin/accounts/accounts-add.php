<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:49 GMT -->

<head>
    <?php include_once "views/admin/layout/linkCss.php" ?>
</head>

<body>
    <main class="wrapper sb-default">
        <!-- Loader -->
        <div id="cr-overlay">
            <div class="loader"></div>
        </div>
        <!-- Header -->
        <header class="cr-header">
            <?php include_once "views/admin/layout/header.php" ?>
        </header>
        <!-- sidebar -->
        <?php include_once "views/admin/layout/sidebar.php" ?>

        <!-- main content -->
        <div class="cr-main-content">
            <div class="container-fluid">
                <!-- Page title & breadcrumb -->
                <div class="cr-page-title cr-page-title-2">
                    <div class="cr-breadcrumb">
                        <h5 style="text-align:center; font-size: 30px; color:green;">Add Accounts</h5>
                        <ul>
                        <li><a href="index.html" style="color: green">SHOE SHOP</a></li>
                            <li>Add-Accounts</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="cr-card card-default">
                            <div class="cr-card-content">
                                <div class="row cr-product-uploads">
                                    <div class="col-lg-4 mb-991">
                                        <div class="cr-vendor-img-upload">
                                            <div class="cr-vendor-main-img">
                                                <div class="avatar-upload">
                                                    <!-- <div class="avatar-edit">
                                                        <input type='file' id="product_main" class="cr-image-upload"
                                                            accept=".png, .jpg, .jpeg">
                                                        <label><i class="ri-pencil-line"></i></label>
                                                    </div> -->
                                                    <!-- <div class="avatar-preview cr-preview">
                                                        <div class="imagePreview cr-div-preview">
                                                            <img class="cr-image-preview"
                                                                src="assets/admin/layout//img/product/preview.jpg"
                                                                alt="edit" name="anh_sp">
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="cr-vendor-upload-detail">
                                        <form class="row g-3" method="POST" action="index.php?admin=add-accounts">
                                            <div class="col-md-6">
                                                <label for="ten_" tkclass="form-label">Tên tài khoản</label>
                                                <input type="text" class="form-control slug-title" id="ten_tk" name="ten_tk" value="<?= htmlspecialchars($_POST['ten_tk'] ?? '') ?>">
                                                <?php if (!empty($err_message['ten_tk'])): ?>
                                                    <small style="color: red;"><?= $err_message['ten_tk'] ?></small>
                                                    <?php endif; ?>
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">Họ tên<nav></nav><span>
                                                    </span></label>
                                                <input type="text" class="form-control" id="ho_ten" name="ho_ten"  value="<?= htmlspecialchars($_POST['ho_ten'] ?? '') ?>">
                                                <?php if (!empty($err_message['ho_ten'])): ?>
                                                    <small style="color: red;"><?= $err_message['ho_ten'] ?></small>
                                                    <?php endif; ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="so_dt" class="form-label">Số điện thoại</label>
                                                <input type="text" class="form-control slug-title" id="so_dt" name="so_dt"  value="<?= htmlspecialchars($_POST['so_dt'] ?? '') ?>">
                                                <?php if (!empty($err_message['so_dt'])): ?>
                                                    <small style="color: red;"><?= $err_message['so_dt'] ?></small>
                                                    <?php endif; ?>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="mat_khau">Mật khẩu</label>
                                                <input type="t" class="form-control slug-title" id="mat_khau" name="mat_khau"  value="<?= htmlspecialchars($_POST['mat_khau'] ?? '') ?>">
                                                <?php if (!empty($err_message['mat_khau'])): ?>
                                                    <small style="color: red;"><?= $err_message['mat_khau'] ?></small>
                                                    <?php endif; ?>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="dia_chi">Địa chỉ</label>
                                                <input type="text" class="form-control slug-title" id="dia_chi" name="dia_chi"  value="<?= htmlspecialchars($_POST['dia_chi'] ?? '') ?>">
                                                <?php if (!empty($err_message['dia_chi'])): ?>
                                                    <small style="color: red;"><?= $err_message['dia_chi'] ?></small>
                                                    <?php endif; ?>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="email">Email</label>
                                                <input type="email" class="form-control slug-title" id="email" name="email"  value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                                                <?php if (!empty($err_message['email'])): ?>
                                                    <small style="color: red;"><?= $err_message['email'] ?></small>
                                                    <?php endif; ?>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-success" value="them_moi">Thêm mới</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     

        <!-- Footer -->
        <footer>
            <?php include_once "views/admin/layout/footer.php" ?>
        </footer>
        <!-- Feature tools -->
        <?php include_once "views/admin/layout/feature-tools.php" ?>
    </main>
    <?php include_once "views/admin/layout/script.php" ?>
</body>
<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:50 GMT -->

</html>