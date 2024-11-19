<?php
class RegisterControllers
{

    public function registerForm()
    {
        if (isset($_POST['dangky'])) {
            $ten_tk = $_POST['ten_tk'];
            $mk = $_POST['mat_khau'];
            $ho_ten = $_POST['ho_ten'];
            $email = $_POST['email'];
            $so_dt = $_POST['so_dt'];
            $dia_chi = $_POST['dia_chi'];

            // Gọi hàm insert từ model
            $model = new RegisterModels();
            $model->insert_taikhoan($ten_tk, $mk, $ho_ten, $email, $so_dt, $dia_chi);
            // debug($model);
            header('location: index.php?user=login-user');

            $thongbao2 = "Đăng kí thành viên thành công. Vui lòng quay lại đăng nhập để thực hiện các chức năng!";
        }

        include "views/users/register.php";
    }
}
