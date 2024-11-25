<?php
class WishlistController
{
    public function wishlist()
    {
        $id_tk = $_SESSION['id_tk'] ?? '';

        if ($id_tk) {
            $wishlist = (new WishlistModel())->getWishlist();
            // debug($wishlist);
            for ($i = 0; $i < count($wishlist); $i++) {
                $id_sp = $wishlist[$i]['id_sp'];
                $nameCategory = (new CategoryModels())->cateNameByProductId($id_sp);
            }
        }

        // debug($nameCategory);
        $category = (new CategoryModels)->all();

        view("users/wishlist", ['wishlist' => $wishlist ?? '', 'nameCategory' => $nameCategory ?? '', 'category' => $category]);
    }

    public function deleteWishlist()
    {
        $id_yeuthich = $_GET['id_yeuthich'];
        if ($id_yeuthich) {
            (new WishlistModel())->deleteWishlist($id_yeuthich);
            $_SESSION['deleteCart'] = '<div class="cr-cart-notify"><p class="compare-note">Remove product in <a href="index.php?user=wishlist"> Wishlist</a> Successfully!</p></div>';
            header('Location: index.php?user=wishlist');
            exit();
        }
    }
}
