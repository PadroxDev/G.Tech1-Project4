<?php
require_once "cfg/config.php";
$sql = "SELECT * FROM carousel_image WHERE project_id=:project_id"; //votre requête SQL (vous savez faire maintenant héhé !)
$bindedData = array(
    ':project_id' => $_SESSION['current_project_id']
);
$pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
$pre->execute($bindedData);//on l'execute
$carousel_images = $pre->fetchAll(PDO::FETCH_ASSOC);// on stocke les données dans une variable (ici $data)
?>