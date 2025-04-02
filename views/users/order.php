<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:26 GMT -->

<head>
    <?php include_once "views/users/layout/linkCss.php" ?>
    <style>
        .cr-step {
            opacity: 0.5;
            transition: opacity 0.3s, background-color 0.3s;
        }

        .cr-step-completed {
            opacity: 1;
            color: green;
        }

        .cr-step-active {
            opacity: 1;
            color: blue;
            font-weight: bold;
        }
    </style>
</head>

<body class="body-bg-6">

    <!-- Loader -->
    <div id="cr-overlay">
        <span class="loader"></span>
    </div>

    <!-- Header -->
    <header style="height: 180px; margin-bottom: 10px;">
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
                            <h2>Track Order</h2>
                            <span> <a href="index.html">Home</a> - Track Order</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Track Order section -->
    <section class="cr-track padding-tb-100">
        <div class="container">
            <div class="row d-none">
                <div class="col-lg-12">
                    <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="cr-banner">
                            <h2>Popular Products</h2>
                        </div>
                        <div class="cr-banner-sub-title">
                            <p>We delivering happiness and needs, Faster than you can think.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="cr-track-box">
                        <!-- Details-->

                        <!-- Progress-->
                        <div class="cr-steps">
                            <div class="cr-steps-body">
                                <div class="cr-step cr-step-active" onclick="changeTableContent('confirmed')">
                                    <a href="javascript:void(0)">
                                        <span class="cr-step-icon">
                                            <i class="ri-settings-4-line"></i>
                                        </span>Đang xử lý <br> đơn hàng
                                    </a>
                                </div>

                                <div class="cr-step" onclick="changeTableContent('processing')">
                                    <a href="javascript:void(0)">
                                        <span class="cr-step-icon">
                                            <i class="ri-shield-check-line"></i>
                                        </span>Đơn hàng đã <br> xác nhận
                                    </a>
                                </div>

                                <div class="cr-step" onclick="changeTableContent('dispatched')">
                                    <a href="javascript:void(0)">
                                        <span class="cr-step-icon">
                                            <i class="ri-truck-line"></i>
                                        </span>Sản phẩm <br> đã gửi đi
                                    </a>
                                </div>

                                <div class="cr-step" onclick="changeTableContent('daGiao')">
                                    <a href="javascript:void(0)">
                                        <span class="cr-step-icon">
                                            <i class="ri-gift-line"></i>
                                        </span>Sản phẩm <br> đã giao
                                    </a>
                                </div>

                                <div class="cr-step" onclick="changeTableContent('huyDon')">
                                    <a href="javascript:void(0)">

                                        <span class="cr-step-icon">
                                            <i class="ri-home-5-line"></i>
                                        </span>Sản phẩm<br> đã hủy
                                    </a>
                                </div>
                            </div>
                            <!-- Sản phẩm -->
                            <div class="cr-table-content">
                                <!-- <form > -->
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th class="text-center">Quantity</th>
                                            <th>Total</th>
                                            <th>Phương thức</th>
                                            <th class="text-center">Địa chỉ</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="order-table-body">
                                        <?php if (!empty($order)): ?>
                                            <?php foreach ($order as $value): ?>
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
                                                            <input type="number" name="so_luong" value="<?= $value['soLuong'] ?>" class="quantity">
                                                        </div>
                                                    </td>
                                                    <td class="cr-cart-subtotal">
                                                        <?= number_format($value['soLuong'] * $value['gia_tien'], 0, ',', '.') ?> VNĐ
                                                    </td>
                                                    <td class="cr-cart-remove">
                                                        <a onclick="return confirm('Bạn có chắc muốn xóa ?')" href="">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="5" style="text-align: center; color: gray; font-style: italic;">
                                                    Không có sản phẩm nào trong đơn hàng.
                                                </td>
                                            </tr>
                                        <?php endif; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Track Order section End -->
    <script>
        // Hàm cập nhật trạng thái các bước
        function updateStepStatus(stepIndex) {
            // Lấy tất cả các bước
            const steps = document.querySelectorAll('.cr-step');

            // Lặp qua tất cả các bước và gán trạng thái tương ứng
            steps.forEach((step, index) => {
                if (index < stepIndex) {
                    // Các bước đã hoàn thành
                    step.classList.add('cr-step-completed');
                    step.classList.remove('cr-step-active');
                } else if (index === stepIndex) {
                    // Bước hiện tại
                    step.classList.add('cr-step-active');
                    step.classList.remove('cr-step-completed');
                } else {
                    // Các bước chưa hoàn thành
                    step.classList.remove('cr-step-completed');
                    step.classList.remove('cr-step-active');
                }
            });
        }

        // Ví dụ sử dụng: chuyển trạng thái sang bước thứ 3 (bắt đầu từ 0)
        updateStepStatus(2); // Bước "Quality Check"

        // Thêm sự kiện click vào các bước để mô phỏng thay đổi trạng thái
        document.querySelectorAll('.cr-step').forEach((step, index) => {
            step.addEventListener('click', () => updateStepStatus(index));
        });
        // Hàm thay đổi nội dung bảng (như đã làm ở trên)
        function changeTableContent(status) {
            const tableBody = document.getElementById('order-table-body');
            tableBody.innerHTML = '';

            let newContent = '';
            if (status === 'confirmed') {
                newContent = `
                    <?php foreach ($order as $value): ?>
                        <?php if ($value['id_trangThai'] == 1) : ?>
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
                                <td class="cr-cart-qty text-center">
                                    <span><?= $value['soLuong'] ?></span>
                                </td>
                                <td class="cr-cart-subtotal">
                                    <?= number_format($value['soLuong'] * $value['gia_tien'], 0, ',', '.') ?> VNĐ
                                </td>
                                <td class="cr-cart-qty text-center">
                                    <span><?= $value['phuongthuc_thanhtoan'] ?></span>
                                </td>
                                <td class="cr-cart-qty text-center">
                                    <span><?= $shipping['diaChi'] ?></span>
                                </td>
                                <td class="cr-cart-remove text-center">
                                    <a class="text-center" onclick="return confirm('Bạn có chắc muốn xóa ?')" href="index.php?user=huyDon&id_donHang=<?= $value['id'] ?>">
                                        Hủy Đơn
                                    </a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
        `;
            } else if (status === 'processing') {
                newContent = `
                <?php foreach ($order as $value): ?>
                        <?php if ($value['id_trangThai'] == 2) : ?>
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
                                <td class="cr-cart-qty text-center">
                                    <span><?= $value['soLuong'] ?></span>
                                </td>
                                <td class="cr-cart-subtotal">
                                    <?= number_format($value['soLuong'] * $value['gia_tien'], 0, ',', '.') ?> VNĐ
                                </td>
                                <td class="cr-cart-qty text-center">
                                    <span><?= $value['phuongthuc_thanhtoan'] ?></span>
                                </td>
                                <td class="cr-cart-qty text-center">
                                    <span><?= $shipping['diaChi'] ?></span>
                                </td>
                                <td class="cr-cart-remove text-center">
                                    <i class="ri-check-line"></i>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
        `;
            } else if (status === 'dispatched') {
                newContent = `
                <?php foreach ($order as $value): ?>
                <?php if ($value['id_trangThai'] == 3) : ?>
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
                                <td class="cr-cart-qty text-center">
                                    <span><?= $value['soLuong'] ?></span>
                                </td>
                                <td class="cr-cart-subtotal">
                                    <?= number_format($value['soLuong'] * $value['gia_tien'], 0, ',', '.') ?> VNĐ
                                </td>
                                <td class="cr-cart-qty text-center">
                                    <span><?= $value['phuongthuc_thanhtoan'] ?></span>
                                </td>
                                <td class="cr-cart-qty text-center">
                                    <span><?= $shipping['diaChi'] ?></span>
                                </td>
                                <td class="cr-cart-remove text-center">
                                    <a class="text-center" onclick="return confirm('Bạn có chắc muốn xóa ?')" href="">
                                        Hủy Đơn
                                    </a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
        `;
            } else if (status === 'daGiao') {
                newContent = `
                <?php foreach ($order as $value): ?>
                <?php if ($value['id_trangThai'] == 4) : ?>
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
                                <td class="cr-cart-qty text-center">
                                    <span><?= $value['soLuong'] ?></span>
                                </td>
                                <td class="cr-cart-subtotal">
                                    <?= number_format($value['soLuong'] * $value['gia_tien'], 0, ',', '.') ?> VNĐ
                                </td>
                                <td class="cr-cart-qty text-center">
                                    <span><?= $value['phuongthuc_thanhtoan'] ?></span>
                                </td>
                                <td class="cr-cart-qty text-center">
                                    <span><?= $shipping['diaChi'] ?></span>
                                </td>
                                <td class="cr-cart-remove text-center">
                                    <a class="text-center" href="index.php?user=detail-product&id_sp=<?= $value['id_sp'] ?>">
                                        Mua lại
                                    </a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
        `;
            } else if (status === 'huyDon') {
                newContent = `
                <?php foreach ($order as $value): ?>
                <?php if ($value['id_trangThai'] == 5) : ?>
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
                                <td class="cr-cart-qty text-center">
                                    <span><?= $value['soLuong'] ?></span>
                                </td>
                                <td class="cr-cart-subtotal">
                                    <?= number_format($value['soLuong'] * $value['gia_tien'], 0, ',', '.') ?> VNĐ
                                </td>
                                <td class="cr-cart-qty text-center">
                                    <span><?= $value['phuongthuc_thanhtoan'] ?></span>
                                </td>
                                <td class="cr-cart-qty text-center">
                                    <span><?= $shipping['diaChi'] ?></span>
                                </td>
                                <td class="cr-cart-remove text-center text-success">
                                    <a class="text-center" href="index.php?user=detail-product&id_sp=<?= $value['id_sp'] ?>">
                                        Mua lại
                                    </a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
        `;
            } else {
                newContent = `
            <tr>
                <td colspan="5" class="text-center">Không có dữ liệu cho trạng thái này.</td>
            </tr>
        `;
            }

            tableBody.innerHTML = newContent;
        }

        // Tự động chọn mục đầu tiên khi trang vừa tải
        document.addEventListener('DOMContentLoaded', () => {
            changeTableContent('dispatched'); // Trạng thái đầu tiên (confirmed)
        });
    </script>
    <!-- Footer -->
    <?php include_once "views/users/layout/footer.php" ?>

    <?php
    if (isset($_SESSION['huyDon'])) {
        echo $_SESSION['huyDon'];
    }
    unset($_SESSION['huyDon']);


    ?>

    <!-- Tab to top -->
    <?php include_once "views/users/layout/tap-top.php" ?>

    <!-- Side-tool -->
    <?php include_once "views/users/layout/side-tool.php" ?>


    <!-- Vendor Custom -->
    <?php include_once "views/users/layout/script.php" ?>

</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/carrot-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:30:27 GMT -->

</html>