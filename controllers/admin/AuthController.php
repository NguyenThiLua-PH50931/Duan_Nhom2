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
    
        // Kiểm tra khi người dùng gửi dữ liệu form
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;
    
            // Validate dữ liệu đầu vào
            if (empty($data['ten_tk'])) {
                $err_message['ten_tk'] = "Tên tài khoản không được để trống!";
            }
            if (empty($data['mat_khau'])) {
                $err_message['mat_khau'] = "Trường mật khẩu không được để trống!";
            }
    
            // Nếu không có lỗi, tiếp tục xử lý đăng nhập
            if (empty($err_message['ten_tk']) && empty($err_message['mat_khau'])) {
                // Xử lý dữ liệu đầu vào an toàn
                $username = htmlspecialchars(trim($data['ten_tk']));
<<<<<<< HEAD
                $password = trim($data['mat_khau']);
=======
>>>>>>> c5e7456b27fb5bf0a2edbeba1efc9f3fca9db6de
    
                // Lấy thông tin từ cơ sở dữ liệu
                $auth = new Auth();
                $acc = $auth->getLogin();
    
                // Kiểm tra tài khoản và mật khẩu
                $is_valid = false;
                foreach ($acc as $value) {
                    if ($value['ten_tk'] === $username && $value['mat_khau'] === $data['mat_khau']) {
                        $is_valid = true;
    
                        // Lưu thông tin vào session và phân quyền
                        $_SESSION['nameAccount'] = $value['ho_ten'];
                        $_SESSION['vai_tro'] = ($value['vai_tro'] == 1) ? 'admin' : 'user';
    
                        // Kiểm tra quyền và điều hướng
                        if ($_SESSION['vai_tro'] === 'admin') {
                            header('Location: index.php?admin=list-product');
                        } else {
                            $_SESSION['error_message'] = "Bạn không có quyền truy cập admin";
                            header('Location: index.php?user=home');
                            exit(); // Kết thúc kịch bản sau chuyển hướng
                        }
                        exit();
                    }
                }
    
                // Thông báo lỗi nếu tài khoản không hợp lệ
                if (!$is_valid) {
                    $err_message['mat_khau'] = "Sai tên tài khoản và mật khẩu.";
                }
            }
        }
    
        // Hiển thị giao diện đăng nhập và thông báo lỗi nếu có
        include "views/admin/auth/login.php";
    }
    
public function logout()
{
    // Kiểm tra session và logout
    if (isset($_SESSION['nameAccount'])) {
        session_destroy(); // Hủy session hoàn toàn
        header('Location: index.php?admin=login'); // Quay lại trang đăng nhập
        exit();
    } else {
        echo 'Bạn chưa đăng nhập!';
    }
}
}
