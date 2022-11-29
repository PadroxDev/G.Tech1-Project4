<?php
require_once "../cfg/config.php";
$id = $_GET['id'];
$sql = "SELECT * FROM project WHERE project_id=:id"; //votre requête SQL (vous savez faire maintenant héhé !)
$bindedData=array(
    ':id' => $id
);
$pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
$pre->execute($bindedData);//on l'execute
$project = $pre->fetch(PDO::FETCH_ASSOC);// on stocke les données dans une variable (ici $data)
?>