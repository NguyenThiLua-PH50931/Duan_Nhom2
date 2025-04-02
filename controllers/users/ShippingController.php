<?php
class ShippingController
{
    public function getShipping()
    {
        $id_tk = $_SESSION['id_tk'];

        $category = (new CategoryModels)->all();

        $shipping = (new ShippingModel())->getShipping($id_tk);
        // debug($shipping);

        view("users/shipping", ['shipping' => $shipping, 'category'=>$category]);
    }
    public function shipping()
    {
        if (!isset($_SESSION['id_tk'])) {
            header('Location: index.php?user=login-user');
            exit();
        }
        if (isset($_POST['addShipping'])) {
            (new ShippingModel)->addShipping(
                $_SESSION['id_tk'],
                $_POST['diaChi'],
                $_POST['city'],
                $_POST['district'],
                $_POST['ward'],
                $_POST['soDienThoai'],
                $_POST['hoTen'],
                $_POST['note']
            );
            header('Location: index.php?user=getShipping');
            exit();
        }
        if (isset($_POST['updateShipping'])) {
            // debug($_POST);
            $data = (new ShippingModel)->updateShipping(
                $_POST['id_vanChuyen'],
                $_SESSION['id_tk'],
                $_POST['diaChi'],
                $_POST['city'],
                $_POST['district'],
                $_POST['ward'],
                $_POST['soDienThoai'],
                $_POST['hoTen'],
                $_POST['note']
            );
            header('Location: index.php?user=getShipping');
            exit();
        }
    }
}
