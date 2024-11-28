<?php
class Auth extends Database
{
    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getLogin()
    {
        // Truy vấn lấy tất cả tài khoản
        $sql = "SELECT * FROM tai_khoan";
        $stmt = $this->db->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về tất cả thông tin tài khoản
    }
    
}
