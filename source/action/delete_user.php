<?php
require_once "../cfg/config.php";
require "../cfg/security.php";

$sql = "DELETE FROM user WHERE id=:id;";
$dataBinded=array(
    ':id' => $_POST['user_id']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

if ($_SESSION['user']['id'] == $dataBinded[':id']) {
    require "logout.php";
} else {
    header('Location: ../admin_page.php');
}
exit();
?>