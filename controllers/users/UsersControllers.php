<?php
class UsersControllers
{
    public function list()
    {
        //Lấy mã danh mục từ URL
        $id_dm = $_GET['id_dm'] ?? '';
        //nếu id_dm không tồn tại
        if ($id_dm == '') {
            header("location: index.php");
            return 0;
        }

        //Lấy danh sách sản phẩm theo danh mục
        $product = (new ProductModels)->productInCategory($id_dm);

        //Lấy tên danh mục
        $ten_dm = (new CategoryModels)->find_one($id_dm)['ten_dm'];

        //Danh sách danh mục
        $categories = (new CategoryModels)->all();

        return view(
            "admin/product-list",
            [
                'product' => $product,
                'ten_dm' => $ten_dm,
                'categories' => $categories
            ]
        );
    }

    public function show()
    {
        $id_sp = $_GET['id_sp'] ?? '';
        if ($id_sp == '') {
            header("location: index.php");
            return 0;
        }

        //Lấy ra sản phẩm
        $product = (new ProductModels)->getProductById($id_sp);
        //Danh sách danh mục
        $categories = (new CategoryModels)->all();
        //Cập nhật lượt xem
        (new ProductModels)->updateLuotxem($id_sp);

        return view(
            "view/admin/product-list",
            [
                'product' => $product,
                'categories' => $categories
            ]
        );
    }
}
