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
                        <h5 style="text-align:center; font-size: 30px; color:green;">Đơn hàng đã hoàn thành</h5>
                        <ul>
                            <li><a href="index.html">SHOE-SHOP</a></li>
                            <li>Order List</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="cr-card card-default product-list">
                            <div class="cr-card-content">
                                <div class="table-responsive">

                                    <form action="" method="post" enctype="multipart/form-data">
                                        <table id="order_list" class="table">
                                            <thead>
                                            <tr>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                    <th>Phương thức</th>
                                                    <th>Startus</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php foreach ($list as $value) : ?>
                                                    <tr>
                                                        <td class="cr-cart-name">
                                                            <a href="">
                                                                <img src="<?= $value['anh_sp'] ?>" width="150px" alt="product-1" class="cr-cart-img">
                                                                <?= $value['ten_sp'] ?>
                                                            </a>
                                                        </td>
                                                        <td class="cr-cart-price">
                                                            <span class="amount"><?= number_format($value['gia_tien'], 0, ',', '.') ?> VNĐ</span>
                                                        </td>
                                                        <td class="cr-cart-subtotal">
                                                            <?= $value['soLuong'] ?>
                                                        </td>
                                                        <td class="cr-cart-subtotal">
                                                            <?= number_format($value['soLuong'] * $value['gia_tien'], 0, ',', '.') ?> VNĐ
                                                        </td>
                                                        <td class="cr-cart-subtotal">
                                                            <?= $value['phuongthuc_thanhtoan'] ?>
                                                        </td>


                                                        <td>
                                                            <form method="post" action="index.php?admin=change-status3">
                                                                <!-- Truyền ID đơn hàng qua input ẩn -->
                                                                <input type="hidden" name="id" value="<?= $value['id'] ?>">

                                                                <!-- Dropdown chọn trạng thái mới -->
                                                              
                                                                
                                                                    <option value='4' <?= $value['id_trangThai'] == 4 ? 'selected' : '' ?>>Đã hoàn thành</option>

                                                                <!-- Nút cập nhật trạng thái -->
                                                               
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>

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
            <?php include_once "views/admin/layout/footer.php" ?>
        </footer>
    </main>
    <?php include_once "views/admin/layout/script.php" ?>
</body>
<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:49 GMT -->

</html>