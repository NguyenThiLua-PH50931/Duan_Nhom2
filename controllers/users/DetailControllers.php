<?php
class DetailControllers
{
    public function show()
    {
        $id_sp = $_GET['id_sp'] ?? '';
        $product = (new ProductModels)->getProductById($id_sp);
        $cateName = (new CategoryModels)->cateNameByProductId($id_sp);
        $category = (new CategoryModels)->all();

        // lấy ra các sản phẩm cùng loại trong trang chi tiết:
        $sameProduct = (new CategoryModels())->sameProduct($id_sp, $product['id_dm']);

        if (isset($_POST['addWishlist'])) {
            $id_tk = $_SESSION['id_tk'];
            $id_sp = $_POST['id_sp'];
            $result = (new WishlistModel)->addWishlist($id_tk, $id_sp);
            if (!empty($result)) {
                $_SESSION['thongBao'] = '<div class="cr-cart-notify"><p class="compare-note">Đã có sản phẩm trong<a href="index.php?user=wishlist"> Wishlist</a> Successfully!</p></div>';
                header('Location: index.php?user=detail-product&id_sp=' . $id_sp);
                exit();
            } else {
                $_SESSION['successWishlist'] = '<div class="cr-cart-notify"><p class="compare-note">Add product in <a href="index.php?user=wishlist"> Wishlist</a> Successfully!</p></div>';
                header('Location: index.php?user=detail-product&id_sp=' . $id_sp);
                exit();
            }
        }

        view("users/detail-product", ['product' => $product, 'cateName' => $cateName, 'category' => $category, 'sameProduct' => $sameProduct]);
    }
}
