<?php
require_once "cfg/config.php";
$sql = "SELECT project_id, project_name FROM project"; //votre requête SQL (vous savez faire maintenant héhé !)
$pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
$pre->execute();//on l'execute
$projects = $pre->fetchAll(PDO::FETCH_ASSOC);// on stocke les données dans une variable (ici $data)
?>