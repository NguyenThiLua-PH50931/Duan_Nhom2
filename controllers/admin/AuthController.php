<?php
class AuthController
{
    public function login()
    {
        if (isset($_SESSION['nameAccount'])) {
            header('location: index.php?admin=list-product');
            exit();
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = $_POST;
            $acc = (new Auth())->getLogin();
    
            foreach ($acc as $value) {
                if ($value['ten_tk'] === $data['ten_tk'] && $value['mat_khau'] === $data['mat_khau']) {
                    $_SESSION['nameAccount'] = $value['ho_ten'];
                    header("location: index.php?admin=list-product");
                    exit();
                }
            }
            echo "Sai thông tin đăng nhập";
        }
    
        include "views/admin/auth/login.php"; // Đảm bảo file tồn tại
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

