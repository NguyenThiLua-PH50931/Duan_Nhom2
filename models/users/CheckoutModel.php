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
        $query = "INSERT INTO `don_hang`(`van_chuyen`, `code_payment`,`trangthai_donhang`, `phuongthuc_thanhtoan`, `ngaydat_don`, `id_tk`) 
                    VALUES (:van_chuyen, :code_payment,:trangthai_donhang, :phuongthuc_thanhtoan, :ngaydat_don, :id_tk)";
        $stmt = $this->db->pdo->prepare($query);
        $stmt->bindParam("van_chuyen", $van_chuyen);
        $stmt->bindParam("code_payment", $code_payment);
        $stmt->bindParam("trangthai_donhang", $trangthai_donhang);
        $stmt->bindParam("phuongthuc_thanhtoan", $phuongthuc_thanhtoan);
        $stmt->bindParam("ngaydat_don", $now);
        $stmt->bindParam("id_tk", $id_tk);
        $stmt->execute();
    }
}
