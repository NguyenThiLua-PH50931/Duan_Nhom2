<?php
require_once 'database/function.php';

class AccountsModels {
    private $conn;

    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    // Lấy ra tất cả tài khoản:
    public function getAllAccount() {
        $sql = "SELECT * FROM tai_khoan ORDER BY id_tk DESC";
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
         // $stmt = $this->conn->prepare($sql);
         // $stmt->execute();
         $stmt = $this->db->pdo->prepare($sql);
         $stmt->bindParam(':id_tk', $id_tk);
         $stmt->execute();
         return $stmt->fetch(PDO::FETCH_ASSOC);
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
    public function update($data)
    {
        $sql = "UPDATE tai_khoan SET id_tk = :id_tk, ten_tk = :ten_tk, ho_ten = :ho_ten, so_dt = :so_dt, mat_khau = :mat_khau, dia_chi = :dia_chi, email = :email, vai_tro = :vai_tro
        WHERE id_tk = :id_tk";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_tk', $id_tk);
        $stmt->bindParam(':ten_tk', $ten_tk);
        $stmt->bindParam(':ho_ten', $ho_ten);
        $stmt->bindParam(':so_dt', $so_dt);
        $stmt->bindParam(':mat_khau', $mat_khau);
        $stmt->bindParam(':dia_chi', $dia_chi);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':vai_tro', $vai_tro);

        $stmt->execute($data);

        }


        

}