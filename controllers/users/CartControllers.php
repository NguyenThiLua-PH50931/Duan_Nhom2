<?php
class CartControllers
{
    public function viewCart()
    {
        $id_tk = $_SESSION['id_tk'] ?? '';
        $total = 0;
        $subtotals = [];

        // Kiểm tra nếu người dùng đã đăng nhập
        if ($id_tk) {
            $cart = (new CartModel)->getCart($id_tk);  // Lấy giỏ hàng
            // debug($cart);
            // Tính tổng giỏ hàng
            foreach ($cart as $item) {
                $total += $item['so_luong'] * $item['gia_tien'];
                $subtotals[] = $total;
            }
            $totalAll = array_sum($subtotals);
            $_SESSION['tongTien'] = $totalAll;
        }

        // Lấy danh sách danh mục sản phẩm
        $category = (new CategoryModels)->all();

        // Render view giỏ hàng
        view("users/cart", ['cart' => $cart ?? [], 'total' => $total , 'category' => $category, 'totalAll' => $totalAll ?? '']);
    }


    public function updateCart()
    {
        // Nếu có yêu cầu cập nhật giỏ hàng từ POST
        if (isset($_POST['update_cart'])) {
            // Duyệt qua từng sản phẩm và cập nhật số lượng
            // debug($_POST);
            foreach ($_POST['id_giohang_chitiet'] as $key => $value) {
                $newSL = $_POST['so_luong'][$key];
                if ($newSL > 0) {
                    // Cập nhật số lượng trong giỏ hàng
                    $cartModel = new CartModel();
                    $cartModel->updateCart($value, $newSL);
                }
            }

            // Sau khi cập nhật, chuyển hướng lại giỏ hàng
            header('Location: index.php?user=cart');
            exit();
        }
    }


    public function deleteCart()
    {
        $id_giohang_chitiet = $_GET['id_giohang_chitiet'];
        if ($id_giohang_chitiet) {
            (new CartModel)->deleteCart($id_giohang_chitiet);
            $_SESSION['deleteCart'] = '<div class="cr-cart-notify"><p class="compare-note">Remove product in <a href="cart.html"> Cart</a> Successfully!</p></div>';
            header('Location: index.php?user=cart');
            exit();
        }
    }

    // public function addCart()
    // {
    //     if (!isset($_SESSION['id_tk'])) {
    //         header('Location: index.php?user=login-user');
    //         exit();
    //     }
    //     $id_tk = $_SESSION['id_tk'];
    //     if (isset($_POST['addCart'])) {
    //         $id_sp = $_POST['id_sp'] ?? '';
    //         $so_luong = $_POST['so_luong'];
    //         $id_giohang = $_POST['id_giohang'];
    //         (new CartModel)->addCart($id_tk, $id_sp, $so_luong);
    //         $_SESSION['addCart'] = '<div class="cr-cart-notify"><p class="compare-note">Add product in <a href="cart.html"> Cart</a> Successfully!</p></div>';
    //         header('Location: index.php?user=cart');
    //         exit();
    //     }
    // }


}
