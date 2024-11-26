<?php

class AccountsController
{
    public function listAccounts()
    {
        //Lấy danh sách tài khoản từ model
        $accounts = (new AccountsModels)->getAllAccount();
        view("admin/accounts/accounts-list", ['accounts' => $accounts]);
    }

    //Xóa tài khoản
    public function deleteAccounts()
    {
        $id_tk = $_GET['id_tk'];
        $accounts = (new AccountsModels)->getAccountsById($id_tk);
        (new AccountsModels)->delete($id_tk);
        header('location:index.php?admin=list-accounts');
        exit();
    }

    // Thêm tài khoản:
    public function addAccounts()
{
    $err_message = [
        'ten_tk' => '',
        'ho_ten' => '',
        'so_dt' => '',
        'mat_khau' => '',
        'dia_chi' => '',
        'email' => ''
    ];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $data = $_POST;

        // Kiểm tra tên tài khoản
        if (empty($data['ten_tk'])) {
            $err_message['ten_tk'] = 'Tên tài khoản không được để trống.';
        } elseif ((new AccountsModels)->findByUsername($data['ten_tk'])) {
            $err_message['ten_tk'] = 'Tên tài khoản đã tồn tại.';
        }

        // Kiểm tra họ và tên
        if (empty($data['ho_ten'])) {
            $err_message['ho_ten'] = 'Họ và tên không được để trống.';
        }

        // Kiểm tra số điện thoại
        if (empty($data['so_dt'])) {
            $err_message['so_dt'] = 'Số điện thoại không được để trống.';
        } elseif (!preg_match('/^[0-9]{10,11}$/', $data['so_dt'])) {
            $err_message['so_dt'] = 'Số điện thoại phải có 10-11 chữ số.';
        }

        // Kiểm tra mật khẩu
        if (empty($data['mat_khau'])) {
            $err_message['mat_khau'] = 'Mật khẩu không được để trống.';
        } elseif (strlen($data['mat_khau']) < 6) {
            $err_message['mat_khau'] = 'Mật khẩu phải có ít nhất 6 ký tự.';
        }

        // Kiểm tra địa chỉ
        if (empty($data['dia_chi'])) {
            $err_message['dia_chi'] = 'Địa chỉ không được để trống.';
        }

        // Kiểm tra email
        if (empty($data['email'])) {
            $err_message['email'] = 'Email không được để trống.';
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $err_message['email'] = 'Email không hợp lệ.';
        } elseif ((new AccountsModels)->findByEmail($data['email'])) {
            $err_message['email'] = 'Email đã tồn tại.';
        }

        // Nếu không có lỗi, thêm tài khoản vào cơ sở dữ liệu
        if (empty(array_filter($err_message))) {
            $data['mat_khau'] = password_hash($data['mat_khau'], PASSWORD_BCRYPT); // Mã hóa mật khẩu
            (new AccountsModels)->insert($data);
            $_SESSION['message'] = "Thêm tài khoản thành công.";
            header("location: index.php?admin=list-accounts");
            exit();
        }
    }

    // Hiển thị form với thông báo lỗi (nếu có)
    return view("admin/accounts/accounts-add", ['err_message' => $err_message]);
}

    }
