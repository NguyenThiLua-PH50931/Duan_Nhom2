<?php
require_once 'database/function.php';

class WishlistModel
{
    private $conn;

    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getWishlist()
    {
        $query = "SELECT sp_yeu_thich.*, san_pham.ten_sp, san_pham.gia_tien, san_pham.anh_sp
                    FROM  sp_yeu_thich
                    JOIN san_pham ON sp_yeu_thich.id_sp = san_pham.id_sp";
        $stmt = $this->db->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addWishlist($id_tk, $id_sp)
    {
        // Kiểm tra sản phẩm trong giỏ hàng
        $query = "SELECT id_yeuthich FROM sp_yeu_thich WHERE id_tk = :id_tk AND id_sp = :id_sp";
        $stmt = $this->db->pdo->prepare($query);
        $stmt->bindValue(':id_tk', $id_tk);
        $stmt->bindValue(':id_sp', $id_sp);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            // Cập nhật số lượng nếu sản phẩm đã tồn tại
            // $thongBao =  '<div class="cr-cart-notify"><p class="compare-note">Sản phẩm đã có trong <a href="index.php?user=wishlist"> Wishlist</a> Successfully!</p></div>';
            return $result;
        } else {
            // Thêm mới sản phẩm vào giỏ hàng
            $query = "INSERT INTO sp_yeu_thich (id_tk, id_sp) VALUES (:id_tk, :id_sp)";
            $stmt = $this->db->pdo->prepare($query);
            $stmt->bindValue(':id_tk', $id_tk);
            $stmt->bindValue(':id_sp', $id_sp);
        }
        $stmt->execute();
    }

    public function deleteWishlist($id_yeuthich)
    {
        $sql = "DELETE FROM `sp_yeu_thich` WHERE `id_yeuthich` = :id_yeuthich ";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_yeuthich', $id_yeuthich);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
