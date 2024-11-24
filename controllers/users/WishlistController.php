<?php
class WishlistController
{
    public function wishlist()
    {
        $id_tk = $_SESSION['id_tk'] ?? '';

        if ($id_tk) {
            $wishlist = (new WishlistModel())->getWishlist();
            // debug($wishlist['id_yeuthich']);
            for ($i = 0; $i < count($wishlist); $i++) {
                $id_sp = $wishlist[$i]['id_sp'];
            }
            $nameCategory = (new CategoryModels())->cateNameByProductId($id_sp);
        }

        // debug($nameCategory);
        $category = (new CategoryModels)->all();

        view("users/wishlist", ['wishlist' => $wishlist ?? '', 'nameCategory' => $nameCategory ?? '', 'category' => $category]);
    }

    public function addWishlist()
    {
        if (!isset($_SESSION['id_tk'])) {
            header('Location: index.php?user=login-user');
            exit();
        }

        if (isset($_POST['addWishlist'])) {
            $id_tk = $_SESSION['id_tk'];
            $id_sp = $_POST['id_sp'];
            $result = (new WishlistModel)->addWishlist($id_tk, $id_sp);
            if (!empty($result)) {
                $_SESSION['thongBao'] = $result;
                exit();
            }
            $_SESSION['addCart'] = '<div class="cr-cart-notify"><p class="compare-note">Add product in <a href="cart.html"> Wishlist</a> Successfully!</p></div>';
            header('Location: index.php?user=wishlist');
            exit();
        }
    }
    public function deleteWishlist()
    {
        $id_giohang_chitiet = $_GET['id_giohang_chitiet'];
        if ($id_giohang_chitiet) {
            (new CartModel)->deleteCart($id_giohang_chitiet);
            $_SESSION['deleteCart'] = '<div class="cr-cart-notify"><p class="compare-note">Remove product in <a href="cart.html"> Cart</a> Successfully!</p></div>';
            header('Location: index.php?user=wishlist');
            exit();
        }
    }
}
