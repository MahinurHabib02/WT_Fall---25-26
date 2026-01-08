<?php
require_once __DIR__ . "/DB.php";

class AdminDashboardModel {
    private $conn;

    public function __construct() {
        $db = new DataBase();
        $this->conn = $db->connect();
    }

}
