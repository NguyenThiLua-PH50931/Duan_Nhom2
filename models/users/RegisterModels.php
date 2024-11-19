<?php
require_once 'database/function.php';

class RegisterModels
{
    private $conn;

    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function insert_taikhoan($ten_tk, $mat_khau, $ho_ten, $email, $so_dt, $dia_chi)
    {
        $sql = "INSERT INTO tai_khoan(ten_tk, mat_khau, ho_ten, email, so_dt, dia_chi) VALUES(:ten_tk, :mat_khau, :ho_ten, :email,:so_dt,:dia_chi)";

        // Chuẩn bị câu lệnh SQL
        $stmt = $this->db->pdo->prepare($sql);

        // Thực thi câu lệnh với tham số đã được truyền
        $stmt->execute([
            ':ten_tk' => $ten_tk,
            ':mat_khau' => $mat_khau,
            ':ho_ten' => $ho_ten,
            ':email' => $email,
            ':so_dt' => $so_dt,
            ':dia_chi' => $dia_chi
        ]);
    }
}
