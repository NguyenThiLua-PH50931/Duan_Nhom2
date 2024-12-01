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
                        <ul>
                            <li><a href="index.html">Carrot</a></li>
                            <li>Comment List</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="cr-card card-default product-list">
                            <div class="cr-card-content ">
                                <div class="table-responsive">
                                    <h5 style="text-align:center">Comment List</h5>
                                    <form action="" method="post" enctype="multipart/form-data">

                                        <table id="" class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Người bình luận</th>
                                                    <th>Nội dung bình luận</th>
                                                    <th>Ngày bình luận</th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($allComment as $cm) : ?>
                                                    <tr>
                                                        <td><?= $cm['ho_ten'] ?></td>
                                                        <td><?= $cm['noi_dung_bl'] ?></td>
                                                        <td><?= $cm['ngay_bl'] ?></td>
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
                                                                <a class="dropdown-item" href="index.php?admin=delete-comment&id_bl=<?= $cm['id_bl'] ?>"
                                                                onclick="return confirm('Bạn có chắc muốn xóa ?')">Xóa bình luận</a>
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