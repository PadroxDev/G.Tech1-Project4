<?php 
require_once "../cfg/config.php";
$sql = "SELECT email, password FROM user WHERE email= :email AND password=SHA1(:password)"; 
$dataBinded=array(
     ':email'=> $_POST['email'],
     ':password'=> $_POST['password'],
);
print_r($dataBinded);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){ 
     $_SESSION('error');
}else{
     $_SESSION['user'] = $user; 
     
     header('Location:../index.php'); 
}
?>