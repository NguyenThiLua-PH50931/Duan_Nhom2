<?php
require_once 'database/function.php';

// use Carbon\Carbon;

class CheckoutModel
{
    public $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function payment($van_chuyen, $code_payment, $trangthai_donhang, $phuongthuc_thanhtoan, $id_tk)
    {
        $now = (new DateTime('now', new DateTimeZone('Asia/Ho_Chi_Minh')))->format('d-m-Y H:i:s');

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
            // if ($a) {
            $sql = "SELECT * FROM `donhangchitiet` WHERE id_donHang = :id_donHang";
            $stmt = $this->db->pdo->prepare($sql);
            $stmt->bindParam("id_donHang", $id_donHang);
            $stmt->execute();
            $stmt->fetchAll(PDO::FETCH_ASSOC);
            // debug($result);

            $getIDSP = (new CartModel())->getCart($id_tk);
            // debug($getIDSP);
            foreach ($getIDSP as $value) {
                $sql = "SELECT * FROM `donhangchitiet` WHERE id_donHang = :id_donHang and id_sp = :id_sp";
                $stmt = $this->db->pdo->prepare($sql);
                $stmt->bindParam("id_donHang", $id_donHang);
                $stmt->bindParam("id_sp", $value['id_sp']);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // debug($result);
                if ($result) {
                    $total = 0;
                    foreach ($result as $value) {

                        $total += $value['soLuong'];
                    }
                    // debug($total);

                    $sql = "UPDATE `san_pham` SET `soluong_ton`= `soluong_ton` - :total WHERE id_sp = :id_sp";
                    $stmt = $this->db->pdo->prepare($sql);
                    $stmt->bindParam(':total', $total);
                    $stmt->bindParam(':id_sp', $value['id_sp']);
                    $stmt->execute();
                }
            }
        }
    }

    public function deleteDonHang($id_tk)
    {
        $sql = "DELETE FROM `don_hang` WHERE `id_tk` = :id_tk ";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_tk', $id_tk);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
