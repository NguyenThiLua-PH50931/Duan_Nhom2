<?php
class HomeController
{
    public function home()
    {
        $home = new HomeModels();
        $products = (new ProductModels)->getAllProducts();
        $category = (new CategoryModels)->all();
        $id_dm = $_GET['id_dm'] ?? '';
        $filterCategory = (new CategoryModels())->find_one($id_dm);
        $productByCategory = (new CategoryModels())->productByCategory($id_dm);
        // var_dump($productByCategory);
        // exit;

        // Tìm kiếm sản phẩm:
        $keyword = isset($_GET['search']) ? $_GET['search'] : '';
        $searchProduct = (new ProductModels())->searchProduct($keyword);
        view("users/home", ['products' => $products, 'category' => $category, 'filterCategory' => $filterCategory, 'productByCategory' => $productByCategory,'searchProduct'=>$searchProduct]);
    }
}
