<?php
class donMuaController
{
    public function getDonMua()
    {
        $id_tk = $_SESSION['id_tk'];
        $category = (new CategoryModels)->all();
        $id_dm = $_GET['id_dm'] ?? null;
        $filterCategory = (new CategoryModels())->find_one($id_dm);
        view("users/donMua", ['category' => $category, 'filterCategory' => $filterCategory]);
    }
    public function checkout()
    {
        if (isset($_POST['thanhToan'])) {
            $id_tk = $_SESSION['id_tk'];
            $get_shipping = (new ShippingModel())->getShipping($id_tk);
            $id_shipping = $get_shipping['id_vanChuyen'];
            $get_cart = (new CartModel())->getCartById($id_tk);
            $id_cart = $get_cart['id_giohang'];
            $code_payment = rand(0,9999);
            $thanhToan = (new CheckoutModel)->payment(
                $id_shipping,
                $code_payment,
                'Chờ thanh toán',
                $_POST['pttt'],
                $id_tk,
            );
            (new CartModel)->deleteCartByID($id_cart);
            (new CartModel)->deleteCartByIDTK($id_tk);
            unset($_SESSION['tongTien']);
            header('location: index.php?user=home');
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