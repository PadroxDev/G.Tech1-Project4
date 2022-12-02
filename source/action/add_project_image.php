<?php
require_once "../cfg/config.php";
require "../cfg/security.php";

if ($_FILES['project_carousel_image']['name'] != "") {
    $sql = "INSERT INTO carousel_image(project_id, path) VALUES(:project_id, :path);";
    $destination = "img/".$_FILES['project_carousel_image']['name'];
    move_uploaded_file($_FILES['project_carousel_image']['tmp_name'], '../'.$destination);
    $bindedData = array(
        ':project_id' => $_POST['project_id'],
        ':path' => $destination
    );
    
    $pre = $pdo->prepare($sql);
    $pre->execute($bindedData);
}

header('Location: ../admin_page.php');
exit();
?>