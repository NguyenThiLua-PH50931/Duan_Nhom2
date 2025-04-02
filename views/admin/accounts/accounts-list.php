<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:49 GMT -->

<head>
    <?php include_once "views/admin/layout/linkCss.php" ?>
</head>
<style>
    table {
        margin-top: 15px;
        padding: 20px;
        width: 70%;
    }

    th {
        font-weight: bold;
        font-size: 30px;
    }
</style>

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
                        <a href="index.php?admin=add-accounts" class="cr-btn default-btn btn btn-success" style="width: 120px;">Thêm mới</a>
                        <h5 style="font-size: 30px; color:green; text-align: center; font-weight: bold; "> Accounts List</h5>
                        <ul>
                            <li><a href="index.html" style="color: green">SHOE SHOP</a></li>
                            <li>Account - List</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="cr-card card-default product-list">
                            <div class="cr-card-content ">
                                <div class="table-responsive">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <table id="" class="table table-hover" style="margin-top: -40px;">
                                            <br>
                                            <thead>
                                                <tr>
                                                    <th style="font-weight: bold; font-size:15px">Tên tài khoản</th>
                                                    <th style="font-weight: bold; font-size:15px">Họ tên</th>
                                                    <th style="font-weight: bold; font-size:15px">Số điện thoại</th>
                                                    <th style="font-weight: bold; font-size:15px">Mật khẩu</th>
                                                    <th style="font-weight: bold; font-size:15px">Địa chỉ</th>
                                                    <th style="font-weight: bold; font-size:15px">Email</th>
                                                    <th style="font-weight: bold; font-size:15px">Vai trò</th>
                                                    <th></th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php foreach ($accounts as $ac) : ?>
                                                    <tr>
                                                        <td style="width: 200px; "><?= $ac['ten_tk'] ?></td>
                                                        <td style="width: 200px;"><?= $ac['ho_ten'] ?></td>
                                                        <td style="width: 200px;"><?= $ac['so_dt'] ?></td>
                                                        <td style="word-break: break-word; width: 200px;">
                                                            <?= $ac['mat_khau'] ?>
                                                        </td>
                                                        <td style="width: 100px;"><?= $ac['dia_chi'] ?></td>
                                                        <td style="width: 100px;"><?= $ac['email'] ?></td>

                                                        <td style="width: 100px;">
                                                            <form method="post" action="index.php?admin=change-role" style="display: flex; align-items: center; gap: 10px;">
                                                                <input type="hidden" name="id_tk" value="<?= htmlspecialchars($ac['id_tk']) ?>">
                                                                <select style="width: 100px; border-radius: 5px;" name="vai_tro" id="vai_tro" class="role-select">
                                                                    <option value='0' <?= $ac['vai_tro'] == 0 ? 'selected' : '' ?>>User</option>
                                                                    <option value='1' <?= $ac['vai_tro'] == 1 ? 'selected' : '' ?>>Admin</option>
                                                                </select>
                                                                <button type="submit" class="btn btn-warning" style="width: 90px; height:30px">Update</button>
                                                            </form>
                                                        </td>


                                                        <td style="width: 100px;">
                                                            <div class="d-flex justify-content-center">
                                                                <button type="button" style="height:30px" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span class="sr-only"><i class="ri-settings-3-line"></i></span>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="index.php?admin=delete-accounts&id_tk=<?= $ac['id_tk'] ?>" onclick="return confirm('Bạn có chắc muốn xóa ?')">Xóa tài khoản</a>
                                                                </div>
                                                            </div>
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