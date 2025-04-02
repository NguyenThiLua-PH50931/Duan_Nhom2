<?php
class DetailControllers
{
    public function show()
    {
        $id_sp = $_GET['id_sp'] ?? '';


        $id_tk = $_SESSION['id_tk'] ?? '';


        $product = (new ProductModels)->getProductById($id_sp);
        $cateName = (new CategoryModels)->cateNameByProductId($id_sp);
        $category = (new CategoryModels)->all();

        // lấy ra các sản phẩm cùng loại trong trang chi tiết:
        $sameProduct = (new CategoryModels())->sameProduct($id_sp, $product['id_dm']);

        (new ProductModel())->updateLuotxem($id_sp);



        if (isset($_POST['addWishlist'])) {
            if (!isset($_SESSION['id_tk'])) {
                header('Location: index.php?user=login-user');
                exit();
            } else {
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

        if (isset($_POST['addCart'])) {
            $id_sp = $_POST['id_sp'] ?? '';
            $so_luong = $_POST['so_luong'];
            if ($so_luong > $product['soluong_ton']) {
                $_SESSION['soLuong'] = "Sản phẩm vượt quá số lượng trong kho";
                header('Location: index.php?user=detail-product&id_sp=' . $id_sp);
                exit();
            } else {
                // $id_giohang = $_POST['id_giohang'];
                (new CartModel)->addCart($id_tk, $id_sp, $so_luong);
                $_SESSION['addCart'] = '<div class="cr-cart-notify"><p class="compare-note">Add product in <a href="cart.html"> Cart</a> Successfully!</p></div>';
                header('Location: index.php?user=cart');
                exit();
            }
        }

        if (isset($_POST['muaNgay'])) {
            $id_sp = $_POST['id_sp'] ?? '';
            $so_luong = $_POST['so_luong'];
            // $id_giohang = $_POST['id_giohang'];
            (new CartModel)->addCart($id_tk, $id_sp, $so_luong);
            $_SESSION['addCart'] = '<div class="cr-cart-notify"><p class="compare-note">Add product in <a href="cart.html"> Cart</a> Successfully!</p></div>';
            header('Location: index.php?user=cart');
            exit();
        }
        // ---------------------------------------THÊM BÌNH LUẬN----------------------------------------
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


        //   ----------------------------------DANH SÁCH BÌNH LUẬN---------------------------------------------

        $comments = (new CommentModel())->getCommentsByProductId($id_sp);

        // -----------------------------------XÓA BÌNH LUẬN-------------------------------------
        // Xóa bình luận:
        // Kiểm tra nếu tồn tại id_bl trong URL và người dùng có quyền xóa
        if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id_bl'])) {
            $id_bl = $_GET['id_bl'];

            // Lấy thông tin bình luận cụ thể theo id_bl
            $comment = (new CommentModel())->getCommentById($id_bl);

            if ($comment) {
                // Kiểm tra quyền xóa: admin hoặc chính chủ bình luận
                if ($_SESSION['vai_tro'] == 'admin' || $_SESSION['id_tk'] == $comment['id_tk']) {
                    // Xóa bình luận
                    if ((new CommentModel())->deleteComment($id_bl)) {
                        $_SESSION['successComment'] = 'Bình luận đã được xóa!';
                    } else {
                        $_SESSION['errorComment'] = 'Có lỗi xảy ra khi xóa bình luận!';
                    }
                } else {
                    $_SESSION['errorComment'] = 'Bạn không có quyền xóa bình luận này!';
                }
            } else {
                $_SESSION['errorComment'] = 'Bình luận không tồn tại!';
            }

            // Chuyển hướng về trang chi tiết sản phẩm sau khi xóa
            header('Location: index.php?user=detail-product&id_sp=' . $_GET['id_sp']);
            exit();
        }
        // ---------------------------------------------CHỈNH SỬA BÌNH LUẬN------------------------------

        if (isset($_GET['action']) && $_GET['action'] == 'update' && isset($_GET['id_bl'])) {
            $id_bl = $_GET['id_bl'];
            $noi_dung_bl = $_POST['noi_dung_bl'];

            // Lấy thông tin bình luận để kiểm tra quyền
            $comment = (new CommentModel())->getCommentById($id_bl);

            if (!$comment) {
                $_SESSION['errorComment'] = 'Bình luận không tồn tại!';
            } else {
                // Chỉ cho phép chủ bình luận chỉnh sửa
                if ($_SESSION['id_tk'] == $comment['id_tk']) {
                    // Cập nhật nội dung bình luận
                    $updated = (new CommentModel())->updateComment($id_bl, $noi_dung_bl);
                    if ($updated) {
                        $_SESSION['successComment'] = 'Bình luận đã được cập nhật!';
                    } else {
                        $_SESSION['errorComment'] = 'Có lỗi xảy ra khi cập nhật bình luận!';
                    }
                } else {
                    $_SESSION['errorComment'] = 'Bạn không có quyền chỉnh sửa bình luận này!';
                }
            }

            // Chuyển hướng lại trang chi tiết sản phẩm
            header('Location: index.php?user=detail-product&id_sp=' . $_GET['id_sp']);
            exit();
        }



        view("users/detail-product", ['product' => $product, 'cateName' => $cateName, 'category' => $category, 'sameProduct' => $sameProduct, 'comments' => $comments]);
    }
}
