<?php
class LoginController
{
    public function loginUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = $_POST;
            // debug($data);
            $acc = (new LoginModels)->getLoginUser();

            foreach ($acc as $value) {
                // debug($data['ten_tk']);
                if ($value['ten_tk'] == $data['ten_tk'] && $value['mat_khau'] == $data['mat_khau']) {
                    $_SESSION['nameAccount'] = $value['ho_ten'];
                    header("location:index.php?user=home");
                  
                } else {
                    echo "Sai thông tin";
                }
            }
            $_SESSION['message'] = "Đăng nhập thành công";
        }
        return view('users/login');
    }
    public function logoutUser()
    {
        if (isset($_SESSION['nameAccount'])) {
            unset($_SESSION['nameAccount']);
            header('location:index.php?user=home');
            exit();
        } else {
            echo 'Bạn chưa đăng nhập';
        }
        return view('users/login');
    }
    
}