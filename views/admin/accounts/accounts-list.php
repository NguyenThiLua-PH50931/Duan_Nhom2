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
                        <ul>
                            <li><a href="index.html">Carrot</a></li>
                            <li>Account List</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="cr-card card-default product-list">
                            <div class="cr-card-content ">
                                <div class="table-responsive">
                                    <h5 style="text-align:center">Accounts List</h5>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <table id="product_list" class="table" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Tên tài khoản</th>
                                                    <th>Họ tên</th>
                                                    <th>Số điện thoại</th>
                                                    <th>Mật khẩu</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Email</th>
                                                    <th>Vai trò</th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($accounts as $ac) : ?>
                                                    <tr>
                                                        <td><?= $ac['ten_tk'] ?></td>
                                                        <td><?= $ac['ho_ten'] ?></td>
                                                        <td><?= $ac['so_dt'] ?></td>
                                                        <td><?= $ac['mat_khau'] ?></td>
                                                        <td><?= $ac['dia_chi'] ?></td>
                                                        <td><?= $ac['email'] ?></td>
                                                        <td>
                                                            <?php
                                                            if ($ac["vai_tro"] == 1) {
                                                                echo "Admin";
                                                            } else {
                                                                echo "User";
                                                            }
                                                            ?>
                                                        </td>
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
                                                                    <a class="dropdown-item" href="index.php?admin=delete-accounts&id_tk=<?= $ac['id_tk'] ?>"
                                                                        onclick="return confirm('Bạn có chắc muốn xóa ?')">Xóa tài khoản</a>
                                                                </div>
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