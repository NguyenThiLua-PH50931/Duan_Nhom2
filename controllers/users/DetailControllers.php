<?php
class DetailControllers
{
    public function show()
    {
        $id_sp = $_GET['id_sp'] ?? '';
        $product = (new ProductModels)->getProductById($id_sp);
        $cateName = (new CategoryModels)->cateNameByProductId($id_sp);
        view("users/detail-product", ['product' => $product, 'cateName'=>$cateName]);
    }
}
