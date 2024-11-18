<?php
require_once 'database/function.php';

class CategoryModels
{
    private $conn;

    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    // Danh mục:
    // lấy ra tất cả danh mục
    public function all()
    {
        $sql = "SELECT * FROM danh_muc";
        $stmt = $this->db->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //phương thức lấy ra 1 bản ghi theo id danh mục
    public function find_one($id_dm)
    {
        $sql = "SELECT * FROM danh_muc WHERE id_dm = :id_dm";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_dm', $id_dm);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    //Thêm dữ liệu
    public function insert($data)
    {
        $sql = "INSERT INTO danh_muc(ten_dm) VALUES(:ten_dm)";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':ten_dm', $ten_dm);
        $stmt->execute($data);
    }
    //Cập nhật dữ liệu
    public function update($data)
    {
        $sql = "UPDATE danh_muc SET ten_dm = :ten_dm WHERE id_dm = :id_dm";
        $stmt = $this->db->pdo->prepare($sql);

        $stmt->bindParam(':id_dm', $id_dm);
        $stmt->bindParam(':ten_dm', $ten_dm);
        // debug($data);
        $stmt->execute($data);
    }
    //Xóa dữ liệu
    public function delete($id_dm)
    {
        $sql = "DELETE FROM danh_muc WHERE id_dm = :id_dm";

        $stmt = $this->db->pdo->prepare($sql);

        $stmt->bindParam(':id_dm', $id_dm);

        $stmt->execute();
    }
}
