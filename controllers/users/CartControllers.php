<?php
class CartControllers
{
    public function viewCart()
    {
        $id_tk = $_SESSION['id_tk'] ?? '';
        if ($id_tk) {
            $cart = (new CartModel)->getCart($id_tk);
            $total = 0;
            for ($i = 0; $i < count($cart); $i++) {
                $total += $cart[$i]['so_luong'] * $cart[$i]['gia_tien'];
            }
        }
        // debug($cart);
        $category = (new CategoryModels)->all();

        view("users/cart", ['cart' => $cart ?? '', 'total' => $total  ?? '', 'category' => $category]);
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
        }
    }
}
