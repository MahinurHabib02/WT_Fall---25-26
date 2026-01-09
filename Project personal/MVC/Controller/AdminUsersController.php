<?php
session_start();
require_once __DIR__ . "/../Model/AdminUsersModel.php";

if(!isset($_SESSION['username'])){
    $_SESSION['username'] = "Admin";
}