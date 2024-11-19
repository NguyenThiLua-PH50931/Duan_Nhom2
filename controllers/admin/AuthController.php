<?php
class AuthController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = $_POST;
            // debug($data);
            $acc = (new Auth())->getLogin();

            foreach ($acc as $value) {
                // debug($data['ten_tk']);
                if ($value['ten_tk'] == $data['ten_tk'] && $value['mat_khau'] == $data['mat_khau']) {
                    $_SESSION['nameAccount'] = $value['ho_ten'];
                    header("location: index.php?admin=list-product");
                    exit();
                } else {
                    echo "Sai thông tin";
                }
            }
            $_SESSION['message'] = "Đăng nhập thành công";
        }
        return view('admin/auth/login');
    }
    public function logout()
    {
        if (isset($_SESSION['nameAccount'])) {
            unset($_SESSION['nameAccount']);
            $_SESSION['nameAccount'] == null;
            header('location: index.php?admin=login');
            exit();
        } else {
            echo 'Bạn chưa đăng nhập';
        }
        return view('admin/auth/login');
    }
}
