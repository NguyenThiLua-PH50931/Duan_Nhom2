<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:49 GMT -->

<head>
    <?php include_once "views/admin/linkCss.php" ?>
</head>

<body>
    <main class="wrapper sb-default">
        <!-- Loader -->
        <div id="cr-overlay">
            <div class="loader"></div>
        </div>
        <!-- Header -->
        <header class="cr-header">
            <?php include_once "views/admin/header.php" ?>
        </header>
        <!-- sidebar -->
        <?php include_once "views/admin/sidebar.php" ?>

        <!-- main content -->
        <div class="cr-main-content">
            <div class="container-fluid">
                <!-- Page title & breadcrumb -->
                <div class="cr-page-title cr-page-title-2">
                    <div class="cr-breadcrumb">
                        <a href="index.php?admin=add-product" class="cr-btn default-btn color-success">Thêm mới</a>
                        <h3>Product List</h3>
                        <ul>
                            <li><a href="index.html">Carrot</a></li>
                            <li>Product List</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="cr-card card-default product-list">
                            <div class="cr-card-content ">
                                <div class="table-responsive">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <?php
                                        if (!empty($_SESSION['message'])) {
                                            echo '<div class="alert alert-success">' . $_SESSION['message'] . '</div>';
                                        }
                                        $_SESSION['message'] = null;
                                        ?>
                                        <table id="product_list" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Ảnh sản phẩm</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Giá tiền</th>
                                                    <th style="width: 100px">Lượt xem</th>
                                                    <th style="width: 100px">Số lượng tồn</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($product as $pro) : ?>
                                                    <tr>
                                                        <td>
                                                            <img src="<?= $pro['anh_sp'] ?>" style="width: 170px; height: auto" alt="">
                                                        </td>
                                                        <td><?= $pro['ten_sp'] ?></td>
                                                        <td><?= $pro['gia_tien'] ?> VNĐ</td>
                                                        <td><?= $pro['luot_xem'] ?></td>
                                                        <td><?= $pro['soluong_ton'] ?></td>
                                                        <!-- <td><span class="active">active</span></td> -->
                                                        <td>
                                                            <div class="d-flex justify-content-center">
                                                                <button type="button"
                                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false" data-display="static">
                                                                    <span class="sr-only"><i
                                                                            class="ri-settings-3-line"></i></span>
                                                                </button>

                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="index.php?admin=edit-product&id_sp=<?= $pro['id_sp'] ?>">Sửa sản phẩm</a>
                                                                    <a class="dropdown-item" href="index.php?admin=delete-product&id_sp=<?= $pro['id_sp'] ?>"
                                                                        onclick="return confirm('Bạn có chắc muốn xóa ?')">Xóa sản phẩm</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <?php include_once "views/admin/footer.php" ?>
        </footer>
        <!-- Feature tools -->
        <?php include_once "views/admin/feature-tools.php" ?>
    </main>
    <?php include_once "views/admin/script.php" ?>
</body>
<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:49 GMT -->

</html>