<?php
class HomeController
{
<<<<<<< HEAD
    public function index()
    {
        // $home = new HomeModels();
        // $products = (new ProductModels)->getAllProducts();
        // $category = (new CategoryModels)->all();
        // $id_dm = $_GET['id_dm'] ?? '';
        // $filterCategory = (new CategoryModels())->find_one($id_dm);
        // $productByCategory = (new CategoryModels())->productByCategory($id_dm);
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
=======
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
>>>>>>> e495d8f4324ea651921d199d940f0e7c63c457fa
    }
}
