<?php
class DetailControllers
{
    public function show()
    {
        $id_sp = $_GET['id_sp'] ?? '';

        $product = (new ProductModels)->getProductById($id_sp);
        $cateName = (new CategoryModels)->cateNameByProductId($id_sp);
        $category = (new CategoryModels)->all();

        // lấy ra các sản phẩm cùng loại trong trang chi tiết:
        $sameProduct = (new CategoryModels())->sameProduct($id_sp, $product['id_dm']);

        if (isset($_POST['addWishlist'])) {
            if (!isset($_SESSION['id_tk'])) {
                header('Location: index.php?user=login-user');
                exit();
            } else {
                $id_tk = $_SESSION['id_tk'];
                $id_sp = $_POST['id_sp'];
                $result = (new WishlistModel)->addWishlist($id_tk, $id_sp);
                if (!empty($result)) {
                    $_SESSION['thongBao'] = '<div class="cr-cart-notify"><p class="compare-note">Đã có sản phẩm trong<a href="index.php?user=wishlist"> Wishlist</a> Successfully!</p></div>';
                    header('Location: index.php?user=detail-product&id_sp=' . $id_sp);
                    exit();
                } else {
                    $_SESSION['successWishlist'] = '<div class="cr-cart-notify"><p class="compare-note">Add product in <a href="index.php?user=wishlist"> Wishlist</a> Successfully!</p></div>';
                    header('Location: index.php?user=detail-product&id_sp=' . $id_sp);
                    exit();
                }
            }
        }

        if (isset($_POST['addComment'])) {
            if (!isset($_SESSION['id_tk'])) {
                $_SESSION['errorComment'] = 'Bạn cần đăng nhập để bình luận!';
                header('Location: index.php?user=login-user');
                exit();
            } else {
                $id_tk = $_SESSION['id_tk'];
                $id_sp = $_GET['id_sp']; // Lấy id sản phẩm từ URL
                $noi_dung_bl = trim($_POST['noi_dung_bl']);
                $ngay_bl = date('Y-m-d H:i:s');

                if (!empty($noi_dung_bl)) {
                    // Thêm bình luận vào cơ sở dữ liệu
                    (new CommentModel())->insert_comment($noi_dung_bl, $ngay_bl, $id_sp, $id_tk);
                    $_SESSION['successComment'] = 'Bình luận đã được thêm thành công!';
                } else {
                    $_SESSION['errorComment'] = 'Nội dung bình luận không được để trống!';
                }
                header('Location: index.php?user=detail-product&id_sp=' . $id_sp);
                exit();
            }
        }


        // Danh sách bình luận:
        $comments = (new CommentModel())->getCommentsByProductId($id_sp);

        // Xóa bình luận:
        // Kiểm tra nếu tồn tại id_bl trong URL và người dùng có quyền xóa
        if (isset($_GET['id_bl'])) {
            $id_bl = $_GET['id_bl'];

            // Kiểm tra nếu người dùng có quyền xóa (admin hoặc chủ bình luận)
            if ($_SESSION['vai_tro'] == 'admin' || $_SESSION['id_tk'] == $comments['id_tk']) {
                // Xóa bình luận
                (new CommentModel())->deleteComment($id_bl);
                $_SESSION['successComment'] = 'Bình luận đã được xóa!';
            } else {
                $_SESSION['errorComment'] = 'Bạn không có quyền xóa bình luận này!';
            }

            // Chuyển hướng về trang chi tiết sản phẩm sau khi xóa
            header('Location: index.php?user=detail-product&id_sp=' . $_GET['id_sp']);
            exit();
        }

        view("users/detail-product", ['product' => $product, 'cateName' => $cateName, 'category' => $category, 'sameProduct' => $sameProduct, 'comments' => $comments]);
    }
}
