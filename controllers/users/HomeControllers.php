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
//         var_dump($productByCategory);
// exit;
        view("users/home", ['products' => $products, 'category' => $category, 'filterCategory' => $filterCategory, 'productByCategory' => $productByCategory]);
    }

 

}
