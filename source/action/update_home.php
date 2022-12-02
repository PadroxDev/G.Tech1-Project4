<?php
require_once "../cfg/config.php";
require "../cfg/security.php";

$sql = "UPDATE home SET title=:title, h1=:h1, parallax=:parallax, name_1=:name_1, img_1=:img_1, linktree_1=:linktree_1, card_title1=:card_title1,
content_1=:content_1, name_2=:name_2, img_2=:img_2, linktree_2=:linktree_2, card_title2=:card_title2, content_2=:content_2";
$dataBinded=array(
    ':title' => $_POST['home_title'],
    ':h1'=> $_POST['home_h1'],
    ':parallax' => $_SESSION['current_images']['parallax'],
    ':name_1'=> $_POST['home_c1_name'],
    ':img_1' => $_SESSION['current_images']['c1'],
    ':linktree_1'=> $_POST['home_c1_linktree'], 
    ':card_title1'=> $_POST['home_c1_title'], 
    ':content_1'=> $_POST['home_c1_content'],
    ':name_2'=> $_POST['home_c2_name'],
    ':img_2' => $_SESSION['current_images']['c2'],
    ':linktree_2'=> $_POST['home_c2_linktree'], 
    ':card_title2'=> $_POST['home_c2_title'], 
    ':content_2'=> $_POST['home_c2_content'],
);


if($_FILES['home_c1_img']['name'] != "") {
    $destination = "img/".$_FILES['home_c1_img']['name'];
    move_uploaded_file($_FILES['home_c1_img']['tmp_name'], '../'.$destination);
    $dataBinded[':img_1'] = $destination;
}

if($_FILES['home_c2_img']['name'] != "") {
    echo ' mange tes morts chacal ';
    $destination = "img/".$_FILES['home_c2_img']['name'];
    move_uploaded_file($_FILES['home_c2_img']['tmp_name'], '../'.$destination);
    $dataBinded[':img_2'] = $destination;
}

if($_FILES['home_parallax']['name'] != "") {
    $destination = "img/".$_FILES['home_parallax']['name'];
    move_uploaded_file($_FILES['home_parallax']['tmp_name'], '../'.$destination);
    $dataBinded[':parallax'] = $destination;
}
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location: ../index.php');
exit();
?>