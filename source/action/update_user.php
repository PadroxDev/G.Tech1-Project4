<?php
require_once "../cfg/config.php";
require "../cfg/security.php";

$sql = "UPDATE user SET username=:username, email=:email, password=:password, firstname=:firstname, lastname=:lastname WHERE id=:id";
$dataBinded=array(
    ':id' => $_POST['user_id'],
    ':username' => $_POST['user_name'],
    ':email'=> $_POST['user_email'],
    ':password' => $_POST['user_password'],
    ':firstname' => $_POST['user_firstname'],
    ':lastname'=> $_POST['user_lastname'] 
);

$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

$sql2 = "SELECT * FROM user WHERE id=:id;";
$dataBinded2=array(
    ':id' => $_POST['user_id'],
);
$pre = $pdo->prepare($sql2);
$pre->execute($dataBinded2);
$user = $pre->fetch(PDO::FETCH_ASSOC);
$_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté

header('Location: ../admin_page.php');
exit();
?>