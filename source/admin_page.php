<html>
<head>
  <title>Bipolio</title>
  <meta charset="utf-8">
  <link rel="icon" href="img/website_icon.png" type="image/x-icon">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import Google Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Raleway:wght@900&display=swap" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css">
  <link type="text/css" rel="stylesheet" href="css/style.css">
  <!--Import Animate.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="white-text">
  <?php
  $title = "Admin Panel";
  require_once "cfg/config.php";
  require "cfg/security.php";
  require "components/navbar.php";
  require "queries/get_home_page.php";
  require "queries/get_all_users.php";
  require "queries/get_all_projects.php";
  ?>

<h1> MANAGE WEBSITE </h1>

<h2>USERS EDITOR</h2>

<?php

foreach ($users as $user) { ?>
  <form method="post" action="action/update_user.php">
    <input type="hidden" name="user_id" value=<?php echo $user['id'] ?>>
    <input type="text" name="user_name" value=<?php echo $user['username'] ?>>
    <input type="email" name="user_email" value=<?php echo $user['email'] ?>>
    <input type="password" name="user_password" value=<?php echo $user['password'] ?>>
    <input type="text" name="user_firstname" value=<?php echo $user['firstname'] ?>>
    <input type="text" name="user_lastname" value=<?php echo $user['lastname'] ?>>
    <input type="submit" value="Modify User">
  </form>
  <form method="post" action="action/delete_user.php">
    <input type="hidden" name="user_id" value=<?php echo $user['id'] ?>>
    <input type="submit" value="Delete User">
  </form>
  <form method="post" action="action/update_admin.php">
    <input type="hidden" name="user_id" value=<?php echo $user['id'] ?>>
    <input type="hidden" name="user_admin" value=<?php echo $user['admin'] ? 0 : 1 ?>>
    <input type="submit" value=<?php echo $user['admin'] ? "Demote" : "Promote" ?>>
  </form>
<?php } ?>

<h2>HOME PAGE EDITOR</h2>

<?php
  $_SESSION['current_images'] = array(
    'c1' => $home_page['img_1'],
    'c2' => $home_page['img_2'],
    'parallax' => $home_page['parallax'],
  );

  foreach($projects as $proj) {
    $_SESSION['current_images']['home_img'.$proj['project_id']] = $proj['h_img'];
    $_SESSION['current_images']['project_parallax'.$proj['project_id']] = $proj['parallax_path'];
  }
  ?>

<form method="post" action="action/update_home.php" enctype="multipart/form-data">
  <textarea name="home_title"> <?php echo $home_page['title'] ?> </textarea>
  <textarea name="home_h1"> <?php echo $home_page['h1'] ?> </textarea>
  <textarea name="home_c1_name"> <?php echo $home_page['name_1'] ?> </textarea>
  <textarea name="home_c1_title"> <?php echo $home_page['card_title1'] ?> </textarea>
  <textarea name="home_c1_content"> <?php echo $home_page['content_1'] ?> </textarea>
  <textarea name="home_c1_linktree"> <?php echo $home_page['linktree_1'] ?> </textarea>
  <input type="file" name="home_c1_img">
  <img class = "resize-preview-image" src=<?php echo $home_page['img_1'] ?> alt="current_card1_image">
  <textarea name="home_c2_name"> <?php echo $home_page['name_2'] ?> </textarea>
  <textarea name="home_c2_title"> <?php echo $home_page['card_title2'] ?> </textarea>
  <textarea name="home_c2_content"> <?php echo $home_page['content_2'] ?> </textarea>
  <textarea name="home_c2_linktree"> <?php echo $home_page['linktree_2'] ?> </textarea>
  <input type="file" name="home_c2_img">
  <img class = "resize-preview-image" src=<?php echo $home_page['img_2'] ?> alt="current_card2_image">
  <input type="file" name="home_parallax">
  <img class = "resize-preview-image" src=<?php echo $home_page['parallax'] ?> alt="parallax_image">
  <input type="submit" value="Modify home page!">
</form>

  <h2>ADD NEW PROJECT</h2>

  <form method="post" action="action/add_project.php" enctype="multipart/form-data">

  </form>

  <h2>MANAGE EXISTING PROJECTS</h2>

  <?php foreach ($projects as $proj) { ?>

    <h3>PROJECT'S DATA</h3>
    <form method="post" action="action/update_project.php" enctype="multipart/form-data">
      <input type="hidden" name="project_id" value=<?php echo $proj['project_id'] ?>>
      <input type="text" name="project_name" value=<?php echo $proj['project_name'] ?>>
      <input type="file" name="project_home_img">
      <img class="resize-preview-image" src=<?php echo $proj['h_img'] ?> alt="home_project_preview">
      <input type="text" name="project_home_title" value=<?php echo $proj['h_title'] ?>>
      <input type="text" name="project_home_p1" value=<?php echo $proj['h_p1'] ?>>
      <input type="text" name="project_home_p2" value=<?php echo $proj['h_p2'] ?>>
      <input type="text" name="project_home_button_color" value=<?php echo $proj['h_button_color'] ?>>
      <input type="text" name="project_h1" value=<?php echo $proj['h1'] ?>>
      <input type="text" name="project_card1_title" value=<?php echo $proj['c1_title'] ?>>
      <input type="text" name="project_card1_content" value=<?php echo $proj['c1_content'] ?>>
      <input type="text" name="project_card2_title" value=<?php echo $proj['c2_title'] ?>>
      <input type="text" name="project_card2_content" value=<?php echo $proj['c2_content'] ?>>
      <input type="text" name="project_card3_title" value=<?php echo $proj['c3_title'] ?>>
      <input type="text" name="project_card3_content" value=<?php echo $proj['c3_content'] ?>>
      <input type="text" name="project_card4_title" value=<?php echo $proj['c4_title'] ?>>
      <input type="text" name="project_card4_content" value=<?php echo $proj['c4_content'] ?>>
      <input type="text" name="project_card5_title" value=<?php echo $proj['c5_title'] ?>>
      <input type="text" name="project_card5_content" value=<?php echo $proj['c5_content'] ?>>
      <input type="file" name="project_parallax">
      <img class="resize-preview-image" src=<?php echo $proj['parallax_path'] ?> alt="parallax_project_preview">
      <input type="submit" value="Apply modifications">
    </form>

    <h3>ADD AN IMAGE TO THE PROJECT'S CAROUSEL</h3>

    <form method="post" action="action/add_project_image.php" enctype="multipart/form-data">
      <input type="hidden" name="project_id" value=<?php echo $proj['project_id'] ?>>
      <input type="file" name="project_carousel_image">>
      <input type="submit" value="Add image">
    </form>

    <h3>MANAGE PROJECT CAROUSEL IMAGES</h3>

    <?php
    $_SESSION['current_project_id'] = $proj['project_id'];
    require "queries/get_all_carousel_images.php";
    foreach($carousel_images as $carousel_img) {?>
      <form method="post" action="action/update_carousel_image.php" enctype="multipart/form-data">
        <input type="hidden" name="carousel_image_id" value=<?php $carousel_img['id'] ?>>
        <input type="hidden" name="carousel_current_image" value=<?php $carousel_img['path'] ?>>
        <input type="file" name="carousel_image">>
        <img class="resize-preview-image" src=<?php echo $carousel_img['path'] ?> alt="carousel_image_preview">
        <input type="submit" value="Apply modifications">
      </form>

      <form method="post" action="action/delete_carousel_image.php">
        <input type="hidden" name="id" value=<?php echo $carousel_img['id'] ?>>
        <input type="submit" value="Remove">
      </form>
    <?php }

  } ?>

  <?php require "components/footer.php"; ?>
</body>
</html>