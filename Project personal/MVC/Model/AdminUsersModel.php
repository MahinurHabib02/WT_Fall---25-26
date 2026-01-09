<?php
require_once __DIR__ . "/DB.php";

class AdminUsersModel {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

}