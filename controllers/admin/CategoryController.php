<?php
class CategoryController
{
    public function listCategory()
    {
        //Lấy danh sách sản phẩm từ model
        $categories = (new CategoryModels)->all();
        view("admin/category/list-category", ['categories' => $categories]);
    }

    // Thêm mới sản phẩm:
    public function addCategory()
    {
        $err_message = [
            'ten_dm' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = $_POST;

            // Kiểm tra trống
            if (empty($data['ten_dm'])) {
                $err_message['ten_dm'] = 'Tên danh mục không được để trống';
            } else {
                // Kiểm tra trùng lặp
                $existingCategory = (new CategoryModels)->findByName($data['ten_dm']);
                if ($existingCategory) {
                    $err_message['ten_dm'] = 'Tên danh mục đã tồn tại. Vui lòng điền tên danh mục khác';
                }
            }

            // Nếu không có lỗi, thêm danh mục
            if (empty(array_filter($err_message))) {
                (new CategoryModels)->insert($data);
                $_SESSION['message'] = "Thêm danh mục thành công";
                header("location: index.php?admin=list-category");
                exit();
            }
        }

        // Hiển thị form với thông báo lỗi (nếu có)
        return view("admin/category/add-category", ['err_message' => $err_message]);
    }


    // Xóa sản phẩm:

    // cập nhật sản phẩm:
    public function editCategory()
    {
        $id_dm = $_GET['id_dm'];

        $category = (new CategoryModels)->find_one($id_dm);
        // debug($category);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = $_POST;
            // debug($data);
            (new CategoryModels)->update($data);
            $_SESSION['message'] = "Sửa danh mục thành công";
            header('location: index.php?admin=list-category');
            exit();
        }

        //lấy danh mục
        view(
            "admin/category/edit-category",
            [
                'category' => $category
            ]
        );
    }
    public function deleteCategory()
    {
        $id_dm = $_GET['id_dm'];

        $category = (new CategoryModels)->find_one($id_dm);
        $deleteImg = (new CategoryModels)->productByCategory($id_dm);

        // debug($deleteImg);

        $imagePath = 'd:\\PHP\\laragon\\www\\Du_An1\\' . $deleteImg['anh_sp'];
        // debug($imagePath);
        if (file_exists($imagePath)) {
            unlink($imagePath);
            echo 'Ảnh đã được xóa thành công !';
        } else {
            echo 'File ảnh không tồn tại: ' . $imagePath;
        }
        // die();
        (new ProductModels())->deleteProductsByCategoryId($category['id_dm']);
        (new CategoryModels)->delete($category['id_dm']);
        $_SESSION['message'] = "Xóa danh mục thành công";
        header('location: index.php?admin=list-category');
        exit();
    }
}
