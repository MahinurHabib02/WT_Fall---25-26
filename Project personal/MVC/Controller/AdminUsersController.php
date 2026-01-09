<?php
session_start();
require_once __DIR__ . "/../Model/AdminUsersModel.php";

if(!isset($_SESSION['username'])){
    $_SESSION['username'] = "Admin";
}

$model = new AdminUsersModel();


if(isset($_GET['delete_id'])){
    $model->deleteUser($_GET['delete_id']);
    header("Location: /Project personal/MVC/Controller/AdminUsersController.php");
    exit;
}


