<?php
require_once 'database/function.php';

use Carbon\Carbon;

class CheckoutModel
{
    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function payment($van_chuyen, $trangthai_donhang, $phuongthuc_thanhtoan, $id_tk)
    {
        $now = (new DateTime('now', new DateTimeZone('Asia/Ho_Chi_Minh')))->format('d-m-Y H:i:s');
        $code_payment = rand(0, 9999);
        $sql = "INSERT INTO `don_hang`(`van_chuyen`, `code_payment`,`trangthai_donhang`, `phuongthuc_thanhtoan`, `ngaydat_don`, `id_tk`) 
                    VALUES (:van_chuyen, :code_payment,:trangthai_donhang, :phuongthuc_thanhtoan, :ngaydat_don, :id_tk)";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam("van_chuyen", $van_chuyen);
        $stmt->bindParam("code_payment", $code_payment);
        $stmt->bindParam("trangthai_donhang", $trangthai_donhang);
        $stmt->bindParam("phuongthuc_thanhtoan", $phuongthuc_thanhtoan);
        $stmt->bindParam("ngaydat_don", $now);
        $stmt->bindParam("id_tk", $id_tk);
        $stmt->execute();

        // Lấy id vừa tạo
        $id_donHang = $this->db->pdo->lastInsertId();

        if ($id_donHang) {
            $cart = (new CartModel)->getCart($_SESSION['id_tk']);
            foreach ($cart as $value) {
                $id_sp = $value['id_sp'];
                $so_luong = $value['so_luong'];
                $tongTien = $_SESSION['tongTien'];
                $sql = "INSERT INTO `donhangchitiet`(`id_donHang`, `id_sp`, `id_trangThai`,`soLuong`, `tongTien`) 
                        VALUES (:id_donHang, :id_sp, :trangthai_donhang, :soLuong,:tongTien)";
                $stmt = $this->db->pdo->prepare($sql);
                $stmt->bindParam("id_donHang", $id_donHang, PDO::PARAM_INT);
                $stmt->bindParam("id_sp", $id_sp);
                $stmt->bindParam("trangthai_donhang", $trangthai_donhang);
                $stmt->bindParam("soLuong", $so_luong);
                $stmt->bindParam("tongTien", $tongTien);
                $stmt->execute();
            }
        }
    }
}
