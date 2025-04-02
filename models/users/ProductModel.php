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
        $sql = "SELECT `id_sp`, `ten_sp`, `gia_tien`, `gia_km`, `anh_sp`, `mo_ta`, `luot_xem`, `soluong_ton`, danh_muc.ten_dm 
                FROM `san_pham` JOIN danh_muc on san_pham.id_dm = danh_muc.id_dm";
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

    //Cập nhật lượt xem lên 1
    public function updateLuotxem($id_sp)
    {
        $sql = "SELECT * FROM san_pham WHERE id_sp = :id_sp ";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_sp', $id_sp, PDO::PARAM_INT);
        $stmt->execute();
        $product = $stmt->fetch();
        if ($product) {
            $sql = "UPDATE san_pham SET luot_xem = :luot_xem WHERE id_sp= :id_sp";
            $stmt = $this->db->pdo->prepare($sql);
            $newLx = floatval($product->luot_xem) + 1;
            $stmt->bindParam(':id_sp', $id_sp, PDO::PARAM_INT);
            $stmt->bindParam(':luot_xem', $newLx);
            $stmt->execute();
        }
    }


    // public function updateLuotxem($id_sp)
    // {
    //     // Lấy số lượt xem hiện tại từ sản phẩm
    //     $sql = "SELECT luot_xem FROM san_pham WHERE id_sp = :id_sp";
    //     $stmt = $this->db->pdo->prepare($sql);
    //     $stmt->bindParam(':id_sp', $id_sp, PDO::PARAM_INT);
    //     $stmt->execute();
    //     $product = $stmt->fetch(PDO::FETCH_ASSOC);
    //     // debug($product->luot_xem);
    //     if ($product) {
    //         // Tăng lượt xem thêm 1
    //         $new_views = intval($product['luot_xem']) + 1;

    //         // Cập nhật lại số lượt xem vào cơ sở dữ liệu
    //         $sql = "UPDATE san_pham SET luot_xem = :luot_xem WHERE id_sp=:id_sp";
    //         $stmt->bindParam(':id_sp', $id_sp, PDO::PARAM_INT);
    //         $stmt->bindParam(':luot_xem', $new_views,PDO::PARAM_INT);
    //         $stmt->execute();
    //     }
    // }

    // --------------------------------------CẬP NHẬP SỐ LƯỢNG TỒN----------------------------------------------


    public function getProduct($id_sp)
    {
        $sql = "SELECT *
                FROM san_pham where id_sp = :id_sp";

        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_sp', $id_sp, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
        // debug($a);
    }

    public function getDHCTByDH($id_sp)
    {
        $sql = "SELECT `id`, donhangchitiet.id_donHang, `id_sp`, `id_trangThai`, `soLuong`, `tongTien` 
                FROM `donhangchitiet` JOIN don_hang ON donhangchitiet.id_donHang = don_hang.id_donhang where id_sp = :id_sp";

        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_sp', $id_sp, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        // debug($a);
    }

    public function updateTonKho($newSL, $id_sp)
    {
        $sql = "UPDATE `san_pham` SET `soluong_ton`= :newSL WHERE id_sp = :id_sp";

        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':newSL', $newSL, PDO::PARAM_INT);
        $stmt->bindParam(':id_sp', $id_sp, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
