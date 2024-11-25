<?php
class CheckoutController
{
    public function getCheckout()
    {
        view("users/shipping");
    }

    public function addCart()
    {
        if (!isset($_SESSION['id_tk'])) {
            header('Location: index.php?user=login-user');
            exit();
        }
        $id_tk = $_SESSION['id_tk'];
        if (isset($_POST['addCart'])) {
            $id_sp = $_POST['id_sp'] ?? '';
            $so_luong = $_POST['so_luong'];
            // $id_giohang = $_POST['id_giohang'];
            (new CartModel)->addCart($id_tk, $id_sp, $so_luong);
            $_SESSION['addCart'] = '<div class="cr-cart-notify"><p class="compare-note">Add product in <a href="cart.html"> Cart</a> Successfully!</p></div>';
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
}
