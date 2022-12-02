<?php
require_once "../cfg/config.php";
require "../cfg/security.php";

$sql = "DELETE FROM carousel_image WHERE id=:id;";
$dataBinded=array(
    ':id' => $_POST['id']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location: ../admin_page.php');
exit();
?>