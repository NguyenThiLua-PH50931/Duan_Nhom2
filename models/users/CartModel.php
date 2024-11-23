<?php
require_once 'database/function.php';

class CartModel
{
    private $conn;

    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getCart()
    {
        $sql = "SELECT `ten_sp`, `gia_tien`, `gia_km`, `anh_sp`, `mo_ta`, `luot_xem`, `soluong_ton`, `so_luong`
                FROM `san_pham` JOIN gio_hang_chi_tiet on gio_hang_chi_tiet.id_sp = san_pham.id_sp";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addCart($id_sp, $so_luong)
    {
        $sql = "INSERT INTO `gio_hang_chi_tiet`(`id_sp`, `so_luong`) 
                VALUES (:id_sp, :so_luong)";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_sp', $id_sp);
        $stmt->bindParam(':so_luong', $so_luong);
        $stmt->execute();
    }
}
