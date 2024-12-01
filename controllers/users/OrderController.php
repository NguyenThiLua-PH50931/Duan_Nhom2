<?php
class OrderController
{
    public function getOrder()
    {
        $id_tk = $_SESSION['id_tk'];

        $category = (new CategoryModels)->all();

        // Kiểm tra nếu người dùng đã đăng nhập
        if ($id_tk) {
            $order = (new OrderModel())->getOrder($id_tk);

            // foreach ($order as $value) {
            //     if ($value['id_trangThai'] == 1) {
            //         $orderDetail = (new OrderModel())->getOrder($id_tk);
            //     } elseif ($value['id_trangThai'] == 2) {
            //         $orderDetail = (new OrderModel())->getOrder($id_tk);
            //     } elseif ($value['id_trangThai'] == 3) {
            //         $orderDetail = (new OrderModel())->getOrder($id_tk);
            //     } elseif ($value['id_trangThai'] == 4) {
            //         $orderDetail = (new OrderModel())->getOrder($id_tk);
            //     }
            //     // debug($orderDetail);
            // }
        }

        view("users/order", ['category' => $category, 'order' => $order]);
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
