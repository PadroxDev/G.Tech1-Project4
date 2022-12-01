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
  require "queries/get_all_projects_home_data.php";
  ?>

<h1> HOME PAGE EDITOR </h1>

<?php
  $_SESSION['current_images'] = array(
    'c1' => $home_page['img_1'],
    'c2' => $home_page['img_2'],
    'easter_egg' => $home_page['rick_roll'],
    'parallax' => $home_page['parallax']
  );
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
  <br>
  <textarea name="home_c2_name"> <?php echo $home_page['name_2'] ?> </textarea>
  <textarea name="home_c2_title"> <?php echo $home_page['card_title2'] ?> </textarea>
  <textarea name="home_c2_content"> <?php echo $home_page['content_2'] ?> </textarea>
  <textarea name="home_c2_linktree"> <?php echo $home_page['linktree_2'] ?> </textarea>
  <input type="file" name="home_c2_img">
  <img class = "resize-preview-image" src=<?php echo $home_page['img_2'] ?> alt="current_card2_image">
  <br>
  <input type="file" name="home_easteregg">
  <img class = "resize-preview-image" src=<?php echo $home_page['rick_roll'] ?> alt="easteregg_image">
  <br>
  <input type="file" name="home_parallax">
  <img class = "resize-preview-image" src=<?php echo $home_page['parallax'] ?> alt="parallax_image">
  <br>
  <input type="submit" value="Modify home page!">
</form>

  <?php require "components/footer.php"; ?>
</body>
</html>