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

    // tìm kiếm sản phẩm theo keyword
    public function search($keyword)
    {
        $sql = "SELECT `id_sp`, `ten_sp`, `gia_tien`, `gia_km`, `anh_sp`, `mo_ta`, `luot_xem`, `soluong_ton`, danh_muc.ten_dm 
                FROM `san_pham` JOIN danh_muc on san_pham.id_dm = danh_muc.id_dm where `ten_sp` LIKE :keyword";
        $stmt = $this->db->pdo->prepare($sql);
        $keyword = "%" . $keyword . "%";
        $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lọc sản phẩm theo giá:
    public function getProductsBySort($sort)
    {
        $sql = "SELECT * FROM san_pham";
        switch ($sort) {
            case 'gia_moi':
                $sql .= " ORDER BY ngay_gio DESC"; // Sản phẩm mới
                break;
            case 'gia_cu':
                $sql .= " ORDER BY ngay_gio ASC"; // Sản phẩm cũ
                break;
            case 'gia_tang':
                $sql .= " ORDER BY gia_tien ASC"; // Giá tăng dần
                break;
            case 'gia_giam':
                $sql .= " ORDER BY gia_tien DESC"; // Giá giảm dần
                break;
            default:
                $sql .= " ORDER BY ngay_gio DESC"; // Mặc định
                break;
        }
    
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
        return $results;
    }
    
}
