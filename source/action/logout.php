<?php 
require_once '../cfg/config.php';
unset($_SESSION['user']);
header('Location: ../index.php');
exit();
?>