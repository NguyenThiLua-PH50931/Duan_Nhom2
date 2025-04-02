<?php
require_once 'database/function.php';

class OrderModel
{
    private $conn;

    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getOrder($id_tk)
    {
        $sql = "SELECT `id_donhang`, `van_chuyen`, `code_payment`, `trangthai_donhang`, `phuongthuc_thanhtoan`, `ngaydat_don`, don_hang.id_tk 
                    FROM `don_hang` JOIN tai_khoan on don_hang.id_tk = tai_khoan.id_tk 
                    WHERE don_hang.id_tk = :id_tk ";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam("id_tk", $id_tk);
        $stmt->execute();
        $result =  $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            $sql = "SELECT `id`, donhangchitiet.id_trangThai, san_pham.*, donhangchitiet.tongTien, donhangchitiet.soLuong, don_hang.*
                    FROM `donhangchitiet` JOIN don_hang ON donhangchitiet.id_donHang = don_hang.id_donhang
                    JOIN san_pham ON donhangchitiet.id_sp = san_pham.id_sp
                    join trangthaidonhang on donhangchitiet.id_trangThai = trangthaidonhang.id_TrangThai
                    WHERE don_hang.id_tk = :id_tk";

            $stmt = $this->db->pdo->prepare($sql);
            $stmt->bindParam("id_tk", $id_tk);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    public function updateTrangThai($id_donHang)
    {
        $query = "UPDATE `donhangchitiet` SET `id_trangThai`= 5 WHERE id = :id_donHang";
        $stmt = $this->db->pdo->prepare($query);
        $stmt->bindParam("id_donHang", $id_donHang);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function addCart($id_tk, $id_sp, $so_luong)
    {
        // Kiểm tra giỏ hàng tồn tại
        $query = "SELECT id_giohang FROM gio_hang WHERE id_tk = :id_tk";
        $stmt = $this->db->pdo->prepare($query);
        $stmt->bindValue(':id_tk', $id_tk);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$result) {
            // Nếu chưa có giỏ hàng, tạo mới
            $query = "INSERT INTO gio_hang (id_tk) VALUES (:id_tk)";
            $stmt = $this->db->pdo->prepare($query);
            $stmt->bindValue(':id_tk', $id_tk);
            $stmt->execute();

            // Lấy id_giohang vừa tạo
            $id_giohang = $this->db->pdo->lastInsertId();
        } else {
            $id_giohang = $result['id_giohang'];
        }

        // Kiểm tra sản phẩm trong giỏ hàng
        $query = "SELECT id_giohang_chitiet FROM gio_hang_chi_tiet WHERE id_giohang = :id_giohang AND id_sp = :id_sp";
        $stmt = $this->db->pdo->prepare($query);
        $stmt->bindValue(':id_giohang', $id_giohang);
        $stmt->bindValue(':id_sp', $id_sp);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            // Cập nhật số lượng nếu sản phẩm đã tồn tại
            $query = "UPDATE gio_hang_chi_tiet SET so_luong = so_luong + :so_luong WHERE id_giohang_chitiet = :id_giohang_chitiet";
            $stmt = $this->db->pdo->prepare($query);
            $stmt->bindValue(':so_luong', $so_luong);
            $stmt->bindValue(':id_giohang_chitiet', $result['id_giohang_chitiet']);
        } else {
            // Thêm mới sản phẩm vào giỏ hàng
            $query = "INSERT INTO gio_hang_chi_tiet (id_giohang, id_sp, so_luong) VALUES (:id_giohang, :id_sp, :so_luong)";
            $stmt = $this->db->pdo->prepare($query);
            $stmt->bindValue(':id_giohang', $id_giohang);
            $stmt->bindValue(':id_sp', $id_sp);
            $stmt->bindValue(':so_luong', $so_luong);
        }
        $stmt->execute();
    }

    public function deleteCart($id_giohang_chitiet)
    {
        $sql = "DELETE FROM `gio_hang_chi_tiet` WHERE `id_giohang_chitiet` = :id_giohang_chitiet ";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_giohang_chitiet', $id_giohang_chitiet);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function deleteCartByID($id_giohang)
    {
        $sql = "DELETE FROM `gio_hang_chi_tiet` WHERE `id_giohang` = :id_giohang ";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_giohang', $id_giohang);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function deleteDHCT($id_tk)
    {
        $sql = "DELETE FROM `donhangchitiet` WHERE `id_tk` = :id_tk ";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_tk', $id_tk);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function deleteCartByIDTK($id_tk)
    {
        $sql = "DELETE FROM `gio_hang` WHERE `id_tk` = :id_tk ";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_tk', $id_tk);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function updateCart($id_giohang_chitiet, $so_luong)
    {
        $query = "UPDATE gio_hang_chi_tiet SET so_luong = :so_luong WHERE id_giohang_chitiet = :id_giohang_chitiet";
        $stmt = $this->db->pdo->prepare($query);
        $stmt->bindParam(':so_luong', $so_luong, PDO::PARAM_INT);
        $stmt->bindParam(':id_giohang_chitiet', $id_giohang_chitiet, PDO::PARAM_INT);
        $stmt->execute();
    }


}
