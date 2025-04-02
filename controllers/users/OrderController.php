<?php
class OrderController
{
    public function getOrder()
    {
        $id_tk = $_SESSION['id_tk'] ?? '';

        $category = (new CategoryModels)->all();

        // Kiểm tra nếu người dùng đã đăng nhập
        if ($id_tk) {
            $order = (new OrderModel())->getOrder($id_tk);
            $shipping = (new ShippingModel())->getShipping($id_tk);

            view("users/order", ['category' => $category, 'order' => $order ?? '', 'shipping' => $shipping ?? '']);
        }
    }

    public function huyDon()
    {
        if ($_GET['id_donHang']) {
            $id_donHang = $_GET['id_donHang'];
            (new OrderModel)->updateTrangThai($id_donHang);
            $_SESSION['huyDon'] = '<div class="cr-cart-notify"><p class="compare-note">Hủy đơn thành công!</a> Successfully!</p></div>';
            header('Location: index.php?user=getOrder');
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
