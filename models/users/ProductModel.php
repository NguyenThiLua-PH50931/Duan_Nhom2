<?php
require_once 'database/function.php';

class ProductModel
{
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
    public function search($keyword)
    {
        $sql = "SELECT `ten_sp`, `gia_tien`, `gia_km`, `anh_sp`, `mo_ta`, `luot_xem`, `soluong_ton`
                FROM `san_pham` JOIN gio_hang_chi_tiet on gio_hang_chi_tiet.id_sp = san_pham.id_sp where `ten_sp` LIKE :keyword";
        $stmt = $this->db->pdo->prepare($sql);
        $keyword = "%" . $keyword . "%";
        $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
