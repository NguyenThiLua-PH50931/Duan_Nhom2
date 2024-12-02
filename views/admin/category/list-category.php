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
                        <a href="index.php?admin=add-category" class="cr-btn default-btn btn btn-success">Thêm mới</a>
                        <h5 style="text-align:center; font-size: 30px; color:green;">Category List</h5>
                        <ul>
                        <li><a href="index.html" style="color: green">SHOE SHOP</a></li>

                            <li>Category List</li>
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
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th style="font-weight: bold; font-size:15px">Tên danh mục</th>
                                                    <th></th>
                                                    <th style="font-weight: bold; font-size:15px"></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($categories as $value) : ?>
                                                    <tr>
                                                        <td><?= $value['ten_dm'] ?></td>
                                                        <!-- <td><span class="active">active</span></td> -->
                                                        <td>
                                                            <div class="d-flex justify-content-center">
                                                                <button type="button"
                                                                    class="btn btn-success dropdown-toggle dropdown-toggle-split"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false" data-display="static">
                                                                    <span class="sr-only"><i
                                                                            class="ri-settings-3-line"></i></span>
                                                                </button>

                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="index.php?admin=edit-category&id_dm=<?= $value['id_dm'] ?>">Sửa danh mục</a>
                                                                    <a class="dropdown-item" href="index.php?admin=delete-category&id_dm=<?= $value['id_dm'] ?>"
                                                                        onclick="return confirm('Bạn có chắc muốn xóa ?')">Xóa danh mục</a>
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
            <?php include_once "views/admin/layout/footer.php" ?>
        </footer>
        <!-- Feature tools -->
        <?php include_once "views/admin/layout/feature-tools.php" ?>
    </main>
    <?php include_once "views/admin/layout/script.php" ?>
</body>
<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:49 GMT -->

</html>