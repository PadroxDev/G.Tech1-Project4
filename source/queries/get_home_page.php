<?php 
require_once "cfg/config.php";
$sql = "SELECT * FROM home";
$pre = $pdo->prepare($sql);
$pre->execute();
$home_page = $pre->fetch(PDO::FETCH_ASSOC);
?>