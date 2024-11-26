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
        $sql = "SELECT * FROM tai_khoan";
        $stmt = $this->db->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
