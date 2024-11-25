<?php
require_once 'database/function.php';

class LoginModels {
    private $conn;

    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getLoginUser()
    {
        $sql = "SELECT * FROM tai_khoan";
        $stmt = $this->db->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>