<?php
class OrdersController
{
    public function listOrder()
    {

        //Lấy danh sách sản phẩm từ model
        $categories = (new CategoryModels)->all();

        // Lấy ra tất cả các đơn mua trong Admin
        $listOrder = (new OrdersModel)->getAllOrders();
        //  echo '<pre>';
        // print_r($listOrder);
        // die;
        // echo '</pre>';
        view("admin/order/listOrder", ['categories' => $categories, 'listOrder' => $listOrder]);
    }

    public function changeStatus()
    {
        // Kiểm tra nếu người dùng gửi POST form
        $id = $_POST['id'] ?? null; // Nhận id_donhang từ form
        $newTrangThai = $_POST['id_trangThai'] ?? null; // Nhận trạng thái mới từ form
        //  echo '<pre>';
        //     print_r($id_donHang);
        //     print_r($newTrangThai);
        //     die;
        //     echo '</pre>';
        // Kiểm tra nếu dữ liệu hợp lệ
        if ($id && $newTrangThai) {
            // Gọi Model để cập nhật trạng thái
            (new OrdersModel)->updateStatus($id, $newTrangThai); 
            // Chuyển hướng về danh sách đơn hàng
            header("Location: index.php?admin=listOrder");
            exit();
        } else {
            // Nếu có lỗi, thông báo lỗi
            $_SESSION['error_message'] = "Dữ liệu không hợp lệ.";
        }
    }


    // Lấy ra các đơn hàng đã được xác nhận:
    public function donXacNhan(){
        $list = (new OrdersModel)->donXacNhan();
        view('admin/order/donXacnhan', ['list' => $list]);
    }

    public function changeStatus1()
    {
        // Kiểm tra nếu người dùng gửi POST form
        $id = $_POST['id'] ?? null; // Nhận id_donhang từ form
        $newTrangThai = $_POST['id_trangThai'] ?? null; // Nhận trạng thái mới từ form
      
        if ($id && $newTrangThai) {
            // Gọi Model để cập nhật trạng thái
            (new OrdersModel)->updateStatus($id, $newTrangThai); 

            // Chuyển hướng về danh sách đơn hàng
            header("Location: index.php?admin=donXacNhan");
            exit();
        } else {
            // Nếu có lỗi, thông báo lỗi
            $_SESSION['error_message'] = "Dữ liệu không hợp lệ.";
        }
    }


    // / Lấy ra các đơn hàng đã được xác nhận:
    public function donDangGiao(){
        $list = (new OrdersModel)->donDangGiao();
        // echo '<pre>';
        //     print_r($list);
        //     die;
        //     echo '</pre>';

        view('admin/order/donDangGiao', ['list' => $list]);
    }

    public function changeStatus2()
    {
        // Kiểm tra nếu người dùng gửi POST form
        $id = $_POST['id'] ?? null; // Nhận id_donhang từ form
        $newTrangThai = $_POST['id_trangThai'] ?? null; // Nhận trạng thái mới từ form
        //  echo '<pre>';
        //     print_r($id_donHang);
        //     print_r($newTrangThai);
        //     die;
        //     echo '</pre>';
        // Kiểm tra nếu dữ liệu hợp lệ
        if ($id && $newTrangThai) {
            // Gọi Model để cập nhật trạng thái
            (new OrdersModel)->updateStatus($id, $newTrangThai); // Không cần $result vì updateStatus không trả về giá trị gì

            // Tạo thông báo thành công
            $_SESSION['success_message'] = "Trạng thái đơn hàng đã được cập nhật thành công.";

            // Chuyển hướng về danh sách đơn hàng
            header("Location: index.php?admin=donDangGiao");
            exit();
        } else {
            // Nếu có lỗi, thông báo lỗi
            $_SESSION['error_message'] = "Dữ liệu không hợp lệ.";
        }
    }

    // / Lấy ra các đơn hàng đã được xác nhận:
    public function donHoanThanh(){
        $list = (new OrdersModel)->donHoanThanh();
        // echo '<pre>';
        //     print_r($list);
        //     die;
        //     echo '</pre>';

        view('admin/order/donHoanThanh', ['list' => $list]);
    }


    // / Lấy ra các đơn hàng đã được xác nhận:
    public function donHuy(){
        $list = (new OrdersModel)->donHuy();
        // echo '<pre>';
        //     print_r($list);
        //     die;
        //     echo '</pre>';

        view('admin/order/donHuy', ['list' => $list]);
    }
    public function changeStatus4()
    {
        // Kiểm tra nếu người dùng gửi POST form
        $id = $_POST['id'] ?? null; // Nhận id_donhang từ form
        $newTrangThai = $_POST['id_trangThai'] ?? null; // Nhận trạng thái mới từ form
        //  echo '<pre>';
        //     print_r($id_donHang);
        //     print_r($newTrangThai);
        //     die;
        //     echo '</pre>';
        // Kiểm tra nếu dữ liệu hợp lệ
        if ($id && $newTrangThai) {
            // Gọi Model để cập nhật trạng thái
            (new OrdersModel)->updateStatus($id, $newTrangThai); // Không cần $result vì updateStatus không trả về giá trị gì

            // Tạo thông báo thành công
            $_SESSION['success_message'] = "Trạng thái đơn hàng đã được cập nhật thành công.";

            // Chuyển hướng về danh sách đơn hàng
            header("Location: index.php?admin=donHuy");
            exit();
        } else {
            // Nếu có lỗi, thông báo lỗi
            $_SESSION['error_message'] = "Dữ liệu không hợp lệ.";
        }
    }
}
