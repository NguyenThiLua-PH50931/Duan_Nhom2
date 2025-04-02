<?php
require_once 'database/function.php';

class OrdersModel
{
    private $conn;

    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllOrders()
    {
        // Truy vấn lấy thông tin tổng quan các đơn hàng
        $sql = "SELECT don_hang.id_donhang, don_hang.van_chuyen, don_hang.code_payment, don_hang.trangthai_donhang, 
                       don_hang.phuongthuc_thanhtoan, don_hang.ngaydat_don, tai_khoan.ten_tk, don_hang.id_tk 
                FROM don_hang 
                JOIN tai_khoan ON don_hang.id_tk = tai_khoan.id_tk";

        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            // Truy vấn lấy chi tiết đơn hàng
            $sql = "SELECT donhangchitiet.id, donhangchitiet.id_trangThai, donhangchitiet.id_donHang, san_pham.*, donhangchitiet.tongTien, 
                           donhangchitiet.soLuong, don_hang.*, trangthaidonhang.trangThai
                    FROM donhangchitiet 
                    JOIN don_hang ON donhangchitiet.id_donHang = don_hang.id_donhang
                    JOIN san_pham ON donhangchitiet.id_sp = san_pham.id_sp
                    JOIN trangthaidonhang ON donhangchitiet.id_trangThai = trangthaidonhang.id_trangThai WHERE donhangchitiet.id_trangThai = 1";

            $stmt = $this->db->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    public function getOrdersByDonHang($id_donHang)
    {
        // Truy vấn lấy thông tin tổng quan các đơn hàng
        $sql = "SELECT don_hang.id_donhang, don_hang.van_chuyen, don_hang.code_payment, don_hang.trangthai_donhang, 
                       don_hang.phuongthuc_thanhtoan, don_hang.ngaydat_don, tai_khoan.ten_tk, don_hang.id_tk 
                FROM don_hang 
                JOIN tai_khoan ON don_hang.id_tk = tai_khoan.id_tk";

        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            // Truy vấn lấy chi tiết đơn hàng
            $sql = "SELECT *
                    FROM donhangchitiet  WHERE  id_donHang = :id_donHang";

            $stmt = $this->db->pdo->prepare($sql);
            $stmt->bindParam(':id_donHang', $id_donHang);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    public function getDonHangById($id_tk)
    {
        // Truy vấn lấy thông tin tổng quan các đơn hàng
        $sql = "SELECT * FROM don_hang where id_tk = :id_tk";

        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam('id_tk', $id_tk);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }





// ----------------------------------------------------------------------------------------------
    // Thay đổi trạng thái đơn hàng: 
    public function updateStatus($id, $newTrangThai)
    {
        $sql = "UPDATE donhangchitiet 
                SET id_trangThai = :newTrangThai 
                WHERE id = :id";

        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':newTrangThai', $newTrangThai, PDO::PARAM_INT);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
    public function deleteByIdDonHang($id_donHang)
    {
        $sql = "DELETE FROM `donhangchitiet` WHERE id_donHang = :id_donHang";

        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_donHang', $id_donHang, PDO::PARAM_INT);
        $stmt->execute();
    }




    // ----------------------------------------------------------------------------
    public function donXacNhan()
    {
        // Truy vấn lấy thông tin tổng quan các đơn hàng
        $sql = "SELECT don_hang.id_donhang, don_hang.van_chuyen, don_hang.code_payment, don_hang.trangthai_donhang, 
         don_hang.phuongthuc_thanhtoan, don_hang.ngaydat_don, tai_khoan.ten_tk, don_hang.id_tk 
        FROM don_hang 
        JOIN tai_khoan ON don_hang.id_tk = tai_khoan.id_tk";

        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            // Truy vấn lấy chi tiết đơn hàng
            $sql = "SELECT donhangchitiet.id, donhangchitiet.id_trangThai, donhangchitiet.id_donHang, san_pham.*, donhangchitiet.tongTien, 
             donhangchitiet.soLuong, don_hang.*, trangthaidonhang.trangThai
            FROM donhangchitiet 
            JOIN don_hang ON donhangchitiet.id_donHang = don_hang.id_donhang
            JOIN san_pham ON donhangchitiet.id_sp = san_pham.id_sp
            JOIN trangthaidonhang ON donhangchitiet.id_trangThai = trangthaidonhang.id_trangThai  WHERE donhangchitiet.id_trangThai = 2";


            $stmt = $this->db->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }


    // -----------------------------------------------------------------

    // Lấy ra tất cả các đơn đang được giao:
    public function donDangGiao()
    {
        // Truy vấn lấy thông tin tổng quan các đơn hàng
        $sql = "SELECT don_hang.id_donhang, don_hang.van_chuyen, don_hang.code_payment, don_hang.trangthai_donhang, 
       don_hang.phuongthuc_thanhtoan, don_hang.ngaydat_don, tai_khoan.ten_tk, don_hang.id_tk 
      FROM don_hang 
      JOIN tai_khoan ON don_hang.id_tk = tai_khoan.id_tk";

        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            // Truy vấn lấy chi tiết đơn hàng
            $sql = "SELECT donhangchitiet.id, donhangchitiet.id_trangThai, donhangchitiet.id_donHang, san_pham.*, donhangchitiet.tongTien, 
           donhangchitiet.soLuong, don_hang.*, trangthaidonhang.trangThai
          FROM donhangchitiet 
          JOIN don_hang ON donhangchitiet.id_donHang = don_hang.id_donhang
          JOIN san_pham ON donhangchitiet.id_sp = san_pham.id_sp
          JOIN trangthaidonhang ON donhangchitiet.id_trangThai = trangthaidonhang.id_trangThai  WHERE donhangchitiet.id_trangThai = 3";


            $stmt = $this->db->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    // --------------------------------------------------------------------
    // Lấy ra tất cả các đơn đã được thanh toán:

    public function donHoanThanh()
    {
        // Truy vấn lấy thông tin tổng quan các đơn hàng
        $sql = "SELECT don_hang.id_donhang, don_hang.van_chuyen, don_hang.code_payment, don_hang.trangthai_donhang, 
         don_hang.phuongthuc_thanhtoan, don_hang.ngaydat_don, tai_khoan.ten_tk, don_hang.id_tk 
        FROM don_hang 
        JOIN tai_khoan ON don_hang.id_tk = tai_khoan.id_tk";

        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            // Truy vấn lấy chi tiết đơn hàng
            $sql = "SELECT donhangchitiet.id, donhangchitiet.id_trangThai, donhangchitiet.id_donHang, san_pham.*, donhangchitiet.tongTien, 
             donhangchitiet.soLuong, don_hang.*, trangthaidonhang.trangThai
            FROM donhangchitiet 
            JOIN don_hang ON donhangchitiet.id_donHang = don_hang.id_donhang
            JOIN san_pham ON donhangchitiet.id_sp = san_pham.id_sp
            JOIN trangthaidonhang ON donhangchitiet.id_trangThai = trangthaidonhang.id_trangThai  WHERE donhangchitiet.id_trangThai = 4";


            $stmt = $this->db->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    // Lấy ra tất cả các đơn đã hủy:
    public function donHuy()
    {
        // Truy vấn lấy thông tin tổng quan các đơn hàng
        $sql = "SELECT don_hang.id_donhang, don_hang.van_chuyen, don_hang.code_payment, don_hang.trangthai_donhang, 
         don_hang.phuongthuc_thanhtoan, don_hang.ngaydat_don, tai_khoan.ten_tk, don_hang.id_tk 
        FROM don_hang 
        JOIN tai_khoan ON don_hang.id_tk = tai_khoan.id_tk";

        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            // Truy vấn lấy chi tiết đơn hàng
            $sql = "SELECT donhangchitiet.id, donhangchitiet.id_trangThai, donhangchitiet.id_donHang, san_pham.*, donhangchitiet.tongTien, 
             donhangchitiet.soLuong, don_hang.*, trangthaidonhang.trangThai
            FROM donhangchitiet 
            JOIN don_hang ON donhangchitiet.id_donHang = don_hang.id_donhang
            JOIN san_pham ON donhangchitiet.id_sp = san_pham.id_sp
            JOIN trangthaidonhang ON donhangchitiet.id_trangThai = trangthaidonhang.id_trangThai  WHERE donhangchitiet.id_trangThai = 5";


            $stmt = $this->db->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}
