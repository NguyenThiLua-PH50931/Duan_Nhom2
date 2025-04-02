<?php
require_once 'database/function.php';

class WishlistModelAdmin
{
    private $conn;

    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }

   

    public function deleteWishById($id_tk)
    {
        $sql = "DELETE FROM `sp_yeu_thich` WHERE `id_tk` = :id_tk ";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id_tk', $id_tk);
        $stmt->execute();
    }
}
