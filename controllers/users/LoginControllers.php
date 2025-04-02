<?php
class LoginController
{
    public function loginUser()
    {
        $category = (new CategoryModels)->all();
        // Khởi tạo thông báo lỗi cho từng trường
        $err_message = [
            'ten_tk' => '',
            'mat_khau' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $data = $_POST;

            // Kiểm tra đầu vào
            if (empty($data['ten_tk'])) {
                $err_message['ten_tk'] = "Tên tài khoản không được để trống";
            } elseif (empty($data['mat_khau'])) {
                $err_message['mat_khau'] = "Mật khẩu không được để trống";
            } else {
                // Lấy dữ liệu tài khoản từ model
                $accounts = (new LoginModels)->getLoginUser();
                $isLoginSuccessful = false;

                foreach ($accounts as $account) {
                    // Kiểm tra thông tin đăng nhập
                    if ($account['ten_tk'] === $data['ten_tk'] && password_verify($data['mat_khau'], $account['mat_khau'])) {
                        // Lưu thông tin vào session`
                        $_SESSION['nameAccount'] = $account['ho_ten'];
                        $_SESSION['id_tk'] = $account['id_tk'];
                        $_SESSION['vai_tro'] = $account['vai_tro']; // Thêm vai trò vào session
                        $isLoginSuccessful = true;
                        $_SESSION['message'] = "Đăng nhập thành công";
                        header("Location: index.php?user=home");
                        exit; // Thoát để tránh thực hiện thêm đoạn mã phía sau
                    }
                }

                if (!$isLoginSuccessful) {
                    $err_message['mat_khau'] = "Tên tài khoản hoặc mật khẩu không chính xác";
                }
            }
        }

        // Trả về view kèm thông báo lỗi
        return view('users/login', ['category' => $category, 'err_message' => $err_message]);
    }



    public function logoutUser()
    {
        if (isset($_SESSION['nameAccount'])) {
            unset($_SESSION['nameAccount']);
            unset($_SESSION['id_tk']);
            unset($_SESSION['vai_tro']);
            header('location:index.php?user=home');
            exit();
        } else {
            echo 'Bạn chưa đăng nhập';
        }
        return view('users/login');
    }
}
?>
