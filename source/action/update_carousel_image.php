<?php
require_once "../cfg/config.php";
$sql = "UPDATE carousel_image SET path=:path WHERE id=:id;"; //votre requête SQL (vous savez faire maintenant héhé !)
$bindedData = array(
    ':id' => $_POST['carousel_image_id'],
    ':path' => $POST['carousel_current_image']
);

if ($_FILES['carousel_image']['name'] != "") {
    $destination = "img/".$_FILES['carousel_image']['name'];
    move_uploaded_file($_FILES['carousel_image']['tmp_name'], '../'.$destination);
    $dataBinded[':path'] = $destination;
}

$pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
$pre->execute($bindedData);//on l'execute

header('Location: ../admin_page.php');
exit();
?>