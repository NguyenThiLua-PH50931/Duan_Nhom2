<?php
require_once 'database/function.php';

class dasboardModel
{
    private $conn;

    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    // Lấy ra sản phẩm hàng đầu
    public function getProductsByViews()
    {
        $sql = "SELECT ten_sp, anh_sp, luot_xem, gia_tien FROM san_pham ORDER BY luot_xem DESC LIMIT 5";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy ra đơn hàng mới nhất
    public function mostRecent()
    {
        $sql = "SELECT id_donhang, phuongthuc_thanhtoan, ngaydat_don FROM don_hang ORDER BY ngaydat_don DESC LIMIT 5";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

     // Lấy ra sản phẩm bán chạy nhất:
public function bestSellerProducts()
{
    $sql = "SELECT 
                san_pham.id_sp,
                san_pham.ten_sp,
                san_pham.gia_tien,
                san_pham.anh_sp,
                
                SUM(donhangchitiet.tongTien) AS tong_tien
            FROM 
                san_pham
            JOIN 
                donhangchitiet ON san_pham.id_sp = donhangchitiet.id_sp
            GROUP BY 
                san_pham.id_sp, san_pham.ten_sp, san_pham.gia_tien, san_pham.anh_sp
            ORDER BY 
                tong_tien DESC LIMIT 5";

    $stmt = $this->db->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

}
