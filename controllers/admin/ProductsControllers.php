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

            $err_message = [
                'ten_sp' => '',
                'gia_tien' => '',
                'soluong_ton' => '',
                'anh_sp' => '',
            ];

            // 1. Validate form data
            if (empty($data['ten_sp'])) {
                $err_message['ten_sp'] = 'Tên sản phẩm không được để trống';
            }
            
            if (empty($data['gia_tien'])) {
                $err_message['gia_tien'] = 'Giá sản phẩm không được để trống';
            } elseif (!is_numeric($data['gia_tien']) || $data['gia_tien'] <= 0) {
                $err_message['gia_tien'] = 'Giá sản phẩm phải là một số dương';
            }
            
            if (empty($data['soluong_ton'])) {
                $err_message['soluong_ton'] = 'Số lượng sản phẩm tồn không được để trống';
            } elseif (!is_numeric($data['soluong_ton']) || $data['soluong_ton'] <= 0) {
                $err_message['soluong_ton'] = 'Số lượng sản phẩm tồn phải là một số dương';
            }
            
            // 2. Validate file upload
            if (empty($_FILES['anh_sp']['name'])) {
                $err_message['anh_sp'] = 'Ảnh sản phẩm không được để trống';
            } else {
                $valid_formats = ['jpg', 'jpeg', 'png', 'gif'];
                $file_extension = strtolower(pathinfo($_FILES['anh_sp']['name'], PATHINFO_EXTENSION));

                if (!in_array($file_extension, $valid_formats)) {
                    $err_message['anh_sp'] = 'Chỉ hỗ trợ các định dạng ảnh: jpg, jpeg, png, gif';
                } elseif ($_FILES['anh_sp']['size'] > 2 * 1024 * 1024) {
                    $err_message['anh_sp'] = 'Ảnh sản phẩm không được quá 2MB';
                }
            }

            if (array_filter($err_message)) {
                $danh_muc = (new CategoryModels)->all();
                return view("admin/product/add-product", ['danh_muc' => $danh_muc, 'err_message' => $err_message, 'data' => $data]);
            }

            $data['anh_sp'] = upload_file($_FILES['anh_sp']);

            (new ProductModels)->insert($data);

            $_SESSION['message'] = "Thêm sản phẩm thành công";
            header("location: index.php?admin=list-product");
            exit();
        }

        $danh_muc = (new CategoryModels)->all();
        view("admin/product/add-product", ['danh_muc' => $danh_muc]);
    }



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
