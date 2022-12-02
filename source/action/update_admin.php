<?php
require_once "../cfg/config.php";
require "../cfg/security.php";

$sql = "UPDATE user SET admin=:admin WHERE id=:id;";
$dataBinded=array(
    ':id' => $_POST['user_id'],
    ':admin' => $_POST['user_admin']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location: ../admin_page.php');
exit();
?>