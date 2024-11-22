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
        // $id_dm = $_GET['id_dm'] ?? '';
        $sameProduct = (new CategoryModels())->sameProduct($id_sp, $product['id_dm']);
        // var_dump($id_sp, $id_dm);
        // var_dump($sameProduct);
        // debug($cateName);

        // Lấy ra ảnh liên quan (cùng danh mục):
        $relatedImages = (new CategoryModels())->getRelatedImages($product['id_dm'], $id_sp);
        view("users/detail-product", ['product' => $product, 'cateName' => $cateName, 'category' => $category, 'sameProduct' => $sameProduct,'relatedImages'=>$relatedImages]);
    }
}
