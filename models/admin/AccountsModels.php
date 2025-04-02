<?php
require_once 'database/function.php';

class AccountsModels
{
    private $conn;

    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    // Lấy ra tất cả tài khoản:
    public function getAllAccount()
    {
        $sql = "SELECT * FROM tai_khoan ORDER BY id_tk ";
        // $stmt = $this->conn->prepare($sql);
        // $stmt->execute();
        $stmt = $this->db->pdo->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // Lấy ra 1 tài khoản dựa vào id_tk
    public function getAccountsById($id_tk)
    {
        $sql = "SELECT * FROM tai_khoan WHERE id_tk = :id_tk";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_tk', $id_tk);
        $stmt->execute();
    }

    //Xóa tài khoản
    public function delete($id_tk)
    {
        $sql = "DELETE FROM tai_khoan WHERE id_tk = :id_tk";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_tk', $id_tk);
        $stmt->execute();
    }

    // Cập nhập sản phẩm:
    public function insert($data)
    {
        $sql = "INSERT INTO tai_khoan (ten_tk, ho_ten, so_dt, mat_khau, dia_chi, email) 
                    VALUES (:ten_tk, :ho_ten, :so_dt, :mat_khau,:dia_chi,:email)";
        $stmt = $this->db->pdo->prepare($sql);  // Dùng prepare thay vì query
        $stmt->execute($data);  // Thực thi với tham số truyền vào
    }

    // kiểm tra user, email đã tồn tại hay chưa
    public function findByUsername($ten_tk)
    {
        $sql = "SELECT * FROM tai_khoan WHERE ten_tk = :ten_tk";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute(['ten_tk' => $ten_tk]);
        return $stmt->fetch();
    }

    public function findByEmail($email)
    {
        $sql = "SELECT * FROM tai_khoan WHERE email = :email";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute(['email' => $email]);
        return $stmt->fetch();
    }
    // xử ký vai trò:
    public function updateRole($id_tk, $newRole)
    {
        $sql = "UPDATE tai_khoan SET vai_tro = :newRole WHERE id_tk = :id_tk";
        $stmt = $this->db->pdo->prepare($sql);
        return $stmt->execute([
            'newRole' => $newRole,
            'id_tk'  => $id_tk
        ]);
    }
}
