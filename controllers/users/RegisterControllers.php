<?php
class RegisterControllers
{
    public function registerForm()
    {
        // Khởi tạo thông báo lỗi cho từng trường
        $err_message = [
            'ten_tk' => '',
            'mat_khau' => '',
            'ho_ten' => '',
            'email' => '',
            'so_dt' => '',
            'dia_chi' => ''
        ];

        $data = []; // Dữ liệu người dùng nhập vào

        // Xử lý khi form được gửi
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dangky'])) {
            // echo '<pre>';
            // print_r($_POST);
            // echo '</pre>';
            // die();
            $data = $_POST;


            // Kiểm tra dữ liệu
            if (empty($data['ten_tk'])) {
                $err_message['ten_tk'] = 'Tên tài khoản không được để trống.';
            }
            if (empty($data['mat_khau'])) {
                $err_message['mat_khau'] = 'Mật khẩu không được để trống.';
            }
            if (empty($data['ho_ten'])) {
                $err_message['ho_ten'] = 'Họ và tên không được để trống.';
            }
            if (empty($data['email'])) {
                $err_message['email'] = 'Email không được để trống.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $err_message['email'] = 'Email không hợp lệ.';
            }
            if (empty($data['so_dt'])) {
                $err_message['so_dt'] = 'Số điện thoại không được để trống.';
            } elseif (!preg_match('/^[0-9]{10,11}$/', $data['so_dt'])) {
                $err_message['so_dt'] = 'Số điện thoại phải từ 10-11 số và chỉ chứa chữ số.';
            }
            if (empty($data['dia_chi'])) {
                $err_message['dia_chi'] = 'Địa chỉ không được để trống.';
            }

            // Kiểm tra nếu không có lỗi thì tiếp tục xử lý
            if (empty(array_filter($err_message))) { // Nếu không còn lỗi
                // Mã hóa mật khẩu trước khi lưu
                $hashedPassword = password_hash($data['mat_khau'], PASSWORD_BCRYPT);

                // Lưu vào database
                $model = new RegisterModels();
                try {
                    $model->insert_taikhoan(
                        $data['ten_tk'],
                        $hashedPassword,
                        $data['ho_ten'],
                        $data['email'],
                        $data['so_dt'],
                        $data['dia_chi']
                    );
                    // Chuyển hướng sau khi thành công
                    header('location:index.php?user=login-user');
                    exit;
                } catch (Exception $e) {
                    $err_message['general'] = "Lỗi trong quá trình xử lý: " . $e->getMessage();
                }
            }
        }

        // Hiển thị form đăng ký với lỗi (nếu có)
        include "views/users/register.php";
    }
}
