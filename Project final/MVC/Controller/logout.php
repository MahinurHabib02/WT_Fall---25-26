<?php
session_start();


session_unset();
session_destroy();

header("Location:\WT_Fall - 25-26\Project final\MVC\Views\login.php");
exit;
