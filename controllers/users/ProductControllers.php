<?php
class ProductControllers
{
    public function shop()
    {
        $category = (new CategoryModels)->all();
        $id_dm = $_GET['id_dm'] ?? '';
        $keyword = $_POST['keyword'] ?? '';

        if ($id_dm) {
            $products = (new CategoryModels())->productByCategory($id_dm);
            // debug($products);
        } elseif ($keyword) {
            $products = (new ProductModel())->search($keyword);
        } else {
            $products = (new ProductModels)->getAllProducts(); // Lấy tất cả sản phẩm
        }
        view("users/shop", ['products' => $products, 'category' => $category]);
    }
}
