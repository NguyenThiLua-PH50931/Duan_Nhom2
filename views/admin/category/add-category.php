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
                        <h5>Add Category</h5>
                        <ul>
                            <li><a href="index.html">Carrot</a></li>
                            <li>Add Category</li>
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
                                        <form class="row g-3" method="POST" enctype="multipart/form-data">

                                            <div class="col-md-6">
                                                <label for="ten_sp" class="form-label">Tên danh mục</label>
                                                <input type="text" class="form-control slug-title" name="ten_dm" value="<?= htmlspecialchars($_POST['ten_dm'] ?? '') ?>">
                                                <?php if (!empty($err_message['ten_dm'])): ?>
                                                    <small style="color: red;"><?= $err_message['ten_dm'] ?></small>
                                                    <?php endif; ?>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn cr-btn-primary" value="Thêm mới">Thêm mới</button>
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