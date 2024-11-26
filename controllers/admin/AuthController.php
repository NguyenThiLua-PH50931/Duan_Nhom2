<?php
class AuthController
{
    public function login()
    {
        // Biến lưu thông báo lỗi cho từng trường
        $err_message = [
            'ten_tk' => '',
            'mat_khau' => ''
        ];
    
        // Kiểm tra nếu đã đăng nhập
        if (isset($_SESSION['nameAccount'])) {
            header('location: index.php?admin=list-product');
            exit();
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;
    
            // 1. Validate dữ liệu đầu vào
            if (empty($data['ten_tk'])) {
                $err_message['ten_tk'] = "Tên tài khoản không được để trống!";
            }
    
            if (empty($data['mat_khau'])) {
                $err_message['mat_khau'] = "Trường mật khẩu không được để trống!";
            }
    
            // Nếu không có lỗi, tiếp tục xử lý đăng nhập
            if (empty($err_message['ten_tk']) && empty($err_message['mat_khau'])) {
                // 2. Loại bỏ ký tự đặc biệt (ngăn XSS)
                $username = htmlspecialchars(trim($data['ten_tk']));
                $password = trim($data['mat_khau']); // Không cần htmlspecialchars() ở đây
    
                // 3. Lấy thông tin từ cơ sở dữ liệu
                $auth = new Auth();
                $acc = $auth->getLogin();
    
                // 4. Xác minh tài khoản và mật khẩu
                $is_valid = false; // Biến kiểm tra xác thực
                foreach ($acc as $value) {
                    if ($value['ten_tk'] === $username && password_verify($password, $value['mat_khau'])) {
                        $is_valid = true;
                        // Lưu thông tin vào session và chuyển hướng
                        $_SESSION['nameAccount'] = $value['ho_ten'];
                        header("location: index.php?admin=list-product");
                        exit();
                    }
                }
    
                // 5. Thông báo lỗi nếu thông tin không hợp lệ
                if (!$is_valid) {
                    $err_message['mat_khau'] = "Sai tên tài khoản hoặc mật khẩu.";
                }
            }
        }
    
        // 6. Hiển thị giao diện đăng nhập và thông báo lỗi (nếu có)
        include "views/admin/auth/login.php";
    }
    



    public function logout()
    {
        if (isset($_SESSION['nameAccount'])) {
            unset($_SESSION['nameAccount']); // Xóa session
            session_destroy(); // Hủy toàn bộ session
            header('location: index.php?admin=login'); // Quay lại trang đăng nhập
            exit();
        } else {
            echo 'Bạn chưa đăng nhập!';
        }
    }
}
