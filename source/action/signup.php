<?php 
require_once "cfg/config.php";
$sql = "INSERT INTO user(email,password,login, firstname, lastname) VALUES(:email,:password,:login, :firstname, :lastname)";
$dataBinded=array(
    ':username'=> $_POST['username']
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
    ':firstname'   => $_POST['firstname'],
    ':lastname'   => $_POST['lastname'],
);    
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:index.php');//on le redirige sur la page d'accueil du site !
?>