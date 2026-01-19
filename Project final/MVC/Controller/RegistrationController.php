<?php
session_start();
   
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'volunteer') {
    header('Location: /WT_Fall%20-%2025-26/Project%20final/MVC/Views/login.php');
    exit;
}

require_once __DIR__ . "/../../MVC/Model/DB.php";
require_once __DIR__ . "/../../MVC/Model/RegistrationModel.php";

$db   = new DataBase();
$conn = $db->connect();
 
class RegistrationController {
 
    private $model;
    private $user_id;
 
    public function __construct($dbConn) {
        $this->model = new RegistrationModel($dbConn);
    }
 public function show() {
        $registrations = $this->model->getAll();
        include __DIR__ . "../../Views/Volunteer/RegistrationDashboard.php";
    }
 
   
    public function handlePost() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['action'])) {
            $id = (int)$_POST['id'];
            $action = $_POST['action'];
 
            $status = ($action === 'approve') ? 'Approved' : 'Rejected';
            $this->model->updateStatus($id, $status);
 
           
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }
    }
}


 
$controller = new RegistrationController($conn);
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->handlePost();
} else {
    $controller->show();      
}