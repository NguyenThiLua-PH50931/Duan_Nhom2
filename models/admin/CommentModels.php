<?php
require_once 'database/function.php';

class CommentModels
{
    private $conn;

    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }


    // Danh sách bình luận:

    public function getAllComments()
    {
        $sql = "SELECT binh_luan.id_bl, binh_luan.noi_dung_bl, binh_luan.ngay_bl, binh_luan.id_tk, binh_luan.id_sp, tai_khoan.ho_ten
                FROM binh_luan
                JOIN tai_khoan ON binh_luan.id_tk = tai_khoan.id_tk
                ORDER BY binh_luan.ngay_bl DESC";
        
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    // Xóa bình luận
    public function deleteComment($id_bl) {
        $sql = "DELETE FROM binh_luan WHERE id_bl = :id_bl";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_bl', $id_bl, PDO::PARAM_INT);
        return $stmt->execute();
    }

    
}