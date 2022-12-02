<?php
require_once "../cfg/config.php";
require "../cfg/security.php";

$sql = "UPDATE project SET project_name=:project_name, h_img=:h_img, h_title=:h_title, h_p1=:h_p1, h_p2=:h_p2, h_button_color=:h_button_color, h1=:h1, c1_title=:c1_title, c1_content=:c1_content, c2_title=:c2_title, c2_content=:c2_content, c3_title=:c3_title, c3_content=:c3_content, c4_title=:c4_title, c4_content=:c4_content, c5_title=:c5_title, c5_content=:c5_content, parallax_path=:parallax_path WHERE project_id=:project_id;";
$dataBinded=array(
    ':project_id' => $_POST['project_id'],
    ':project_name' => $_POST['project_name'],
    ':h_img' => $_SESSION['current_images']['home_img'.$_POST['project_id']],
    ':h_title' => $_POST['project_home_title'],
    ':h_p1' => $_POST['project_home_p1'],
    ':h_p2' => $_POST['project_home_p2'],
    ':h_button_color' => $_POST['project_home_button_color'],
    ':h1' => $_POST['project_h1'],
    ':c1_title' => $_POST['project_card1_title'],
    ':c1_content' => $_POST['project_card1_content'],
    ':c2_title' => $_POST['project_card2_title'],
    ':c2_content' => $_POST['project_card2_content'],
    ':c3_title' => $_POST['project_card3_title'],
    ':c3_content' => $_POST['project_card3_content'],
    ':c4_title' => $_POST['project_card4_title'],
    ':c4_content' => $_POST['project_card4_content'],
    ':c5_title' => $_POST['project_card5_title'],
    ':c5_content' => $_POST['project_card5_content'],
    ':parallax_path' => $_SESSION['current_images']['project_parallax'.$_POST['project_id']]
);

if ($_FILES['project_home_img']['name'] != "") {
    print_r("home image changed");
    $destination = "img/".$_FILES['project_home_img']['name'];
    move_uploaded_file($_FILES['project_home_img']['tmp_name'], '../'.$destination);
    $dataBinded[':h_img'] = $destination;
}

if ($_FILES['project_parallax']['name'] != "") {
    print_r("Parallax changed");
    $destination = "img/".$_FILES['project_parallax']['name'];
    move_uploaded_file($_FILES['project_parallax']['tmp_name'], '../'.$destination);
    $dataBinded[':parallax_path'] = $destination;
}

print_r($dataBinded);

$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location: ../admin_page.php');
exit();
?>