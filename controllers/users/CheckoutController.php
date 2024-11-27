<?php
class CheckoutController
{
    public function getCheckout()
    {
        $id_tk = $_SESSION['id_tk'];

        $total = 0;
        $subtotals = [];

        // Kiểm tra nếu người dùng đã đăng nhập
        if ($id_tk) {
            $cart = (new CartModel)->getCart($id_tk);  // Lấy giỏ hàng
            // Tính tổng giỏ hàng
            foreach ($cart as $item) {
                $total += $item['so_luong'] * $item['gia_tien'];
                $subtotals[] = $total;
            }

            $totalAll = array_sum($subtotals);
        }
        $shipping = (new ShippingModel())->getShipping($id_tk);

        view("users/checkout", ['shipping' => $shipping ?? '', 'cart' => $cart ?? [], 'total' => $total, 'totalAll' => $totalAll]);
    }

    public function checkout()
    {
        if (isset($_POST['thanhToan'])) {
            $id_tk = $_SESSION['id_tk'];

            $get_shipping = (new ShippingModel())->getShipping($id_tk);
            $id_shipping = $get_shipping['id_vanChuyen'];

            $get_cart = (new CartModel())->getCartById($id_tk);
            $id_cart = $get_cart['id_giohang'];

            $thanhToan = (new CheckoutModel)->payment(
                $id_shipping,
                'Chờ thanh toán',
                $_POST['pttt'],
                $id_tk,
            );

            (new CartModel)->deleteCartByID($id_cart);
            (new CartModel)->deleteCartByIDTK($id_tk);

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
