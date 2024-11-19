<?php

class ProductsController
{
    public function listProduct()
    {
        //Lấy danh sách sản phẩm từ model
        $product = (new ProductModels)->getAllProducts();
        view("admin/product/product-list", ['product' => $product]);
    }

    // Thêm mới sản phẩm:
    public function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = $_POST;
            $data['anh_sp'] = upload_file($_FILES['anh_sp']);
            // print_r($data); // hoặc print_r($data);

            (new ProductModels)->insert($data);
            $_SESSION['message'] = "Thêm sản phẩm thành công";
            header("location: index.php?admin=list-product");
            exit();
        }
        //lấy danh mục
        $danh_muc = (new CategoryModels)->all();
        //render view
        view("admin/product/add-product", ['danh_muc' => $danh_muc]);
    }

    // Xóa sản phẩm:

    // cập nhật sản phẩm:
    public function editProduct()
    {
        $id_sp = $_GET['id_sp'];

        $product = (new ProductModels)->getProductById($id_sp);
        $danh_muc = (new CategoryModels)->all();

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = $_POST;
            // debug($product['anh_sp']);
            if ($_FILES['anh_sp'] != null) {
                if (file_exists($product['anh_sp'])) {
                    unlink($product['anh_sp']);
                }
            }
            if ($_FILES['anh_sp']['size'] > 0) {
                $data['anh_sp'] = upload_file($_FILES['anh_sp']);
            }
            // debug($data);
            (new ProductModels)->update($data);
            $_SESSION['message'] = "Sửa sản phẩm thành công";
            header('location: index.php?admin=list-product');
            exit();
        }
        //lấy danh mục
        view(
            "admin/product/edit-product",
            [
                'danh_muc' => $danh_muc,
                'product' => $product
            ]
        );
    }
    public function deleteProduct()
    {
        $id_sp = $_GET['id_sp'];

        $product = (new ProductModels)->getProductById($id_sp);
        // debug($product['id_sp']);
        if (file_exists($product['anh_sp'])) {
            unlink($product['anh_sp']);
        }
        (new ProductModels)->delete($product['id_sp']);
        $_SESSION['message'] = "Xóa sản phẩm thành công";
        header('location: index.php?admin=list-product');
        exit();
    }
}
