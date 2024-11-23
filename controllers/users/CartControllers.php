<?php
class CartControllers
{
    public function viewCart()
    {
        $cart = (new CartModel)->getCart();
        $total = 0;
        for ($i = 0; $i < count($cart); $i++) {
            $total += $cart[$i]['so_luong'] * $cart[$i]['gia_tien'];
        }
        view("users/cart", ['cart' => $cart, 'total' => $total]);
    }
    public function addCart()
    {
        if (isset($_POST['addCart'])) {
            $id_sp = $_POST['id_sp'] ?? '';
            $so_luong = $_POST['so_luong'];
            // $id_giohang = $_POST['id_giohang'];
            (new CartModel)->addCart($id_sp, $so_luong);
            header('Location: index.php?user=cart');
        }
    }
}
