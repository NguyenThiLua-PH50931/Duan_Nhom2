<?php
require_once 'database/function.php';

class ProductModels
{
    private $conn;

    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    // SẢN PHẨM:

    // Lấy ra tất cả sản phẩm:
    public function getAllProducts()
    {
        $sql = "SELECT `id_sp`, `ten_sp`, `gia_tien`, `gia_km`, `anh_sp`, `mo_ta`, `luot_xem`, `soluong_ton`, danh_muc.ten_dm 
                FROM `san_pham` JOIN danh_muc on san_pham.id_dm = danh_muc.id_dm ORDER BY id_sp DESC limit 8";
        $stmt = $this->db->pdo->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    // Lấy ra 1 sản phẩm dựa vào id_sp
    public function getProductById($id_sp)
    {
        $sql = "SELECT * FROM san_pham WHERE id_sp = :id_sp";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_sp', $id_sp);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Thêm mới sản phẩm:
    public function insert($data)
    {
        $sql = "INSERT INTO san_pham (ten_sp, gia_tien, anh_sp, mo_ta, soluong_ton, id_dm) 
                VALUES (:ten_sp, :gia_tien, :anh_sp, :mo_ta,:soluong_ton,:id_dm)";
        $stmt = $this->db->pdo->prepare($sql);  // Dùng prepare thay vì query
        $stmt->execute($data);  // Thực thi với tham số truyền vào
    }


    // Cập nhập sản phẩm:
    public function update($data)
    {
        if ($data['anh_sp'] != null) {
            $sql = "UPDATE san_pham SET id_sp = :id_sp, ten_sp = :ten_sp, anh_sp = :anh_sp, gia_tien = :gia_tien, soluong_ton = :soluong_ton, mo_ta = :mo_ta, id_dm = :id_dm 
        WHERE id_sp = :id_sp";
            $stmt = $this->db->pdo->prepare($sql);
            $stmt->bindParam(':anh_sp', $anh_sp);
        } else {
            $sql = "UPDATE san_pham SET id_sp = :id_sp, ten_sp = :ten_sp, gia_tien = :gia_tien, soluong_ton = :soluong_ton, mo_ta = :mo_ta, id_dm = :id_dm 
        WHERE id_sp = :id_sp";
            $stmt = $this->db->pdo->prepare($sql);
        }

        $stmt->bindParam(':id_sp', $id_sp);
        $stmt->bindParam(':ten_sp', $ten_sp);
        $stmt->bindParam(':gia_tien', $gia_tien);
        $stmt->bindParam(':soluong_ton', $soluong_ton);
        $stmt->bindParam(':mo_ta', $mo_ta);
        $stmt->bindParam(':id_dm', $id_dm);

        $stmt->execute($data);
    }

    // Xóa sản phẩm:
    public function delete($id_sp)
    {
        $sql = "DELETE FROM san_pham WHERE id_sp = :id_sp";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_sp', $id_sp);
        $stmt->execute();
    }
    public function deleteProductsByCategoryId($categoryId)
    {
        $sql = "DELETE FROM san_pham WHERE id_dm = :id_dm";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_dm', $categoryId);
        $stmt->execute();
    }
}
