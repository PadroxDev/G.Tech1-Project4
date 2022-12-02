<?php 
require_once "../cfg/config.php";
$sql = "INSERT INTO user(username,email,password, firstname, lastname) VALUES(:username,:email, :password, :firstname, :lastname)";
$dataBinded=array(
    ':username'=> $_POST['username'],
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
    ':firstname'   => $_POST['firstname'],
    ':lastname'   => $_POST['lastname']
);    
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

$sql2 = "SELECT * FROM user WHERE email=:email AND password=SHA1(:password)";
$dataBinded2=array(
    ':email'=> $_POST['email'],
    ':password'=> $_POST['password']
);
$pre = $pdo->prepare($sql2); 
$pre->execute($dataBinded2);
$user = $pre->fetch(PDO::FETCH_ASSOC);
$_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
header('Location:../index.php');//on le redirige sur la page d'accueil du site !
exit();
?>