<?php 
require_once "../cfg/config.php";
$sql = "INSERT INTO user(username,email,password, firstname, lastname) VALUES(:username,:email,:password, :firstname, :lastname)";
$dataBinded=array(
    ':username'=> $_POST['username'],
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
    ':firstname'   => $_POST['firstname'],
    ':lastname'   => $_POST['lastname']
);    
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:../index.php');//on le redirige sur la page d'accueil du site !
?>