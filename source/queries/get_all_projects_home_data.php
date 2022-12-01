<?php
require_once "cfg/config.php";
$sql = "SELECT h_img, h_title, h_p1, h_p2, h_button_color FROM project"; //votre requête SQL (vous savez faire maintenant héhé !)
$pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
$pre->execute();//on l'execute
$projects_home_data = $pre->fetchAll(PDO::FETCH_ASSOC);// on stocke les données dans une variable (ici $data)
?>