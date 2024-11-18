<?php
require_once 'database/function.php';

class RegisterModels {
    private $conn;

    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }
}

?>