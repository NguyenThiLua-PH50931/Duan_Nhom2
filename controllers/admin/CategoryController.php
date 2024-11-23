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
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = $_POST;
            (new CategoryModels)->insert($data);
            $_SESSION['message'] = "Thêm danh mục thành công";
            header("location: index.php?admin=list-category");
            exit();
        }
        //render view
        return view("admin/category/add-category");
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
<<<<<<< HEAD

=======
>>>>>>> e495d8f4324ea651921d199d940f0e7c63c457fa
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
