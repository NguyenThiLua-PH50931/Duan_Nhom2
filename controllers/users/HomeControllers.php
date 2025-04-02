<?php
class HomeController
{
    public function index()
    {
        view("users/test");
    }
    public function home()
    {
        // $products = (new ProductModels)->getAllProducts();
        $category = (new CategoryModels)->all();

        $id_dm = $_GET['id_dm'] ?? null;
        $filterCategory = (new CategoryModels())->find_one($id_dm);

        $keyword = $_POST['keyword'] ?? '';
        // debug($keyword);

        if ($id_dm) {
            $products = (new CategoryModels())->productByCategory($id_dm);
            // debug($products);
        } elseif ($keyword) {
            $products = (new ProductModel())->search($keyword);
            // debug($products);
        } else {
            $products = (new ProductModels)->getAllProducts(); // Lấy tất cả sản phẩm
            // debug($products);

        }

        if (isset($_POST['addWishlist'])) {
            if (!isset($_SESSION['id_tk'])) {
                header('Location: index.php?user=login-user');
                exit();
            } else {
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
        }


        view("users/home", ['products' => $products, 'category' => $category, 'filterCategory' => $filterCategory]);
    }

    public function filter()
    {
        $id_dm = $_GET['id_dm'] ?? null;
        if ($id_dm) {
            $products = (new CategoryModels())->productByCategory($id_dm);
        } else {
            $products = (new ProductModels)->getAllProducts(); // Lấy tất cả sản phẩm
        }
        header('Content-Type: application/json');
        echo json_encode($products);
    }
}
